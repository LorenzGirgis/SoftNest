<x-app-layout>
    <section class="bg-gray-900 min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md mx-auto p-8 bg-gray-800 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold leading-tight tracking-tight text-white text-center mb-6">
                Create Your Softnest Account
            </h1>
            <form action="{{ route('register') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-300">Name</label>
                    <input type="text" name="name" id="name" class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-300">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required>
                </div>
                <div>
                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-300">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required>
                </div>
                <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center">
                    Create Account
                </button>
                <p class="text-sm font-light text-gray-400 text-center mt-4">
                    Already have a SoftNest account? <a href="{{ route('login') }}" class="font-medium text-blue-400 hover:underline">Login here</a>
                </p>
            </form>
        </div>
    </section>
</x-app-layout>
