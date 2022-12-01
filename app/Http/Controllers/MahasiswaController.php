<?php

namespace App\Http\Controllers;


use App\Models\crud;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $data = crud::all();
        return view('read', compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function insert(Request $request){
        crud::create($request->all());
        return redirect()->route('read')->with('success','Data Berhasil Ditambahkan!');
    }

    public function edit($nim){
        $data = crud::find($nim); 
        return view('edit', compact('data'));
    }

    public function update(Request $request, $nim) {
        $data = crud::find($nim);
        $data->update($request->all());
        return redirect()->route('read')->with('success','Data Berhasil Diperbarui!');
    }

    public function delete($nim){
        $data = crud::find($nim);
        $data->delete();
        return redirect()->route('read')->with('success','Data Berhasil Dihapus!');
    }
}
