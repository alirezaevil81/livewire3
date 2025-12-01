<?php

namespace App\Livewire\Post;

use Illuminate\View\View;
use Livewire\Component;

class Create extends Component
{
    public $title;


    public function mount(): void
    {
        $this->title = "new title";
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.post.create');
    }
}
