@extends('layouts.admin.app')


@section('title', 'Create Program Studi')

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Detail Program Studi</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Read Prodi
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
                    <h4 class="card-title">Program Studi</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="name-column" class="form-label">Nama Prodi</label>
                                    <input type="text" id="nama-prodi-column" class="form-control" disabled value="{{ $prodi->nama_prodi }}" name="nama-prodi-column" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="gedung-pemilihan-column" class="form-label">Gedung Pemilihan</label>
                                    <input type="text" id="gedung-pemilihan-column" class="form-control" disabled value="{{ $prodi->gedung_pemilihan }}" name="gedung-pemilihan-column" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="waktu-pemilihan-column" class="form-label">Waktu Pemilihan</label>
                                    <input type="text" id="waktu-pemilihan-column" class="form-control" disabled value="{{ $prodi->waktu_pemilihan }}" name="gedung-pemilihan-column" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
      </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
  </div>
@endsection
