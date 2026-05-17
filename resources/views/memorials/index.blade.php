@extends('layouts.app')

@section('content')
<div class="text-center mb-8">
    <h2 class="text-4xl font-bold text-gray-800">
        Kenangan yang Tak Pernah Hilang
    </h2>
    <p class="text-gray-600 mt-2">
        Simpan cerita dan doa untuk orang-orang tercinta.
    </p>
</div>

<form method="GET" class="mb-6">
    <input type="text" name="search" value="{{ $search }}"
           placeholder="Cari berdasarkan nama..."
           class="w-full border rounded-lg px-4 py-3">
</form>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @forelse($memorials as $memorial)
        <div class="bg-white rounded-2xl shadow p-4">
            @if($memorial->foto)
                <img src="{{ asset('storage/' . $memorial->foto) }}"
                     class="w-full h-56 object-cover rounded-xl mb-4">
            @endif

            <h3 class="text-xl font-bold">{{ $memorial->nama }}</h3>
            <p class="text-sm text-gray-500">{{ $memorial->hubungan }}</p>

            <div class="mt-4 flex gap-2">
                <a href="{{ route('memorials.show', $memorial) }}"
                   class="bg-blue-500 text-white px-3 py-1 rounded">
                    Detail
                </a>

                <a href="{{ route('memorials.edit', $memorial) }}"
                   class="bg-yellow-500 text-white px-3 py-1 rounded">
                    Edit
                </a>

                <form action="{{ route('memorials.destroy', $memorial) }}"
                      method="POST"
                      onsubmit="return confirm('Yakin ingin menghapus?')">
                    @csrf
                    @method('DELETE')

                    <button class="bg-red-500 text-white px-3 py-1 rounded">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    @empty
        <p class="text-gray-500">Belum ada kenangan.</p>
    @endforelse
</div>
@endsection