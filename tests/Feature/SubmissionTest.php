<?php

namespace Tests\Feature;

use App\Events\SubmissionSaved;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Event;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;
    public function test_return_422_when_message_is_required(): void
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => ''
        ];

        $response = $this->postJson('/api/submit', $data);

        $response->assertStatus(422)->assertJsonValidationErrors(['message'])->assertJsonFragment(['A message is required']);
    }

    public function test_return_success_when_submission_is_submit()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test message'
        ];
        $response = $this->postJson('/api/submit', $data);

        // Assert: Check that the response is successful
        $response->assertStatus(201);
    }
}
