<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a new Detail') }}
        </h2>
        <a href="{{ route('details.index') }}" class="text-blue-700 hover:text-blue-800">Go Back</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg font-bold text-center uppercase"> Laravel CRUD </h1>
                </div>
                <div class="px-6 ">
                    @if (session('success'))
                        <div class="p-4 bg-green-100 border-l-4 border-green-400 rounded-b text-green-700">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    @if (session('unsuccess'))
                        <div class="p-4 bg-red-100 border-l-4 border-red-400 rounded-b text-red-700">
                            <strong>{{ session('unsuccess') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="p-6">
                    <form action="{{ route('details.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your full name"
                                value="{{ old('name') }}"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('name') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('name')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your  Email"
                                value="{{ old('email') }}"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('email') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('email')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>


                        <div>
                            <label for="phonenumber">Phone Number</label>
                            <input type="number" name="phonenumber" id="phonenumber" value="{{ old('phonenumber') }}"
                                placeholder="Enter your full Phone Number"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('phonenumber') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('phonenumber')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" placeholder="Enter your  address"
                                value="{{ old('address') }}"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('address') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                            @error('address')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="gender">Gender</label>
                            <div class="flex space-x-3">
                                <div class="">
                                    <input type="radio" name="gender" id="male" value="male"
                                        @if (old('gender') == 'male') checked @endif
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="male" class="ml-2">Male</label>
                                </div>
                                <div class="">
                                    <input type="radio" name="gender" id="female" value="female"
                                        @if (old('gender') == 'female') checked @endif
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                    <label for="female" class="ml-2">Female</label>
                                </div>
                            </div>
                            @error('gender')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>


                        <div>
                            <label for="blood_group">Blood Group</label>
                            <select name="blood_group" id="blood_group"
                                class="w-full px-4 py-2 mt-1 text-gray-900 bg-white border @error('blood_group') border-red-500 @enderror rounded-md focus:outline-none focus:shadow-outline">
                                <option value="">Select Blood Group</option>
                                <option value="A+" @if (old('blood_group') == 'A+') selected @endif>A+</option>
                                <option value="A-" @if (old('blood_group') == 'A-') selected @endif>A-</option>
                                <option value="B+" @if (old('blood_group') == 'B+') selected @endif>B+</option>
                                <option value="B-" @if (old('blood_group') == 'B-') selected @endif>B-</option>
                                <option value="O+" @if (old('blood_group') == 'O+') selected @endif>O+</option>
                                <option value="O-" @if (old('blood_group') == 'O-') selected @endif>O-</option>
                                <option value="AB+" @if (old('blood_group') == 'AB+') selected @endif>AB+</option>
                            </select>
                            @error('blood_group')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex space-x-5">
                            <button type="submit"
                                class="w-full px-4 py-2 mt-1 text-white bg-blue-700 border border-transparent rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Save
                            </button>
                            <button type="reset"
                                class="w-full px-4 py-2 mt-1 text-white bg-gray-700 border border-transparent rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
