<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{

    public function index()
    {
        $matakuliah = Matakuliah::all();

        return view('matakuliah.index', compact('matakuliah'));
    }


    public function create()
    {
        return view('matakuliah.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'kode_mk'=>'required',
            'nama_mk'=>'required',
            'sks'=>'required',
            'semester'=>'required'
        ]);


        Matakuliah::create([
            'kode_mk'=>$request->kode_mk,
            'nama_mk'=>$request->nama_mk,
            'sks'=>$request->sks,
            'semester'=>$request->semester
        ]);


        return redirect('/matakuliah');

    }


}