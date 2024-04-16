<?php

namespace App\Livewire\User;

use App\Models\Portfolio;
use Livewire\Component;

class SinglePortfolioComponent extends Component
{
    public $portfolio;

    public function mount($id)
    {
        $this->portfolio = Portfolio::with('category')->findOrFail($id);
    }
    public function render()
    {
        return view('livewire.user.single-portfolio-component')->layout('components.layouts.guest');
    }
}
