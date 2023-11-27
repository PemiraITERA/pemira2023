<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProgramStudi;
use App\Models\Capres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class AdminProgramStudiController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.prodi.index',[
            'ormawa' => DB::table('ormawa')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prodi.create',[
            'capres' => Capres::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama_ormawa' => 'required|max:255|min:3',
            'koalisi' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg|max:5120',
        ],[
            'nama_ormawa.required' => 'Input Tidak Boleh Kosong',
            'nama_ormawa.min' => 'Input Minimal 3 Karakter',
            'nama_ormawa.max' => 'Input Hanya Menampung 255 Karakter',
            'koalisi.required' => 'Input Tidak Boleh Kosong',
            'foto.max' => 'Input Hanya Menampung File  Maksimal 5mb',
            'foto.mimes' => 'Input Hanya Menerima File Dengan Extensi jpg,png,jpeg'
        ]);

        if ($request->hasFile('foto')) {
            $detination_path = 'public/ormawa';
            $image = $request->file('foto');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($detination_path, $imageName);
        }

        ProgramStudi::create([
            'nama_ormawa' => $request->nama_ormawa,
            'koalisi' => $request->koalisi,
            'foto' => $imageName,
        ]);
        return redirect(route('admin.prodi.index'))->with('sukses', 'Berhasil Tambah Data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ormawa = ProgramStudi::where('id', $id)->first();
        return view('admin.prodi.read', compact('ormawa'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ormawa = ProgramStudi::where('id', $id)->first();
        return view('admin.prodi.update', compact('ormawa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nama_ormawa' => 'required|max:255|min:3',
            'koalisi' => 'required',
            'foto' => 'mimes:jpg,png,jpeg|max:5120',
        ],[
            'nama_ormawa.required' => 'Input Tidak Boleh Kosong',
            'nama_ormawa.min' => 'Input Minimal 3 Karakter',
            'nama_ormawa.max' => 'Input Hanya Menampung 255 Karakter',
            'koalisi.required' => 'Input Tidak Boleh Kosong',
            'foto.max' => 'Input Hanya Menampung File  Maksimal 5mb',
            'foto.mimes' => 'Input Hanya Menerima File Dengan Extensi jpg,png,jpeg'
        ]);

        $ormawa = ProgramStudi::where('id', $id)->first();
        $image = $request->file('foto');

        if($image != null){
            if ($request->hasFile('foto')) {
                $detination_path = 'public/ormawa';
                $image = $request->file('foto');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs($detination_path, $imageName);
                $filePath = 'ormawa/'.$ormawa->foto;
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath);
                }
            }

            $ormawa->update([
                'nama_ormawa' => $request->nama_ormawa,
                'koalisi' => $request->koalisi,
                'foto' => $imageName,
            ]);
        }else{
            $ormawa->update([
                'nama_ormawa' => $request->nama_ormawa,
                'koalisi' => $request->koalisi,
            ]);
        }

        return redirect(route('admin.prodi.index'))->with('sukses', 'Berhasil Update Data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ormawa = ProgramStudi::where('id', $id)->first();
        $filePath = 'ormawa/' . $ormawa->foto;
        if (Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
        }
        $ormawa->delete();
        return redirect(route('admin.prodi.index'))->with('sukses', 'Berhasil Hapus Data!');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('index', 'create', 'store', 'show', 'edit', 'update', 'destroy');
    }
}
