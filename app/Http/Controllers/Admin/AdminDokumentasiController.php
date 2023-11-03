<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dokumentasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

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
            'foto' => 'required|mimes:jpg,png,jpeg|max:5120',
        ],[
            'foto.required' => 'Input Tidak Boleh Kosong',
            'foto.max' => 'Input Hanya Menampung File  Maksimal 5mb',
            'foto.mimes' => 'Input Hanya Menerima File Dengan Extensi jpg,png,jpeg'
        ]);

        if ($request->hasFile('foto')) {
            $detination_path = 'public/dokumentasi';
            $image = $request->file('foto');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($detination_path, $imageName);
        }
        Dokumentasi::create([
            'foto' => $imageName
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
        $filePath = 'dokumentasi/' . $dokumentasi->foto;
        if (Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
        }
        $dokumentasi->delete();
        return redirect(route('admin.dokumentasi.index'))->with('sukses', 'Berhasil Hapus Data!');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('index', 'create', 'store', 'show', 'edit', 'update', 'destroy');
    }
}
