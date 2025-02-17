<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-error-message :errors="$errors" />

                        <form action="{{ route('post.store') }}" method="post">
                        @csrf

                        <div>
                            <label for="title">Title: </label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}">
                        </div>
                        <div>
                            <label for="content">Content: </label>
                            <textarea name="content" id="content">{{ old('content') }}</textarea>
                        </div>
                        <div>
                            <input type="submit" value="Create">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    


</x-app-layout>
