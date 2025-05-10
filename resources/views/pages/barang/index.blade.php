@extends('layouts.app')

@section('main-content')
    
<!-- Begin Page Content -->

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Kelola Barang</h1>
        <div>
            <a href="#" data-toggle="modal" data-target="#inputModal" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Barang</a>
        </div>
        
    </div>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Aksi</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Updated_at</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Aksi</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Updated_at</th>
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
                            
                            <td>Kain Katun Hitam</td>
                            </td>
                            <td>Kain</td>
                            <td>2</td>
                            <td>10,000</td>
                            <td>12/12/2015</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
