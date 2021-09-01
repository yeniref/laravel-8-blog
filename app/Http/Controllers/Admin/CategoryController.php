<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        //Kategori Listesi

        $kategoriler = Category::latest()->paginate(10);
        return view('admin.category.list',compact('kategoriler'))

            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        //
        return view('admin.category.create');
    }

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
        $input = $request->all();

        if ($image = $request->file('image')) {

            $destinationPath = 'uploads/kategoriler/';

            $Image = $slug.'-'.date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $Image);

            $input['image'] = "uploads/kategoriler/".$Image;

        }
        Category::create($input);
        return redirect()->route('kategoriler.index')->with('success','Başarılı Bir Şekilde Kaydedildi.');

    }

    public function show($id)
    {
        //
        $kategori = Category::find($id) ?? abort('404','Kategori Bulunamadı');
        return view('admin.category.show',compact('kategori'));
    }

    public function edit($id)
    {
        //
        $kategori = Category::find($id) ?? abort('404','Kategori Bulunamadı');
        return view('admin.category.edit',compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        //
        $request->validate([

            'title' => 'required',

            'content' => 'required',

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $slug = Str::slug($request->title);
        $request->merge([
            'slug' => $slug
        ]);
        $kategori = Category::find($id);

        $input = $request->all();

        if ($image = $request->file('image')) {

            $destinationPath = 'uploads/kategoriler/';

            $Image = $slug.'-'.date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $Image);

            $input['image'] = 'uploads/kategoriler/'.$Image;

        }else{

            unset($input['image']);

        }
        $kategori->update($input);
        return redirect()->route('kategoriler.index')->with('success','Başarılı Bir Şekilde Düzenlendi...');
    }

    public function destroy($id)
    {
        //Kategori silme
        $kategori = Category::find($id) ?? abort('404','Kategori Bulunamadı');
        $kategori->delete();
        return redirect()->route('kategoriler.index')->withSuccess('Başarılı Bir Şekilde Silindi...');
    }
}
