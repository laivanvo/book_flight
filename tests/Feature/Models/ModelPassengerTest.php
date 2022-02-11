<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\passenger;

class TestPassenger extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFillable()
    {
        $passenger = new passenger();
        $this->assertEquals(['bill_id','name_passenger','CMND','phone','age','gender','nationality'], $passenger->getFillable());
    }
}
