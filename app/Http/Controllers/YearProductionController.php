<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YearProduction;
use Illuminate\Support\Facades\Redirect;

class YearProductionController extends Controller
{
    public function index()
    {
        $yearProductions = YearProduction::all()->sortBy('year');
        return view('admin.years', ['yearProductions' => $yearProductions]);
    }

    public function store(Request $request)
    {
        $yearProduction = new YearProduction();
        $yearProduction->year = $request->post('year');
        $yearProduction->production = $request->post('production');
        $yearProduction->save();

        return Redirect::back();
    }

    public function update(Request $request, $yearProductionId)
    {
        $yearProduction = YearProduction::find($yearProductionId);
        $yearProduction->year = $request->post('year');
        $yearProduction->production = $request->post('production');
        $yearProduction->save();

        return Redirect::back();
    }

    public function remove($yearProductionId)
    {
        $yearProduction = YearProduction::find($yearProductionId);
        $yearProduction->delete();
        return Redirect::back();
    }

}
