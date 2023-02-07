@extends('admin.layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi Obat</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $transaksi }}</div>
                            </div>
                            <div class="col-auto">
                                <li class="fas fa-calendar fa-2x text-gray-300">
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pasien</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pasien }}</div>
                            </div>
                            <div class="col-auto">
                                <li class="fas fa-calendar fa-2x text-gray-300">
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Check-in Online</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $checkIn }}</div>
                            </div>
                            <div class="col-auto">
                                <li class="fas fa-calendar fa-2x text-gray-300">
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kamar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kamar }}</div>
                            </div>
                            <div class="col-auto">
                                <li class="fas fa-calendar fa-2x text-gray-300">
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Congratulations {{ Auth::user()->name }} 🎉</h5>
                                <p class="mb-4">
                                    You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                                    your profile.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('dashboard/img/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Stok Obat -->
            <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header m-0 me-2 pb-3">Stok Obat</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="barChart" style="max-height: 400px;"></canvas>
                    </div>
                </div>
            </div>
            <!--/ Stok Obat -->

            <!-- Jumlah Dokter -->
            <div class="col-12 col-lg-6 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header m-0 me-2 pb-3">Jumlah Dokter</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="pieChart" style="max-height: 250px;"></canvas>
                    </div>
                </div>
            </div>
            <!--/ Jumlah dokter -->
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var lbl = [
            @foreach ($obats as $obat)
                '{{ $obat->nama_obat }}',
            @endforeach
        ];
        var stok = [
            @foreach ($obats as $obat)
                {{ $obat->stok }},
            @endforeach
        ];
        document.addEventListener("DOMContentLoaded", () => {
            new Chart(document.querySelector('#barChart'), {
                type: 'bar',
                data: {
                    labels: lbl,
                    datasets: [{
                        label: 'Jumlah Stok Obat Di Apotik',
                        data: stok,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });

        var lbl2 = [
            @foreach ($dokters as $dokter)
                '{{ $dokter->keahlian }}',
            @endforeach
        ];
        var jml = [
            @foreach ($dokters as $dokter)
                {{ $dokter->jumlah }},
            @endforeach
        ];

        document.addEventListener("DOMContentLoaded", () => {
            new Chart(document.querySelector('#pieChart'), {
                type: 'doughnut',
                data: {
                    labels: lbl2,
                    datasets: [{
                        label: 'Jumlah Dokter Spesialis',
                        data: jml,
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)'
                        ],
                        hoverOffset: 4
                    }]
                },
            });
        });
    </script>
@endpush
