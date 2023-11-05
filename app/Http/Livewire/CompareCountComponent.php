<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CompareCountComponent extends Component
{
    protected $listeners=['refreshComponent'=>'$refresh'];

    public function render()
    {
        return <<<'blade'
             <div class="header-action-icon-2">
                                   @if(Cart::instance('compare')->count() > 0)
                                    <a href="/compare">
                                        <img class="svgInject" alt="Evara" src="{{asset('assets/images/shuffle.png')}}">
                                        <span class="pro-count blue">{{Cart::instance('compare')->count()}}</span>
                                    </a>
                                    @else
                                    <a href="#">
                                        <img class="svgInject" alt="Evara" src="{{asset('assets/images/shuffle.png')}}">
                                        <span class="pro-count blue">0</span>
                                    </a>
                                    @endif
            </div>
        blade;
    }
}
