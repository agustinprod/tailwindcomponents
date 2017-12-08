<?php

namespace App\Mail;

use App\Component;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ComponentSubmittedMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Component
     */
    public $component;

    /**
     * Create a new message instance.
     *
     * @param Component $component
     */
    public function __construct(Component $component)
    {
        //
        $this->component = $component;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.component-submitted')->to(config('mail.notifications'));
    }
}
