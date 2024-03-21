<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HolidayPlan extends Model
{
    use HasFactory;

    protected $table = 'holidayplans'; // define the database for the model

    protected $fillable = ['title', 'description', 'date', 'location', 'participants']; // atrtributes to be populated with mass assignment
}
