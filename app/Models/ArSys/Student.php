<?php

namespace App\Models\ArSys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'program_id', 'specialization_id', 'supervisor_id', 'code',  'student_number', 'first_name', 'last_name', 'phone', 'email'];
    protected $table = 'arsys_student';

    public function studyProgram()
    {
        return $this->hasOne(StudyProgram::class, 'id', 'program_id',);
    }
    public function specialization() {
        return $this->belongsTo(StudySpecialization::class, 'specialization_id', 'id' );
    }

    public function supervisor() {
        return $this->belongsTo(Staff::class, 'supervisor_id', 'id' );
    }

    public function arsysResearch()
    {
        return $this->hasMany(ArsysResearch::class, 'student_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
