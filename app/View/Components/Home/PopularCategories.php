<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use Modules\Categories\Entities\Category;

class PopularCategories extends Component
{
    /**
     * @var \Modules\Categories\Entities\Category
     */
    private $category;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.popular-categories', ['categories' => $this->category->limit(8)->get()]);
    }
}
