<?php

namespace App\Livewire\User;

use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;

    public $selectedCategoryId;

    public function mount()
    {
        $this->selectedCategoryId = PortfolioCategory::first()->id; // Set default selected category id
    }

    public function render()
    {
        $testimonials = Testimonial::all();
        $experiences = Experience::all();
        $categories = PortfolioCategory::all();
        $portfolios = Portfolio::where('category_id', $this->selectedCategoryId)->paginate(10); // Paginate with 10 items per page
        return view('livewire.user.home-component', compact('portfolios', 'categories', 'experiences', 'testimonials'))->layout('components.layouts.guest');
    }

    public function selectCategory($categoryId)
    {
        $this->selectedCategoryId = $categoryId;
        $this->resetPage(); // Reset pagination when a category is selected
    }
}
