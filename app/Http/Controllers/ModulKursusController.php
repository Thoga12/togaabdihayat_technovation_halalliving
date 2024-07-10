<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\ModulKursus;
use Illuminate\Http\Request;

class ModulKursusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Kursus $kursu)
    {
        // dd($kursu);
        return view('admin.modul.create',[
            'course' => $kursu
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Kursus $kursu)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'content' => 'required',
        ]);

        // Menambahkan kursus_id ke data yang divalidasi
        $validatedData['kursus_id'] = $kursu->id;

        // Simpan data modul baru
        ModulKursus::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('kursus.show', $kursu->id)
            ->with('success', 'Modul berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Kursus $kursu,ModulKursus $modul_kursu)
    {
        // $modul = ModulKursus::find($modu->id);
        // dd($modul_kursu);
        // return view('modul.show', compact('kursu', 'modul'));
        return view('admin.modul.show',[
            'modul' => $modul_kursu,
            'course' => $kursu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModulKursus $modulKursus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModulKursus $modulKursus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModulKursus $modulKursus)
    {
        //
    }
}
