@extends('layouts.master')

<title>{{ config('app.name') }}: Post</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @component('component.alert-success')
                    @endcomponent

                    <h2>{{ $post->title }}</h2>

                    <p><i>Written by: {{ $post->user->name }}</i></p>

                    <!-- Body of post -->
                    {{ $post->body }}
                    <form action="/post/{{ $post-> id}}/comment" method="post">
                      @component('components.postform')
                          @slot('title')
                            <b>Submit</b>
                          @endslot
                      @endcomponent
                    </form>
                    
                    @component('component.alert-danger')
                    @endcomponent

                    <div style="padding-top: 1.5em">
                      <h4>Comments</h4>
                      @forelse ($post->comments as $comment)
                      {{ $comment->body }}</br>
                      @empty
                      No comments</br>
                      @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
