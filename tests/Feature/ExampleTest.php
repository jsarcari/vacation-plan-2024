<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\HolidayPlan;
use App\Http\Controllers\HolidayPlanController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }

    public function test_the_date_format_all_data_are_valid()
    {
        $invalid = null;

        $vacations = HolidayPlan::all();
        $controller = new HolidayPlanController();

        foreach ($vacations as $vacation) {
            if (!$controller->validateDate($vacation->date)) {
                $invalid = $vacation;
            }
        }

        $this->assertNull($invalid);
    }
}
