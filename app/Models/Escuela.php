<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
   protected $table = 'eap';

   protected $fillable = ['nombre', 'codigo', 'facultad_id'];

   public $timestamps = false;

   public function facultad()
   {
      return $this->belongsTo(Facultad::class, 'facultad_id');
   }

   public function planes_de_estudio()
   {
      return $this->hasMany(PlanEstudio::class,'escuela_id');
   }

   public function student()
   {
      return $this->hasMany(Student::class,'escuela_id');
   }
}
