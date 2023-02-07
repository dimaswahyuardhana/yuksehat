<?php

namespace Database\Seeders;

use App\Models\RumahSakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class RsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get('https://data.covid19.go.id/public/api/rs.json');
        $datas = $response->json();

        foreach ($datas as $data) {
            $data_rs[] = [
                'nama' => $data['nama'],
                'kode_rs' => $data['kode_rs'],
                'wilayah' => $data['wilayah']
            ];
        }

        RumahSakit::insert($data_rs);
    }
}
