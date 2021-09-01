<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::latest()->paginate(10);
        return view('admin.setting.list',compact('settings'))

            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([

            'area' => 'required',

            'value' => 'required',

        ]);
        $input = $request->all();
        Setting::create($input);
        return redirect()->route('ayarlar.index')->with('success','Başarılı Bir Şekilde Kaydedildi.');
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
        $ayar = Setting::find($id) ?? abort('404','Ayar Bulunamadı');
        return view('admin.setting.show',compact('ayar'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ayar = Setting::find($id) ?? abort('404','Ayar Bulunamadı');
        return view('admin.setting.edit',compact('ayar'));  
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
        //
        $request->validate([

            'area' => 'required',

            'value' => 'required',

        ]);


        $ayar = Setting::find($id);

        $input = $request->all();

        $ayar->update($input);
        return redirect()->route('ayarlar.index')->with('success','Başarılı Bir Şekilde Düzenlendi...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ayar = Setting::find($id) ?? abort('404','Ayar Bulunamadı');
        $ayar->delete();
        return redirect()->route('ayarlar.index')->withSuccess('Başarılı Bir Şekilde Silindi...');
    }
}
