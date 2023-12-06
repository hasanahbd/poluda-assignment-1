<?php

namespace App\View\Components\Posts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Post;

class All extends Component {
    /**
     * Create a new component instance.
     */
    public $posts;
    public $featuredPost;
    public function __construct() {
        $this->posts = Post::notFeatured()->latest()->paginate(4);
        $this->featuredPost = Post::featured();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.posts.all');
    }
}
