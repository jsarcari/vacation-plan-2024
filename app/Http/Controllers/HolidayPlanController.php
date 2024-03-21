<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HolidayPlan;

class HolidayPlanController extends Controller
{
    
    public function index(Request $request)
    {
        $vacations = HolidayPlan::all();

        return view('vacations.index')->with('vacations', $vacations);
    }

    public function create()
    {
        return view('vacations.create');
    }

    public function store(Request $request)
    {
        HolidayPlan::create($request->all());
        return to_route('vacations.index');
    }

    public function destroy(Request $request)
    {
        HolidayPlan::destroy($request->vacation);
        return to_route('vacations.index');
    }
}