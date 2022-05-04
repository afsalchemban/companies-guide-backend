<?php

namespace App\Services\Mail;

use App\Mail\CompanyCredentialMail;
use App\Mail\ContractMail;
use App\Mail\InvoiceMail;
use App\Mail\SaleCredentialMail;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class MailService
{
    public static function sendInvoiceMail($orderId)
    {
        $order = Order::find($orderId);
        $company = $order->company;
        $package = $order->package;

        $invoice_file_path = $order->invoice_file_path;
        $pre = "/storage/";

        if(substr($invoice_file_path, 0, strlen($pre)) === $pre)
        {
            $invoice_file_path = substr($invoice_file_path, strlen($pre));
        }

        $mailData = [
            'date' => $order->created_at->format('d/m/Y'),
            'amount' => 'Dhs. '.$order->net_total,
            'business_name' => $company->business_name,
            'email' =>  $company->email,
            'phone_number' => $company->phone_number,
            'trade_license_number' => $company->trade_license_number,
            'address' => $company->city->name.', '.$company->area->name.', '.$company->country->name,
            'package_name' => $package->name,
            'package_price' => $package->price,
            'invoice_file_path' => $invoice_file_path,
        ];

        
        Mail::to($company->email)->send(new InvoiceMail($mailData));
        
    }
    public static function sendContractMail($orderId)
    {
        $order = Order::find($orderId);
        $company = $order->company;
        $package = $order->package;
        $mailData = [
            'date' => $order->created_at->format('d/m/Y'),
            'business_name' => $company->business_name,
            'package_name' => $package->name
        ];
         
        Mail::to($company->email)->send(new ContractMail($mailData));
        
    }
    public static function sendCompanyCredentialMail($company,$password)
    {
        $mailData = [
            'date' => Carbon::now()->format('d/m/Y'),
            'name' => $company->business_name,
            'email' => $company->email,
            'password' => $password
        ];
         
        Mail::to($company->email)->send(new CompanyCredentialMail($mailData));
        
    }

    public static function sendSaleCredentialMail($sale,$password)
    {
        $mailData = [
            'date' => Carbon::now()->format('d/m/Y'),
            'name' => $sale->name,
            'email' => $sale->email,
            'password' => $password
        ];
         
        Mail::to($sale->email)->send(new SaleCredentialMail($mailData));
        
    }
}
