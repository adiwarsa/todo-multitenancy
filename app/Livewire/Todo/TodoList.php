<?php

namespace App\Livewire\Todo;

use Livewire\Component;

class TodoList extends Component
{
    public function render()
    {
        $todos = auth()->user()->todos()->with('category')->get();

        return view('livewire.todo.todo-list', compact('todos'));
    }
}
