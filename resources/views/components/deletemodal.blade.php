<div x-show="confirmDelete" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center" x-transition>
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Are you sure you want to delete your account?</h2>
        <p class="mb-6">This will remove all your data permanently.</p>
        <div class="flex justify-end space-x-2 mt-6">
            <button @click="confirmDelete = false" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">Cancel</button>
            <form action="{{ route('profile.delete') }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">Delete Account</button>
            </form>
        </div>
    </div>
</div>