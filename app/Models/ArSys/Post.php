<?php

namespace App\Models\ArSys;

use App\Models\ArSys\ResearchReview;
use App\Models\ArSys\Student;
use App\Models\KBK\Milestone;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'arsys_research';
    protected $guarded = ['id'];
    public function student() {
        return $this->belongsTo(Student::class, 'student_id', 'id' );
    }
    public function milestones() {
        return $this->belongsTo(Milestone::class, 'research_milestone', 'id' );
    }
    public function researchtype() {
        return $this->belongsTo(ResearchType::class, 'research_type', 'id' );
    }
    public function researchreview() {
        return $this->belongsTo(ResearchReview::class, 'review_id', 'id' );
    }
}
