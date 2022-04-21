<?php

namespace App\Http\Controllers;

use App\Services\Reports\ReportInterface;
use App\Interfaces\DataRepositoryInterface;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Google\Cloud\Storage\StorageClient;
use Carbon\Carbon;

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
}
