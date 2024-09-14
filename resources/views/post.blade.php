<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section>
        <div class="container mx-auto px-4 py-20">
            <div class="grid grid-cols-12 ">
                <div class="col-span-12 lg:col-span-4 order-2 lg:order-1">
                    <article class="py-8 max-w-screen-md ">
                        <h2 class="mb-1 text 3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
                        <div class="text-base text-gray-500">
                            <a>IMM Fikom Al-khawarizmi</a> | 1 January 2024
                            @if ($post->hasMedia('thumbnail'))
                                <img src="{{ $post->getFirstMediaUrl('thumbnail', 'thumb') }}" alt="{{ $post->name }}">
                            @else
                                <p>No image available.</p>
                            @endif
                        </div>

                        <div class="text-black-900">
                            <p>
                                {!! $post['content'] !!}
                            </p>

                        </div>
                        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to
                            posts</a>
                    </article>

                </div>
            </div>
        </div>
    </section>

</x-layout>
