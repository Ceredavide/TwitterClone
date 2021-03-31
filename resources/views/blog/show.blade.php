<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <a href="/dashboard" class="btn btn-primary">Indietro</a>
            </div>
            @unless(auth()->user()->id !== $post->user_id)
                <div class="col-3">
                    <form id="delete-frm" class="" action="" method="POST">
                        <a href="/blog/{{ $post->id }}" class="btn btn-warning">Edit Post</a>
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete Post</button>
                    </form>
                </div>
            @endunless
        </div>
        <hr>
        <div class="row">
            <div class="col-12 pt-2">
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
                <p>{!! $post->body !!}</p>
            </div>
        </div>
    </div>
</x-app-layout>
