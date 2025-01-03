<?php

namespace App\View\Components;

use App\Models\MinistryImage;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MinistryCarousel extends Component
{
    public $images;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Ambil data gambar dari database
        $this->images = MinistryImage::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ministry-carousel', ['images' => $this->images]);
    }
}