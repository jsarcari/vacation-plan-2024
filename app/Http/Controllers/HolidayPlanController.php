<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HolidayPlan;
use App\Http\Requests\VacationsFormRequest;
use App\Http\Controllers\PdfController;
use DateTime;

class HolidayPlanController extends Controller
{
    
    public function index(Request $request)
    {
        $vacations = HolidayPlan::all();
        $messageSuccess = $request->session()->get('message.success');
        return view('vacations.index')->with('vacations', $vacations)->with('messageSuccess', $messageSuccess);
    }

    public function create()
    {
        return view('vacations.create');
    }

    public function store(VacationsFormRequest $request)
    {
        HolidayPlan::create($request->all());
        $request->session()->flash('message.success', 'New holiday plan added with success');
        return to_route('vacations.index');
    }

    public function destroy(Request $request)
    {
        HolidayPlan::destroy($request->vacation);
        $request->session()->flash('message.success', 'Holiday plan removed with success');
        return to_route('vacations.index');
    }

    public function edit($id)
    {
        $vacation = HolidayPlan::find($id);

        return view('vacations.edit')->with('vacation', $vacation);
    }

    public function update(VacationsFormRequest $request, $id)
    {
        $vacation = HolidayPlan::find($id);
        $vacation->title = $request->title;
        $vacation->description = $request->description;
        $vacation->date = $request->date;
        $vacation->location = $request->location;
        $vacation->participants = $request->participants;
        $vacation->save();
        return to_route('vacations.index')->with('message.success', 'Holiday plan updated with success');
    }

    function validateDate($date)
    {
        $d = DateTime::createFromFormat('Y-m-d', $date);
        return $d && $d->format('Y-m-d') == $date;
    }
}