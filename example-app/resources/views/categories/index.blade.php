<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Danh sách danh mục
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Thông báo thành công -->
                    @if (session('success'))
                        <div class="mb-4 text-green-500">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('categories.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                        Thêm mới
                    </a>

                    <ul class="list-disc pl-5">
                        @forelse ($categories as $category)
                            <li>{{ $category->name }}</li>
                        @empty
                            <li>Chưa có danh mục nào.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>