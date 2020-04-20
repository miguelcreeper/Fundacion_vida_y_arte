<?php

namespace App\Models\Mode;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    //
    protected $table = "jornada";
    protected $fillable = ['descripcion', 'hora_inicio', 'hora_fin'];
    protected $guarder = ['id'];
    public $timestamps =false;

//cardinalidad (1) de curso
public function curso1()
{
    return $this->hasOne(Curso::class, 'jornada_id');
}

}
