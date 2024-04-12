<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abono extends Model
{
    use HasFactory;
    protected $table = 'abonos';

    protected $fillable = [
        'prestamo_id',
        'monto_abono',
        'fecha_abono'
    ];

    public function prestamo()
    {
        return $this->belongsTo(Prestamo::class);
    }
}
