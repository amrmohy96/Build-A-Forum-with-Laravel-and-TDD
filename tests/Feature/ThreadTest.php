<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ThreadTest extends TestCase
{
    /** @test */
    public function a_user_can_browse_threads()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
