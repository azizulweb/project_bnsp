<?php

namespace App\Http\Controllers;

use App\Models\DataPegawai;
use App\Models\jabatan;
use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pegawai=DataPegawai::all();
        return view('admin.pegawai.DataPegawai', compact('data_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jabatan=jabatan::all();
        // dd($jabatan);
        return view('admin.pegawai.TambahData', compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $total_harga=$request->jumlah_pesanan * $request->harga;
        // dd($total_harga);
        $dataPegawai = new DataPegawai();
        $dataPegawai->nama=$request->nama;
        $dataPegawai->nip=$request->nip; 
        $dataPegawai->tempat_lahir=$request->tempat_lahir;
        $dataPegawai->tanggal_lahir=$request->tanggal_lahir;
        $dataPegawai->jenis_kelamin=$request->jenis_kelamin;
        $dataPegawai->alamat=$request->alamat;
        $dataPegawai->jabatan_id=$request->jabatan_id;
        $dataPegawai->tanggal_bergabung=$request->tanggal_bergabung;
        $dataPegawai->save();
        return redirect('/DataPegawai/'.$request->data_pegawai);
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPegawai $dataPegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $data_pegawai=DataPegawai::findOrFail($id);
         $jabatan=jabatan::all();
         return view('admin.pegawai.EditData', compact('data_pegawai', 'jabatan'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $data=DataPegawai::findOrFail($id);
         $data->nama=$request->nama;  
         $data->nip=$request->nip;  
         $data->tempat_lahir=$request->tempat_lahir;  
         $data->tanggal_lahir=$request->tanggal_lahir; 
         $data->alamat=$request->alamat;
         $data->jenis_kelamin=$request->jenis_kelamin; 
         $data->jabatan_id=$request->jabatan_id;
         $data->tanggal_bergabung=$request->tanggal_bergabung;
         $data->save();
         return redirect('/DataPegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $data_pegawai=DataPegawai::findOrFail($request->id);
        $data_pegawai->delete();
        return redirect('/DataPegawai');
    }
}
