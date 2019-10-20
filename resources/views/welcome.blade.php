@extends('layouts.master')

<title>{{ config('app.name') }}: Welcome</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @component('component.alert-success')
                    @endcomponent

                    <h2 style="margin-bottom:5px; margin-top:5px"><i>All Posts</i></h2>
                    @foreach ($posts as $post)
                    <div style="padding-top:1em">
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
