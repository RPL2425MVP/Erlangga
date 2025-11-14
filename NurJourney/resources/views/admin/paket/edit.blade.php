<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Paket</h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto bg-white shadow rounded-lg p-6">
        <form method="POST" action="{{ route('admin.paket.update', $paket->id) }}">
            @csrf @method('PUT')
            <div class="mb-4">
                <label>Nama Paket</label>
                <input type="text" name="nama_paket" value="{{ $paket->nama_paket }}" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="w-full border p-2 rounded">{{ $paket->deskripsi }}</textarea>
            </div>
            <div class="mb-4">
                <label>Harga</label>
                <input type="number" name="harga" value="{{ $paket->harga }}" class="w-full border p-2 rounded" required>
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
