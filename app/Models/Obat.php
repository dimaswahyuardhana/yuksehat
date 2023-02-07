<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table = "obat";
    protected $fillable = [
        'nama_obat', 'stok', 'deskripsi', 'harga', 'foto'
    ];
    public $timestamps = false;

    public function resep_obat()
    {
        return $this->hasMany(resepObat::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function transactionObat()
    {
        return $this->hasOne(TransactionObat::class);
    }
}
