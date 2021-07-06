<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosens;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = DB::table('dosens')->get();

        return response()->json($dosens);
    }

    public function find($nidn)
    {
        $dosen = Dosens::where('nidn', $nidn)->first();
        if ($dosen) {
            return response()->json($dosen);
        }
    }
}
