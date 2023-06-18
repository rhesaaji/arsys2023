<?php

namespace App\Models\ArSys;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudyProgram extends Model
{
    protected $fillable = [];
    protected $table = 'arsys_study_program';


    public function department(){
        return $this->belongsTo(Department::class, 'department_id','id' );
    }
    public function specializations()
    {
        return $this->belongsToMany(ArsysStudySpecialization::class, 'arsys_study_specialization_pivot', 'program_id', 'specialization_id');
    }
   
}
