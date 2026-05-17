@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto px-6 py-10">
    <div class="bg-white shadow-md rounded-lg p-6">

        <h1 class="text-2xl font-bold text-center mb-6">
            Form Donasi
        </h1>

        <form action="{{ route('donasi.store') }}" method="POST">
            @csrf

            <!-- Pilih Campaign -->
            <label class="block mb-2 font-medium">Pilih Campaign</label>
            <select name="campaign_id"
                    class="w-full border rounded-lg px-4 py-2 mb-4"
                    required>
                <option value="">-- Pilih Campaign --</option>
                @foreach($campaigns as $campaign)
                    <option value="{{ $campaign->id }}">
                        {{ $campaign->title }}
                    </option>
                @endforeach
            </select>

            @error('campaign_id')
                <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
            @enderror

            <!-- Nominal Donasi -->
            <label class="block mb-2 font-medium">Nominal Donasi</label>
            <input type="number"
                   name="nominal"
                   min="1000"
                   required
                   class="w-full border rounded-lg px-4 py-2 mb-4"
                   placeholder="Masukkan nominal donasi">

            @error('nominal')
                <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
            @enderror

            <!-- Submit -->
            <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 rounded-lg">
                Kirim Donasi
            </button>
        </form>

    </div>
</div>
@endsection