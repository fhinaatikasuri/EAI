<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_name',
        'sender_address',
        'recipient_name',
        'recipient_address',
        'weight',
        'status',
        'customer_id',
    ];
}
