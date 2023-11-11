@extends('layouts.admin.app')


@section('title', 'Create Capresma')

@section('content')

<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Tambah Calom Presiden Mahasiswa</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Update Capresma
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
      <div class="row match-height">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Create Capresma</h4>
            </div>
            @if($errors->any())
            <div id="errorAlert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                @foreach($errors->all() as $error)
                    <div>
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ $error }}</span>
                    </div>
                @endforeach
                <span id="closeButton" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Close</title>
                        <path d="M14.348 5.652a.5.5 0 01.708.708L10.707 10l4.349 4.348a.5.5 0 11-.708.708L10 10.707l-4.348 4.349a.5.5 0 01-.708-.708L9.293 10 4.944 5.652a.5.5 0 01.708-.708L10 9.293l4.348-4.341z"></path>
                    </svg>
                </span>
            </div>
            @endif
            <div class="card-content">
              <div class="card-body">
                <form class="form" data-parsley-validate action="{{ route('admin.capres.update', $capres->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                  @csrf
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('nama') is-invalid @enderror">
                                <label for="nama" class="form-label">Nama Capresma</label>
                                <input type="text" id="nama-column" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama" name="nama" value="{{ $capres->nama_capres }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('foto_capres') is-invalid @enderror">
                                <label for="foto_capres" class="form-label">Foto Capresma</label>
                                <input type="file" id="foto_capres-column" class="form-control @error('foto_capres') is-invalid @enderror" name="foto_capres">
                                @error('foto_capres')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('nim') is-invalid @enderror">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="number" id="nim-column" class="form-control @error('nim') is-invalid @enderror" placeholder="Masukkan NIM" name="nim" value="{{ $capres->nim }}">
                                @error('nim')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('prodi') is-invalid @enderror">
                                <label for="prodi" class="form-label">Program Studi</label>
                                <input type="text" id="prodi-column" class="form-control @error('prodi') is-invalid @enderror" placeholder="Masukkan Program Studi" name="prodi" value="{{ $capres->prodi }}">
                                @error('prodi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('tentang') is-invalid @enderror">
                                <label for="tentang" class="form-label">Tentang</label>
                                <textarea id="tentang-column" class="form-control @error('tentang') is-invalid @enderror" placeholder="Masukkan Tentang Capres" name="tentang" rows="5" style="resize: none">{{ $capres->tentang }}</textarea>
                                @error('tentang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('visi') is-invalid @enderror">
                                <label for="visi" class="form-label">Visi</label>
                                <textarea id="visi-column" class="form-control @error('visi') is-invalid @enderror" placeholder="Masukkan Visi" name="visi" rows="5" style="resize: none">{{ $detail_capres->visi }}</textarea>
                                @error('visi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('cv') is-invalid @enderror">
                                <label for="cv" class="form-label">CV</label>
                                <textarea id="cv-column" class="form-control @error('cv') is-invalid @enderror" placeholder="Masukkan CV" name="cv" rows="5" style="resize: none">{{ $detail_capres->cv }}</textarea>
                                @error('cv')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('grand_design') is-invalid @enderror">
                                <label for="grand_design" class="form-label">Grand Design</label>
                                <textarea id="grand_design-column" class="form-control @error('grand_design') is-invalid @enderror" placeholder="Masukkan Grand Design" name="grand_design" rows="5" style="resize: none">{{ $detail_capres->visi }}</textarea>
                                @error('grand_design')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                        @foreach ($misi_capres as $data)
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group mandatory @error('misi{{ $loop->iteration }}') is-invalid @enderror">
                                        <label for="misi{{ $loop->iteration }}" class="form-label">Misi {{  $loop->iteration  }}</label>
                                        <textarea name="misi{{ $loop->iteration }}" class="form-control @error('misi{{ $loop->iteration }}') is-invalid @enderror" placeholder="Masukkan Misi {{ $loop->iteration }}" rows="5" style="resize: none">{{ $data->misi }}</textarea>
                                        @error('misi{{ $loop->iteration }}')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    <input type="hidden" id="misiCount" name="misiCount" value="1">
                    @foreach ($progja_capres as $data)
                        <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group mandatory @error('progja{{ $loop->iteration }}') is-invalid @enderror">
                                        <label for="progja{{ $loop->iteration }}" class="form-label">Program Kerja {{  $loop->iteration  }}</label>
                                        <textarea name="progja{{ $loop->iteration }}" class="form-control @error('progja{{ $loop->iteration }}') is-invalid @enderror" placeholder="Masukkan Program Kerja {{ $loop->iteration }}" rows="5" style="resize: none">{{ $data->progja }}</textarea>
                                        @error('progja{{ $loop->iteration }}')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                        </div>
                    @endforeach
                    <input type="hidden" id="progjaCount" name="progjaCount" value="1">
                  <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                      <button type="submit" class="save btn btn-primary me-1 mb-1">
                        Submit
                      </button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection


