<?php
namespace App\View\Components;

use Illuminate\View\Component;

class VideoCard extends Component
{
    public $url;
    public $title;
    public $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $title, $description)
    {
        $this->url = $url;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.video-card');
    }
}