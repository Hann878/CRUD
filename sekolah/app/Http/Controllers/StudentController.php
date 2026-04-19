<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\MassAssignmentException;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function checkObjectId()
    {
        $siswa = new Student();
        dump($siswa);
    }

    public function insert()
    {
        $siswa = new Student();
        $siswa->name = 'Galang';
        $siswa->umur = 16;
        $siswa->no_telp = '083172259249';
        $siswa->Nisn = 1234567890;
        $siswa->save();

        dump($siswa);
    }


    public function massAssigment()
    {
        Subject::create([
            "name" => 'Matematika',
            "description" => 'Mata pelajaran tentang hitung menghitung'
        ]);
        return "Data berhasil ditambahkan";
    }

    public function massAssignment()
    {
        Student::create([
            'name' => 'raihan',
            'umur' => 16,
            'no_telp' => '083172259249',
            'Nisn' => 1234567890,
            'subject_id' => 1
        ]);
        Student::create([
            'name' => 'bima',
            'umur' => 17,
            'no_telp' => '083172259250',
            'Nisn' => 1234567891,
            'subject_id' => 2
        ]);
        return "Data berhasil ditambahkan";
    }
    public function update($student = 2)
    {
        $siswa = Student::find($student);
        $siswa->name = 'Rizky';
        $siswa->umur = 17;
        $siswa->save();
        dd($siswa);
    }

    public function massUpdate($student)
    {
        Student::where('id', $student)->first()->update([
            'name' => 'Andi',
            'umur' => 18
        ]);
        return "Data berhasil diupdate";
    }


    public function delete($student)
    {
        $siswa = Student::find($student);
        $siswa->delete();

        return "Data berhasil dihapus";
    }
    // public function destroy($student)
    // {
    //     Student::destroy(collect([1,2,3]));

    //     return "Data berhasil dihapus";
    // }
    public function massdelete()
    {
        $siswa = Student::whereIn('name', ['Galang', 'Bima'])->delete();
        dd($siswa);

        return "Data berhasil dihapus";
    }

    public function all(){
        $students = Student::all();
        // dd($students);
        foreach($students as $student){
            echo "Name: ".$student->name."<br>";
            echo "Umur: ".$student->umur."<br>";
            echo "no_telp: ".$student->no_telp."<br>";
            echo "Nisn: ".$student->Nisn."<br>";
            echo "subject_id: ".$student->subject_id."<br>";
        }
    }


    public function index()
    {
        $student = Student::all();

        return view('student.index', compact('student'));
    }

    public function create()
    {
        return view('student.form');
    }
    public function store(Request $request)
    {
        // Validasi input
        $student = $request->validate([
            'name' => 'required|string|min:8|max:15',
            'umur' => 'required|integer|min:10|max:20',
            'no_telp' => 'required|string|max:15',
            'kelas' => 'required|string|max:50',
        ], [
            'name.required' => 'nama wajib diisi',
            'name.min' => 'nama minimal 8 karakter',
            'name.max' => 'nama maksimal 15 karakter',
            'umur.required' => 'umur wajib diisi',
            'umur.integer' => 'umur harus berupa angka',
            'umur.min' => 'umur minimal 10',
            'umur.max' => 'umur maksimal 20',
            'no_telp.required' => 'no_telp wajib diisi',
            'no_telp.max' => 'no_telp maksimal 15 karakter',
            'kelas.required' => 'kelas wajib diisi',
            'kelas.max' => 'kelas maksimal 50 karakter',
        ]);

        $student = $request->all();
        // Simpan data ke database (contoh menggunakan model Student)
        Student::create($student);

        // Redirect atau tampilkan pesan sukses
        // return view('student.index', compact('student'));
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

}
