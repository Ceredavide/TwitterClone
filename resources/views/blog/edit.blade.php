<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/dashboard" class="btn btn-primary">Indietro</a>
                <div class="border rounded mt-3 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Modifica Post</h1>
                    <p>Qui puoi apportare delle modifiche al post creato in precedenza.</p>

                    <hr>

                    <form method="POST" action="/blog/{{ $post->id }}">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Titolo:</label>
                                <input type="text" id="title" class="form-control" name="title"
                                    placeholder="Enter Post Title" value="{{ $post->title }}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Testo:</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Enter Post Body"
                                    rows="5" required>{{ $post->body }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Post
                                </button>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
