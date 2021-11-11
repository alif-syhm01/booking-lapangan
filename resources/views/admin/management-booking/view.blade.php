@extends('admin/core')

@section('title', $title)

@section('sidebar-menu')
<nav class="mt-4">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Dashboard</li>
        <li class="nav-item">
            <a href="{{ url('admin') }}" class="nav-link">
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
            <a href="{{ url('admin/management-booking') }}" class="nav-link active">
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
    <li class="breadcrumb-item active">Manajemen Pemesanan</li>
@endsection

@section('content-body')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Pemesanan</h3>
                        </div>
                        <div class="card-body">
                            <!-- make a button to create, and delete the data -->
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-field">Tambah Pemesanan</button>
                                <button type="button" class="btn btn-danger" id="delete-all-fields">Hapus Semua Pemesanan</button>
                            </div>
                            <table id="data-booking" class="table table-striped table-bordered dt-responsive" style="width: 100%">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Pemesan</th>
                                        <th>Nama Lapangan</th>
                                        <th>Lama Booking</th>
                                        <th>Harga Booking</th>
                                        <th>Status Pembayaran</th>
                                        <th>Aksi</th>
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
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary" id="edit">Ubah</a>
                                            <a href="javascript:;" class="btn btn-danger" id="delete">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>2</td>
                                        <td>Raju</td>
                                        <td>Lapangan Futsal - B</td>
                                        <td>1 Jam</td>
                                        <td>Rp 100.000,00</td>
                                        <td><span class="badge badge-danger">Gagal</span></td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary">Ubah</a>
                                            <a href="javascript:;" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>3</td>
                                        <td>Bekti</td>
                                        <td>Lapangan Basket - A</td>
                                        <td>2 Jam</td>
                                        <td>Rp 250.000,00</td>
                                        <td><span class="badge badge-success">Berhasil</span></td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary">Ubah</a>
                                            <a href="javascript:;" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>4</td>
                                        <td>Alif</td>
                                        <td>Lapangan Basket - B</td>
                                        <td>2 Jam</td>
                                        <td>Rp 300.000,00</td>
                                        <td><span class="badge badge-warning">Menunggu</span></td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary">Ubah</a>
                                            <a href="javascript:;" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>5</td>
                                        <td>Jamal</td>
                                        <td>Lapangan Badminton - A</td>
                                        <td>2 Jam</td>
                                        <td>Rp 175.000,00</td>
                                        <td><span class="badge badge-success">Berhasil</span></td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary">Ubah</a>
                                            <a href="javascript:;" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal Add Element -->
                        <div class="modal fade" id="add-field">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!-- modal header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Pemesanan</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- modal body -->
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama Pemesan</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" disabled selected>Pilih Nama Pemesan</option>
                                                <option value="alif">Alif</option>
                                                <option value="reyhan">Reyhan</option>
                                            </select>
                                            <div class="text-danger" id="error_location_name"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lapangan</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" disabled selected>Pilih Nama Lapangan</option>
                                                <option value="lapangan a">Lapangan A</option>
                                                <option value="lapangan b">Lapangan B</option>
                                            </select>
                                            <div class="text-danger" id="error_location_address"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lama Booking</label>
                                            <input type="text" class="form-control" name="location_name" placeholder="Lama Booking...">
                                            <div class="text-danger" id="error_location_address"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Booking</label>
                                            <input type="text" class="form-control" name="location_name" placeholder="Harga Booking..." readonly>
                                            <div class="text-danger" id="error_location_address"></div>
                                        </div>
                                    </div>
                                    <!-- modal footer -->
                                    <div class="modal-footer justify-content-start">
                                        <button type="button" class="btn btn-success" id="add">Tambah</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Add Element -->
                        <div class="modal fade" id="edit-field">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!-- modal header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Ubah Pemesanan</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- modal body -->
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama Pemesan</label>
                                            <select name="" id="" class="form-control" value>
                                                <option value="" disabled>Pilih Nama Pemesan</option>
                                                <option value="alif" selected>Alif</option>
                                                <option value="reyhan">Reyhan</option>
                                            </select>
                                            <div class="text-danger" id="error_location_name"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lapangan</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" disabled>Pilih Nama Lapangan</option>
                                                <option value="lapangan a" selected>Lapangan A</option>
                                                <option value="lapangan b">Lapangan B</option>
                                            </select>
                                            <div class="text-danger" id="error_location_address"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lama Booking</label>
                                            <input type="text" class="form-control" name="location_name" placeholder="Lama Booking..." value="2">
                                            <div class="text-danger" id="error_location_address"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Booking</label>
                                            <input type="text" class="form-control" name="location_name" placeholder="Harga Booking..." value="200.000" readonly>
                                            <div class="text-danger" id="error_location_address"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Pembayaran</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">Berhasil</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">Gagal</label>
                                            </div>
                                            <div class="text-danger" id="error_location_address"></div>
                                        </div>
                                    </div>
                                    <!-- modal footer -->
                                    <div class="modal-footer justify-content-start">
                                        <button type="button" class="btn btn-success" id="add">Tambah</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer-asset')
    <script src="{{ mix('js/admin/booking.js') }}"></script>
@endsection