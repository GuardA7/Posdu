<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Jadwal::all();
        return view('content.data.jadwalposyandu', compact('schedules'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'tempat' => 'required|string|max:255',
            'acara' => 'required|string|max:255',
        ]);
    
        Jadwal::create($validatedData);
        $request->session()->flash('create', 'Tambah Jadwal Posyandu Berhasil');
    
        return redirect('/jadwalposyandu');
    }

    public function update(Request $request, Jadwal $jadwal){
        $validateData = $request->validate([
            'tanggal' => 'required|date',
            'tempat' => 'required',
            'acara' => 'required'
        ]);

        $jadwal->update($validateData);
        $request->session()->flash('update', 'Update Jadwal Posyandu Berhasil');

        return redirect('/jadwalposyandu');



    }
    public function destroy(Request $request, Jadwal $jadwal){
        $jadwal->delete();
        $request->session()->flash('delete', 'Hapus Jadwal Posyandu Berhasil');
        return redirect('/jadwalposyandu');
    }

}