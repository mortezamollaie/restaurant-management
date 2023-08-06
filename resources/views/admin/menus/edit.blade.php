<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.menus.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Menu Index</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.menus.update', $menu->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="black text-sm font-medium text-gray-700">Name</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" value="{{ $menu->name }}"
                                    class="black w-full appearance-none rounded-md ">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="black text-sm font-medium text-gray-700">Image</label>
                            <div>
                                <img class="w-32 h-32" src="{{ Storage::url($menu->image) }}" alt="">
                            </div>
                            <div class="mt-1">
                                <input type="file" id="image" name="image"
                                    class="black w-full appearance-none bg-white border border-gray-400 rounded-md  py-2 px-2">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="price" class="black text-sm font-medium text-gray-700">Price</label>
                            <div class="mt-1">
                                <input type="number" min="0.00" max="10000.00" step="0.01" id="price"
                                    name="price" value="{{ $menu->price }}"
                                    class="black w-full transition duration-150 ease-in-out appearance-none rounded-md ">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="description" class="black text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea id="description" rows="3" name="description"
                                    class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2">
                                    {{ $menu->description }}
                                </textarea>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="title" class="black text-sm font-medium text-gray-700">Categories</label>
                            <div class="mt-1">
                                <select id="categories" name="categories[]" class="form-multiselect block w-full mt-1"
                                    multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @selected($menu->categories->contains($category))>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-admin-layout>
