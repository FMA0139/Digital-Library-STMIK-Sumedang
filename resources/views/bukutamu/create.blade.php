@extends('layout/main')

@section('title', 'TAMBAH PENGUNJUNG')

@section('container')
<!-- start: page -->

<div class="row">
    <div class="col-md-12">
        <form action="{{ route('bukutamu.store') }}" method="POST" enctype="multipart/form-data" id="summary-form" class="form-horizontal">
            @csrf
            <section class="panel">
                <div class="panel-body">
                    <div class="validation-message">
                        <ul></ul>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">NIM </label>
                        <div class="col-sm-6">
                            <input type="text" name="nim" class="form-control" title="" placeholder="" value="{{ old('nim') }}" />
                        </div>
                        @error('nim')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Nama </label>
                        <div class="col-sm-6">
                            <input type="text" name="nama" class="form-control" title="" placeholder="" value="{{ old('nama') }}" />
                        </div>
                        @error('nama')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Kelas </label>
                        <div class="col-sm-6">
                            <input type="text" name="kelas" class="form-control" title="" placeholder="" value="{{ old('kelas') }}" />
                        </div>
                        @error('kelas')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Prodi </label>
                        <div class="col-sm-6">
                            <input type="text" name="prodi" title="" class="form-control" placeholder="" value="{{ old('prodi') }}" />
                        </div>
                        @error('prodi')
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