<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    protected $fillable = [
        'name', 'balance','created_by',
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
