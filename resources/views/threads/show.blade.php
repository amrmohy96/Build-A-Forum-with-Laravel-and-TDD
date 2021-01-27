@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>All Threads</h2></div>
                    <div class="card-body">
                            <article>
                                <h3>{{$thread->title}}</h3>
                                <p class="lead">{{$thread->body}}</p>
                            </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
