<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Althea Meva Sasikirana',
            'Budi Santoso',
            'Citra Lestari',
            'Dewi Anggraini',
        ];

        return view('pages.mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}