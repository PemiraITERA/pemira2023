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
              <h4 class="card-title">Multiple Column</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <form class="form" data-parsley-validate>
                  <div class="row">
                    <div class="col-md-12 col-12">
                      <div class="form-group mandatory">
                        <label for="name-column" class="form-label">Nama Capresma</label>
                        <input type="text" id="name-column" class="form-control" placeholder="Masukkan Name" name="name-column" data-parsley-required="true">
                      </div>
                    </div>
                    <div class="col-md-12 col-12">
                      <div class="form-group">
                            <div class="form-group mandatory">
                            <label for="nim-column" class="form-label">NIM</label>
                            <input type="text" id="nim-column" class="form-control" placeholder="Masukkan NIM" name="nim-column" data-parsley-required="true">
                        </div>
                      </div>
                    <div class="col-md-12 col-12">
                      <div class="form-group">
                        <div class="form-group mandatory">
                            <label for="prodi-column" class="form-label">Program Studi</label>
                            <input type="text" id="prodi-column" class="form-control" placeholder="Masukkan Program Studi" name="nim-column" data-parsley-required="true">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                      <button type="submit" class="btn btn-primary me-1 mb-1">
                        Submit
                      </button>
                      <button
                        type="reset"
                        class="btn btn-light-secondary me-1 mb-1"
                      >
                        Reset
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
