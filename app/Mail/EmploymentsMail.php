<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmploymentsMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->data['email'];
        $object = $this->data['object'];
        $name = $this->data['name'];
        $telephone = $this->data['telephone'];
        $message = $this->data['message'];

        return $this->markdown('emails.employments.employment-form', compact('object', 'name', 'email', 'telephone', 'message'))
                    ->subject('Reception de CV en ligne')
                    ->attach($this->data['document']->getRealPath(), [
                        'as' => $this->data['document']->getClientOriginalName()
                    ]);
        
    }
}
