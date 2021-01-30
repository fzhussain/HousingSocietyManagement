<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Complaint;

class ComplaintForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function fileComplaint()
    {
        Complaint::create([
            'name' => $this->name,
            'email'=> $this->email,
            'subject' => $this->subject,
            'discription' => $this->message
        ]);

        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->message = '';
    }

    public function mount() {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function render()
    {
        return view('livewire.complaint-form');
    }
}
