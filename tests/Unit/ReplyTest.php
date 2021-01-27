<?php

namespace Tests\Unit;

use App\Models\Reply;
use App\Models\User;
use Tests\TestCase;

class ReplyTest extends TestCase
{

    /** @test */
    function a_reply_has_owner()
    {
        $reply = factory(Reply::class)->create();
        $this->assertInstanceOf(User::class,$reply->owner);
    }
}
