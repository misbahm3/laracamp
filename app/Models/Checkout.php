<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'camp_id',
        'card_number',
        'expired',
        'cvc',
        'is_paid',
    ];

    public function camp()
    {
        return $this->belongsTo(Camp::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
