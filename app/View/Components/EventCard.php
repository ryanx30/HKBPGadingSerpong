<?php
namespace App\View\Components;

use Illuminate\View\Component;

class EventCard extends Component
{
    public $image;
    public $title;
    public $description;
    public $date;
    public $location;
    public $attendees;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $title, $description, $date, $location, $attendees)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->location = $location;
        $this->attendees = $attendees;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.event-card');
    }
}