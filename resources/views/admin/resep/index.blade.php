@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Resep Dokter</h5>
            {{-- @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif --}}
            <div class="table-responsive text-nowrap">
                <div class="card-tools">
                    <a href="{{ route('admin-resep.create') }}" class="btn btn-tool">
                        <i class="fas fa-plus"></i> Add
                    </a>
                    <a href="{{ route('resep-pdf') }}" class="btn btn-tool">
                        <i class="fa-solid fa-file-pdf"></i>
                    </a>
                    <a href="{{ route('resep-pdf') }}" target="_blank" class="btn btn-tool">
                        <i class="fa-solid fa-file-excel"></i>
                    </a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Keterangan</th>
                            <th>Obat</th>
                            <th>Nama Dokter</th>
                            <th>Jumlah Obat</th>
                            <th>Nama Pasien</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($resep as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->keterangan }}</td>
                                <td>{{ $data->obat->nama_obat }}</td>
                                <td>{{ $data->dokter->nama }}</td>
                                <td>{{ $data->jumlah_obat }}</td>
                                <td>{{ $data->pasien->nama }}</td>
                                <td>{{ $data->status }}</td>
                                <td style="width: 100px">
                                    <form action="{{ route('admin-resep.destroy', $data->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <div class="btn-group">
                                            <a href="{{ route('admin-resep.edit', $data->id) }}" class="btn btn-warning">
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
                                <td colspan="5" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
