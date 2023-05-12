<?php

namespace App\View\Components;

use App\Models\Category as ModelsCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Category extends Component
{

    public $categories;

    public function __construct(){
        $this->categories = ModelsCategory::paginate(13);
    }




    public function render(): View|Closure|string
    {
        return view('components.category', [
            "categories" => $this->categories
        ]);
    }
}
