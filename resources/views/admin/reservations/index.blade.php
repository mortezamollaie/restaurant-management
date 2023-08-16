<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservations.create') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Reservation</a>
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-200">
                                Name
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-200">
                                Email
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-200">
                                Reservation Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-200">
                                Table
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-200">
                                Guest
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray">
                                    {{ $reservation->first_name }}

                                    {{ $reservation->last_name }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray">
                                    {{ $reservation->email }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray">
                                    {{ $reservation->res_date }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray">
                                    {{ $reservation->table_id }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap dark:text-gray">
                                    {{ $reservation->guest_number }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
