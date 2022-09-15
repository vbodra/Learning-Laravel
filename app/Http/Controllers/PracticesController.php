<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practices;

class PracticesController extends Controller
{
    public function store(Request $request)
    {
        $result = Practices::create([
            'brand_name' => $request->input('brand_name'),
        ]);

        print_r($result);
    }

    public function index()
    {
        echo Practices::all();
    }

    public function getById($id)
    {
        echo Practices::findOrFail($id);
    }

    public function destroy($id)
    {
        echo Practices::where('id', $id)->delete();
    }

    public function updateById(Request $request, $id)
    {
        $input = $request['brand_name'];
        // the lines above and below seem to do the same thing
        // $input = $request->input('brand_name'); 

        $foundBrand = Practices::find($id);
        $foundBrand->brand_name = $input;
        $foundBrand->save();

        // the line below can be used to update a single or multiple fields
        // $response = Practices::where('id', $id)->update(['brand_name' => $input]);
        
        print_r($foundBrand);
    }
}
