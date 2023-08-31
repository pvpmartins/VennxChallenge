<div class="max-w-xl mx-auto p-4 bg-white rounded-lg shadow-md">
    <form wire:submit.prevent="updatePost">
        <label for="title" class="block font-semibold mb-2">Title</label>
        <input wire:model="title" type="text" class="w-full rounded-lg border p-2 mb-4">

        <label for="description" class="block font-semibold mb-2">Description</label>
        <textarea wire:model="description" class="w-full rounded-lg border p-2 mb-4"></textarea>

        <label for="img_url" class="block font-semibold mb-2">Image URL</label>
        <input wire:model="img_url" type="text" class="w-full rounded-lg border p-2 mb-4">

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg mt-4">Update</button>
    </form>
</div>
