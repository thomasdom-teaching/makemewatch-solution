<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShowCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $showId,
        public string $title,
        public ?array $image,
        public ?array $genres,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.show-card');
    }
}
