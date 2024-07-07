<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\ModulKursus;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kursus.index',[
            'kursus' => Kursus::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kursus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'nullable|numeric',
            'img' => 'required|image',
            'visibility' => 'required|string',
            // 'instruktur_id' => 'required|exists:users,id'
        ]);
        if ($request->hasFile('img')) {
            $validateData['img'] =  $request->file('img')->store('images');
        }

        Kursus::create($validateData);

        return redirect()->route('kursus.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ModulKursus $modulKursus)
    {
        //
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
