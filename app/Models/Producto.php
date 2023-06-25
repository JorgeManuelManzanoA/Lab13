<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'productos';

    public function showByTipo($tipo)
    {
        $productos = $this->where('tipo', $tipo)->get();
        return view('productos.showByTipo', compact('productos'));
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'tipo_id');
    }
}
