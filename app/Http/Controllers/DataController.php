<?php

namespace App\Http\Controllers;

use App\Services\Reports\ReportInterface;
use App\Interfaces\DataRepositoryInterface;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    public function companyActivities(){
        return $this->dataRepository->getCompanyActivities();
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

    public function test(ReportInterface $report){
        return $report->getAll();
    }
    
    public function test2(){
        Storage::put('1.txt', 'Contents');

        return Storage::path('1.txt');
    }
}
