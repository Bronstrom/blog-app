@extends('layouts.master')

<title>{{ config('app.name') }}: {{ $user->name }}</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @component('component.alert-success')
                    @endcomponent

                    <h1>{{ $user->name }}</h1>

                    <h2 style="margin-bottom:5px; margin-top:5px">{{ $user->name }}'s Posts</h2>
                    @foreach ($user->posts as $post)

                    <div class="card">
                        <a href="/post/{{ $post->id }}"><h3>{{ $post->title }}</h3></a>
                    </div>

                    {{ $post->body }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
