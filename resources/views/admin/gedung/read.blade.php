@extends('layouts.admin.app')


@section('title', 'Create Dokumentasi')

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Detail Gedung</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Read Gedung
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
                    <h4 class="card-title">Gedung</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mandatory">
                                    <label for="gedung" class="form-label">Gedung</label>
                                    <input type="text" id="gedung-column" class="form-control" placeholder="Masukkan Gedung" name="gedung" value="{{ $gedung->gedung }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mandatory">
                                    <label for="tgl" class="form-label">Tanggal</label>
                                    <input type="text" id="tgl-column" class="form-control" placeholder="Masukkan Tanggal" name="tgl" value="{{ $gedung->tgl }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mandatory">
                                    <label for="jam" class="form-label">Jam</label>
                                    <input type="text" id="jam-column" class="form-control" placeholder="Masukkan Tanggal ex: 12:00 - 14:00" name="jam" value="{{ $gedung->jam }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mandatory">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="text" id="foto-column" class="form-control" placeholder="Masukkan Foto Gedung" name="foto" value="{{ $gedung->gedung }}">
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
