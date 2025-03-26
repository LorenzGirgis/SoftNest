<x-app-layout>
    <section class="bg-gray-900 min-h-screen flex items-center justify-center">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
            <div class="w-full bg-gray-800 rounded-lg shadow-lg sm:max-w-md xl:p-0">
                <div class="p-6 space-y-6 sm:p-8">
                    <h1 class="text-2xl font-bold leading-tight tracking-tight text-white text-center">
                        Sign in to your SoftNest account
                    </h1>
                    <form class="space-y-6" action="{{ route('login') }}" method="POST">
                        @csrf   
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-300">Password</label>
                            <input type="password" name="password" id="password" class="bg-gray-700 border border-gray-600 text-white sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <a href="#" class="text-sm font-medium text-blue-400 hover:underline">Forgot password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Sign In
                        </button>
                        <p class="text-sm font-light text-gray-400 text-center">
                            Don’t have a SoftNest account? <a href="register" class="font-medium text-blue-400 hover:underline">Create yours now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
  </x-app-layout>
  