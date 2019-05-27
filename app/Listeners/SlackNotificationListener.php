<?php

namespace dokimi\Listeners;

use dokimi\Events\NewCustomerRegistrationEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SlackNotificationListener
{
    /**
     * Handle the event.
     *
     * @param  NewCustomerRegistrationEvent  $event
     * @return void
     */
    public function handle(NewCustomerRegistrationEvent $event)
    {
        //Slack notification to Admin
        dump('Slack message sent');
    }
}
