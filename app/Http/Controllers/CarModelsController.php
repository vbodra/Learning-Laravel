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
        $response = CarModels::whereHas('CarBrand', function ($query) {
            $query->where('car_brand_id', 3);
        })->get()->toJson();

        print_r($response);
    }
}
