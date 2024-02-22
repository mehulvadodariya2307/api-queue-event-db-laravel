<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_submits_data_and_creates_a_submission()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'Test message',
        ];

        $response = $this->postJson('api/submit', $data);

        $response->assertSuccessful();
        $this->assertDatabaseHas('submissions', $data);
    }
}
