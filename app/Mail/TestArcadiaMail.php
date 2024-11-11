<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestArcadiaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $messageContent;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $messageContent)
    {
        $this->name = $name;
        $this->email = $email;
        $this->messageContent = $messageContent;
    }

    public function build(): TestArcadiaMail
    {
        return $this->from('isabelle@mail.test')
                    ->subject('Mon objet personnalisé')
                    ->view('emails.test')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'messageContent' => $this->messageContent,
                    ]);
    }

    /**
     * Get the message envelope.
     *
     * public function envelope(): Envelope
     * {
     * return new Envelope(
     * subject: 'Test Arcadia Mail',
     * );
     * }
     */
    /**
     * Get the message content definition.
     *
     * public function content(): Content
     * {
     * return new Content(
     * view: 'emails.test',
     * );
     * }
     */
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
