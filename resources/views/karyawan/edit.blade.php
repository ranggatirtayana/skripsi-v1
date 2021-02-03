@extends("layouts.lte")
@section("page-title","Karyawan")
@section("content")
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Edit Karyawan
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('karyawan.update', $karyawan->id) }}">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="kd_pegawai">Kode Karyawan</label>
                                <input type="text" value="{{ $karyawan->kd_pegawai }}" name="kd_pegawai" id="kd_pegawai" required="" class="form-control"  placeholder="Kode Pegawai">
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" value="{{ $karyawan->nama_lengkap }}" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="divisi">Divisi</label>
                                <input type="text" value="{{ $karyawan->divisi }}" name="divisi" class="form-control" id="divisi" required="" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="Laki-laki" @if($karyawan->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                                    <option value="Perempuan" @if($karyawan->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
