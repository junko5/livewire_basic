<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FruitName extends Model
{
    use HasFactory;
    //追加
    protected $fillable = [
        'name',
    ];
}
