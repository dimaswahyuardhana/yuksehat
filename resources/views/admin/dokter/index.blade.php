@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Table Dokter</h5>
            {{-- @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif --}}
            <div class="table-responsive text-nowrap">
                <div class="card-tools">
                    <a href="{{ route('dokter.create') }}" class="btn btn-tool">
                        <i class="fas fa-plus"></i> Add
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA DOKTER</th>
                                <th>SPESIALIS</th>
                                <th>NOMOR TELEPHONE</th>
                                <th>FOTO</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($dokter as $dokters)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dokters->nama }}</td>
                                    <td>{{ $dokters->keahlian }}</td>
                                    <td>{{ $dokters->no_telp }}</td>
                                    <td>
                                        @if ($dokters->image != null)
                                            <img src="{{ asset('storage/' . $dokters->image) }}" width="50px"
                                                alt="Foto_Dokter-.{{ $dokters->id }}">
                                        @else
                                            <p>Tidak ada Foto</p>
                                        @endif
                                    </td>
                                    <td style="width: 100px">
                                        <form action="{{ route('dokter.destroy', ['dokter' => $dokters->id]) }}"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="btn-group">
                                                <a href="{{ route('dokter.show', ['dokter' => $dokters->id]) }}"
                                                    class="btn btn-info">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('dokter.edit', ['dokter' => $dokters->id]) }}"
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
                <div class="card-footer">
                    {{ $dokter->appends($_GET)->links('pagination::bootstrap-4') }} {{-- append$_Get buat ngambil param searchnya supaya pas pindah pagination gk berubah --}}
                </div>
            </div>
        </div>
    </div>
@endsection
