<?php


namespace App\Http\Controllers\Supervisor;
use App\Http\Controllers\Controller;

use App\Bandar;
use Illuminate\Http\Request;

class BandarUdaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Bandar::orderBy('id', 'DESC')
        ->get();
         return view('supervisor.bandar-udara.index',$data);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisor.bandar-udara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bandar = Bandar::create($request->all());
        return redirect('/supervisor/bandarudara')->with('status','Data Berhasil di Tambakan :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bandar  $bandar
     * @return \Illuminate\Http\Response
     */
    public function show(Bandar $bandar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bandar  $bandar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bandar = Bandar::find($id);
        return view('supervisor.bandar-udara.edit', ['bandar' => $bandar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bandar  $bandar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bandar = Bandar::find($id);
        $bandar->update([
            'nama'=> request('nama'),
        ]);
        return redirect('/supervisor/bandarudara')->with('status','Data Berhasil di Edit :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bandar  $bandar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bandar = Bandar::find($id);
        $bandar->delete();
        return redirect('/supervisor/bandarudara')->with("status","Data telah di Delete!");
    }
}
