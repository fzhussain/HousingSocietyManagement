<?php

namespace App\Http\Livewire;

use App\Models\Notice;
use Livewire\Component;

class NoticeForm extends Component
{
    public $notice;

    protected $rules = [
        'notice' => 'required'
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function postNotice() {
        $this->validate();

        Notice::create([
            'notice' => $this->notice
        ]);

        session()->flash('success', 'Your message has been sent. Thank you!');

        $this->notice = '';

        $this->emit('noticeAdded');
    }

    public function render()
    {
        return view('livewire.notice-form');
    }
}
