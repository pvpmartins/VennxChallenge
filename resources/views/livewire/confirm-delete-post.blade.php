<div>

        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <p class="text-xl font-semibold mb-4">Confirm Delete</p>
                <p>Are you sure you want to delete this post?</p>
                <div class="mt-4 flex justify-end">
                    <button wire:click="confirmDelete" class="bg-red-500 text-white px-4 py-2 rounded-lg mr-2">Delete</button>
                    <button wire:click="cancelDeletion" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">Cancel</button>
                </div>
            </div>
        </div>

</div>