@extends('layouts.app')

@section('content')
<div class="bg-white rounded-2xl shadow p-8 max-w-4xl mx-auto">
    @if($memorial->foto)
        <img src="{{ asset('storage/' . $memorial->foto) }}"
             class="w-full max-h-[500px] object-cover rounded-xl mb-6">
    @endif

    <h2 class="text-4xl font-bold mb-2">{{ $memorial->nama }}</h2>
    <p class="text-gray-500 mb-6">{{ $memorial->hubungan }}</p>

    <h3 class="text-xl font-semibold mb-2">Cerita Kenangan</h3>
    <p class="text-gray-700 whitespace-pre-line mb-6">
        {{ $memorial->cerita }}
    </p>

    <h3 class="text-xl font-semibold mb-2">Doa</h3>
    <p class="text-gray-700 whitespace-pre-line">
        {{ $memorial->doa }}
    </p>

    <a href="{{ route('memorials.index') }}"
       class="inline-block mt-6 bg-gray-500 text-white px-4 py-2 rounded-lg">
        Kembali
    </a>
</div>
@endsection