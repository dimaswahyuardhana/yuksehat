@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Manajemen Kamar</h5>
            <div class="table-responsive text-nowrap">
                <div class="card-tools">
                    <a href="{{ route('admin-kamar.create') }}" class="btn btn-tool">
                        <i class="fas fa-plus"></i> Add
                    </a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA KAMAR</th>
                            <th>FASILITAS</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($datas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_kamar }}</td>
                                <td>{!! $data->fasilitas !!}</td>
                                <td>
                                    <form action="{{ route('admin-kamar.destroy', $data->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <div class="btn-group">
                                            <a href="{{ route('admin-kamar.edit', $data->id) }}" class="btn btn-warning">
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
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Tidak Ada Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
