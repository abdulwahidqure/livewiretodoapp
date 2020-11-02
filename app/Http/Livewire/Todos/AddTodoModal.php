<?php

namespace App\Http\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class AddTodoModal extends Component
{
    
    public $author;
    public $task;
    public $show;
    public $submitButton;

    protected $rules = [
        'author' => 'required|min:2|max:32',
        'task' => 'required|min:6|max:500',
    ];

    protected $listeners = ['showAddTodoModal'];

    public function showAddTodoModal()
    {
        $this->show = true;
    }
    
    public function mount()
    {
        $this->show = false;
        $this->submitButton = false;
    }

    public function updated($name, $value)
    {
        
        if(!empty($this->author) && !empty($this->task) ){
            $this->submitButton = true;
        }else{
            $this->submitButton = false;
        }
        $this->resetValidation($name);
        
        
    }

    public function hideAddTodoModal()
    {
        $this->show = false;
        $this->submitButton = false;
        $this->reset(['author','task']);
        $this->resetValidation();
    }

    
    public function addTodo()
    {   
        $this->validate();
        $todo = Todo::create(['author' => $this->author, 'task' => $this->task]);
        $this->emit('addedTodo', $todo->id);
        $this->hideAddTodoModal();
    }

}
