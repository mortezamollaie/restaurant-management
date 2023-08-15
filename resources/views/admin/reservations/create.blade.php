<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.reservations.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Reservation Index</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.reservations.store') }}">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="first_name" class="black text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1">
                                <input type="text" id="first_name" name="first_name"
                                    class="black w-full appearance-none rounded-md ">
                            </div>
                            @error('first_name')
                                <div class="text-sm text-red-400">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="last_name" class="black text-sm font-medium text-gray-700">Last Name</label>
                            <div class="mt-1">
                                <input type="text" id="last_name" name="last_name"
                                    class="black w-full appearance-none rounded-md ">
                            </div>
                            @error('last_name')
                                <div class="text-sm text-red-400">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="email" class="black text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email"
                                    class="black w-full appearance-none rounded-md ">
                            </div>
                            @error('email')
                                <div class="text-sm text-red-400">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="tel_number" class="black text-sm font-medium text-gray-700">Phone number</label>
                            <div class="mt-1">
                                <input type="text" id="tel_number" name="tel_number"
                                    class="black w-full appearance-none rounded-md ">
                            </div>
                            @error('tel_number')
                                <div class="text-sm text-red-400">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="res_date" class="black text-sm font-medium text-gray-700">Reservation
                                Date</label>
                            <div class="mt-1">
                                <input type="datetime-local" id="res_date" name="res_date"
                                    class="black w-full appearance-none rounded-md ">
                            </div>
                            @error('res_date')
                                <div class="text-sm text-red-400">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="black text-sm font-medium text-gray-700">Guest
                                Number</label>
                            <div class="mt-1">
                                <input type="number" id="guest_number" name="guest_number"
                                    class="black w-full 
                                    appearance-none
                                    bg-white
                                    border border-gray-400 rounded-md 
                                    py-2 px-3 test-base">
                            </div>
                            @error('guest_number')
                                <div class="text-sm text-red-400">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="status" class="black text-sm font-medium text-gray-700">Table</label>
                            <div class="mt-1">
                                <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}">{{ $table->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-admin-layout>
