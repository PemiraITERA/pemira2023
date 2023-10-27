@extends('layouts.admin.app')


@section('title', 'Create Capresma')

@section('content')
<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Detail Calon Presiden Mahasiswa</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Read Capresma
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
                    <h4 class="card-title">Calom Presiden Mahasiswa</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="name-column" class="form-label">Nama Capresma</label>
                                    <input type="text" id="name-column" class="form-control" disabled value="{{ $capres->nama_capres }}" name="name-column" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="nim-column" class="form-label">Nama</label>
                                    <input type="text" id="nim-column" class="form-control" disabled value="{{ $capres->nim }}" name="nim-column" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="prodi-column" class="form-label">Prodi</label>
                                    <input type="text" id="prodi-column" class="form-control" disabled value="{{ $capres->prodi }}" name="prodi-column" >
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
