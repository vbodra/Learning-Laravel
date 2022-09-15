<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PracticingRelatedTables;

class PracticingRelatedTablesController extends Controller
{
    public function store(Request $request)
    {
        $input = $request['model'];

        $response = PracticingRelatedTables::create([
            'model' => $input,
            'car_brand_id' => $request['car_brand_id']
        ]);

        print_r($response);
    }

    public function index()
    {
        $response = DB::table('practices')
            ->join('practicing_related_tables', 'practices.id', '=', 'practicing_related_tables.car_brand_id')
            ->get()
            ->toJson();
        print_r($response);
        // print_r(PracticingRelatedTables::with('practices')->get()[2]['car_brand_id']);
    }
}
