<?php

namespace App\Http\Controllers;

use App\ModelMahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getall(){
        $data = ModelMahasiswa::all();
        return response($data);
    }
    public function getbyid($id){
        $data = ModelMahasiswa::where('id',$id)->get();
        return response ($data);
    }
    public function save(Request $request){
        $data = new ModelMahasiswa();
        $data->nama = $request->input('nama');
        $data->nim = $request->input('nim');
        $data->save();
    
        return response('Berhasil menambah data');
    }
    public function update(Request $request, $id){
        $data = ModelMahasiswa::where('id',$id)->first();
        $data->nama = $request->input('nama');
        $data->nim = $request->input('nim');
        $data->save();
    
        return response('Berhasil merubah data');
    }
    
    public function delete($id){
        $data = ModelMahasiswa::where('id',$id)->first();
        $data->delete();
    
        return response('Berhasil menghapus data');
    }
}
