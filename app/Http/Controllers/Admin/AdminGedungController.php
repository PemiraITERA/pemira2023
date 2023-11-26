<?php

namespace App\Http\Controllers\Admin;

use App\Models\gedung;
// use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class AdminGedungController extends Controller
{
    /**
 * Display a listing of the resource.
 */
public function index()
{
    return view('admin.gedung.index',[
        'gedung' => DB::table('gedung')->paginate(5)
    ]);
}

/**
 * Show the form for creating a new resource.
 */
public function create()
{
    return view('admin.gedung.create');
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $validator = $request->validate([
        'gedung' => 'required|min:3',
        'tgl'=> 'required|min:3',
        'jam'=> 'required|min:3',
        'foto' => 'required|mimes:jpg,png,jpeg|max:5120',
    ],[
        'gedung.required' => 'Input Tidak Boleh Kosong',
        'gedung.min' => 'Minimal Inputkan 3 Karakter',
        'tgl.required' => 'Input Tidak boleh Kosong',
        'tgl.min' => 'Minimal Inputkan 3 Karakter',
        'jam.required' => 'Input Tidak Boleh Kosong',
        'jam.min' => 'Minimal Inputkan 3 Karakter',
        'foto.max' => 'Input Hanya Menampung File  Maksimal 5mb',
        'foto.mimes' => 'Input Hanya Menerima File Dengan Extensi jpg,png,jpeg'
    ]);


    if ($request->hasFile('foto')) {
        $detination_path = 'public/gedung';
        $image = $request->file('foto');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs($detination_path, $imageName);
    }

    // Ambil tanggal dari input form
    // $inputDate = $request->input('tanggal');

    // Konversi tanggal ke objek Carbon
    // $carbonDate = Carbon::parse($inputDate);

    // Format sesuai keinginan "1 Januari 2023 / Senin"
    // $tanggal = $carbonDate->format('j F Y / l');

    gedung::create([
        'gedung' => $request->gedung,
        'tgl' => $request->tgl,
        'jam' => $request->jam,
        'foto' => $imageName,
    ]);
    return redirect(route('admin.gedung.index'))->with('sukses', 'Berhasil Tambah Data!');
}

/**
 * Display the specified resource.
 */
public function show(string $id)
{
    $gedung = gedung::where('id', $id)->first();
    return view('admin.gedung.read', compact('gedung'));
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(string $id)
{
    $gedung = gedung::where('id', $id)->first();
    return view('admin.gedung.update', compact('gedung'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $validator = $request->validate([
        'gedung' => 'required|min:3',
        'tgl'=> 'required|min:3',
        'jam'=> 'required|min:3',
        'foto' => 'required|mimes:jpg,png,jpeg|max:5120',
    ],[
        'gedung.required' => 'Input Tidak Boleh Kosong',
        'gedung.min' => 'Minimal Inputkan 3 Karakter',
        'tgl.required' => 'Input Tidak boleh Kosong',
        'tgl.min' => 'Minimal Inputkan 3 Karakter',
        'jam.required' => 'Input Tidak Boleh Kosong',
        'jam.min' => 'Minimal Inputkan 3 Karakter',
        'foto.max' => 'Input Hanya Menampung File  Maksimal 5mb',
        'foto.mimes' => 'Input Hanya Menerima File Dengan Extensi jpg,png,jpeg'
    ]);

    $gedung = gedung::where('id', $id)->first();
    $image = $request->file('foto');

    // Ambil tanggal dari input form
    // $inputDate = $request->input('tanggal');

    // Konversi tanggal ke objek Carbon
    // $carbonDate = Carbon::parse($inputDate);

    // Format sesuai keinginan "1 Januari 2023 / Senin"
    // $tanggal = $carbonDate->format('j F Y / l');

    if($image != null){
        if ($request->hasFile('foto')) {
            $detination_path = 'public/gedung';
            $image = $request->file('foto');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($detination_path, $imageName);
            $filePath = 'gedung/'.$gedung->foto_capres;
            if (Storage::disk('public')->exists($filePath)) {
                Storage::disk('public')->delete($filePath);
            }
        }

        $gedung->update([
            'gedung' => $request->gedung,
            'tgl' => $$request->tgl,
            'jam' => $request->jam,
            'foto' => $imageName,
        ]);
    }else{
        $gedung->update([
            'gedung' => $request->gedung,
            'tgl' => $tanggal,
        ]);
    }

    return redirect(route('admin.gedung.index'))->with('sukses', 'Berhasil Update Data!');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    $gedung = gedung::where('id', $id)->first();
    $filePath = 'gedung/' . $gedung->foto;
    if (Storage::disk('public')->exists($filePath)) {
        Storage::disk('public')->delete($filePath);
    }
    $gedung->delete();
    return redirect(route('admin.gedung.index'))->with('sukses', 'Berhasil Hapus Data!');
}

public function __construct()
{
    $this->middleware('guest')->except('index', 'create', 'store', 'show', 'edit', 'update', 'destroy');
}
}
