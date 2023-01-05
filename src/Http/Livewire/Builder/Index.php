<?php

namespace OEngine\Builder\Http\Livewire\Builder;

use OEngine\Builder\Traits\WithPageBuilder;
use OEngine\Core\Livewire\Component;

class Index extends Component
{
    use WithPageBuilder;
    public function render()
    {
        return <<<'blade'
            <div>
                <div class="el-builder">
                
                </div>
            </div>
        blade;
    }
}
