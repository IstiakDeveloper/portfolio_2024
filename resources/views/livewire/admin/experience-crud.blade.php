<div class="p-6">
    <!-- Form to add new experience -->
    <div class="mb-4">
        <input wire:model="name" type="text" class="border rounded py-2 px-3" placeholder="Experience Name">
        <input wire:model="image" type="file" class="mt-2">
        @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
        <button wire:click="create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-2 rounded">
            Add Experience
        </button>
    </div>

    <!-- Table to display existing experiences -->
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Image</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($experiences as $experience)
            <tr>
                <td class="border px-4 py-2">{{ $experience->name }}</td>
                <td class="border px-4 py-2">
                    <img src="{{ asset('storage/' . $experience->image) }}" alt="{{ $experience->name }}" class="w-32 h-32">
                </td>
                <td class="border px-4 py-2">
                    <!-- Edit Button -->
                    <button wire:click="edit({{ $experience->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">
                        Edit
                    </button>
                    <!-- Delete Button -->
                    <button wire:click="delete({{ $experience->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
