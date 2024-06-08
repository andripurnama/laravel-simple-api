<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Events\SubmissionSaved;
use App\Listeners\LogSubmissionSaved;
use Illuminate\Support\Facades\Log;
use Mockery;
use Mockery\MockInterface;

class LogSubmissionSavedTest extends TestCase
{
    use RefreshDatabase;
    public function test_logs_a_message_when_submission_is_saved(): void
    {
        Log::shouldReceive('info')
            ->once()
            ->with('Submission saved successfully', ['name' => 'John Doe', 'email' => 'john@example.com', 'message' => 'This is a test message']);

        $listener = new LogSubmissionSaved();
        $event = new SubmissionSaved('John Doe', 'john@example.com', 'This is a test message');
        $listener->handle($event);
    }
}
