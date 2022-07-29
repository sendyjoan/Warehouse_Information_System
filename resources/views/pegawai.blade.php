@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Daftar Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">List Pegawai</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Keseluruhan Data Pegawai Warehouse Information System</h3>
                    </div>
                <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr class="text-center">
                        <th>Nomor Induk</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Nomor Telephone</th>
                        <th>Jenis Kelamin</th>
                        <th>Jabatan Fungsional</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-center">
                        <td>2041720121</td>
                        <td>Sendy Joan Kevin</td>
                        <td>04 Mei 2022</td>
                        <td>082244767431</td>
                        <td>Laki-laki</td>
                        <td>Manajer Operasional</td>
                        <td>
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit Status
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection