<?php

namespace Tests\Feature;

use App\Models\Reply;
use App\Models\Thread;
use Tests\TestCase;

class ReadThreadTest extends TestCase
{
    protected $thread;
    protected function setUp(): void
    {
        parent::setUp();
        $this->thread = factory(Thread::class)->create();
    }

    /** @test */
     function a_user_can_browse_threads()
    {

        $response = $this->get('/threads')
            ->assertSee($this->thread->title);
    }

    /** @test */
     function a_user_can_browse_thread()
    {
        $response = $this->get($this->thread->path())
            ->assertSee($this->thread->title);
    }

    /** @test */
    function a_user_read_replies_that_associate_with_threads()
    {
        $reply = factory(Reply::class)->create(['thread_id' => $this->thread->id]);
        $this->get($this->thread->path())->
        assertSee($reply->body);
    }


}
