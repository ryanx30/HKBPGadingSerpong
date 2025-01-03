<?php
namespace App\View\Components;

use Illuminate\View\Component;

class AboutEventCard extends Component
{
    public $title;
    public $description;
    public $url;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $description, $url)
    {
        $this->title = $title;
        $this->description = $description;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.about-event-card');
    }
}