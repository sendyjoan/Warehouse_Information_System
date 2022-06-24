@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small card -->
                  <div class="small-box bg-indigo">
                    <div class="inner">
                      <h3>150</h3>
      
                      <p>Barang</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-solid fa-box"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>150</h3>
        
                        <p>Pelanggan</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-solid fa-box"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-purple">
                      <div class="inner">
                        <h3>150</h3>
        
                        <p>Supplier</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-solid fa-box"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-lightblue">
                      <div class="inner">
                        <h3>150</h3>
        
                        <p>Pegawai</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-solid fa-box"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-teal">
                      <div class="inner">
                        <h3>150</h3>
        
                        <p>Transaksi</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-solid fa-box"></i>
                      </div>
                      <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                      </a>
                    </div>
                </div><!-- ./col -->
            </div>
        </div>
      </section>
    </div>
</div>
@endsection