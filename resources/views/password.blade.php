<x-app-layout>
    <body class="bg-gray-100 text-black font-sans">
        <div class="min-h-screen flex flex-col" x-data="{ open: false }">
            <x-navbar></x-navbar>
            <main class="flex-grow p-10">
                <div class="max-w-4xl mx-auto flex space-x-4">
                    <x-profilesection> </x-profilesection>
                    <div class="w-3/4 bg-white p-4 shadow-md rounded-lg">
                        <h2 class="text-xl font-semibold mb-4">Change Password</h2> 
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                                <input type="password" name="current_password" id="current_password" class="block w-full px-3 py-2 border outline-none focus:outline-none rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                                <input type="password" name="password" id="password" class="block w-full px-3 py-2 border outline-none focus:outline-none rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div class="mb-4">
                                <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="block w-full px-3 py-2 border outline-none focus:outline-none rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div class="flex justify mt-6">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
            <x-photomodal></x-photomodal>
    </body>
</x-app-layout>
