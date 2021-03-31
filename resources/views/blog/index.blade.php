<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Blog Trap
        </h2>
    </x-slot>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <div class="row">
                        <div class="col-8">
                            <h1 class="display-one">Our Blog!</h1>
                            <p>Enjoy reading our posts. Click on a post to read!</p>
                        </div>
                        <div class="col-4">
                            <p>Create new Post</p>
                            <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                        </div>
                    </div>
                    @forelse($posts as $post)
                        <ul class="list-group">
                            <li class="list-group-item my-1">
                                <a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a>
                            </li>
                        </ul>
                    @empty
                        <p class="text-warning">No blog Posts available</p>
                    @endforelse
                </div>
            </div>
        </div>
</x-app-layout>
