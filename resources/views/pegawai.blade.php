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
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createPegawai">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Tambah Pegawai
                            </a>
                        </div>
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
                            <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#showPegawai">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editPegawai">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-dark btn-sm" data-toggle="modal" data-target="#bekukanPegawai">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Pembekuan
                            </a>
                            <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletePegawai">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <!-- Modal Tambah Pegawai-->
                    <div class="modal fade" id="createPegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pegawai</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="NamaLengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="namalengkap" name="name" placeholder="Nama Pegawai">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="EmailPegawai@email.com">
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Pegawai">
                                </div>
                                <div class="form-group">
                                    <label for="No Telephone">Nomor Telephone</label>
                                    <input type="text" class="form-control" id="nomor_telephone" name="nomor_telephone" placeholder="Nomor Telephone Pegawai">
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal Lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir Pegawai">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                                    <input type="text" class="form-control" id="repassword" name="repassword" placeholder="Masukkan Ulang Password">
                                </div>
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-primary">Simpan Pegawai</button>
                                </div>
                            </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    {{-- Modal Show Pegawai --}}
                    <div class="modal fade" id="showPegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Pegawai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h1 class="text-center">Sendy Joan Kevin</h1>
                                    <p>Nomor Induk Pegawai : </p>
                                    <p></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal Edit Pegawai --}}
                    <div class="modal fade" id="editPegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Pegawai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h1 class="text-center">Sendy Joan Kevin</h1>
                                    <p>Nomor Induk Pegawai : </p>
                                    <p></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal Bekukan Pegawai --}}
                    <div class="modal fade" id="bekukanPegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Validasi Pembekuan Akun</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h1 class="text-center">Anda yakin akan membekukan akun?</h1>
                                    <p>Detail Akun : </p>
                                    <p>Nomor Induk Pegawai : </p>
                                    <p></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal Bekukan Pegawai --}}
                    <div class="modal fade" id="deletePegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Validasi Hapus Akun</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h1 class="text-center">Anda yakin akan menghapus akun?</h1>
                                    <p>Detail Akun : </p>
                                    <p>Nomor Induk Pegawai : </p>
                                    <p></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection