@csrf

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
        <label class="block font-semibold mb-1">Nama</label>
        <input type="text" name="nama"
               value="{{ old('nama', $memorial->nama ?? '') }}"
               class="w-full border rounded-lg px-4 py-2">
    </div>

    <div>
        <label class="block font-semibold mb-1">Hubungan</label>
        <input type="text" name="hubungan"
               value="{{ old('hubungan', $memorial->hubungan ?? '') }}"
               class="w-full border rounded-lg px-4 py-2">
    </div>

    <div>
        <label class="block font-semibold mb-1">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir"
               value="{{ old('tanggal_lahir', $memorial->tanggal_lahir ?? '') }}"
               class="w-full border rounded-lg px-4 py-2">
    </div>

    <div>
        <label class="block font-semibold mb-1">Tanggal Wafat</label>
        <input type="date" name="tanggal_wafat"
               value="{{ old('tanggal_wafat', $memorial->tanggal_wafat ?? '') }}"
               class="w-full border rounded-lg px-4 py-2">
    </div>
</div>

<div class="mt-4">
    <label class="block font-semibold mb-1">Foto</label>
    <input type="file" name="foto"
           class="w-full border rounded-lg px-4 py-2">
</div>

<div class="mt-4">
    <label class="block font-semibold mb-1">Cerita Kenangan</label>
    <textarea name="cerita" rows="5"
              class="w-full border rounded-lg px-4 py-2">{{ old('cerita', $memorial->cerita ?? '') }}</textarea>
</div>

<div class="mt-4">
    <label class="block font-semibold mb-1">Doa</label>
    <textarea name="doa" rows="4"
              class="w-full border rounded-lg px-4 py-2">{{ old('doa', $memorial->doa ?? '') }}</textarea>
</div>

<button type="submit"
        class="mt-6 bg-rose-500 text-white px-6 py-2 rounded-lg hover:bg-rose-600">
    Simpan
</button>