@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$thread->title}}
                        <small>by {{$thread->creator->name}}</small>
                    </div>
                    <div class="card-body">
                        <article>{{ $thread->body }}</article>
                    </div>
                </div>
            </div>
        </div>



        @foreach($thread->replies as $reply)
            <div class="row justify-content-center">
                <div class="col-md-8 py-2">
                    <div class="card">
                        @include('threads.reply')
                    </div>
                </div>
                
            </div>
        @endforeach

        @if (auth()->check())
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ $thread->path() . '/replies' }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" id="body" class="form-control" placeholder="Have something to say?" rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Post</button>
                </form>
            </div>
        </div>
        @else
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p>Please sign in to participate</p>
                </div>
            </div>
        @endif
    </div>
@endsection
