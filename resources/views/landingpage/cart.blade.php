@extends('landingpage.index')
@section('content')
    <div class="container">
        <h2>DETAIL PEMESANAN</h2>
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nama Obat</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datas as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $item->obat->foto) }}" alt="" width="50px">
                                </td>
                                <td>{{ $item->obat->nama_obat }}</td>
                                <td>Rp. {{ number_format($item->obat->harga) }}</td>
                                <td>
                                    <form action="{{ route('cart-delete', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-blue">X</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    Oppss, Cart Is Empty... <a href="{{ url('/obat') }}" class="text-primary">Pesan
                                        Obat</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <form action="{{ route('chekout') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="namaLengkap" type="text" placeholder="Nama Lengkap"
                            data-sb-validations="required" name="name" />
                        <label for="namaLengkap">Nama Lengkap</label>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="alamat" type="text" placeholder="Alamat" style="height: 10rem;"
                            data-sb-validations="required" name="address"></textarea>
                        <label for="alamat">Alamat</label>
                        @error('address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="Email"
                            data-sb-validations="email" name="email" />
                        <label for="email">Email</label>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nomorHandphone" type="text" placeholder="Nomor Handphone"
                            data-sb-validations="required" name="phone" />
                        <label for="nomorHandphone">Nomor Handphone</label>
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Pesan
                            Sekarang</button>
                    </div>
                </form>
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            </div>
        </div>
    </div>
@endsection
