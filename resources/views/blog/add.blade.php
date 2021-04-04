<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/dashboard" class="btn btn-primary">Indietro</a>
                <div class="border rounded mt-3 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Crea un nuovo Post</h1>
                    <p>Condividi con gli altri utenti a cosa stai pensando</p>
                    <hr>
                    <form action="/blog" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Titolo</label>
                                <input type="text" id="title" class="form-control" name="title"
                                    placeholder="Inserisci un titolo" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Testo:</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Inserisci del testo"
                                    rows="" required></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-success">
                                    Crea Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
