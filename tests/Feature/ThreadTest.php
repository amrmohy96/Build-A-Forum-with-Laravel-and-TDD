<?php

namespace Tests\Feature;

use App\Models\Thread;
use Tests\TestCase;

class ThreadTest extends TestCase
{
    /** @test */
    public function a_user_can_browse_threads()
    {
        $thread = factory(Thread::class)->create();
        $response = $this->get('/threads')
            ->assertSee($thread->title);
    }

    /** @test */
    public function a_user_can_browse_thread()
    {
        $thread = factory(Thread::class)->create();
        $response = $this->get($thread->path())
            ->assertSee($thread->title);
    }
}
