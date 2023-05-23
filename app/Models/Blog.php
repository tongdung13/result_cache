<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'tb_mechanic_info_master';
    // protected $fillable = [
    //     'name',
    //     'image',
    //     'user_id',
    //     'type',
    //     'video',
    // ];
}
