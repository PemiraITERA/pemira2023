<?php

namespace App\Http\Controllers\Admin;

use App\Models\Capres;
use App\Models\DetailCapres;
use App\Models\Misi;
use App\Models\Progja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;

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
    public function create(Request $request)
    {
        $misi_count = $request->misi;
        $progja_count = $request->progja;
        return view('admin.capres.create', compact('misi_count', 'progja_count'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $rules = [];
        $messages = [];
        // Loop through each item and construct validation rules
        foreach ($request->all() as $key => $item) { 
            if($key == 'nim'){
                $rules["{$key}"] = 'required|numeric';
                $messages["{$key}.required"] = "{$key} tidak boleh kosong";
                $messages["{$key}.numeric"] = "{$key} hanya dapat menerima angka";
            }else if($key == 'foto_capres'){
                $rules["{$key}"] = 'required|mimes:jpg,png,jpeg|max:5120';
                $messages["{$key}.max"] = "{$key} hanya dapat menerima file dengan ukuran maksimal 5mb";
                $messages["{$key}.mimes"] = "{$key} hanya menerima file dengan esktensi jpg,png,jpeg";
                $messages["{$key}.required"] = "{$key} tidak boleh kosong";
            }else if($key == 'cv' || $key == 'grand_design'){
                $rules["{$key}"] = 'required|URL';
                $messages["{$key}.required"] = "{$key} tidak boleh kosong";
                $messages["{$key}.url"] = "{$key} hanya menerima inputan url";
            } else {
                $rules["{$key}"] = 'required';
                $messages["{$key}.required"] = "{$key} tidak boleh kosong";
            }
        }
        // Validate the request data using the rules and messages
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

        if ($request->hasFile('foto_capres')) {
            $detination_path = 'public/capres';
            $image = $request->file('foto_capres');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($detination_path, $imageName);
        }

            $capres = Capres::create([
                'nama_capres' => $request->nama,
                'foto_capres' => $imageName,
                'nim' => $request->nim,
                'prodi' => $request->prodi,
                'tentang' => $request->tentang
            ]);
            $detail_capres = DetailCapres::create([
                'id_capres' => $capres->id,
                'visi' => $request->visi,
                'cv' => $request->cv,
                'grand_design' => $request->grand_design
            ]);

            for($i = 1; $i <= $request->misiCount; $i++) {
                Misi::create([
                    'id_detail' => $detail_capres->id,
                    'misi' => $request['misi'.$i],
                ]);
            }
            for($i = 1; $i <= $request->misiCount; $i++) {
                Progja::create([
                    'id_detail' => $detail_capres->id,
                    'progja' => $request['progja'.$i],
                ]);
            }
            return redirect(route('admin.capres.index'))->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $capres = Capres::where('id', $id)->first();
        $detail_capres = DetailCapres::where('id_capres', $id)->first();
        $misi_capres = Misi::where('id_detail', $detail_capres->id)->get();
        $progja_capres = Progja::where('id_detail', $detail_capres->id)->get();
        return view('admin.capres.read', compact('capres', 'detail_capres', 'misi_capres', 'progja_capres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $capres = Capres::where('id', $id)->first();
        $detail_capres = DetailCapres::where('id_capres', $id)->first();
        $misi_capres = Misi::where('id_detail', $detail_capres->id)->get();
        $progja_capres = Progja::where('id_detail', $detail_capres->id)->get();
        return view('admin.capres.update', compact('capres', 'detail_capres', 'misi_capres', 'progja_capres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [];
        $messages = [];
        // Loop through each item and construct validation rules
        foreach ($request->all() as $key => $item) { // Validation rule for the 'name' field
            if($key == 'nim'){
                $rules["{$key}"] = 'required|numeric';
                $messages["{$key}.required"] = "{$key} Tidak Boleh Kosong";
                $messages["{$key}.numeric"] = "{$key} Hanya Dapat Menerima Angka";
            }else if($key == 'foto_capres'){
                $rules["{$key}"] = 'max:5120';
                $messages["{$key}.max"] = "{$key} Hanya Dapat Menerima File Dengan Ukuran Maksimal 5mb";
            }else{
                $rules["{$key}"] = 'required|string';
                $messages["{$key}.required"] = "{$key} Tidak Boleh Kosong";
            }
        }
        // Validate the request data using the rules and messages
        $validator = Validator::make($request->all(), $rules, $messages);

        $capres = Capres::where('id', $id)->first();
        $detail_capres = DetailCapres::where('id_capres', $id)->first();
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $image = $request->file('foto_capres');
            if($image != null){
                if ($request->hasFile('foto_capres')) {
                    $detination_path = 'public/capres';
                    $image = $request->file('foto_capres');
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->storeAs($detination_path, $imageName);
                    $filePath = 'capres/'.$capres->foto_capres;
                    if (Storage::disk('public')->exists($filePath)) {
                        Storage::disk('public')->delete($filePath);
                    }
                }
                $capres->update([
                    'nama_capres' => $request->nama,
                    'foto_capres' => $imageName,
                    'nim' => $request->nim,
                    'prodi' => $request->prodi,
                    'tentang' => $request->tentang
                ]);
                $detail_capres->update([
                    'id_capres' => $capres->id,
                    'visi' => $request->visi,
                    'cv' => $request->cv,
                    'grand_design' => $request->grand_design
                ]);

                for($i = 1; $i <= $request->misiCount; $i++) {
                    $misi_capres = Misi::where('id_detail', $detail_capres->id)->first();
                    $misi_capres->update([
                        'id_detail' => $detail_capres->id,
                        'misi' => $request['misi'.$i],
                    ]);
                }
                for($i = 1; $i <= $request->progjaCount; $i++) {
                    $progja_capres = Progja::where('id_detail', $detail_capres->id)->first();
                    $progja_capres->update([
                        'id_detail' => $detail_capres->id,
                        'progja' => $request['progja'.$i],
                    ]);
                }
            }else{
                $capres->update([
                    'nama_capres' => $request->nama,
                    'nim' => $request->nim,
                    'prodi' => $request->prodi,
                    'tentang' => $request->tentang
                ]);
                $detail_capres->update([
                    'id_capres' => $capres->id,
                    'visi' => $request->visi,
                    'cv' => $request->cv,
                    'grand_design' => $request->grand_design
                ]);

                for($i = 1; $i <= $request->misiCount; $i++) {
                    $misi_capres = Misi::where('id_detail', $detail_capres->id)->first();
                    $misi_capres->update([
                        'id_detail' => $detail_capres->id,
                        'misi' => $request['misi'.$i],
                    ]);
                }
                for($i = 1; $i <= $request->progjaCount; $i++) {
                    $progja_capres = Progja::where('id_detail', $detail_capres->id)->first();
                    $progja_capres->update([
                        'id_detail' => $detail_capres->id,
                        'progja' => $request['progja'.$i],
                    ]);
                }
            }
            return redirect(route('admin.capres.index'))->with('sukses', 'Berhasil Ubah Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $capres = Capres::where('id', $id)->first();
        $detail_capres = DetailCapres::where('id_capres', $id)->first();
        $misi = Misi::where('id_detail', $detail_capres->id)->get();
        $progja = Progja::where('id_detail', $detail_capres->id)->get();
        $filePath = 'capres/'.$capres->foto_capres;
        if (Storage::disk('public')->exists($filePath)) {
            Storage::disk('public')->delete($filePath);
        }

        foreach ($misi as $data){
            $data->delete();
        }
        foreach ($progja as $data){
            $data->delete();
        }
        $capres->delete();
        return redirect(route('admin.capres.index'))->with('sukses', 'Berhasil Hapus Data!');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('index', 'create', 'store', 'show', 'edit', 'update', 'destroy');
    }
}
