@extends('layouts.app')

@section('main-content')
    
<!-- Begin Page Content -->

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Kelola Pengguna</h1>
        <div>
            <a href="#" data-toggle="modal" data-target="#tambahPenggunaModal" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Pengguna</a>
        </div>
        
    </div>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        <tr>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fas fa-pen fa-sm text-white-50"></i>
                                    Edit
                                </a>
                                <a href="#" class="btn btn-danger btn-sm ms-2" onclick ="alertConfirm(this)" data-id ="$item->id.">
                                    <i class="fas fa-trash fa-sm text-white-50"></i>
                                    Hapus
                                </a>
                            </td>
                            
                            <td>Anjing</td>
                            <td>admin@gmail.com</td>
                            <td><span class="badge bg-secondary text-light fs-4 px-2 py-1">Pengguna</span></td>
                            <td><div class="badge bg-primary text-light fs-4 px-2 py-1">Aktif</div></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
