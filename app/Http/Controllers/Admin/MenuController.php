<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public $timestamps = false;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::orderBy('id', 'desc')->paginate(10);
            return view('admin.menu.list',compact('menus'))

            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::find('parent_id', '=', 0)->get();
        return view('admin.menu.create',compact('menus'));
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
            'link' => 'required',
        ]);
        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        $input['sort_order'] = empty($input['sort_order']) ? 0 : $input['sort_order'];
        Menu::create($input);
        return redirect()->route('menu.index')->with('success','Başarılı Bir Şekilde Kaydedildi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::find($id) ?? abort('404','Menü Bulunamadı');
        $menu_sub = Menu::where('parent_id', '=', $id)->get();
        return view('admin.menu.show',compact('menu','menu_sub'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus = Menu::latest()->orderBy('title', 'asc')->get();
        $menu = Menu::find($id) ?? abort('404','Menü Bulunamadı');
        return view('admin.menu.edit',compact('menu','menus'));   
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
            'link' => 'required',
        ]);
        $menu = Menu::find($id);
        $input = $request->all();
        $menu->update($input);
        return redirect()->route('menu.index')->with('success','Başarılı Bir Şekilde Düzenlendi...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id) ?? abort('404','Kategori Bulunamadı');
        $menu->delete();
        return redirect()->route('menu.index')->withSuccess('Başarılı Bir Şekilde Silindi...');    }
}
