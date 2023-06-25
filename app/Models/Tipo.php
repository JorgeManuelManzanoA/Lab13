<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'tipos';

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
