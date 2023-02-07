@extends('admin.layout')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Manajemen User</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <div class="card-tools">
                        <a href="{{ route('admin-user.create') }}" class="btn btn-tool">
                            <i class="fas fa-plus"></i> Add
                        </a>
                        <a href="{{ route('download-excel-user') }}" class="btn btn-tool">
                            <i class="fas fa-file-excel"></i>
                        </a>
                    </div>
                    <table class="table" id="data_user">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>ROLES</th>
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
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

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
                ajax: '{{ route('admin-user.index') }}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'roles',
                        name: 'roles',
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
