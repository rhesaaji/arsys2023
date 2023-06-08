<?php

namespace App\Models\Atj;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'full_text'];
    protected $table = 'arsys_news1';
}
