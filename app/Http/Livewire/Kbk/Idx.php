<?php

namespace App\Http\Livewire\Kbk;

use App\Models\ArSys\Student;
use App\Models\ArSys\StudySpecialization;
use App\Models\ArSys\ArsysResearch;
use App\Models\ArSys\StudyProgram;
use App\Models\ArSys\Post;
use Livewire\Component;


class Idx extends Component
{
    public $users;
    public $selectedName;
    public $specializations;
    public $researches;
    public $studyPrograms;

    public function mount()
    {
        $this->users = Student::with('arsysResearch')->get();
        $this->specializations = StudySpecialization::all();
        $this->researches = ArsysResearch::all();
        $this->studyPrograms = StudyProgram::all();
    }


    public function StudyProgram()
    {

    }
    public function render()
    {
    
        $userNames = Student::pluck('first_name', 'last_name');
        $filteredUsers = $this->selectedName
            ? Student::where('first_name', 'last_name', $this->selectedName)->with('arsysResearch')->get()
            : $this->users;
    

        return view('livewire.kbk.idx', [
            'users' => $filteredUsers,
            'userNames' => $userNames,
        ])->layout('adminlte::page');

        
    }

    public function search()
    {
        $this->reset('users');
    }
}