<?php

namespace App\Http\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class EditTodoModal extends Component
{
    
    public $author;
    public $task;
    public $todo;
    public $show;
    public $submitButton;

    protected $rules = [
        'author' => 'required|min:6|max:32',
        'task' => 'required|min:6|max:500',
    ];

    protected $listeners = ['showEditTodoModal'];

    public function showEditTodoModal($id)
    {
        $todo  = Todo::find($id);
        $this->author = $todo->author;
        $this->task = $todo->task;
        $this->todo = $todo;
        $this->show = true;
        $this->setSubmitButtonEnablity();
    }
    
    public function mount()
    {
        $this->show = false;
        $this->submitButton = false;
    }

    public function updated($name, $value)
    {
        $this->setSubmitButtonEnablity();
        $this->resetValidation($name);
        
        
    }

    private function setSubmitButtonEnablity(){
        if(!empty($this->author) && !empty($this->task) ){
            $this->submitButton = true;
        }else{
            $this->submitButton = false;
        }
    }

    public function hideEditTodoModal()
    {
        $this->show = false;
        $this->submitButton = false;
        $this->reset(['author','task']);
        $this->resetValidation();
    }

    
    public function updateTodo()
    {   
        $this->validate();
        $this->todo->author = $this->author;
        $this->todo->task = $this->task;
        $this->todo->save();
        $this->emit('updatedTodo', $this->todo->id);
        $this->hideEditTodoModal();
    }

}
