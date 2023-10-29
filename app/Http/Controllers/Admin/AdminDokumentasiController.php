<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminDokumentasiController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dokumentasi.index',[
            'dokumentasi' => DB::table('dokumentasi')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dokumentasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'foto' => 'required|max:255|min:10',
        ],[
            'foto.required' => 'Input Tidak Boleh Kosong',
            'foto.min' => 'Input Minimal 10 Karakter',
            'foto.max' => 'Input Hanya Menampung 255 Karakter',
        ]);


        Dokumentasi::create([
            'foto' => $request->foto,
        ]);
        return redirect(route('admin.dokumentasi.index'))->with('sukses', 'Berhasil Tambah Data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dokumentasi = Dokumentasi::where('id', $id)->first();
        return view('admin.dokumentasi.read', compact('dokumentasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dokumentasi = Dokumentasi::where('id', $id)->first();
        return view('admin.dokumentasi.update', compact('dokumentasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'foto' => 'required|max:255|min:10',
        ],[
            'foto.required' => 'Input Tidak Boleh Kosong',
            'foto.min' => 'Input Minimal 10 Karakter',
            'foto.max' => 'Input Hanya Menampung 255 Karakter',
        ]);

        $dokumentasi = Dokumentasi::where('id', $id)->first();
        $dokumentasi -> update([
            'foto' => $request -> foto
        ]);

        return redirect(route('admin.dokumentasi.index'))->with('sukses', 'Berhasil Update Data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokumentasi = Dokumentasi::where('id', $id)->first();
        $dokumentasi->delete();
        return redirect(route('admin.dokumentasi.index'))->with('sukses', 'Berhasil Hapus Data!');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('index', 'create', 'store', 'show', 'edit', 'update', 'destroy');
    }
}
