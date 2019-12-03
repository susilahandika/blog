<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public $table = 'produk';

    protected $fillable = ['nama', 'stok', 'id_kategori'];
}
