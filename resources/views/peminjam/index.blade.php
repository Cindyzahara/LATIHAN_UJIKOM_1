@extends('_template_back.layout')

<title> Peminjaman </title>

@section('content')

	<!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, welcome back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a   href="javascript:void(0);">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Basic Tables</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->

    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-2 mt-2">Data Peminjaman</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                        <div class="d-flex my-auto btn-list justify-content-end">
                            <a href="{{ route('peminjam.input') }}" class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a>
                        </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive mb-0">
                        <table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Buku</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Status Peminjam</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peminjam as $item)      
                                <tr>
                                    <td style="text-align:center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->nama_lengkap }}</td>
                                    <td>{{ $item->buku->judul }}</td>
                                    <td>{{ $item->tanggal_peminjaman }}</td>
                                    <td>{{ $item->tanggal_pengembalian }}</td>
                                    <td>{{ $item->status_peminjam }}</td>
                                    <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                        @csrf
                                        
                                        <a href="" title="Edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash" title="Edit"></i></button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
    <!-- /row -->
    
@endsection