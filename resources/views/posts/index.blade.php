<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('post.create') }}" class="font-bold mb-4 inline-block">Create post</a>

                    <ul class="space-y-10">
                            @foreach($posts as $post)
                                <li class="border p-4 rounded-md shadow-sm">
                                    <h2 class="font-bold text-lg mb-2">Title: {{ $post->title }}</h2>
                                    <p class="text-gray-700 mb-2">Content: {{ $post->content }}</p>
                                    <div class="space-x-2">
                                        <a href="{{ route('post.show', $post) }}" class="text-blue-500 hover:text-blue-700">Show</a>
                                        <a href="{{ route('post.edit', $post) }}" class="text-yellow-500 hover:text-yellow-700">Edit</a>
                                        <form action="{{ route('post.destroy', $post) }}" method="post" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-500 hover:text-red-700">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
