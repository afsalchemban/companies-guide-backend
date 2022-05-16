<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Mail\InvoiceMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendInvoiceEmailListener
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

        $invoice_file_path = $order->invoice_file_path;
        $pre = "/storage/";

        if(substr($invoice_file_path, 0, strlen($pre)) === $pre)
        {
            $invoice_file_path = substr($invoice_file_path, strlen($pre));
        }

        $mailData = [
            'date' => $order->created_at->format('d/m/Y'),
            'amount' => 'Dhs. '.$order->net_total,
            'business_name' => $company->business_name,
            'email' =>  $company->email,
            'phone_number' => $company->phone_number,
            'trade_license_number' => $company->trade_license_number,
            'address' => $company->city->name.', '.$company->area->name.', '.$company->country->name,
            'package_name' => $package->name,
            'package_price' => $package->price,
            'invoice_file_path' => $invoice_file_path,
        ];

        
        Mail::to($company->email)->send(new InvoiceMail($mailData));
    }
}
