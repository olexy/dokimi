<?php

namespace dokimi\Listeners;

use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use dokimi\Events\NewCustomerRegistrationEvent;
use dokimi\Mail\WelcomeNewUserMail;

class WelcomeEmailListener
{
    /**
     * Handle the event.
     *
     * @param  NewCustomerRegistrationEvent  $event
     * @return void
     */
    public function handle(NewCustomerRegistrationEvent $event)
    {
        $name = $event->customer->name;

        Mail::to($event->customer->email)->send(new WelcomeNewUserMail($name));
    }
}
