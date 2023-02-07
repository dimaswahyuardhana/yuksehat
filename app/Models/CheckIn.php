<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    use HasFactory;
    protected $table = 'check_in';
    protected $fillable = [
        'user_id', 'kamar_id', 'dokter_id', 'rs_id', 'fullName', 'alamat',
        'phone', 'tgl_lahir', 'tgl_checkIn', 'jam_checkIn', 'status', 'gender', 'kode'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function rs()
    {
        return $this->belongsTo(RumahSakit::class);
    }
}
