<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resepObat extends Model
{
    use HasFactory;
    protected $table = "resep_obat";
    protected $fillable = [
        'obat_id', 'dokter_id', 'status',
        'keterangan', 'jumlah_obat', 'pasien_id'
    ];

    // relasi ke dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    // relasi ke obat
    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }

    // relasi ke pasien
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
