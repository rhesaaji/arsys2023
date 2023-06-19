<?php

namespace App\Models\KBK;

use App\Models\ArSys\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $table = 'arsys_research_review_history';
    protected $guarded = ['id'];
    public function research() {
        return $this->belongsTo(Post::class, 'research_id', 'id' );
    }
}

