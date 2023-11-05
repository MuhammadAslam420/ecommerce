<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;

class MessageNotifications extends Component
{
    public $notifications = [];

    public function mount()
    {
        $this->loadNotifications();
    }

    public function loadNotifications()
    {
        $this->notifications = Message::where('status', 'pending')->get();
    }

    public function markAsRead($orderId)
    {
        Message::where('id', $orderId)->update(['status' => 'read']);
        $this->loadNotifications();
    }


    protected function playNotificationSound()
    {
        // Play the notification sound using JavaScript
        $script = <<<JS
            var audio = new Audio('public/admin/assets/sounds/notification.mp3');
            audio.play();
        JS;

        $this->dispatchBrowserEvent('playNotificationSound', ['script' => $script]);
    }
    public function render()
    {
        try {
            return view('livewire.message-notifications');
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
