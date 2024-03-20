<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayPlanController extends Controller
{
    
    public function index(Request $request)
    {
        $vacations = ["holiday1", "holiday 2", "vacation friends"];

        return view('vacations.index')->with('vacations', $vacations);
    }

    public function create()
    {
        return view('vacations.create');
    }

    public function store(Request $request)
    {
        $titleHolidayPlan = $request->input('title');
        //DB::insert()
    }
}