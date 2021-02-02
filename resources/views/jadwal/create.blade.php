<html>
<body>
<center>
    <h4>Tambah Data Jadwal</h4>
    <form method="POST" action="{{ route('jadwal.store') }}">
    @csrf
    <table border="0">
        <div>
            <label for="kd_pegawai">Kode Karyawan</label>
            <input type="text" name="kd_pegawai" id="kd_pegawai" required="">
        </div>
        <div>
            <label for="jadwal">Jadwal</label>
            <input type="text" name="jadwal" id="jadwal" required="">
        </div>

        <div>
            <button type="submit">SIMPAN</button>
        </div>
    </table>
    </form>
</center>
</body>
</html>