<html>
<body>
<center>
    <h4>Edit Data Jadwal</h4>
    <form method="POST" action="{{ route('jadwal.update', $jadwal->id) }}">
    @csrf
    <table border="0">
        <div>
            <label for="kd_pegawai">Kode Karyawan</label>
            <input type="text" value="{{ $jadwal->kd_pegawai }}" name="kd_pegawai" id="kd_pegawai" required="">
        </div>
        <div>
            <label for="jadwal">Jadwal</label>
            <input type="text" value="{{ $jadwal->jadwal }}" name="jadwal" id="jadwal" required="">
        </div>

        <div>
            <button type="submit">SIMPAN</button>
        </div>
    </table>
    </form>
</center>
</body>
</html>