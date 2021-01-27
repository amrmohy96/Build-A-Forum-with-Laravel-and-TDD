<?php

namespace Tests\Feature;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Tests\TestCase;

class ParticipateInFormTest extends TestCase
{
    /** @test */
    function an_authenticated_user_can_participate_in_forum_threads()
    {
        $this->actingAs($user = factory(User::class)->create());
        $thread = factory(Thread::class)->create();
        $reply = factory(Reply::class)->create();
        $this->post('threads/'.$thread->id.'/replies',$reply->toArray());
        $this->get($thread->path())->assertSee($reply->body);
    }
}
