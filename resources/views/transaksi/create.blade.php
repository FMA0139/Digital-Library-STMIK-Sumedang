@extends('layout/main')

@section('title', 'TAMBAH Transaksi')

@section('container')
<!-- start: page -->

<div class="row">
    <div class="col-md-12">
        <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data" id="summary-form" class="form-horizontal">
            @csrf
            <section class="panel">
                <div class="panel-body">
                    <div class="validation-message">
                        <ul></ul>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">ID Transaksi </label>
                        <div class="col-sm-6">
                            <input type="text" name="id_buku" class="form-control" title="" placeholder="" value="{{ old('id_buku') }}" />
                        </div>
                        @error('id_buku')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">ID Anggota </label>
                        <div class="col-sm-6">
                            <input type="text" name="id_anggota" class="form-control" title="" placeholder="" value="{{ old('id_anggota') }}" />
                        </div>
                        @error('id_anggota')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Tanggal Pinjam </label>
                        <div class="col-sm-6">
                            <input type="date" name="tgl_pinjam" title="" class="form-control" placeholder="" value="{{ old('tgl_pinjam') }}" />
                        </div>
                        @error('tgl_pinjam')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Tanggal Kembali </label>
                        <div class="col-sm-6">
                            <input type="date" name="tgl_kembali" title="" class="form-control" placeholder="" value="{{ old('tgl_kembali') }}" />
                        </div>
                        @error('tgl_kembali')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Status </label>
                        <div class="col-sm-6">
                            <input type="text" name="status" title="" class="form-control" placeholder="" value="{{ old('status') }}" />
                        </div>
                        @error('status')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Keterangan </label>
                        <div class="col-sm-6">
                            <input type="description" name="ket" title="" class="form-control" placeholder="" value="{{ old('ket') }}" />
                        </div>
                        @error('ket')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-1">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-default">Bersihkan</button>
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
</div>

<!-- end: page -->
@endsection