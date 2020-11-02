<?php

namespace App\Http\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class DeleteTodoModal extends Component
{
    public $show;
    public $todo;
    protected $listeners = ['showDeleteTodoModal'];

    public function showDeleteTodoModal($id)
    {
        $this->todo  = Todo::find($id);
        $this->show = true;     
    }

    public function hideDeleteTodoModal()
    {
        $this->show = false;
    }

    public function deleteTodo()
    {   
        $this->todo->delete();
        $this->emit('deletedTodo', $this->todo->id);
        $this->hideDeleteTodoModal();
    }

}
