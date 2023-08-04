<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.tables.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Table Index</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form enctype="multipart/form-data">
                        <div class="sm:col-span-6">
                            <label for="title" class="black text-sm font-medium text-gray-700">Name</label>
                            <div class="mt-1">
                                <input type="text" id="title" wire:model.lazy="title" name="title"
                                    class="black w-full transition duration-150 ease-in-out appearance-none rounded-md ">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="title" class="black text-sm font-medium text-gray-700">Image</label>
                            <div class="mt-1">
                                <input type="file" id="image" wire:model="newImage" name="image"
                                    class="black w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md  py-2 px-2">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="title" class="black text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea id="body" rows="3" wire:model.lazy="body"
                                    class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2">
                                </textarea>
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
