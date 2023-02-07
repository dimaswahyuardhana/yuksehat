<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'transactions';
    protected $fillable = [
        'user_id', 'name', 'email', 'address', 'phone', 'payment', 'payment_url', 'total_price', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactionObat()
    {
        return $this->hasOne(TransactionObat::class);
    }
}
