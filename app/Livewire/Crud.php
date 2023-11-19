<?php

namespace App\Livewire;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Crud extends Component
{
    use WithPagination;

    public $firstname,$lastname,$course;
    public $student_id,$deleteId,$edit=false;
    public $search = '';

    protected $rules =[
        'firstname' => ['required','string'],
        'lastname' => ['required','string'],
        'course' => ['required','string']
    ];

    public function create()
    {
       $validated =  $this->validate();

       Student::create($validated);

       session()->flash('message','Submit Successful');

       $this->reset();
    }
    public function render()
    {
        $students = Student::latest()->where('firstname','like',"%{$this->search}%")->paginate(2);
        return view('livewire.crud', compact('students'));
    }

    public function studentEdit($id)
    {
        $this->student_id = $id;
        $this->edit = true;

        $stude = Student:: where('id',$id)->first();
        $this->firstname = $stude->firstname;
        $this->lastname = $stude->lastname;
        $this->course = $stude->course;
    }

    public function updateStudent()
    {
       $validated =  $this->validate();

       $student = Student::where('id',$this->student_id)->first();

       $student->update($validated);

       session()->flash('message','Student submit Successful');

       $this->reset();
    }

    public function studentDelete($id)
    {
        

        $student = Student::find($id)->delete();

        

        session()->flash('message','Student delete Successful');

       
    }
}
