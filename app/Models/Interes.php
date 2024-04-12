<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interes extends Model
{
    use HasFactory;
    protected $table = 'intereses';

    protected $fillable = [
        'prestamo_id',
        'periodo_interes',
        'monto_interes'
    ];

    public function prestamo()
    {
        return $this->belongsTo(Prestamo::class);
    }
}
