<?php

namespace App\Listeners;

use App\Events\CouncilCreated;
use App\Mail\TermsAndConditionMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendTermsAndConditionEmail
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
     * @param  \App\Events\CouncilCreated  $event
     * @return void
     */
    public function handle(CouncilCreated $event)
    {
        $council = $event->council;
        $mailData = [
            'council_name' => $council->council_name,
        ];
         
        Mail::to($council->email)->send(new TermsAndConditionMail($mailData));
    }
}
