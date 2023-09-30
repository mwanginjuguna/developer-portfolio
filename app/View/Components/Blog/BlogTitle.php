<?php

namespace App\View\Components\Blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogTitle extends Component
{
    public $blogTitle;
    /**
     * Create a new component instance.
     */
    public function __construct($title)
    {
        // init title
        $this->blogTitle = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog.blog-title');
    }
}
