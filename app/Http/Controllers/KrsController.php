<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Krs;
use App\Models\Jadwal;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;



class KrsController extends Controller
{


public function index()
{


$mahasiswa = Mahasiswa::where(
'user_id',
auth()->id()
)->first();



$krs = Krs::with('jadwal.matakuliah','jadwal.dosen')
->where('mahasiswa_id',$mahasiswa->id)
->get();



$jadwal = Jadwal::with('matakuliah','dosen')->get();



return view('krs.index',
compact('krs','jadwal'));


}



public function store(Request $request)
{


$mahasiswa = Mahasiswa::where(
'user_id',
auth()->id()
)->first();



Krs::create([

'mahasiswa_id'=>$mahasiswa->id,

'jadwal_id'=>$request->jadwal_id

]);


return redirect('/krs');


}



public function destroy(Krs $krs)
{

$krs->delete();


return redirect('/krs');

}

public function exportPdf()
{

    $data = [
        'krs' => Krs::with('mahasiswa','jadwal')
        ->get()
    ];


    $pdf = PDF::loadView('krs.pdf',$data);


    return $pdf->download('krs.pdf');

}

}