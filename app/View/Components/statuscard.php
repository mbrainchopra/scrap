<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class statuscard extends Component
{
    /**
     * Create a new component instance.
     */
    public $text,$title,$color,$da;
    public function __construct($d,$t,$tx,$c)
    {

        $this->da=$d;
        $this->title=$t;
        $this->text=$tx;
        $this->color=$c;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.statuscard');
    }
}
