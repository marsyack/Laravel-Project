@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">
        Data Campaign
    </h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-5">
        <a href="{{ route('campaign.create') }}"
           class="inline-block bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded-lg shadow">
            + Tambah Campaign
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full text-sm text-gray-700">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-left font-bold">Judul</th>
                    <th class="px-4 py-3 text-left font-bold">Target</th>
                    <th class="px-4 py-3 text-left font-bold">Terkumpul</th>
                    <th class="px-4 py-3 text-center font-bold">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($campaigns as $campaign)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-4">
                            {{ $campaign->title }}
                        </td>

                        <td class="px-4 py-4">
                            Rp {{ number_format($campaign->target_donation, 0, ',', '.') }}
                        </td>

                        <td class="px-4 py-4">
                            Rp {{ number_format($campaign->collected ?? 0, 0, ',', '.') }}
                        </td>

                        <td class="px-4 py-4 text-center">
                            <div class="flex justify-center gap-2">

                                <!-- Edit -->
                                <a href="{{ route('campaign.edit', $campaign->id) }}"
                                   class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 rounded text-sm font-medium">
                                    Edit
                                </a>

                                <!-- Hapus -->
                                <form action="{{ route('campaign.destroy', $campaign->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus campaign ini?')"
                                      class="inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm font-medium">
                                        Hapus
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-gray-500">
                            Belum ada data campaign.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection