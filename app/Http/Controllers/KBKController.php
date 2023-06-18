<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArSys\StudyProgram;


class KBKController extends Controller
{
    public function index()
    {
        $studyPrograms = StudyProgram::with('program')->get();
        
        return view('kbk.id.blade.php', compact('studyPrograms'));
    }
     //
}

