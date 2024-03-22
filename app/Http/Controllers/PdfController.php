<?php

namespace App\Http\Controllers;

use App\Models\HolidayPlan;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController
{
    public function download($id)
    {
        $vacation = HolidayPlan::find($id);
        $data = ['title' => $vacation->title, 'description' => $vacation->description, 'date' => $vacation->date, 'location' => $vacation->location, 'participants' => $vacation->participants];
        $pdf = Pdf::loadView('pdf', ['data' => $data]);
        return $pdf->download('vacation.pdf'); 
    }
}