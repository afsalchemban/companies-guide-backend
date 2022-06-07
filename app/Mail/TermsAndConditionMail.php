<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TermsAndConditionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('bcservice@bcnid.com', 'Business Council Network')
                    ->view('emails.termsAndConditionMail')->attach(public_path().'/vendor/pdfs/terms_conditions/Terms and Conditions.pdf')
                    ->attach(public_path().'/vendor/pdfs/terms_conditions/الشروط والاحكام في منصة BCN.pdf');
    }
}
