<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        @if ($post->status === 1)
            <article class="py-8 max-w-screen-md border-b border-gray300">
                <a href="/posts/{{ $post->slug }}" class="hover:underline">
                    <h2 class="mb-1 text 3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
                </a>
                <div class="text-base text-gray-500">
                    <a>IMM Fikom Al-khawarizmi</a> | 1 January 2024
                    @if ($post->hasMedia('thumbnail'))
                        <img src="{{ $post->getFirstMediaUrl('thumbnail', 'thumb') }}" alt="{{ $post->name }}">
                    @else
                        <p>No image available.</p>
                    @endif
                    <p>
                        {!! Str::limit($post['content'], 300) !!}
                    </p>
                    <a href="/posts/{{ $post->slug }}" class="font-medium text-blue-500 hover:underline">Read more
                        &raquo;</a>
                </div>
            </article>
        @endif
    @endforeach

</x-layout>
