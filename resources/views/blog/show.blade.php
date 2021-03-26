@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-2">
                    <a href="/blog" class="btn btn-primary btn">Go back</a>
                </div>
                <div class="col-6"></div>
                <div class="col-2">
                    <a href="/blog/{{ $post->id }}/edit" class="btn btn-warning text-white">Edit Post</a>
                </div>
                <div class="col-2">
                    <form id="delete-frm" class="" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete Post</button>
                    </form>
                </div>
            </div>
            <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
            <p>{!! $post->body !!}</p>
            <hr>
            <br><br>
        </div>
    </div>
</div>
@endsection