<form action="{{ route('santri.update', $santri->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $santri->nama }}" required>
    </div>
    <div>
        <label for="ttl">Tempat, Tanggal Lahir:</label>
        <input type="text" name="ttl" id="ttl" value="{{ $santri->ttl }}" required>
    </div>
    <div>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="L" {{ $santri->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ $santri->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>
    <div>
        <label for="anak_ke">Anak Ke:</label>
        <input type="number" name="anak_ke" id="anak_ke" value="{{ $santri->anak_ke }}" required>
    </div>
    <div>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required>{{ $santri->alamat }}</textarea>
    </div>
    <div>
        <label for="asal_sekolah">Asal Sekolah:</label>
        <input type="text" name="asal_sekolah" id="asal_sekolah" value="{{ $santri->asal_sekolah }}" required>
    </div>
    <div>
        <button type="submit">Update Santri</button>
    </div>
</form>
