<form action="{{ route('santri.store') }}" method="POST">
    @csrf
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
    </div>
    <div>
        <label for="ttl">Tempat, Tanggal Lahir:</label>
        <input type="text" name="ttl" id="ttl" required>
    </div>
    <div>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div>
        <label for="anak_ke">Anak Ke:</label>
        <input type="number" name="anak_ke" id="anak_ke" required>
    </div>
    <div>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required></textarea>
    </div>
    <div>
        <label for="asal_sekolah">Asal Sekolah:</label>
        <input type="text" name="asal_sekolah" id="asal_sekolah" required>
    </div>
    <div>
        <button type="submit">Tambah Santri</button>
    </div>
</form>
