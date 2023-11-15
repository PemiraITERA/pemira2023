@extends('layouts.admin.app')


@section('title', 'Create Dokumentasi')

@section('content')<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Kelola Dokumentasi</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Data Dokumentasi
                </h5>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gedung as $data => $value)
                            <tr>
                                <td>{{ $gedung->firstItem() + $data}}</td>
                                <td>{{ $value->gedung }}</td>
                                <td>
                                    <a href="{{route('admin.gedung.edit', $value->id) }}" class="btn btn-light-primary">Edit</a>
                                <a href="{{route('admin.gedung.show', $value->id) }}" class="btn btn-light-success">Read</a>
                                <form method="POST" action="{{route('admin.gedung.destroy', $value->id)}}"  enctype='multipart/form-data' style="display: inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-light-danger ml-1">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                {{ $gedung->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>

    </section>
</div>
@endsection
