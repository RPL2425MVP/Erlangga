<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Staff</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('admin.staff.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Staff</a>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-3">{{ session('success') }}</div>
        @endif

        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">Nama</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staffs as $staff)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $staff->name }}</td>
                            <td class="px-4 py-2">{{ $staff->email }}</td>
                            <td class="px-4 py-2 flex space-x-2">
                                <a href="{{ route('admin.staff.edit', $staff) }}" class="text-blue-600">Edit</a>
                                <form action="{{ route('admin.staff.destroy', $staff) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
