<?php

namespace dokimi\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use dokimi\Listeners\WelcomeEmailListener;
use dokimi\Events\NewCustomerRegistrationEvent;
use dokimi\Listeners\SlackNotificationListener;
use dokimi\Listeners\NewsletterRegistrationListener;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        NewCustomerRegistrationEvent::class => [
            WelcomeEmailListener::class,
            // NewsletterRegistrationListener::class,
            // SlackNotificationListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
