<div>
    @if ($showUpdateForm)
        <div >
        <div wire:click="toggleUpdateForm" class="text-gray-600 mt-2 hover:underline flex items-center"><div 
        style="width: 2rem;
                height: 2rem;
                border-radius: 5rem;
                cursor: pointer;" 
        class="flex flex-col items-center justify-center cursor-pointer mr-1 p-1 bg-white rounded-lg shadow-md">&lt;</div>Back to the post</div>
            <livewire:edit-post :postId="$post->id" />
        </div>
    @else
    <div class="max-w-xl mx-auto p-4 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-2">{{ $post->title }}</h1>
        <p class="text-gray-500 mb-4">by {{ $post->user->name }}</p>
        <img src="{{ $post->img_url }}" alt="" class="w-full rounded-lg mb-4">
        
        <div class="text-gray-700 leading-relaxed">
            {{ $post->description }}
        </div>
        
        @if (Auth::check() && Auth::user()->id === $post->user_id)
        <button style="background-color: rgb(34 211 238);" wire:click="toggleUpdateForm" class="bg-cyan-400 text-white px-4 py-2 rounded-lg mt-4">Update Post</button>
        <!-- <button wire:click="deletePost" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg mt-4">Delete Post</button> -->
        <button wire:click="$toggle('showConfirmDeleteModal')" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg mt-4">Delete Post</button>
        @endif
        @if ($showConfirmDeleteModal)
            <livewire:confirm-delete-post />
        @endif
    </div>
    @endif
</div>
