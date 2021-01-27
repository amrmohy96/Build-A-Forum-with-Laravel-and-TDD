<?php

namespace Tests\Unit;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class ThreadTest extends TestCase
{
    protected $thread;
    protected function setUp(): void
    {
        parent::setUp();
        $this->thread =  factory(Thread::class)->create();
    }

    /** @test */
    function a_thread_has_many_replies()
    {
        $this->assertInstanceOf(Collection::class,$this->thread->replies);
    }

    /** @test */
    function a_thread_has_creator()
    {
        $this->assertInstanceOf(User::class,$this->thread->creator);
    }

    /** @test */
    function a_thread_can_add_new_reply()
    {
        $this->thread->addNewReply([
            'body' => 'test',
            'user_id' => 1
        ]);
        $this->assertCount(1,$this->thread->replies);
    }
}


