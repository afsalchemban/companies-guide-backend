<?php

namespace App\Http\Controllers;

use App\Interfaces\DataRepositoryInterface;
use App\Jobs\ImageResize;
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
use App\Services\Image\ImageService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Intervention\Image\Facades\Image as ImageIntervention;

class DataController extends Controller
{

    public function __construct(DataRepositoryInterface $dataRepository, ImageService $imageService)
    {
        $this->dataRepository=$dataRepository;
        $this->imageService=$imageService;
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

    public function test_resize_job(){

        $logos = DB::table('companies_clone')
            ->select('id','photo')->whereNotNull('photo')
            ->get();
        $logos->each(function ($item, $key) {
            $file = storage_path().'/app/companies-logo/'.$item->photo; 
            ImageResize::dispatch($file,$item->id);
        });       
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
        $mailData = [
            'date' => '2022/2/2',
            'amount' => 'Dhs. 1500',
            'business_name' => 'Star',
            'email' =>  'afsalcodes@gmail.com',
            'phone_number' => 232132,
            'trade_license_number' => 232323,
            'address' => 'address',
            'package_name' => 'Full',
            'package_price' => 7500,
            'invoice_file_path' => 'invoice.pdf',
        ];

        
        Mail::to('afsalcodes@gmail.com')->send(new InvoiceMail($mailData));
    }
    public function test_queue()
    {
        $mailData = [
            'date' => Carbon::now()->format('d/m/Y'),
            'name' => 'START ENTERPRISES',
            'email' => 'afsalcodes@gmail.com',
            'password' => 'dummypassword'
        ];
        Mail::to('afsalcodes@gmail.com')->queue(new SaleCredentialMail($mailData));
    }
    public function test_resize(){
        $file = Storage::get('raw/raw.jpeg');
        $img = ImageIntervention::make($file);
        $width = 386;
        $height = 247;
        // we need to resize image, otherwise it will be cropped 
        if ($img->width() > $width) { 
            $img->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        }

        if ($img->height() > $height) {
            $img->resize(null, $height, function ($constraint) {
                $constraint->aspectRatio();
            }); 
        }

        $resized = $img->resizeCanvas($width, $height, 'center', false, '#ffffff')->stream('jpeg');
        Storage::put('resized/resized.jpeg', $resized);
    }
}
