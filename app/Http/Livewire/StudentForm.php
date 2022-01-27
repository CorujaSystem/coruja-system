<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentForm extends Component
{

    public int $studentCount;
    public $students;


    protected $listeners = ['reloadUsers'];


    public function reloadUsers(){
        $this->students =  Student::where('school_id', Auth::user()->school_id)->get()->toArray();
    }

    public function render()
    {
        return view('livewire.student-form');
    }

    public function mount(){
        $this->studentCount = Student::where('school_id', Auth::user()->school_id)->count();
        $this->students =  Student::where('school_id', Auth::user()->school_id)->get()->toArray();
    }
}
