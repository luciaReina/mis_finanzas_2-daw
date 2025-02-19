<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }

    /*<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
<strong class="font-bold">Error</strong>
kspan class="block sm:inline">{{$attributes->get('message')}}</span>
<span class="absolute top-0 bottom-0 right-0 px-4 py-3">
<svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> <title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.8191-2.651 3.029a1.2 1.2 0 1 1-1.697-1.69712. 758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.18312.651-3.031a1.2 1.2 0 1 1 1.697 1.6971-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
</span>
</div>*/
}

