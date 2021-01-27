@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <article>
                            <h3>{{$thread->title}}</h3>
                            <p class="lead">{{$thread->body}}</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($thread->replies as $reply)
                    <div class="card">
                        <div class="card-header">
                          <strong>{{$reply->owner->name}}</strong> said
                            {{$reply->created_at->diffForHumans()}}
                        </div>
                        <div class="card-body">
                            <p class="lead">{{$reply->body}}</p>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
@endsection
