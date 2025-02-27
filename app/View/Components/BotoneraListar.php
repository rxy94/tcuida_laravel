<?php

namespace App\View\Components;

use App\Models\Usuario;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BotoneraListar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Usuario $usuario)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.botonera-listar');
    }
}
