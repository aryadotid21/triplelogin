<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'zip',
        'address',
        'laptop',
        'dayprice',
        'duration',
        'totprice',
        'pickupdate',
        'status'
    ];
}
