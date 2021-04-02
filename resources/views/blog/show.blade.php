<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <a href="/dashboard" class="btn btn-primary">Indietro</a>
            </div>
            @unless(auth()->user()->id !== $post->user_id)
                <div class="col-3">
                    <form id="delete-frm" class="" action="/blog/{{ $post->id }}" method="POST">
                        <a href="/blog/{{ $post->id }}" class="btn btn-warning">Modifica Post</a>
                        @csrf
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                            Elimina Post
                        </button>
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

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteModalLabel">Elimina post</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   Sei sicuro di voler eliminare il post? L'operazione è irreversibile
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                    <button type="button" class="btn btn-danger">Elimina</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
