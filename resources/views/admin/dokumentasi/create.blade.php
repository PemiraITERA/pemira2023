@extends('layouts.admin.app')


@section('title', 'Create Dokumentasi')

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Tambah Dokumentasi</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Create Dokumentasi
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
              <h4 class="card-title">Create Dokumentasi</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <form class="form" data-parsley-validate action="{{route('admin.capres.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group mandatory @error('foto') is-invalid @enderror">
                                <label for="foto" class="form-label">Foto Dokumentasi</label>
                                <input type="text" id="foto-column" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukkan Foto" name="foto" value="{{ old('foto') }}">
                                @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    </div>
                    <section class="section">
                            <div class="card-body">
                                <p>Block some text to display options in poppovers </p>
                                <div id="full">
                                </div>
                            </div>
                        </div>
                    </section>
                  <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <div class="mb-4">
                        <button id="addInput" type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Input</button>
                        </div>
                        <div id="inputContainer">
                          <!-- Input akan ditambahkan di sini -->
                        </div>
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
