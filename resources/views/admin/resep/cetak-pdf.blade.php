<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resep Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        @page {
            size: A4
        }

        h1 {
            font-weight: bold;
            font-size: 20pt;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th {
            padding: 8px 8px;
            border: 1px solid #000000;
            text-align: center;
        }

        .table td {
            padding: 3px 3px;
            border: 1px solid #000000;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 class="text-center">Laporan Transaksi Penebusan Obats</h1>
    <table class="table table-striped table-hover table-bordered" border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>Keterangan</th>
                <th>Obat</th>
                <th>Dokter</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resep as $data)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>{{ $data->obat->nama_obat }}</td>
                    <td>{{ $data->dokter->nama }}</td>
                    <td>{{ $data->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
