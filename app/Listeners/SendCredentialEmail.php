<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Mail\CompanyCredentialMail;
use App\Mail\SaleCredentialMail;
use App\Services\Mail\MailService;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendCredentialEmail
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
        if($event->user->user_type=='company')
        {
            Mail::to($event->user->email)->send(new CompanyCredentialMail($mailData));
        }
        elseif($event->user->user_type=='sale')
        {
            Mail::to($event->user->email)->send(new SaleCredentialMail($mailData));
        }
    }
}
