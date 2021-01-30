<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function sendContact() {
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message
        ]);

        $currEmail = $this->email;

        \Mail::send('contact-email',
            array(
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'user_message' => $this->message,
            ), function($message) use ($currEmail)
            {
                $message->from($currEmail);
                $message->to('farazhussain503@gmail.com');
            });

        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';

        return back()->with('success', 'Thank you for contact us!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
