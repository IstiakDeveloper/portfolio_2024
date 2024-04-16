<?php

namespace App\Livewire\Admin;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class TestimonialCrud extends Component
{
    use WithFileUploads;

    public $testimonials, $client_name, $client_image, $date, $description, $satisfaction;
    public $updateMode = false;

    public function render()
    {
        $this->testimonials = Testimonial::all();
        return view('livewire.admin.testimonial-crud');
    }

    public function create()
    {
        $this->validate([
            'client_name' => 'required',
            'client_image' => 'required|image|max:1024', // Assuming max size is 1MB
            'date' => 'required|date',
            'description' => 'required',
            'satisfaction' => 'required|integer|min:1|max:5', // Assuming satisfaction is a rating from 1 to 5
        ]);

        $imagePath = $this->client_image->store('testimonials', 'public');
        $formattedDate = date('Y-m-d', strtotime($this->date));

        Testimonial::create([
            'client_name' => $this->client_name,
            'client_image' => $imagePath,
            'date' => $formattedDate,
            'description' => $this->description,
            'satisfaction' => $this->satisfaction,
        ]);

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $this->client_name = $testimonial->client_name;
        // No need to prefill image field in edit mode
        $this->date = $testimonial->date;
        $this->description = $testimonial->description;
        $this->satisfaction = $testimonial->satisfaction;
        $this->updateMode = true;
    }

    public function update($id)
    {
        $this->validate([
            'client_name' => 'required',
            'date' => 'required|date',
            'description' => 'required',
            'satisfaction' => 'required|integer|min:1|max:5', // Assuming satisfaction is a rating from 1 to 5
        ]);

        $testimonial = Testimonial::findOrFail($id);

        // Update image only if a new image is uploaded
        if ($this->client_image) {
            $imagePath = $this->client_image->store('testimonials', 'public');
            $testimonial->client_image = $imagePath;
        }

        $testimonial->client_name = $this->client_name;
        $testimonial->date = $this->date;
        $testimonial->description = $this->description;
        $testimonial->satisfaction = $this->satisfaction;
        $testimonial->save();

        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Testimonial::find($id)->delete();
    }

    private function resetInputFields()
    {
        $this->client_name = '';
        $this->client_image = '';
        $this->date = '';
        $this->description = '';
        $this->satisfaction = '';
    }
}
