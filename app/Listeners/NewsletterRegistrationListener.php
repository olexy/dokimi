<?php

namespace dokimi\Listeners;

use dokimi\Events\NewCustomerRegistrationEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewsletterRegistrationListener
{
    /**
     * Handle the event.
     *
     * @param  NewCustomerRegistrationEvent  $event
     * @return void
     */
    public function handle(NewCustomerRegistrationEvent $event)
    {
        //Register to Newsletter
        dump('Register to newsletter!');
    }
}
