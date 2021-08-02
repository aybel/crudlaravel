<?php

namespace App\Models;

use App\Models\Catclave;
use App\Models\Catestorg;
use Illuminate\Database\Eloquent\Model;


class Requisicion extends Model
{


    protected $fillable = [
        'fecha_elaboracion',
        'catestorg_id',
        'catpar_id',
        'catclave_id',
        'user_id',
        'catstatu_id',
        'mes',
        'concepto',
        'revisa',
        'autoriza'
    ];

    public function catestorg()
    {
        return $this->belongsTo(Catestorg::class);
    }

    public function catstatu()
    {
        return $this->belongsTo(Catstatu::class);
    }
    public function catpar()
    {
        return $this->belongsTo(Catpar::class);
    }
    public function catclave()
    {
        return $this->belongsTo(Catclave::class);
    }
}
