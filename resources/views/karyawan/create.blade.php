@extends("layouts.lte")
@section("page-title","Karyawan")
@section("content")
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Tambah Karyawan
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('karyawan.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="kd_pegawai">Kode Karyawan</label>
                            <input class="form-control" type="text" name="kd_pegawai" id="kd_pegawai" required="">
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" required="">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="divisi">Divisi</label>
                            <input class="form-control" type="text" name="divisi" id="divisi" required="">
                        </div>

                        <button class="btn btn-primary" type="submit">SIMPAN</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

