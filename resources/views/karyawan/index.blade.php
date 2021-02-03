@extends("layouts.lte")
@section("page-title","Daftar Karyawan")
@section("content")
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Daftar Karyawan
                    <div class="card-tools">

                        <a href="{{ route('karyawan.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i>
                            Tambah Karyawan
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Karyawan</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Divisi</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- $karyawan hasil dari compact/parsing tadi -->
                        @forelse($karyawan as $vk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $vk->kd_pegawai }}</td>
                                <td>{{ $vk->nama_lengkap }}</td>
                                <td>{{ $vk->jenis_kelamin }}</td>
                                <td>{{ $vk->divisi }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('karyawan.edit', $vk->id) }}">Edit</a>
                                    <a class="btn btn-danger" href="{{ route('karyawan.destroy', $vk->id) }}" onclick="return confirm('Hapus data dengan nama {{ $vk->nama_lengkap }}')">Hapus</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7"><b><i>Data Tidak Ditemukan</i></b></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
