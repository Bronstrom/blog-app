@extends('layouts.master')

<title>{{ config('app.name') }}: Edit Post</title>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @component('component.alert-success')
                    @endcomponent

                    <form method="post" action="{{ route('post.update', $post->id) }}">
                        @method('PATCH')
                        @component('components.postform')
                            @slot('title')
                              <b>Update</b>
                            @endslot
                        @endcomponent
                    </form>

                    @component('component.alert-danger')
                    @endcomponent

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
