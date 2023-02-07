<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = "pasien";
    protected $fillable = [
        'nama', 'alamat', 'gender', 'tgl_lahir'
    ];

    public $timestamps = false;

    public function resep_obat()
    {
        return $this->hasMany(resepObat::class);
    }
}
