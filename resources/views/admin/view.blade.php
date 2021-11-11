@extends('admin/core')

@section('title', $title)

@section('sidebar-menu')
<nav class="mt-4">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Dashboard</li>
        <li class="nav-item">
            <a href="{{ url('admin') }}" class="nav-link active">
                <i class="nav-icon fas fa-home"></i>
                <p>Dashboard</p>
            </a>
        </li>
        {{-- <li class="nav-header">DATA HALAMAN UTAMA</li>
        <li class="nav-item">
            <a href="{{ url('admin/main-page') }}" class="nav-link">
                <i class="nav-icon fas fa-pager"></i>
                <p>Management Hal Utama</p>
            </a>
        </li> --}}
        <li class="nav-header">DATA LAPANGAN</li>
        <li class="nav-item">
            <a href="{{ url('admin/management-field') }}" class="nav-link">
                <i class="nav-icon fas fa-futbol"></i>
                <p>Management Lapangan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('admin/management-booking') }}" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i>
                <p>Management Pemesanan</p>
            </a>
        </li>
        <li class="nav-header">DATA PENGGUNA</li>
        <li class="nav-item">
            <a href="{{ url('admin/management-user') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Management Pengguna</p>
            </a>
        </li>
    </ul>
</nav>
@endsection

@section('content-header')
    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
    <li class="breadcrumb-item active">Admin</li>
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content-body')
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
        
                        <div class="info-box-content">
                            <span class="info-box-text">App Traffic</span>
                            <span class="info-box-number">10<small>%</small>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
    
                        <div class="info-box-content">
                            <span class="info-box-text">Likes</span>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
    
                        <div class="info-box-content">
                            <span class="info-box-text">Sales</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
    
                        <div class="info-box-content">
                            <span class="info-box-text">New Members</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <!-- end info boxes -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Pemesanan</h3>
                        </div>
                        <div class="card-body">
                            <table id="booking" class="table table-striped table-bordered dt-responsive" style="width: 100%">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Pemesan</th>
                                        <th>Nama Lapangan</th>
                                        <th>Lama Booking</th>
                                        <th>Harga Booking</th>
                                        <th>Status Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td>Indra</td>
                                        <td>Lapangan Futsal - A</td>
                                        <td>2 Jam</td>
                                        <td>Rp 200.000,00</td>
                                        <td><span class="badge badge-success">Berhasil</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>2</td>
                                        <td>Raju</td>
                                        <td>Lapangan Futsal - B</td>
                                        <td>1 Jam</td>
                                        <td>Rp 100.000,00</td>
                                        <td><span class="badge badge-danger">Gagal</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>3</td>
                                        <td>Bekti</td>
                                        <td>Lapangan Basket - A</td>
                                        <td>2 Jam</td>
                                        <td>Rp 250.000,00</td>
                                        <td><span class="badge badge-success">Berhasil</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>4</td>
                                        <td>Alif</td>
                                        <td>Lapangan Basket - B</td>
                                        <td>2 Jam</td>
                                        <td>Rp 300.000,00</td>
                                        <td><span class="badge badge-warning">Menunggu</span></td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>5</td>
                                        <td>Jamal</td>
                                        <td>Lapangan Badminton - A</td>
                                        <td>2 Jam</td>
                                        <td>Rp 175.000,00</td>
                                        <td><span class="badge badge-success">Berhasil</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer-asset')
    <script src="{{ mix('js/admin/dashboard.js') }}"></script>
@endsection