@extends("layouts.lte")
@section("page-title","Jadwal")
@section("content")
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Tambah Jadwal
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('jadwal.update', $jadwal->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="kd_pegawai">Kode Karyawan</label>
                            <input class="form-control" type="text" value="{{ $jadwal->kd_pegawai }}" name="kd_pegawai" id="kd_pegawai" required="">
                        </div>
                        <div class="form-group">
                            <label for="jadwal">Jadwal</label>
                            <input class="form-control" type="text" value="{{ $jadwal->jadwal }}" name="jadwal" id="jadwal" required="">
                        </div>

                        <button class="btn btn-primary" type="submit">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
