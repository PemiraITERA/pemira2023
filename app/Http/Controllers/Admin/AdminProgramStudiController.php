<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminProgramStudiController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.prodi.index',[
            'prodi' => DB::table('prodi')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama_prodi' => 'required|max:255|min:3',
            'gedung_pemilihan' => 'required|max:255|min:3',
            'waktu_pemilihan' => 'required|max:255|min:3',
        ],[
            'nama_prodi.required' => 'Input Tidak Boleh Kosong',
            'nama_prodi.min' => 'Input Minimal 3 Karakter',
            'nama_prodi.max' => 'Input Hanya Menampung 255 Karakter',
            'gedung_pemilihan.required' => 'Input Tidak Boleh Kosong',
            'gedung_pemilihan.min' => 'Input Minimal 3 Karakter',
            'gedung_pemilihan.max' => 'Input Hanya Menampung 255 Karakter',
            'waktu_pemilihan.required' => 'Input Tidak Boleh Kosong',
            'waktu_pemilihan.min' => 'Input Minimal 3 Karakter',
            'waktu_pemilihan.max' => 'Input Hanya Menampung 255 Karakter',
        ]);


        ProgramStudi::create([
            'nama_prodi' => $request->nama_prodi,
            'gedung_pemilihan' => $request->gedung_pemilihan,
            'waktu_pemilihan' => $request->waktu_pemilihan
        ]);
        return redirect(route('admin.prodi.index'))->with('sukses', 'Berhasil Tambah Data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prodi = ProgramStudi::where('id', $id)->first();
        return view('admin.prodi.read', compact('prodi'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = ProgramStudi::where('id', $id)->first();
        return view('admin.prodi.update', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nama_prodi' => 'required|max:255|min:3',
            'gedung_pemilihan' => 'required|max:255|min:3',
            'waktu_pemilihan' => 'required|max:255|min:3',
        ],[
            'nama_prodi.required' => 'Input Tidak Boleh Kosong',
            'nama_prodi.min' => 'Input Minimal 3 Karakter',
            'nama_prodi.max' => 'Input Hanya Menampung 255 Karakter',
            'gedung_pemilihan.required' => 'Input Tidak Boleh Kosong',
            'gedung_pemilihan.min' => 'Input Minimal 3 Karakter',
            'gedung_pemilihan.max' => 'Input Hanya Menampung 255 Karakter',
            'waktu_pemilihan.required' => 'Input Tidak Boleh Kosong',
            'waktu_pemilihan.min' => 'Input Minimal 3 Karakter',
            'waktu_pemilihan.max' => 'Input Hanya Menampung 255 Karakter',
        ]);

        $prodi = ProgramStudi::where('id', $id)->first();
        $prodi -> update([
            'nama_prodi' => $request -> nama_prodi,
            'gedung_pemilihan' => $request -> gedung_pemilihan,
            'waktu_pemilihan' => $request->waktu_pemilihan
        ]);

        return redirect(route('admin.prodi.index'))->with('sukses', 'Berhasil Update Data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = ProgramStudi::where('id', $id)->first();
        $prodi->delete();
        return redirect(route('admin.prodi.index'))->with('sukses', 'Berhasil Hapus Data!');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('index', 'create', 'store', 'show', 'edit', 'update', 'destroy');
    }
}
