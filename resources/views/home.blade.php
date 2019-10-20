@extends('layouts.master')

<title>{{ config('app.name') }}: Home</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @component('component.alert-success')
                    @endcomponent

                    <form action="/post" method="post">
                        @component('components.postform')
                            @slot('title')
                              <b>Submit</b>
                            @endslot
                        @endcomponent
                    </form>

                    @component('component.alert-danger')
                    @endcomponent

                    <h2 style="margin-bottom:5px; margin-top:5px">Your Posts</h2>
                    @foreach ($posts as $post)
                    <a href="/post/{{ $post->id }}"><h3>{{ $post->title }}</h3></a>

                    {{ $post->body }}
                    </br><a href="{{ route('post.edit', $post->id) }}">Edit Post</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
