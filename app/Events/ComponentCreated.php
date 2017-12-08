<?php

namespace App\Events;

use App\Component;
use Illuminate\Queue\SerializesModels;

class ComponentCreated
{
    use SerializesModels;
    /**
     * @var Component
     */
    public $component;

    public function __construct(Component $component)
    {
        //
        $this->component = $component;
    }
}
