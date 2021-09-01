<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Extra;

class ExtrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $extras = Extra::latest()->paginate(10);
        return view('admin.extra.list',compact('extras'))

            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.extra.create');
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

            'other_id' => 'required',

            'area' => 'required',

            'value' => 'required',

        ]);
        $input = $request->all();
        Extra::create($input);
        return redirect()->route('ekstra.index')->with('success','Başarılı Bir Şekilde Kaydedildi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $extra = Extra::find($id) ?? abort('404','Ekstra Bulunamadı');
        return view('admin.extra.show',compact('extra'));   
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
        $extra = Extra::find($id) ?? abort('404','Ekstra Bulunamadı');
        return view('admin.extra.edit',compact('extra'));  
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

            'other_id' => 'required',

            'area' => 'required',

            'value' => 'required',

        ]);


        $extra = Extra::find($id);

        $input = $request->all();

        $extra->update($input);
        return redirect()->route('ekstra.index')->with('success','Başarılı Bir Şekilde Düzenlendi...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extra = Extra::find($id) ?? abort('404','Ekstra Bulunamadı');
        $extra->delete();
        return redirect()->route('ekstra.index')->withSuccess('Başarılı Bir Şekilde Silindi...');
        
    }

}
