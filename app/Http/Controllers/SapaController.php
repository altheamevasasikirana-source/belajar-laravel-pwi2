<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Althea Meva Sasikirana';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}