<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromQuery, WithHeadings
{
    /**
     * @return \Illuminate\Database\Query\Builder
     */
    public function query()
    {
        return Order::with('user')->select([
            'orders.id',
            'orders.subtotal',
            'orders.discount',
            'orders.shipping_charges',
            'orders.tax',
            'orders.total',
            'orders.firstname',
            'orders.lastname',
            'orders.email',
            'orders.mobile',
            'orders.address1',
            'orders.address2',
            'orders.city',
            'orders.province',
            'orders.country',
            'orders.zipcode',
            'orders.status',
            'orders.delivery_date',
            'orders.cancel_date',
            'orders.created_at',
            'orders.updated_at',
            'orders.is_shipping_different',
            'users.name as user_name',
        ])->join('users', 'orders.user_id', '=', 'users.id');
    }

    public function headings(): array
    {
        return [
            '#',
            'SubTotal',
            'Discount',
            'Shipping Charges',
            'Tax',
            'Total',
            'Customer First Name',
            'Customer Last Name',
            'Email',
            'Mobile',
            'Address Line 1',
            'Address Line 2',
            'City',
            'Province',
            'Country',
            'ZipCode',
            'Status',
            'Delivery Date',
            'Cancel Date',
            'Order Date',
            'Order Update Date',
            'Shipping Different',
            'User Name',
        ];
    }
}
