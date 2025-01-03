<?php
namespace App\View\Components;

use Illuminate\View\Component;

class ServiceCard extends Component
{
    public $title;
    public $time;
    public $location;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $time, $location)
    {
        $this->title = $title;
        $this->time = $time;
        $this->location = $location;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.service-card');
    }
}