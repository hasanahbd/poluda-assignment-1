<?php

namespace App\View\Components\Head;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tinymceConfig extends Component
{
    /**
     * Create a new component instance.
     */
public $selector;
public $apiKey;
     public function __construct($selector = 'textarea')
    {
        $this->selector = $selector;
        $this->apiKey = config('app.tiny_api_key');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.head.tinymce-config');
    }
}
