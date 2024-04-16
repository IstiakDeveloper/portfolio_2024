<?php

namespace App\Livewire\Admin;

use App\Models\PortfolioCategory;
use Livewire\Component;

class PortfolioCategories extends Component
{
    public $categories, $name, $icon_class, $category_id;
    public $updateMode = false;

    public function render()
    {
        $this->categories = PortfolioCategory::all();
        return view('livewire.admin.portfolio-categories');
    }

    public function create()
    {
        $this->validate([
            'name' => 'required',
            'icon_class' => 'nullable', // Add validation for icon_class
        ]);

        PortfolioCategory::create([
            'name' => $this->name,
            'icon_class' => $this->icon_class, // Assign icon_class value
        ]);
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $category = PortfolioCategory::findOrFail($id);
        $this->category_id = $id;
        $this->name = $category->name;
        $this->icon_class = $category->icon_class; // Assign icon_class value
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'icon_class' => 'nullable', // Add validation for icon_class
        ]);

        $category = PortfolioCategory::find($this->category_id);
        $category->update([
            'name' => $this->name,
            'icon_class' => $this->icon_class, // Assign icon_class value
        ]);

        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
        PortfolioCategory::find($id)->delete();
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->icon_class = ''; // Reset icon_class value
    }

}
