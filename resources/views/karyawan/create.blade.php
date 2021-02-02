<html>
<body>
<center>
    <h4>Tambah Data Karyawan</h4>
    <form method="POST" action="{{ route('karyawan.store') }}">
    @csrf
    <table border="0">
        <div>
            <label for="kd_pegawai">Kode Karyawan</label>
            <input type="text" name="kd_pegawai" id="kd_pegawai" required="">
        </div>
        <div>
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" required="">
        </div>
        <div>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div>
            <label for="divisi">Divisi</label>
            <input type="text" name="divisi" id="divisi" required="">
        </div>

        <div>
            <button type="submit">SIMPAN</button>
        </div>
    </table>
    </form>
</center>
</body>
</html>