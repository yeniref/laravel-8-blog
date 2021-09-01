<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Extra;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //Yazılar Listesi

        $yazilar = Post::latest()->paginate(10);
        return view('admin.post.list',compact('yazilar'))

            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategoriler=Category::all();
        return view('admin.post.create',['kategoriler'=>$kategoriler]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required',

            'content' => 'required',

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $slug = Str::slug($request->title);
        $request->merge([
            'slug' => $slug
        ]);
        // Post Data
        $input = array();
        $input['title'] = $request->title;
        $input['content'] = $request->content;
        $input['slug'] = $slug;
        if ($image = $request->file('image')) {

            $destinationPath = 'uploads/yazilar/';

            $Image = $slug.'-'.date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $Image);

            $input['image'] = "uploads/yazilar/".$Image;

        }
        $PostSave = Post::create($input);


        if($request->sabit_yazi == 'on'){
        //Extras Home Page
        $xinput = array();
        $xinput['area'] = "sabit_yazi";
        $xinput['other_id'] = $PostSave->id;
        $xinput['value'] = 'Sabit Yazı';
        Extra::create($xinput);
        }
        if($request->post_category != ''){
        //Extras Data Category
        $xinput = array();
        $xinput['area'] = "post_category";
        $xinput['other_id'] = $PostSave->id;
        $xinput['value'] = $request->post_category;
        Extra::create($xinput);
        }
        if($request->tags !=''){
        $tags = $request->tags;
        $tags = explode(',',$tags);

        foreach($tags as $tag){

    $input['other_id'] = $PostSave->id;
    $input['area'] = "post_tag";
    $input['value'] = $tag;

    Extra::create($input);

        }
    }

        return redirect()->route('yazilar.index')->with('success','Başarılı Bir Şekilde Kaydedildi.'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $yazi = Post::find($id) ?? abort('404','Yazı Bulunamadı');
        return view('admin.post.show',compact('yazi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Yazı Getir
        $kategoriler=Category::all();
        $extra = Extra::where('other_id', '=', $id)->where('area','post_category')->first();
        $extra_tag = Extra::where('other_id', '=', $id)->where('area','post_tag')->get();
        //$extra_sabit = Extra::where('other_id', '=', $id)->where('area','sabit_yazi')->first();
  
        $yazi = Post::find($id) ?? abort('404','Yazı Bulunamadı');
        return view('admin.post.edit',['kategoriler'=>$kategoriler,'yazi'=>$yazi,'extra'=>$extra,'extra_tag'=>$extra_tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'title' => 'required',

            'content' => 'required',

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $slug = Str::slug($request->title);
        $request->merge([
            'slug' => $slug
        ]);
        $yazi = POST::find($id);
        $extra = Extra::where('other_id', '=', $id)->where('area','post_category')->first();
        $extra_tag = Extra::where('other_id', '=', $id)->where('area','post_tag')->get();
        $extra_sabit = Extra::where('other_id', '=', $id)->where('area','sabit_yazi')->first();

        $input = array();
        $input['title'] = $request->title;
        $input['content'] = $request->content;
        if ($image = $request->file('image')) {

            $destinationPath = 'uploads/yazilar/';

            $Image = $slug.'-'.date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $Image);

            $input['image'] = 'uploads/yazilar/'.$Image;

        }else{

            unset($input['image']);

        }
        $Post_Update = $yazi->update($input);
        if($extra !='') {
        //Extras Data Category
        $xinput = array();
        $xinput['area'] = "post_category";
        $xinput['other_id'] = $id;
        $xinput['value'] = $request->post_category;
        $extra->update($xinput);
        } else {
            //Extras Data Category
            $xinput = array();
            $xinput['area'] = "post_category";
            $xinput['other_id'] = $id;
            $xinput['value'] = $request->post_category;
            Extra::create($xinput);
        }
        $tags = $request->request->get('tags');;
        $tag_id = $request->request->get('tag_id');

        $salla = array_combine($tags,$tag_id);

        foreach($salla as $tag=>$tid ){
            if($tag!='' && $tid !=''){
            $tinput = array();
            $tinput['id'] = $tid;
            $tinput['other_id'] = $id;
            $tinput['area'] = "post_tag";
            $tinput['value'] = $tag;
            Extra::where('id', $tid)->update($tinput);
            //Extra::update($tinput);
          } elseif($tag!='' && $tid =='') {
            $tinput = array();
            $tinput['other_id'] = $id;
            $tinput['area'] = "post_tag";
            $tinput['value'] = $tag;
            Extra::create($tinput);
          } else {echo "tag hata";}
        } 
    
        return redirect()->route('yazilar.index')->with('success','Başarılı Bir Şekilde Düzenlendi...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Veri Silme

        $yazi = Post::find($id) ?? abort('404','Yazı Bulunamadı');
        $PostDelete = $yazi->delete();
        if($PostDelete=='true') {
        $extra = Extra::where('other_id', '=', $id)->where('area','post_category')->first();
        $extra_tag = Extra::where('other_id', '=', $id)->where('area','post_tag')->get();
        $extra_sabit = Extra::where('other_id', '=', $id)->where('area','sabit_yazi')->first();
        if($extra !='') {
        $extra->delete();
        }
        foreach($extra_tag as $tag) {
        $tag->delete();
        }
        if($extra_sabit !='') {
            $extra_sabit->delete();
        }
        }
        return redirect()->route('yazilar.index')->withSuccess('Başarılı Bir Şekilde Silindi...');
        
    }
    public function post_extra_remove($id)
    {
        $extra = Extra::find($id) ?? abort('404','Ekstra Bulunamadı');
        $extra->delete();
      //  return 'Başarılı Bir Şekilde Silindi...';
        
    }
    public function uploadImage(Request $request) { 
        if($request->hasFile('upload')) {
                   $originName = $request->file('upload')->getClientOriginalName();
                   $fileName = pathinfo($originName, PATHINFO_FILENAME);
                   $fileName = Str::slug($fileName);
                   $extension = $request->file('upload')->getClientOriginalExtension();
                   $fileName = $fileName.'_'.time().'.'.$extension;
               
                   $request->file('upload')->move(public_path('uploads/yazilar'), $fileName);
          
                   $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                   $url = asset('uploads/yazilar/'.$fileName); 
                   $msg = 'Resim başarıyla yüklendi'; 
                   $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                      
                   @header('Content-type: text/html; charset=utf-8'); 
                   echo $response;
               }
           } 
}
