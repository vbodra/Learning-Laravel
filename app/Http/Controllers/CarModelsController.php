<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CarModels;

class CarModelsController extends Controller
{
    public function store(Request $request)
    {
        $input = $request['model'];

        $response = CarModels::create([
            'model' => $input,
            'car_brand_id' => $request['car_brand_id']
        ])->toJson();

        print_r($response);
    }

    public function index()
    {
        $response = DB::table('practices')
            ->join('practicing_related_tables', 'practices.id', '=', 'practicing_related_tables.car_brand_id')
            ->get()
            ->toJson();
        print_r($response);
        
        // print_r(CarModels::with('practices')->get()[2]['car_brand_id']);
    }
}