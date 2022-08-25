<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';
    protected $fillable = [
        'marca_id',
        'modelo_id',
        'anio_id',
        'nombre',
        'precio',
    ];

    public function marca() {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }

    public function modelo() {
        return $this->hasOne('App\Models\Modelo', 'id', 'modelo_id');
    }

    public function anio() {
        return $this->hasOne('App\Models\Anio', 'id', 'anio_id');
    }
}
