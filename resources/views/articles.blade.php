<x-app-layout>
    <x-navbar></x-navbar>

    <body class="bg-gray-100">
        <main class="container mx-auto py-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800">{{ explode(' ', Auth::user()->name)[0] }}'s Article</h2>
            </div>

            <div class="text-center mb-8">
                <a href="{{ route('create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">
                    Add New Article
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($parsedArticles as $article)
                    <div class="bg-white shadow-md rounded-lg p-4 relative">
                        <h2 class="text-lg font-bold text-gray-800">{{ $article->title }}</h2>
                        <div class="text-gray-600 mt-2">{!! $article->content !!}</div>

                        <form action="{{ route('destroy', $article->id) }}" method="POST" class="absolute top-2 right-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </form>
                    </div>
                @endforeach
                @if ($parsedArticles->isEmpty())
                    <p class="text-gray-700 text-center col-span-full">No article's yet. Start by creating one!</p>
                @endif
            </div>
        </main>
    </body>
</x-app-layout>
