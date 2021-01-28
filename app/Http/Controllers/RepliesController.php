<?php

namespace App\Http\Controllers;

use App\Models\Thread;

class RepliesController extends Controller
{
    public function store(Thread $thread)
    {
        $thread->addNewReply([
            'body' => request('body'),
            'user_id' => auth()->user()->id
        ]);
        return redirect($thread->path());
    }
}
