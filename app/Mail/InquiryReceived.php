<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Inquiry;

class InquiryReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Inquiry instance
     *
     * @var Inquiry
     */
    protected $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Inquiry $inquiry)
    {
        $this->inquiry = $inquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thank you for your inquiry.')
                    ->with([
                        "text_name" => $this->inquiry->name,
                        "text_email" => $this->inquiry->email,
                        "text_message" => $this->inquiry->message,  // Renamed key not to conflict $message variable of Laravel.
                    ])
                    ->text('emails.inquiries.received');
    }
}
