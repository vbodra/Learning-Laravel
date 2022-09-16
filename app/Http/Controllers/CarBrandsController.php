<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarBrands;

class CarBrandsController extends Controller
{
    public function store(Request $request)
    {
        $result = CarBrands::create([
            'brand_name' => $request->input('brand_name'),
        ])->toJson();

        print_r($result);
    }

    public function index(Request $request)
    {
        $includeSoftDeletes = $request->query('withTrashed');

        echo($includeSoftDeletes == 'true' ?
            CarBrands::withTrashed()->get() : CarBrands::all());
    }

    public function getById($id)
    {
        echo CarBrands::findOrFail($id);
    }

    public function destroy($id)
    {
        echo CarBrands::where('id', $id)->delete();
    }

    public function updateById(Request $request, $id)
    {
        $input = $request['brand_name'];
        // the lines above and below seem to do the same thing
        // $input = $request->input('brand_name'); 

        $foundBrand = CarBrands::find($id);
        $foundBrand->brand_name = $input;
        $foundBrand->save();

        // the line below can be used to update a single or multiple fields
        // $response = CarBrands::where('id', $id)->update(['brand_name' => $input]);
        
        print_r($foundBrand->toJson());
    }
}
