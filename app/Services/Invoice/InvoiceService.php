<?php

namespace App\Services\Invoice;

use App\Models\Order;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class InvoiceService
{
    public $orderId;
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }
    public function generate()
    {
        $order = Order::find($this->orderId);
        $company = $order->company;
        $package = $order->package;
        $customer = new Party([
            'name'          => $company->business_name,
            'address'       => $company->city->name.', '.$company->area->name.', '.$company->country->name,
            'code'          => $company->trade_license_number,
            'custom_fields' => [
                'order number' => '#'.$order->id,
            ],
        ]);

        $items = [
            (new InvoiceItem())
                ->title($package->name)
                ->description($package->description.' for one year')
                ->pricePerUnit((int)$package->price)
                ->quantity(1)
                ->discountByPercent(10)
        ];

        $notes = [
            'Thank you for purchasing from us.',
        ];
        $notes = implode("<br>", $notes);

        $invoice = Invoice::make('receipt')
            ->series('INV')
            // ability to include translated invoice status
            // in case it was paid
            ->status(__('invoices::invoice.paid'))
            ->sequence($order->id)
            ->serialNumberFormat('#{SERIES}{SEQUENCE}')
                ->buyer($customer)
            ->date(now())
            ->dateFormat('d/m/Y')
            ->currencySymbol('Dhs.')
            ->currencyCode('AED')
            ->currencyFormat('{SYMBOL} {VALUE}')
            ->currencyThousandsSeparator(',')
            ->currencyDecimalPoint('.')
            ->filename('companies/invoices/invoice_'.$customer->name.'_'.$order->id)
            ->addItems($items)
            ->notes($notes)
            ->logo(public_path('vendor/invoices/sample-logo.png'))
            // You can additionally save generated invoice to configured disk
            ->save('gcs');

        return 'companies/invoices/invoice_'.$customer->name.'_'.$order->id;
    }
}
