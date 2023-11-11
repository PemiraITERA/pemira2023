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
                Create Capresma
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
            <div class="card-content">
              <div class="card-body">
                <form class="form" data-parsley-validate action="{{route('admin.capres.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('nama') is-invalid @enderror">
                                <label for="nama" class="form-label">Nama Capresma</label>
                                <input type="text" id="nama-column" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}" required>
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
                                <input type="file" id="foto_capres-column" class="form-control @error('foto_capres') is-invalid @enderror" name="foto_capres" value="{{ old('foto_capres') }}" required>
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
                                <input type="number" id="nim-column" class="form-control @error('nim') is-invalid @enderror" placeholder="Masukkan NIM" name="nim" value="{{ old('nim') }}" required>
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
                                <input type="text" id="prodi-column" class="form-control @error('prodi') is-invalid @enderror" placeholder="Masukkan Program Studi" name="prodi" value="{{ old('prodi') }}" required>
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
                                <textarea id="tentang-column" class="form-control @error('tentang') is-invalid @enderror" placeholder="Masukkan Tentang Capres" name="tentang" rows="5" style="resize: none" required>{{ old('tentang') }}</textarea>
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
                                <textarea id="visi-column" class="form-control @error('visi') is-invalid @enderror" placeholder="Masukkan Visi" name="visi" rows="5" style="resize: none" required>{{ old('visi') }}</textarea>
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
                                <input id="cv-column" class="form-control @error('cv') is-invalid @enderror" placeholder="Masukkan CV" name="cv" rows="5" style="resize: none" required value="{{ old('cv') }}">
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
                                <input id="grand_design-column" class="form-control @error('grand_design') is-invalid @enderror" placeholder="Masukkan Grand Design" name="grand_design" rows="5" style="resize: none" value="{{ old('grand_design') }}">
                                @error('grand_design')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    @for ($i = 1; $i <= $misi_count; $i++)
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mandatory  @error('misi'.$i) is-invalid @enderror">
                                    <label for="misi{{ $i }}" class="form-label">Misi {{ $i }}</label>
                                    <textarea name="misi{{ $i }}" class="form-control @error('misi'.$i) is-invalid @enderror" placeholder="Masukkan Misi {{ $i }}" rows="5" style="resize: none">{{ old('misi'.$i) }}</textarea>
                                    @error('misi'.$i)
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endfor
                    @for ($i = 1; $i <= $progja_count; $i++)
                        <div class="row dynamic-input-progja">
                            <div class="col-md-12 col-12">
                                <div class="form-group mandatory  @error('progja'.$i) is-invalid @enderror">
                                    <label for="progja{{ $i }}" class="form-label">Program Kerja {{ $i }}</label>
                                    <textarea name="progja{{ $i }}" class="form-control @error('progja'.$i) is-invalid @enderror" placeholder="Masukkan Program Kerja {{ $i }}" rows="5" style="resize: none">{{ old('progja'.$i) }}</textarea>
                                    @error('progja'.$i)
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endfor
                    <input type="hidden" id="misiCount" name="misiCount" value="{{ $misi_count }}">
                    <input type="hidden" id="progjaCount" name="progjaCount" value="{{ $progja_count }}">
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


