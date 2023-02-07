@extends('admin.layout')
@push('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"></script>
@endpush
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Manajemen Check-in Online</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table" id="checkIn">
                        <thead>
                            <tr>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>GENDER</th>
                                <th>NO TELP</th>
                                <th>TGL LHR</th>
                                <th>TGL CHECK-IN</th>
                                <th>JAM CHECK-IN</th>
                                <th>RS</th>
                                <th>KODE</th>
                                <th>STATUS</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->fullName }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->gender }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->tgl_lahir }}</td>
                                    <td>{{ $data->tgl_checkIn }}</td>
                                    <td>{{ $data->jam_checkIn }}</td>
                                    <td>{{ $data->rs->nama }}</td>
                                    <td>{{ $data->kode }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>
                                        <a href="{{ route('checkIn.edit', $data->id) }}" class="btn btn-warning btn-sm">
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
@push('script')
    <script>
        $(document).ready(function() {
            $('#checkIn').DataTable();
        });
    </script>
@endpush
