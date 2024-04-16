<!-- resources/views/livewire/portfolio-categories.blade.php -->

<div class="p-6">
    <!-- Form to add new category -->
    <div class="mb-4">
        <input wire:model="name" type="text" class="border rounded py-2 px-3" placeholder="Category Name">
        <input wire:model="icon_class" type="text" class="border rounded py-2 px-3 ml-2" placeholder="Icon Class">
        <button wire:click="create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            <i class="fas fa-plus"></i> Add Category
        </button>
    </div>

    <!-- Table to display existing categories -->
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 text-start">Name</th>
                <th class="px-4 py-2 text-center">Icon</th>
                <th class="px-4 py-2 text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td class="border px-4 py-2">{{ $category->name }}</td>
                <td class="border px-4 py-2 text-center">{{ $category->icon_class }}</td>
                <td class="border px-4 py-2 text-end">
                    <!-- Edit Button -->
                    <button wire:click="edit({{ $category->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <!-- Delete Button -->
                    <button wire:click="delete({{ $category->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
