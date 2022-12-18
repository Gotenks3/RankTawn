<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

        /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'images';

    protected $fillable = [
        'product_id',
        'filename',
    ];
}
