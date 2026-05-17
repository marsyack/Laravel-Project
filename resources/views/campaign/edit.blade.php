@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6 text-center">
    <br>Edit Campaign
</h1>

<form action="/campaign/{{ $campaign->id }}" method="POST"
      class="max-w-md mx-auto bg-white p-6 rounded shadow">

    @csrf
    @method('PUT')

    {{-- Judul --}}
    <div class="mb-4">
        <label class="block mb-1 font-semibold">Judul</label>
        <input type="text" name="title"
               value="{{ $campaign->title }}"
               class="w-full border p-2 rounded"
               required>
    </div>

    {{-- Deskripsi --}}
    <div class="mb-4">
        <label class="block mb-1 font-semibold">Deskripsi</label>
        <textarea name="description"
                  class="w-full border p-2 rounded"
                  required>{{ $campaign->description }}</textarea>
    </div>

    {{-- Target --}}
    <div class="mb-4">
        <label class="block mb-1 font-semibold">Target Donasi</label>
        <input type="number" name="target_donation"
               value="{{ $campaign->target_donation }}"
               class="w-full border p-2 rounded"
               required>
    </div>

    {{-- Deadline --}}
    <div class="mb-5">
        <label class="block mb-1 font-semibold">Deadline</label>
        <input type="date" name="deadline"
               value="{{ $campaign->deadline }}"
               class="w-full border p-2 rounded"
               required>
    </div>

    <button class="bg-yellow-500 text-white px-4 py-2 rounded w-full">
        Update
    </button>

</form>

@endsection