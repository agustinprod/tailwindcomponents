<?php

namespace App\Listeners;

use App\Events\ComponentCreated;
use App\Mail\ComponentSubmittedMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdminOfNewComponent
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ComponentCreated  $event
     * @return void
     */
    public function handle(ComponentCreated $event)
    {
        \Mail::send(new ComponentSubmittedMail($event->component));
    }
}
