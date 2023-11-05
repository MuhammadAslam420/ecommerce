<?php

namespace App\Http\Livewire\Admin\Order\Invoice;

use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class OrderInvoiceComponent extends Component
{
    public $orderId;
    public function mount($id)
    {
        $this->orderId = $id;
    }

    public function generateInvoice()
    {
        $order = Order::findOrFail($this->orderId);
        $pdf=PDF::loadView('livewire.admin.invoices.order', compact('order'));
          //dd($pdf);
        // return $pdf->stream('orderinvoice.pdf');
        return response()->streamDownload(function () use($pdf) {
            echo  $pdf->stream();
        }, 'orderinvoice.pdf');
    }
    public function render()
    {
        $order = Order::find($this->orderId);
        return view('livewire.admin.order.invoice.order-invoice-component', ['order' => $order])->layout('layouts.admin');
    }
}
