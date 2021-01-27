@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>All Threads</h2></div>
                    <div class="card-body">
                        @foreach($threads as $thread)
                            <article>
                                <a href="{{$thread->path()}}"><h3>{{$thread->title}}</h3></a>
                                <p class="lead">{{$thread->body}}</p>
                               <p><a href="#">{{$thread->creator->name}}</a> <span>{{$thread->created_at->diffForHumans()}}</span> </p>
                            </article>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
