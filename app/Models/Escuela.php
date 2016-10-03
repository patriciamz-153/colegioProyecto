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
      return $this->belongsTo(Facultad::class);
   }

   public function academic_plan()
   {
      return $this->hasMany(AcademicPlan::class,'id');
   }

   public function student()
   {
      return $this->hasMany(Student::class,'id');
   }
}
