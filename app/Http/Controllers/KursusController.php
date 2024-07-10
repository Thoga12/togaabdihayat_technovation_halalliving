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
            // $validateData['img'] =  $request->file('img')->store('images');
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $imageName);
            $validateData['img'] = 'images/' . $imageName;
        }
        // $imageName = time().'.'.$request->img->extension();
        // $request->img->move(public_path('images'), $imageName);
        Kursus::create($validateData);

        return redirect()->route('kursus.index')->with('success', 'Kursus Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kursus $kursu)
    {
        // return view('admin.kursus.show', [
        //     'course' => $kursu,
        // ]);
        $course = $kursu->load(['modules', 'quizzes']);
        return view('admin.kursus.show', compact('course'));
        // $course = Kursus::with(['modules', 'quizzes'])->$kursu;
        // return view('admin.kursus.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kursus $kursu)
    {
        return view('admin.kursus.edit', [
            'kursus' => $kursu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kursus $kursu)
    {
        $validateData = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'nullable|numeric',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'visibility' => 'required|string',
        ]);

        // $kursus = Kursus::findOrFail($id);

        if ($request->hasFile('img')) {
            // Hapus gambar lama
            if ($kursu->img && file_exists(public_path($kursu->img))) {
                unlink(public_path($kursu->img));
            }

            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $imageName);
            $validateData['img'] = 'images/' . $imageName;
        }

        // $kursu->update($validateData);
        Kursus::where('id', $kursu->id)
            ->update($validateData);


        return redirect()->route('kursus.index')->with('success', 'Kursus Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kursus $kursu)
    {

        // Hapus gambar terkait
        if ($kursu->img && file_exists(public_path($kursu->img))) {
            unlink(public_path($kursu->img));
        }

        Kursus::destroy($kursu->id);

        return redirect()->route('kursus.index')->with('success', 'Kursus Berhasil Dihapus.');
    }
}
