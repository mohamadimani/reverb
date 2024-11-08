<?php

namespace App\Livewire\Post;

use App\Events\PostLike;
use Livewire\Component;
use App\Models\Post;
class Index extends Component
{
    public function render()
    {
        $posts = Post::all();
        return view('livewire.post.index', compact('posts'));
    }

    public function broadcast(Post $post)
    {
        $post->likes()->create(['count' => 1, 'IP' => request()->ip()]);
        event(new PostLike($post->id));
    }
}
