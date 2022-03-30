<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRent extends Model
{
    protected $fillable = [
        'u_id',
        'b_id',
        'issued_on',
        'returned_on'
    ];
}
