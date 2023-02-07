<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionObat extends Model
{
    use HasFactory;
    protected $table = 'transaction_obats';
    protected $fillable = [
        'users_id', 'obat_id', 'transactions_id'
    ];

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
