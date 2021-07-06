<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index()
    {
        $mhs = Mahasiswa::all();
        return response()->json($mhs);
    }

    public function find($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        if ($mahasiswa) {
            return response()->json($mahasiswa);
        }
    }
}
