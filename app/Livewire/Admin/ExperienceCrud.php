<?php

namespace App\Livewire\Admin;

use App\Models\Experience;
use Livewire\Component;
use Livewire\WithFileUploads;

class ExperienceCrud extends Component
{
    use WithFileUploads;

    public $experiences, $name, $image, $experience_id;
    public $updateMode = false;

    public function render()
    {
        $this->experiences = Experience::all();
        return view('livewire.admin.experience-crud');
    }

    public function create()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'required|image|max:1024', // Assuming max size is 1MB
        ]);

        $imagePath = $this->image->store('experiences', 'public');

        Experience::create([
            'name' => $this->name,
            'image' => $imagePath,
        ]);

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        $this->experience_id = $id;
        $this->name = $experience->name;
        // No need to prefill image field in edit mode
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $experience = Experience::find($this->experience_id);

        // Update image only if a new image is uploaded
        if ($this->image) {
            $imagePath = $this->image->store('experiences', 'public');
            $experience->image = $imagePath;
        }

        $experience->name = $this->name;
        $experience->save();

        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Experience::find($id)->delete();
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->image = '';
    }
}
