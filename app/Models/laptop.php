<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laptop extends Model
{
    use HasFactory;

    protected $table = 'laptop';
    protected $fillable = [
        'name',
        'price',
        'status',
        'note'
    ];
}
