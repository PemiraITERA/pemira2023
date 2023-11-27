@extends('layouts.admin.app')


@section('title', 'Create Program Studi')

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Detail Ormawa</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Read Ormawa
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
                    <h4 class="card-title">Ormawa</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group mandatory">
                                    <label for="nama_ormawa" class="form-label">Nama Ormawa</label>
                                    <input type="text" id="waktu-pemilihan-column" class="form-control" placeholder="Masukkan Nama Ormawa" name="nama_ormawa" value="{{ $ormawa->nama_ormawa }}">
                                </div>
                            </div>
                        </div>
                          <div class="row">
                              <div class="col-md-12 col-12">
                                  <div class="form-group mandatory">
                                      <label for="foto" class="form-label">Logo</label>
                                      <input type="text" id="foto-column" class="form-control" placeholder="Masukkan Foto Logo" name="foto" value="{{ $ormawa->foto }}">
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
