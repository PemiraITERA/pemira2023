<?php

namespace App\Http\Controllers\Client;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Capres;
use App\Models\DetailCapres;
use App\Models\Misi;
use App\Models\Progja;
use App\Models\ProgramStudi;
use Illuminate\Foundation\Mix;

class ClientCapresmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.capresma',[
            'capres' => Capres::all(),
            'koalisi' => ProgramStudi::all(),
        ]);
    }
    public function show(string $nama_capres)
    {
        $capres = Capres::where('nama_capres', $nama_capres)->first();
        $detailcapres = DetailCapres::where('id', $capres->id)->first();
        $misicapres = Misi::where('id_detail', $detailcapres->id)->get();
        $progjacapres = Progja::where('id_detail', $detailcapres->id)->get();
        $koalisi = ProgramStudi::where('koalisi', $capres->id)->get();

        return view('client.detailCapresma', compact('capres', 'detailcapres', 'misicapres', 'progjacapres', 'koalisi'));
        // return dd($capres, $detailcapres, $misicapres, $progjacapres);
    }
}
