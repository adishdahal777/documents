<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-lg font-bold text-center uppercase"> List of Details </h1>
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
                    {{-- Table for the details inserted --}}

                    <table class="table-auto w-full border">
                        <thead>
                            <tr class="bg-gray-100">
                                <th colspan="7" class="px-4 py-2 text-left text-sm font-semibold text-gray-900">
                                    <a href="{{ route('details.create') }}"
                                        class="text-blue-700 hover:text-blue-800">Create a new
                                        Detail</a>
                                </th>
                            </tr>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Name</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Email</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Phone Number</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Address</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Gender</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Blood Group</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-900">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $detail)
                                <tr class="bg-white border-b">
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->name }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->email }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->phonenumber }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->address }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->gender }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">{{ $detail->blood_group }}</td>
                                    <td class="px-4 py-2 text-sm text-gray-900">
                                        <a href="{{ route('details.delete', $detail->id) }}"
                                            class="text-red-700 hover:text-red-800">Delete</a>
                                        <a href="{{ route('details.edit', $detail->id) }}"
                                            class="text-blue-700 hover:text-blue-800">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
