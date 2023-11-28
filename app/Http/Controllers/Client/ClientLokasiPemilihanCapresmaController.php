<?php

namespace App\Http\Controllers\Client;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProgramStudi;
use App\Models\gedung;


class ClientLokasiPemilihanCapresmaController extends Controller
{
    public function index()
    {
        return view('client.lokasiPemilihan',[
            'gedung' => gedung::all()
        ]);
    }
}
