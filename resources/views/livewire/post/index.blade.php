<div>
    <div class="container">
        <h1 class="text-4xl font-bold text-gray-800 mb-8 border-b pb-4">
            Latest Posts
            <span class="text-gray-500 text-lg font-normal">Share your thoughts</span>
        </h1>

        @foreach($posts as $post)
            <div class="post hover:shadow-lg transition-shadow duration-300">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="post-title font-bold text-2xl hover:text-blue-600 transition-colors">{{ $post->title }}</h2>
                    <span class="text-gray-500 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                </div>

                <p class="post-content text-gray-700 leading-relaxed mb-6">{{ $post->content }}</p>

                <div class="flex items-center gap-2">
                    <button class="flex items-center gap-1 hover:scale-105 transition-transform" wire:click="broadcast({{ $post->id }})">
                        <i class="fas fa-heart like-button {{ $post->likes->count() > 0 ? 'text-red-500' : 'text-gray-400' }}"></i>
                        <span class="likes-count font-medium">{{ $post->likes->count() }}</span>
                        <span class="text-gray-600">{{ Str::plural('like', $post->likes->count()) }}</span>
                    </button>

                </div>
            </div>
        @endforeach
    </div>
</div>
