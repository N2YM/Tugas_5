@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Produk
                        <a href="{{ url('admin/produk/create') }}" class="btn btn-dark float-right"> <i class="mdi mdi-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th style="text-align: center">Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                              @foreach($list_produk as $produk)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('admin/produk', $produk->id) }}" class="btn btn-dark"><i class="mdi mdi-information-variant"></i></a>
                                            <a href="{{ url('admin/produk', $produk->id) }}/edit" class="btn btn-warning"><i class="mdi mdi-tooltip-edit"></i></a>
                                            @include('template.utils.delete', ['url' =>  url('admin/produk', $produk->id)])
                                         </div>
                                    </td>
                                    <td>{{ $produk->nama }}</td>
                                    <td>Rp.{{ number_format ($produk->harga)}}</td>
                                    <td>{{ $produk->stok }}</td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection