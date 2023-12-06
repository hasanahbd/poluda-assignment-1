<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategorySelect extends Component {
    /**
     * Create a new component instance.
     */
    public $categories;
    public $selected;
    public $selector='';
    public function __construct($categories, $selected=[], $selector='select2') {
        $this->categories = $categories;
        $this->selected = $selected;
        $this->selector = $selector;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string {
        return view('components.category-select');
    }
}
