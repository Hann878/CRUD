<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));
    }

    // Form tambah data
    public function create()
    {
        return view('subjects.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'subject_name' => 'required|string|max:255',
        ]);

        Subject::create([
            'subject_name' => $request->subject_name,
        ]);

        return redirect()->route('subjects.index')->with('success', 'data berhasil ditambahkan');
    }

    // Form edit data
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subjects.edit', compact('subject'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'subject_name' => 'required|string|max:20',
        ]);

        $subject = Subject::findOrFail($id);
        $subject->update([
            'subject_name' => $request->subject_name,
        ]);

        return redirect()->route('subjects.index')->with('success', 'data berhasil diupdate');
    }

    // Hapus data
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return redirect()->route('subjects.index')->with('success', 'data berhasil dihapus');
    }
}
