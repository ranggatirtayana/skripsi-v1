@extends("layouts.lte")
@section("page-title","Peserta")
@section("content")
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Edit Peserta
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('peserta.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="number"  name="nis" id="nis" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" required="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select name="kelas" id="kelas" class="form-control">
                                <option value="X RPL">X RPL</option>
                                <option value="XI RPL">XI RPL</option>
                                <option value="XII RPL">XII RPL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">SIMPAN</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
