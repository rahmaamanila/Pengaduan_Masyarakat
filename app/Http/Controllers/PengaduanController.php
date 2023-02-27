<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.index', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
    		'tgl_pengaduan' => 'required',
    		'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required'
    	]);


        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('image'), $imgName);
        
        Pengaduan::create([
    		'tgl_pengaduan' => $request->tgl_pengaduan,
    		'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $imgName
    	]);

        
 
    	return redirect('/pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::where('id_pengaduan',$id)->first();
        return view('pengaduan.show', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::where('id_pengaduan',$id)->first();
        return view('pengaduan.edit', compact('pengaduan'));
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
        $this->validate($request,[
    		'tgl_pengaduan' => 'required',
    		'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required',
            'status' => 'required'
    	]);
 
        Pengaduan::where('id_pengaduan', $id)->update([
    		'tgl_pengaduan' => $request->tgl_pengaduan,
    		'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'status' => $request->status,
    	]);
 
    	return redirect('/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Pengaduan::where('id_pengaduan',$id)->delete();
        return redirect('/pengaduan');
    }
}
