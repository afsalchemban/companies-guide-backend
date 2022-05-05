<?php

namespace App\Http\Controllers;

use App\Interfaces\DataRepositoryInterface;
use App\Mail\CompanyCredentialMail;
use App\Mail\ContractMail;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Mail\DemoMail;
use App\Mail\InvoiceMail;
use App\Mail\SaleCredentialMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class DataController extends Controller
{

    public function __construct(DataRepositoryInterface $dataRepository)
    {
        $this->dataRepository=$dataRepository;
    }
    /* 
    Select the package when company registration
    */

    public function paymentMethods(){
        $methods = DB::select('select * from payment_methods');
        return response()->json([
            'payment_methods' => $methods
        ],Response::HTTP_OK);
    }

    public function companyActivities(Request $request,$param){
        return $this->dataRepository->getCompanyActivities($param);
    }

    public function searchSales(Request $request,$param){
        return $this->dataRepository->searchSales($param);
    }

    public function searchCompanies(Request $request,$param){
        return $this->dataRepository->searchCompanies($param);
    }

    public function countries(){
        return $this->dataRepository->getCountries();
    }

    public function cities(Country $country){
        return $this->dataRepository->getCities($country);
    }

    public function areas(City $city){
        return $this->dataRepository->getAreas($city);
    }

    public function legalStatuses()
    {
        return $this->dataRepository->getLegalStatuses();
    }

    public function issuedBy()
    {
        return $this->dataRepository->issuedBy();
    }

    public function reports()
    {
        return $this->dataRepository->getReports();
    }

    public function packages()
    {
        return $this->dataRepository->getPackages();
    }

    
    public function test_get(){

        return Carbon::now()->subDays(30)->toDateTimeString().' - '.Carbon::now()->firstOfMonth()->toDateTimeString().' - '.Carbon::now()->startOfMonth()->subMonth()->toDateString().' - '.Carbon::now()->subMonth()->toDateTimeString().' - '.Carbon::now()->subMonths(6)->toDateTimeString();
        
    }

    public function test_post(Request $request){

        $validated = $request->validate([
            'duration' => 'required|json'
        ]);
        $duration = json_decode($request->input('duration'));
        return $duration->type;
        
    }

    public function test_mail(){

        $mailData = [
            'date' => Carbon::now()->format('d/m/Y'),
            'name' => 'START ENTERPRISES',
            'email' => 'afsalcodes@gmail.com',
            'password' => 'dummypassword'
        ];
         
        Mail::to('afsalcodes@gmail.com')->send(new SaleCredentialMail($mailData));
           
        dd("Email is sent successfully.");
        
    }

    public function image(Request $request){
        $validated = $request->validate([
            'file' => 'required',
        ]);
        $file = $request->file('file');
        return Storage::putFile('test', $file);
    }

    public function test_invoice()
    {
        $customer = new Buyer([
            'name'          => 'John Doe',
            'custom_fields' => [
                'email' => 'test@example.com',
            ],
        ]);

        $item = (new InvoiceItem())->title('Service 1')->pricePerUnit(2);

        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent(10)
            ->taxRate(15)
            ->shipping(1.99)
            ->addItem($item);

        return $invoice->stream();
    }
}
