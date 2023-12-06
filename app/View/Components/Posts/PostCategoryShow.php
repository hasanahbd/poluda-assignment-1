<?php

namespace App\View\Components\Posts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCategoryShow extends Component
{
    /**
     * Create a new component instance.
     */
public $categories;
     public function __construct($categories)
    {
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.posts.post-category-show');
    }
}
