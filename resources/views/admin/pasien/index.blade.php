@extends('admin.layout')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Manajemen Pasien</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <div class="card-tools">
                        <a href="{{ route('admin-pasien.create') }}" class="btn btn-tool">
                            <i class="fas fa-plus"></i> Add
                        </a>
                    </div>
                    <table class="table" id="data_user">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>GENDER</th>
                                <th>TANGGAL LAHIR</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#data_user').DataTable({
                scrollX: true,
                scrollCollapse: true,
                paging: true,
                fixedColumns: {
                    heightMatch: 'none'
                },
                columnDefs: [{
                    width: 20,
                    targets: 0
                }],
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin-pasien.index') }}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat',
                        width: '10%'
                    },
                    {
                        data: 'gender',
                        name: 'gender'
                    },
                    {
                        data: 'tgl_lahir',
                        name: 'tgl_lahir'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '10%'
                    }

                ]
            });
        });
    </script>
@endpush
