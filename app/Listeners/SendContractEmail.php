<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Mail\ContractMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendContractEmail
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
     * @param  \App\Events\OrderCreated  $event
     * @return void
     */
    public function handle(OrderCreated $event)
    {
        $order = $event->order;
        $company = $order->company;
        $package = $order->package;
        $mailData = [
            'date' => $order->created_at->format('d/m/Y'),
            'business_name' => $company->business_name,
            'package_name' => $package->name
        ];
         
        Mail::to($company->email)->send(new ContractMail($mailData));
    }
}
