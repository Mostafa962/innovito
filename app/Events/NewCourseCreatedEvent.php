<?php

namespace App\Events;

use App\Models\Course;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewCourseCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $course, $employees;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Course $course, $employees)
    {
        $this->course = $course;
        $this->employees = $employees;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
