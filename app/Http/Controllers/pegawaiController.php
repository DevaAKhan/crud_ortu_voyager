<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pegawai;

class pegawaiController extends Controller
{

    public function index()
    {
    	$pegawai = pegawai::all();
		return view('pegawai', ['pegawai' => $pegawai
		
		]);
    }

    public function tambah()
    {
    	return view('pegawai_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'materi_pertemuan' => 'required',
			'tgl_pertemuan' => 'required',
			'jumlah_hadir' => 'required',
			'bukti' => 'required'
    	]);

    	pegawai::create([
    		'materi_pertemuan' => $request->materi_pertemuan,
			'tgl_pertemuan' => $request->tgl_pertemuan,
			'jumlah_hadir' => $request->jumlah_hadir,
			'bukti' => $request->bukti
			
    	]);
  
    	return redirect('/pegawai');
    }

    public function edit($id)
    {
    		$pegawai = pegawai::find($id);
    		return view('pegawai_edit', ['pegawai' => $pegawai]);
    }

     public function update($id, Request $request)
    {

    		$this->validate($request,[
	    		'materi_pertemuan' => 'required',
				'tgl_pertemuan' => 'required',
				'jumlah_hadir' => 'required',
				'bukti' => 'required'
	    	]);

    		$pegawai = Pegawai::find($id);
    		$pegawai->materi_pertemuan = $request->materi_pertemuan;
			$pegawai->tgl_pertemuan = $request->tgl_pertemuan;
			$pegawai->jumlah_hadir = $request->jumlah_hadir;
			$pegawai->bukti = $request->bukti;
			
    		$pegawai->save();
    		return redirect('/pegawai');
    }

     public function delete($id)
    {
    		$pegawai = pegawai::find($id);
    		$pegawai->delete();
    		return redirect('/pegawai');
    }

}
