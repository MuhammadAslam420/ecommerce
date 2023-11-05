<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderNotifications extends Component
{
    public $notifications = [];

    public function mount()
    {
        $this->loadNotifications();
    }

    public function loadNotifications()
    {
        $this->notifications = \App\Models\Order::where('noti', 'pending')->get();
    }

    public function markAsRead($orderId)
    {
        \App\Models\Order::where('id', $orderId)->update(['noti' => 'read']);
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
            return view('livewire.order-notifications');
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
