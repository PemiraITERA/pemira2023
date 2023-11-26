@extends('layouts.admin.app')


@section('title', 'Create Dokumentasi')

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Update Gedung</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Update Gedung
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
              <h4 class="card-title">Update Gedung</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <form class="form" data-parsley-validate action="{{route('admin.gedung.update', $gedung->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('gedung') is-invalid @enderror">
                                <label for="gedung" class="form-label">Gedung</label>
                                <input type="text" id="gedung-column" class="form-control @error('gedung') is-invalid @enderror" placeholder="Masukkan Gedung" name="gedung" value="{{ $gedung->gedung }}">
                                @error('gedung')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('tgl') is-invalid @enderror">
                                <label for="tgl" class="form-label">Tanggal</label>
                                <input type="text" id="tgl-column" class="form-control @error('tgl') is-invalid @enderror" placeholder="Masukkan Tanggal" name="tgl" value="{{ $gedung->tgl }}">
                                @error('tgl')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('jam') is-invalid @enderror">
                                <label for="jam" class="form-label">Jam</label>
                                <input type="text" id="jam-column" class="form-control @error('jam') is-invalid @enderror" placeholder="Masukkan Jam ex: 12:00 - 14:00" name="jam" value="{{ $gedung->jam }}">
                                @error('jam')
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
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" id="foto-column" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukkan Foto Gedung" name="foto">
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
