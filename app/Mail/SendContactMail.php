<?php

namespace Cavidel\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $data;
    // protected $mail_subject;
    public function __construct($data)
    {
        // bind
        $this->data = $data;
        // $this->mail_subject = $mail_subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->data;
        // $mail_subject = $this->mail_subject;
        return $this->view('mails.contact-mail', compact('data'))->subject($this->data->mail_subject);
    }
}
