<?php

namespace App\Http\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class Todos extends Component
{
    use WithPagination;
    
    public $search = '';
    

    protected $listeners = ['addedTodo' => '$refresh', 'updatedTodo' => '$refresh', 'deletedTodo' => '$refresh'];

    public function showAddTodoModal()
    {
        $this->emit('showAddTodoModal');
    }

    public function showEditTodoModal($id)
    {
        $this->emit('showEditTodoModal', $id);
    }

    public function showDeleteTodoModal($id)
    {
        $this->emit('showDeleteTodoModal', $id);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function paginationView()
    {
        return 'livewire.custom-pagination-links';
    }

    public function render()
    {
        return view('livewire.todos.todos',[
            'todos' => Todo::orderBy('id', 'desc')->where('author','like', '%'.$this->search.'%')->paginate(15),
        ]);
    }
    
}
