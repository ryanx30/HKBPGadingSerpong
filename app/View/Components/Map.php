<?php
namespace App\View\Components;

use Illuminate\View\Component;

class Map extends Component
{
    public $title;
    public $src;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $src)
    {
        $this->title = $title;
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.map');
    }
}