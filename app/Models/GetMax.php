<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetMax extends Model
{
    use HasFactory;

    protected $table = 'get_maxes';

    protected $fillable = [
        'name',
        'max',
        'job',
    ];

}
