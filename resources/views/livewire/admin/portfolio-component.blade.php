<div class="p-6">
    <!-- Form to add new portfolio -->
    <div class="mb-4">
        <input wire:model="title" type="text" class="border rounded py-2 px-3" placeholder="Title">
        @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <textarea wire:model="description" class="border rounded py-2 px-3" placeholder="Description"></textarea>
        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <input wire:model="thumbnail" type="file" class="border rounded py-2 px-3">
        @error('thumbnail') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <input wire:model="images" type="file" multiple class="border rounded py-2 px-3">
        @error('images.*') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <input wire:model="link" type="text" class="border rounded py-2 px-3" placeholder="Portfolio Link">
        @error('link') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <select wire:model="category_id" class="border rounded py-2 px-3">
            <option value="">Select Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <button wire:click="create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-2 rounded">
            Add Portfolio
        </button>
    </div>


    <!-- Table to display existing portfolios -->
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Category</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($portfolios as $portfolio)
            <tr>
                <td class="border px-4 py-2">{{ $portfolio->title }}</td>
                <td class="border px-4 py-2">{{ Str::limit($portfolio->description, 50, '...') }}</td>
                <td class="border px-4 py-2">{{ $portfolio->category->name }}</td>
                <td class="border px-4 py-2">
                    <!-- Edit Button -->
                    <button wire:click="edit({{ $portfolio->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">
                        Edit
                    </button>
                    <!-- Delete Button -->
                    <button wire:click="delete({{ $portfolio->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
