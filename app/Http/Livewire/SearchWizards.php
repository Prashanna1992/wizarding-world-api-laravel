<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchWizards extends Component
{
    public $categories;

    public function render()
    {
        return view('livewire.search-wizards');
    }
}
