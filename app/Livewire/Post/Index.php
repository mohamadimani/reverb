<?php

namespace App\Livewire\Post;

use Livewire\Component;
use App\Models\Post;
class Index extends Component
{
    public function render()
    {
        $posts = Post::all();
        return view('livewire.post.index', compact('posts'));
    }

    public function like(Post $post)
    {
        $post->likes()->create(['count' => 1, 'IP' => request()->ip()]);
    }
}
