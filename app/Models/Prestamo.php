<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    protected $table = 'prestamos';

    protected $fillable = [
        'cliente_id',
        'monto_prestamo',
        'fecha_solicitud',
        'tasa_interes',
        'saldo_actual',
        'estado'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function abonos()
    {
        return $this->hasMany(Abono::class);
    }

    public function intereses()
    {
        return $this->hasMany(Interes::class);
    }
}
