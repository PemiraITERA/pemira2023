<?php

namespace App\Http\Controllers\Admin;

use App\Models\Capres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCapresController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.capres.index',[
            'capres' => DB::table('capres')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.capres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required|max:255|min:3',
            'nim' => 'required|numeric',
            'prodi' => 'required|max:255|min:3',
        ],[
            'nama.required' => 'Input Tidak Boleh Kosong',
            'nama.min' => 'Input Minimal 3 Karakter',
            'nama.max' => 'Input Hanya Menampung 255 Karakter',
            'nim.required' => 'Input Tidak Boleh Kosong',
            'nim.min' => 'Input Minimal 3 Karakter',
            'nim.max' => 'Input Hanya Menampung 255 Karakter',
            'nim.numeric' => 'Input Hanya Dapat Menerima Angka',
            'prodi.required' => 'Input Tidak Boleh Kosong',
            'prodi.min' => 'Input Minimal 3 Karakter',
            'prodi.max' => 'Input Hanya Menampung 255 Karakter',
        ]);


        Capres::create([
            'nama_capres' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi
        ]);
        return redirect(route('admin.capres.index'))->with('sukses', 'Berhasil Tambah Data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $capres = Capres::where('id', $id)->first();
        return view('admin.capres.read', compact('capres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $capres = Capres::where('id', $id)->first();
        return view('admin.capres.update', compact('capres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nama' => 'required|max:255|min:3',
            'nim' => 'required|numeric',
            'prodi' => 'required|max:255|min:3',
        ],[
            'nama.required' => 'Input Tidak Boleh Kosong',
            'nama.min' => 'Input Minimal 3 Karakter',
            'nama.max' => 'Input Hanya Menampung 255 Karakter',
            'nim.required' => 'Input Tidak Boleh Kosong',
            'nim.min' => 'Input Minimal 3 Karakter',
            'nim.max' => 'Input Hanya Menampung 255 Karakter',
            'nim.numeric' => 'Input Hanya Dapat Menerima Angka',
            'prodi.required' => 'Input Tidak Boleh Kosong',
            'prodi.min' => 'Input Minimal 3 Karakter',
            'prodi.max' => 'Input Hanya Menampung 255 Karakter',
        ]);

        $capres = Capres::where('id', $id)->first();
        $capres -> update([
            'nama_capres' => $request -> nama,
            'nim' => $request -> nim,
            'prodi' => $request->prodi
        ]);

        return redirect(route('admin.capres.index'))->with('sukses', 'Berhasil Update Data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $capres = Capres::where('id', $id)->first();
        $capres->delete();
        return redirect(route('admin.capres.index'))->with('sukses', 'Berhasil Hapus Data!');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('index', 'create', 'store', 'show', 'edit', 'update', 'destroy');
    }
}
