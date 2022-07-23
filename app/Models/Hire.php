<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'photographer_id',
        'price_id'
    ];
}
