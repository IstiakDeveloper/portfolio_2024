<?php

namespace App\Livewire\Admin;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class PortfolioComponent extends Component
{
    use WithFileUploads;

    public $portfolios, $title, $description, $thumbnail, $images, $link, $category_id, $portfolio_id;

    public $updateMode = false;

    public function render()
    {
        $categories = PortfolioCategory::all();
        $this->portfolios = Portfolio::all();
        return view('livewire.admin.portfolio-component', compact('categories'));
    }

    public function create()
    {
        $this->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image|max:1024', // Assuming max size is 1MB
            'images.*' => 'image|max:1024', // Assuming max size is 1MB
            'link' => 'nullable|url',
        ]);

        $thumbnailPath = $this->thumbnail->store('thumbnails', 'public');
        $imagesPaths = [];
        foreach ($this->images as $image) {
            $imagesPaths[] = $image->store('portfolio_images', 'public');
        }

        Portfolio::create([
            'category_id' => $this->category_id,
            'title' => $this->title,
            'description' => $this->description,
            'thumbnail_image' => $thumbnailPath,
            'portfolio_images' => json_encode($imagesPaths),
            'portfolio_link' => $this->link,
        ]);

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $this->portfolio_id = $id;
        $this->category_id = $portfolio->category_id;
        $this->title = $portfolio->title;
        $this->description = $portfolio->description;
        $this->thumbnail = $portfolio->thumbnail;
        $this->images = json_decode($portfolio->images);
        $this->link = $portfolio->link;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'nullable|image|max:1024', // Assuming max size is 1MB
            'images.*' => 'image|max:1024', // Assuming max size is 1MB
            'portfolio_link' => 'nullable|url',
        ]);

        $portfolio = Portfolio::find($this->portfolio_id);

        $thumbnailPath = $this->thumbnail ? $this->thumbnail->store('thumbnails', 'public') : $portfolio->thumbnail;
        $imagesPaths = [];
        foreach ($this->images as $image) {
            $imagesPaths[] = $image->store('portfolio_images', 'public');
        }

        $portfolio->update([
            'category_id' => $this->category_id,
            'title' => $this->title,
            'description' => $this->description,
            'thumbnail' => $thumbnailPath,
            'images' => json_encode($imagesPaths),
            'link' => $this->link,
        ]);

        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Portfolio::find($id)->delete();
    }

    private function resetInputFields()
    {
        $this->category_id = '';
        $this->title = '';
        $this->description = '';
        $this->thumbnail = '';
        $this->images = [];
        $this->link = '';
    }
}
