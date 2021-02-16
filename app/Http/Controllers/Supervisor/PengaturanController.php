<?php

namespace App\Http\Controllers\Supervisor;
use App\Http\Controllers\Controller;

use App\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Pengaturan::orderBy('id', 'DESC')
        ->get();
         return view('supervisor.pengaturan.index',$data);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisor.pengaturan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengaturan = Pengaturan::create($request->all());
        return redirect('/supervisor/pengaturan')->with('status','Data Berhasil di Tambakan :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaturan $pengaturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaturan = Pengaturan::find($id);
        return view('supervisor.pengaturan.edit', ['pengaturan' => $pengaturan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengaturan = Pengaturan::find($id);
        $pengaturan->update([
            'jasa_gudang'=> request('jasa_gudang'),
            'ppn'=> request('ppn'),
            'pnbp'=> request('pnbp'),
            'administrasi'=> request('administrasi'),
        ]);
        return redirect('/supervisor/pengaturan')->with('status','Data Berhasil di Edit :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaturan = Pengaturan::find($id);
        $pengaturan->delete();
        return redirect('/supervisor/pengaturan')->with("status","Data telah di Delete!");
    }
}
