@extends('layouts.admin.app')


@section('title', 'Create Program Studi')

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Tambah Ormawai</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Create Ormawa
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
              <h4 class="card-title">Create Ormawa</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <form class="form" data-parsley-validate action="{{route('admin.prodi.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                      <div class="col-md-12 col-12">
                          <div class="form-group mandatory @error('nama_ormawa') is-invalid @enderror">
                              <label for="nama_ormawa" class="form-label">Nama Ormawa</label>
                              <input type="text" id="waktu-pemilihan-column" class="form-control @error('nama_ormawa') is-invalid @enderror" placeholder="Masukkan Nama Ormawa" name="nama_ormawa" value="{{ old('nama_ormawa') }}">
                              @error('nama_ormawa')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 col-12">
                          <div class="form-group mandatory @error('koalisi') is-invalid @enderror">
                              <label for="koalisi" class="form-label">Pilih Koalisi</label>
                              <select name="koalisi" id="koalisi" class="form-control @error('koalisi') is-invalid @enderror">
                                  <option value="">Pilih Koalisi</option>
                                  @foreach ($capres as $data)
                                  <option value="{{ $data->id }}" @if(old('koalisi') == $data->id) selected @endif>{{ $data->nama_capres }}</option>
                                  @endforeach
                              </select>
                              @error('koalisi')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                      </div>
                  </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('foto') is-invalid @enderror">
                                <label for="foto" class="form-label">Logo</label>
                                <input type="file" id="foto-column" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukkan Foto Logo" name="foto" value="{{ old('foto') }}">
                                @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                  <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                      <button type="submit" class="btn btn-primary me-1 mb-1">
                        Submit
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
  </div>
@endsection
