@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6 text-center">
    <br>Tambah Campaign
</h1>

<form action="/campaign" method="POST"
      class="max-w-md mx-auto bg-white p-6 rounded shadow">

    @csrf

    {{-- Judul --}}
    <div class="mb-4">
        <label class="block mb-1 font-semibold">Judul</label>
        <input type="text" name="title"
               class="w-full border p-2 rounded"
               placeholder="Masukkan judul campaign"
               required>
    </div>

    {{-- Deskripsi --}}
    <div class="mb-4">
        <label class="block mb-1 font-semibold">Deskripsi</label>
        <textarea name="description"
                  class="w-full border p-2 rounded"
                  placeholder="Masukkan deskripsi campaign"
                  required></textarea>
    </div>

    {{-- Target Donasi --}}
    <div class="mb-4">
        <label class="block mb-1 font-semibold">Target Donasi</label>
        <input type="number" name="target_donation"
               class="w-full border p-2 rounded"
               placeholder="Contoh: 1000000"
               required>
    </div>

    {{-- Deadline --}}
    <div class="mb-5">
        <label class="block mb-1 font-semibold">Deadline</label>
        <input type="date" name="deadline"
               class="w-full border p-2 rounded"
               required>
    </div>

    {{-- Tombol --}}
    <button class="bg-green-500 text-white px-4 py-2 rounded w-full hover:bg-green-600">
        Simpan
    </button>

</form>

@endsection