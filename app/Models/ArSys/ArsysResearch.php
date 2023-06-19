<?php

namespace App\Models\ArSys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArsysResearch extends Model
{
    use HasFactory;
    protected $fillable = ['research_type', 'student_id', 'research_code', 'title', 'research_milestone',  'status', 'file', 'created_at', 'updated_at', 'research_id', 'username'];
    protected $table = 'arsys_research';
    
}
