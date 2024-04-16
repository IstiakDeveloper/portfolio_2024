<!-- resources/views/livewire/testimonial-crud.blade.php -->

<div class="p-6">
    <!-- Form to add new testimonial -->
    <div class="mb-4">
        <input wire:model="client_name" type="text" class="border rounded py-2 px-3" placeholder="Client Name">
        <input wire:model="client_image" type="file" class="mt-2">
        @error('client_image') <span class="text-red-500">{{ $message }}</span> @enderror
        <input wire:model="date" type="date" class="border rounded py-2 px-3 mt-2">
        @error('date') <span class="text-red-500">{{ $message }}</span> @enderror
        <textarea wire:model="description" class="border rounded py-2 px-3 mt-2" placeholder="Description"></textarea>
        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
        <input wire:model="satisfaction" type="number" min="1" max="5" class="border rounded py-2 px-3 mt-2" placeholder="Satisfaction (1-5)">
        @error('satisfaction') <span class="text-red-500">{{ $message }}</span> @enderror
        <button wire:click="create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-2 rounded">
            Add Testimonial
        </button>
    </div>

    <!-- Table to display existing testimonials -->
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Client Name</th>
                <th class="px-4 py-2">Client Image</th>
                <th class="px-4 py-2">Date</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Satisfaction</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial)
            <tr>
                <td class="border px-4 py-2">{{ $testimonial->client_name }}</td>
                <td class="border px-4 py-2">
                    <img src="{{ asset('storage/' . $testimonial->client_image) }}" alt="{{ $testimonial->client_name }}" class="w-32 h-32">
                </td>
                <td class="border px-4 py-2">{{ $testimonial->date }}</td>
                <td class="border px-4 py-2">{{ $testimonial->description }}</td>
                <td class="border px-4 py-2">{{ $testimonial->satisfaction }}</td>
                <td class="border px-4 py-2">
                    <!-- Edit Button -->
                    <button wire:click="edit({{ $testimonial->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">
                        Edit
                    </button>
                    <!-- Delete Button -->
                    <button wire:click="delete({{ $testimonial->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
