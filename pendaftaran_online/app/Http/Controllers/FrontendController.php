<?php

namespace App\Http\Controllers;
use App\Pendaftaran;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

	public function create(){
		return view('formpendaftaran');
	}
   

    public function store(Request $request){
        //d($request->all());
    	$ijazah = $request->file('ijazah')->store('ijazah');
    	Pendaftaran::create([
    	'nama' => $request->nama,
    	'nis' => $request->nis,
    	'tgl_lahir' => $request->tgl_lahir,
    	'no_hp' => $request->no_hp,
    	'nama_ibu' => $request->nama_ibu,
    	'nama_ayah' => $request->nama_ayah,
    	'asal_sekolah' => $request->asal_sekolah,
    	'nilai' => $request->nilai,
    	'alamat' => $request->alamat,
    	'ijazah' => $ijazah,
    	]);
    	return redirect()->route('formulirpendaftaran.create');
    	
    }
}
