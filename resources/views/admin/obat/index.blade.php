@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Table Obat</h5>
            {{-- @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif --}}
            <div class="table-responsive text-nowrap">
                <div class="card-tools">
                    <a href="{{ route('obat.create') }}" class="btn btn-tool">
                        <i class="fas fa-plus"></i> Add
                    </a>
                    <a href="{{ route('download-excel') }}" class="btn btn-tool">
                        <i class="fas fa-file-excel"></i>
                    </a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA OBAT</th>
                            <th>STOK</th>
                            <th>HARGA</th>
                            <th>FOTO</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($obat as $obats)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $obats->nama_obat }}</td>
                                <td>{{ $obats->stok }}</td>
                                <td>{{ $obats->harga }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $obats->foto) }}" alt="foto-obat" width="50px">
                                </td>
                                <td style="width: 100px">
                                    <form action="{{ route('obat.destroy', ['obat' => $obats->id]) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <div class="btn-group">
                                            <a href="{{ route('obat.edit', ['obat' => $obats->id]) }}"
                                                class="btn btn-warning">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda yakin mau menghapus?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
