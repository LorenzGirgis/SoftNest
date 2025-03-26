<x-app-layout>
    <body class="bg-gray-100 text-black font-sans">
        <div class="min-h-screen flex flex-col" x-data="{ open: false, confirmDelete: false }">
            <x-navbar></x-navbar>
            <main class="flex-grow p-10">
                <div class="max-w-4xl mx-auto flex space-x-4">
                    <x-profilesection></x-profilesection>
                    <div class="w-3/4 bg-white p-4 shadow-md rounded-lg">
                        <h2 class="text-xl font-semibold mb-4">Account Information</h2>
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="block w-full px-3 py-2 border outline-none focus:outline-none rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="block w-full px-3 py-2 border outline-none focus:outline-none rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div class="flex justify mt-6">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">Save Changes</button>
                            </div>
                        </form>
                        <hr class="my-6">
                        <h2 class="text-xl font-semibold mb-4">Delete Account</h2>
                        <form @submit.prevent="confirmDelete = true">
                            <div class="flex justify mt-6">
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">Delete Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
<x-photomodal></x-photomodal>
<x-deletemodal></x-deletemodal>
    </body>
</x-app-layout>
