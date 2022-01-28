<?php

namespace App\Http\Livewire;

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use LivewireUI\Modal\ModalComponent;

class StudentModal extends ModalComponent
{

    public $name;
    public $tel;
    public $gender;
    public $observation;
    public $responsible;
    public $grade;
    public User $user;
    public bool $show;

    protected $rules = [
        'name' => 'required',
        'tel' => 'nullable',
        'gender' => 'required',
        'responsible' => 'required',
        'grade' => 'required',
        'observation' => 'nullable'
    ];


    protected $listeners = ['openModal'];


    public function openModal(){
        $this->modal = true;
    }

    public function saveStudent(){
        $validated_data = $this->validate();

        Student::create(array_merge($validated_data, ['school_id' => $this->user->school_id]));
        $this->emit('reloadUsers');
        $this->emit('closeModal');
    }

    public function mount(){
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.student-modal');
    }
}
