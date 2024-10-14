<div>
    <input type="text" wire:model="search" placeholder="Search posts..." />

    <ul>
        @foreach($posts as $post)
            <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
</div>
