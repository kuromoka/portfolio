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
     * @var int confirmation email
     */
    const CONFIRMATION_EMAIL = 1;

    /**
     * @var int admin email
     */
    const ADMIN_EMAIL = 2;

    /**
     * Inquiry instance
     *
     * @var Inquiry
     */
    protected $inquiry;

    /**
     * Create a new message instance.
     * 
     * @param  Inquiry $inquiry
     * @param  int     $type
     * @return void
     */
    public function __construct(Inquiry $inquiry, $type)
    {
        $this->inquiry = $inquiry;
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = '';
        $body = '';
        if ($this->type === self::CONFIRMATION_EMAIL) {
            $subject = __('Thank you for your inquiry.');
            $body = __('Your inquiry has been sent the following contents.') . PHP_EOL . __('I will reply within a few days as far as possible.');
        } else if ($this->type === self::ADMIN_EMAIL) {
            $subject = __('Inquiry has been sent.');
            $body = __('Please check the the following contents.');
        }

        return $this->subject($subject)
                    ->with([
                        "text_body" => $body,
                        "text_name" => $this->inquiry->name,
                        "text_email" => $this->inquiry->email,
                        "text_message" => $this->inquiry->message,  // Renamed key not to conflict $message variable of Laravel.
                    ])
                    ->text('emails.inquiries.received');
    }
}
