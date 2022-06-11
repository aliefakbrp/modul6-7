<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mahasiswas = Mahasiswa::get();
        // return view('mahasiswa.index',['mahasiswas'=>Mahasiswa::get()]);
        return view('index',compact('mahasiswas'));
    }
    public function create()
    {
        return view('input');
    }


    public function created(Request $request)
    {
        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('index');
    }


    public function edit(Request $request,$nim)
    {
        $mahasiswa = Mahasiswa::where('nim',$nim)->first();
        // dd($mahasiswa);
        return view('edit',compact('mahasiswa'));
        // $mahasiswa = Mahasiswa::where('nim')->first();
        // $mahasiswa->update([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'alamat' => $request->alamat,
        // ]);
        // return redirect()->route('edit',$mahasiswa);
    }

    public function update(Request $request)
    {
        // dd($request);
        Mahasiswa::where('nim',$request->nim)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('index');
    }
    public function delete(Request $request,$nim)
    {
        Mahasiswa::where('nim',$nim)->delete();
        return redirect()->route('index');
    }
    public function aboutme()
    {
        return view('aboutme');
    }
}