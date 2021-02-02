<html>
<body>
<center>
    <h4>Tambah Data Peserta</h4>
    <form method="POST" action="{{ route('peserta.update', $peserta->id) }}">
    @csrf
    <table border="0">
        <div>
            <label for="nis">NIS</label>
            <input type="number" value="{{ $peserta->nis }}" name="nis" id="nis" required="">
        </div>
        <div>
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" value="{{ $peserta->nama_lengkap }}" name="nama_lengkap" id="nama_lengkap" required="">
        </div>
        <div>
            <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas">
                <option value="X RPL" @if($peserta->kelas == 'X RPL') selected @endif>X RPL</option>
                <option value="XI RPL" @if($peserta->kelas == 'XI RPL') selected @endif>XI RPL</option>
                <option value="XII RPL" @if($peserta->kelas == 'XII RPL') selected @endif>XII RPL</option>
            </select>
        </div>
        <div>
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="3">{{ $peserta->alamat }}</textarea>
        </div>

        <div>
            <button type="submit">SIMPAN</button>
        </div>
    </table>
    </form>
</center>
</body>
</html>