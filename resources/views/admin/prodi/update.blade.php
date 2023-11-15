@extends('layouts.admin.app')


@section('title', 'Create Program Studi')

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Tambah Program Studi</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Create Prodi
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
              <h4 class="card-title">Update Prodi</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <form class="form" data-parsley-validate action="{{route('admin.prodi.update', $prodi->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('nama') is-invalid @enderror">
                                <label for="nama_prodi" class="form-label">Nama Prodi</label>
                                <input type="text" id="nama-prodi-column" class="form-control @error('nama_prodi') is-invalid @enderror" placeholder="Masukkan Nama Prodi" name="nama_prodi" value="{{ $prodi->nama_prodi }}">
                                @error('nama_prodi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('gedung_pemilihan') is-invalid @enderror">
                                <label for="gedung_pemilihan" class="form-label">Gedung Pemilihan</label>
                                <select name="gedung_pemilihan" id="gedung_pemilihan" class="form-control @error('gedung_pemilihan') is-invalid @enderror">
                                @foreach ($gedung as $data )
                                    <option value="{{ $data->gedung }}" @if ($prodi->gedung_pemilihan == $data->gedung) selected @endif>{{ $data->gedung }}</option>
                                @endforeach
                                </select>
                                @error('gedung_pemilihan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('waktu_pemilihan') is-invalid @enderror">
                                <label for="waktu_pemilihan" class="form-label">Waktu Pemilihan</label>
                                <input type="text" id="waktu-pemilihan-column" class="form-control @error('waktu_pemilihan') is-invalid @enderror" placeholder="Masukkan Waktu Pemilihan ex: 13:20" name="waktu_pemilihan" value="{{ $prodi->waktu_pemilihan }}">
                                @error('waktu_pemilihan')
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
