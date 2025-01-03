<?php
namespace App\View\Components;

use Illuminate\View\Component;

class HomeCard extends Component
{
    public $title;
    public $time;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $time)
    {
        $this->title = $title;
        $this->time = $time;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-card');
    }
}