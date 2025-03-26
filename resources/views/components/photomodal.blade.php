            <div x-show="open" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md mx-auto">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800">Change Profile Picture</h2>
                    <form action="{{ route('photo.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="profile_picture" class="block text-sm font-medium text-gray-700 mb-2">Select New Photo</label>
                            <input type="file" name="profile_picture" id="profile_picture" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>
                        <div class="flex justify-end space-x-2 mt-6">
                            <button type="button" @click="open = false" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-md transition duration-300">Cancel</button>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md transition duration-300">Save</button>
                        </div>
                    </form>
                </div>
            </div>