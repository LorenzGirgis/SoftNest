<x-app-layout>
    <x-navbar></x-navbar>

    <body class="bg-gray-100">
        <main class="container mx-auto py-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800">Create a New Note</h1>
                <p class="text-xl text-gray-700 mt-2">Write down your thoughts or tasks</p>
            </div>
            <div class="max-w-2xl mx-auto">
                <form action="{{ route('store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                        <input type="text" name="title" id="title"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg" placeholder="Note title"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-gray-700 font-bold mb-2">Content (Markdown Supported)</label>
                        <textarea name="content" id="content" rows="10" class="w-full px-4 py-2 border border-gray-300 rounded-lg"
                            placeholder="Write your note here..." required></textarea>
                    </div>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('notes') }}" class="text-gray-500 hover:text-gray-700">Cancel</a>
                        <button type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500 transition">
                            Save Note
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </body>
</x-app-layout>
