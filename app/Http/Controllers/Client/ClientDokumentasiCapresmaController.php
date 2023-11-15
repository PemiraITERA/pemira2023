<?php

namespace App\Http\Controllers\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dokumentasi;


class ClientDokumentasiCapresmaController extends Controller
{
    public function index()
    {
        return view('client.dokumentasi',[
            'dokumentasi' => Dokumentasi::all()
        ]);
    }
    // public function show(string $foto)
    // {
    //     $capres = Dokumentasi::where('foto', $foto)->first();
    //     return dd($foto);
    // }
}
