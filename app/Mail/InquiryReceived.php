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
        return $this->markdown('emails.inquiries.received')
                    ->with([
                        "name" => $this->inquiry->name,
                        "email" => $this->inquiry->email,
                        "message"  => $this->inquiry->message,
                    ]);
    }
}
