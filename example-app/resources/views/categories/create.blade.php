<!-- Kế thừa layout từ Breeze hoặc layout tự tạo -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Thêm danh mục mới
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Form thêm danh mục -->
                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf <!-- Token CSRF để bảo mật -->

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Tên danh mục</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Thêm
                            </button>
                            <a href="{{ route('categories.index') }}" class="ml-4 text-gray-500 hover:text-gray-700">Hủy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>