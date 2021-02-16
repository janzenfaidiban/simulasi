<?php


namespace App\Http\Controllers\Supervisor;
use App\Http\Controllers\Controller;

use App\Comudity;
use Illuminate\Http\Request;

class ComudityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Comudity::orderBy('id', 'DESC')
        ->get();
         return view('supervisor.comudity.index',$data);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisor.comudity.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comudity = Comudity::create($request->all());
        return redirect('/supervisor/comudity')->with('status','Data Berhasil di Tambakan :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comudity  $comudity
     * @return \Illuminate\Http\Response
     */
    public function show(Comudity $comudity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comudity  $comudity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comudity = Comudity::find($id);
        return view('supervisor.comudity.edit', ['comudity' => $comudity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comudity  $comudity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comudity = Comudity::find($id);
        $comudity->update([
            'nama'=> request('nama'),
        ]);
        return redirect('/supervisor/comudity')->with('status','Data Berhasil di Edit :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comudity  $comudity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comudity = Comudity::find($id);
        $comudity->delete();
        return redirect('/supervisor/comudity')->with("status","Data telah di Delete!");
    }
}
