@extends('admin.layout')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endpush
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">Daftar Rumah Sakit</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table" id="pasien">
                        <thead>
                            <tr>
                                <th>KODE RS</th>
                                <th>NAMA RS</th>
                                <th>WILAYAH</th>
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
            $('#pasien').DataTable({
                scrollX: true,
                scrollY: '50vh',
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
                ajax: '{{ route('rumah-sakit') }}',
                columns: [{
                        data: 'kode_rs',
                        name: 'kode_rs',
                        width: '10%'
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        width: '40%'
                    },
                    {
                        data: 'wilayah',
                        name: 'wilayah',
                        width: '20%'
                    }
                ]
            });
        });
    </script>
@endpush
