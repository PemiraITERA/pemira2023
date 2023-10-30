<?php

namespace App\Http\Controllers\Admin;

use App\Models\Capres;
use App\Models\DetailCapres;
use App\Models\Misi;
use App\Models\Progja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function create()
    {
        return view('admin.capres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [];
        $messages = [];
        // Loop through each item and construct validation rules
        foreach ($request->all() as $key => $item) { // Validation rule for the 'name' field
            if($key == 'nim'){
                $rules["{$key}"] = 'required|numeric';
            }else{
                $rules["{$key}"] = 'required|string';
            }
        }
        // Validate the request data using the rules and messages
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $capres = Capres::create([
                'nama_capres' => $request->nama,
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
                    'misi' => $request['misi1'],
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
            }else{
                $rules["{$key}"] = 'required|string';
            }
        }
        // Validate the request data using the rules and messages
        $validator = Validator::make($request->all(), $rules, $messages);

        $capres = Capres::where('id', $id)->first();
        $detail_capres = DetailCapres::where('id_capres', $id)->first();
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
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
            for($i = 1; $i <= $request->misiCount; $i++) {
                $progja_capres = Progja::where('id_detail', $detail_capres->id)->first();
                $progja_capres->update([
                    'id_detail' => $detail_capres->id,
                    'progja' => $request['progja'.$i],
                ]);
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
        $capres->delete();
        return redirect(route('admin.capres.index'))->with('sukses', 'Berhasil Hapus Data!');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('index', 'create', 'store', 'show', 'edit', 'update', 'destroy');
    }
}
