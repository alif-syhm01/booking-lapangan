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
            <a href="{{ url('admin/management-field') }}" class="nav-link active">
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
    <li class="breadcrumb-item active">Manajemen Lapangan</li>
@endsection

@section('content-body')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Lapangan</h3>
                        </div>
                        <div class="card-body">
                            <!-- make a button to create, and delete the data -->
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-field">Tambah Lapangan</button>
                                <button type="button" class="btn btn-danger" id="delete-all-fields">Hapus Semua Lapangan</button>
                            </div>
                            <table id="data-field" class="table table-striped table-bordered dt-responsive" style="width: 100%">
                                <thead>
                                    <tr class="text-center">
                                        <th></th>
                                        <th>No</th>
                                        <th>Nama Lapangan</th>
                                        <th>Jenis Lapangan</th>
                                        <th>Harga Lapangan</th>
                                        <th>Gambar Lapangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td><input type="checkbox"></td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Lapangan Futsal</td>
                                        <td>Rp 100.000,00/jam</td>
                                        <td>
                                            <img src="{{ asset('images/footbal-field.jpg') }}" alt="" width="250" height="100">
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary" id="edit">Ubah</a>
                                            <a href="javascript:;" class="btn btn-danger" id="delete">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox"></td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>Lapangan Futsal</td>
                                        <td>Rp 100.000,00/jam</td>
                                        <td>
                                            <img src="{{ asset('images/footbal-field.jpg') }}" alt="" width="250" height="100">
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary">Ubah</a>
                                            <a href="javascript:;" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox"></td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>Lapangan Futsal</td>
                                        <td>Rp 100.000,00/jam</td>
                                        <td>
                                            <img src="{{ asset('images/footbal-field.jpg') }}" alt="" width="250" height="100">
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary">Ubah</a>
                                            <a href="javascript:;" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox"></td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>Lapangan Futsal</td>
                                        <td>Rp 100.000,00/jam</td>
                                        <td>
                                            <img src="{{ asset('images/footbal-field.jpg') }}" alt="" width="250" height="100">
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary">Ubah</a>
                                            <a href="javascript:;" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td><input type="checkbox"></td>
                                        <td>5</td>
                                        <td>A</td>
                                        <td>Lapangan Futsal</td>
                                        <td>Rp 100.000,00/jam</td>
                                        <td>
                                            <img src="{{ asset('images/footbal-field.jpg') }}" alt="" width="250" height="100">
                                        </td>
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
                                        <h4 class="modal-title">Tambah Lapangan</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- modal body -->
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama Lapangan</label>
                                            <input type="text" class="form-control" name="location_name" placeholder="Nama Lapangan...">
                                            <div class="text-danger" id="error_location_name"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Lapangan</label>
                                            <input type="text" class="form-control" name="location_name" placeholder="Jenis Lapangan...">
                                            <div class="text-danger" id="error_location_address"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Lapangan</label>
                                            <input type="text" class="form-control" name="location_name" placeholder="Harga Lapangan...">
                                            <div class="text-danger" id="error_location_address"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar Lapangan</label>
                                            <input type="file" class="form-control" name="location_name" placeholder="Harga Lapangan...">
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
                                        <h4 class="modal-title">Ubah Lapangan</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- modal body -->
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama Lapangan</label>
                                            <input type="text" class="form-control" name="location_name" placeholder="Nama Lapangan..." value="A">
                                            <div class="text-danger" id="error_location_name"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Lapangan</label>
                                            <input type="text" class="form-control" name="location_name" placeholder="Jenis Lapangan..." value="Lapangan Futsal">
                                            <div class="text-danger" id="error_location_address"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Lapangan</label>
                                            <input type="text" class="form-control" name="location_name" placeholder="Harga Lapangan..." value="100.000">
                                            <div class="text-danger" id="error_location_address"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar Lapangan</label>
                                            <input type="file" class="form-control" name="location_name" placeholder="Harga Lapangan..." value="footbal-field.jpg">
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
    <script src="{{ mix('js/admin/field.js') }}"></script>
@endsection