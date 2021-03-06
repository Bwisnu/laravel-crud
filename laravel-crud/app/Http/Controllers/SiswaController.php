<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_siswa = \App\Models\Siswa::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_siswa = \App\Models\Siswa::all();
        }
    	return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
    	\App\Models\Siswa::create($request->all());
    	return redirect('/siswa')->with('sukses','YEY!! Datamu Berhasil Diinput "TOLONG REFRESH"');
    }

    public function edit($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        return view('siswa/edit',['siswa' => $siswa]);
    }

    public function update(Request $request,$id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses','YEY!! Datamu Sudah Diubah "TOLONG REFRESH"');
    }

    public function delete($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('sukses','UPPS!! Datamu Sudah Dihapus "TOLONG REFRESH"'); 
    }
}
