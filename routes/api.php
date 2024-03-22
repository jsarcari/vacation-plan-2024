<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\HolidayPlan;
use App\Http\Requests\VacationsFormRequest;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Access in http://localhost:8000/api/vacations as method GET
Route::get('/vacations', function () {
    return HolidayPlan::all();
});

// Access in http://localhost:8000/api/vacations as method POST, sending a new HolidayPlan in JSON format
Route::post('/vacations', function (VacationsFormRequest $request) {
    return response()->json(HolidayPlan::create($request->all()));
});

Route::get('/vacations/{id}', function ($id) {
    return response()->json(HolidayPlan::find($id));
});

Route::put('/vacations/{vacation}', function (HolidayPlan $vacation, VacationsFormRequest $request) {
    $vacation->fill($request->except('_token'));
    $vacation->save();
    return $vacation;
});

Route::delete('/vacations/{id}', function ($id) {
    HolidayPlan::destroy($id);
    return response()->noContent();
});