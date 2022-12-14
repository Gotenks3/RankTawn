<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'products';

    protected $fillable = [
        'name',
        'content',
        'image',
        'state',
        'price',
        'is_selling'
    ];
}
