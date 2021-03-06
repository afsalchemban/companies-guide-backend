<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Mail\CompanyCredentialMail;
use App\Mail\CouncilCredentialMail;
use App\Mail\SaleCredentialMail;
use App\Services\Mail\MailService;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendCredentialEmailListener
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
     * @param  \App\Events\UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        $mailData = [
            'date' => Carbon::now()->format('d/m/Y'),
            'name' => $event->user->name,
            'email' => $event->user->email,
            'password' => $event->password
        ];
        if($event->user->userable_type=='company')
        {
            $mailData['company'] = $event->owner->business_name; 
            Mail::to($event->user->email)->send(new CompanyCredentialMail($mailData));
        }
        elseif($event->user->userable_type=='sale')
        {
            Mail::to($event->user->email)->send(new SaleCredentialMail($mailData));
        }
        elseif($event->user->userable_type=='council')
        {
            $mailData['council'] = $event->owner->council_name;
            Mail::to($event->user->email)->send(new CouncilCredentialMail($mailData));
        }
    }
}
