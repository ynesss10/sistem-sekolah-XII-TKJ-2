<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
       public function index()
     {
        $title = 'Sistem Sekolah - Daftar Guru';
        $teachers = [
            [
                'id;' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ',
            ],
            [
                'id;' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ',
            ],
        ];
        return view('teachers.index' , [
            'title' => $title,
            'teachers' => $teachers,
        ]);
    }

    public function show(string $id)
    {
        return "Menampilkan guru dengan ID: {$id} ";
    }

    public function create()
    {
            $majors = [
                [
                    'id' => 1,
                    'code' => 'AKL',
                    'name' => 'Akuntansi dan Keuangan Lembaga',
                    'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
                ],
                [
                    'id' => 2,
                    'code' => 'TKJ',
                    'name' => 'Teknik Komputer dan Jaringan',
                    'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',
                ],
                [
                    'id' => 3,
                    'code' => 'BD',
                    'name' => 'Bisnis Digital',
                    'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',
                ],

            ];
        return "Menampilkan halaman tambah guru";
    }

    public function edit()
    {
        return "Menampilkan halaman edit guru ";
    }

    public function store()
    {
        return "Melakukan penambahan data guru ";
    }

    public function update()
    {
        return "Melakukan perubahan data guru ";
    }

    public function destroy()
    {
        return "Menghapus data guru";
    }
}

