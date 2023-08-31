<div class="max-w-xl mx-auto p-4 bg-white rounded-lg shadow-md" style="margin-top: 2rem;">
    <h1 class="text-2xl font-semibold mb-4">Create New Post</h1>
    <form wire:submit.prevent="createPost">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
            <input wire:model="title" type="text" id="title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" />
            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea wire:model="description" id="description" rows="4" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500"></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="img_url" class="block text-gray-700 font-bold mb-2">Image URL</label>
            <input wire:model="img_url" type="text" id="img_url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500" />
            @error('img_url') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-black px-4 py-2 rounded-lg focus:outline-none focus:ring">Create Post</button>
    </form>
    @if ($successMessage)
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded-md mb-4">
            {{ $successMessage }}
        </div>
    @endif
</div>


