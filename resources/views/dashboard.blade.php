<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-10">
                        <h1 class="display-one text-white">Blog Trap!</h1>
                        <p class="text-white">Ao spiazzati questo blog</p>
                    </div>
                    <div class="col-2">
                        <a href="/blog" class="btn btn-outline-success">Nuovo Post</a>
                    </div>
                </div>
                @forelse($posts as $post)
                    <ul class="list-group">
                        <li class="list-group-item my-1">
                            <a href="/dashboard/{{ $post->id }}">{{ ucfirst($post->title) }}</a>
                            <p>{{ ucfirst($post->user->name) }}</p>
                            <p>{{ ucfirst($post->created_at->format('d/m/Y')) }}</p>
                        </li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
