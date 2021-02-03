@extends("layouts.lte")
@section("page-title","Daftar Jadwal")
@section("content")
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Daftar Jadwal
                    <div class="card-tools">

                        <a href="{{ route('jadwal.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i>
                            Tambah Jadwal
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Karyawan</th>
                            <th>Jadwal</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- $jadwal hasil dari compact/parsing tadi -->
                        @forelse($jadwal as $vk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $vk->kd_pegawai }}</td>
                                <td>{{ $vk->jadwal }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{url("send-notification",$vk->id)}}">Kirim Notifikasi</a>
                                    <a class="btn btn-primary" href="{{ route('jadwal.edit', $vk->id) }}">Edit</a>
                                    <a class="btn btn-danger" href="{{ route('jadwal.destroy', $vk->id) }}" onclick="return confirm('Hapus data dengan Kode Pegawai {{ $vk->kd_pegawai }}')">Hapus</a>
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

