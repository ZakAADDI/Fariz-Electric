<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build(): self
    {
        $subject = isset($this->data['subject']) && is_string($this->data['subject']) && $this->data['subject'] !== ''
            ? 'Contact – ' . $this->data['subject']
            : 'Nouveau message de contact';

        return $this->subject($subject)
            ->view('emails.contact')
            ->with(['data' => $this->data]);
    }
}
