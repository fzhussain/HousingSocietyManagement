<?php

namespace App\Http\Livewire;

use App\Models\Notice;
use Livewire\Component;

class NoticeList extends Component
{
    public $notices;
    protected $listeners = ['noticeAdded'];

    public function noticeAdded() {
        $this->notices = Notice::all()->reverse();
    }

    public function mount() {
        $this->noticeAdded();
    }

    public function render()
    {
        return view('livewire.notice-list');
    }
}
