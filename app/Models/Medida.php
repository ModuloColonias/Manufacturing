<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    protected $table = 'medidas';
    protected $fillable = ['medi_descripcion'];
    protected $primaryKey = 'medi_codigo';
    public $incrementing = 'true';
    public $timestamps = false;
}
