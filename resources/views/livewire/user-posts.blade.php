<div class="max-w-xl mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Suas postagens, <?php echo e(Auth::user()->name); ?></h1>
    @if($posts->count() === 0)
        <p class="text-gray-500">You haven't posted anything yet.</p>
    @else
        <ul class="space-y-4">
            @foreach ($posts as $post)
                <li class="border rounded-lg p-4 bg-white shadow-md">
                    <a href="{{ route('post.show', ['postId' => $post->id]) }}" class="text-xl font-semibold">{{ $post->title }}</a>
                    <p class="text-gray-500">by {{ $post->user->name }}</p>
            
                    <a href="{{ route('post.show', ['postId' => $post->id]) }}" class="text-blue-500 hover:underline">View Post</a>
                </li>
            @endforeach
        </ul>
        
        {{ $posts->links() }} {{-- Add pagination links --}}
    @endif
</div>
