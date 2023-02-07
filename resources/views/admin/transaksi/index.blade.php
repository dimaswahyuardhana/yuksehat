@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Manajemen Transaksi</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table" id="data_user">
                        <thead>
                            <tr>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>EMAIL</th>
                                <th>NO TELP</th>
                                <th>PAYMENT</th>
                                <th>TOTAL PRICE</th>
                                <th>STATUS</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->address }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->payment }}</td>
                                    <td>{{ $data->total_price }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>
                                        <a href="{{ route('admin-transaksi.edit', $data->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
