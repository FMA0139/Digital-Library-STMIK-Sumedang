@extends('layout/main')

@section('title', 'EDIT DATA anggota')

@section('container')
<!-- start: page -->

<div class="row">
    <div class="col-md-12">
        <form action="{{ route('anggota.update', $anggota->id) }}" method="POST" enctype="multipart/form-data" id="summary-form" class="form-horizontal">
            @csrf
            @method('PUT')

            <section class="panel">
                <div class="panel-body">
                    <div class="validation-message">
                        <ul></ul>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Nama </label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" title="" placeholder="" value="{{ old('name', $anggota->name) }}" />
                        </div>
                        @error('name')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">NIM </label>
                        <div class="col-sm-6">
                            <input type="text" name="nim" class="form-control" title="" placeholder="" value="{{ old('nim', $anggota->nim) }}" />
                        </div>
                        @error('nim')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Email </label>
                        <div class="col-sm-6">
                            <input type="email" name="email" title="" class="form-control" placeholder="" value="{{ old('email', $anggota->email) }}" />
                        </div>
                        @error('email')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Password </label>
                        <div class="col-sm-6">
                            <input type="password" name="password" title="" class="form-control" placeholder="" value="{{ old('password', $anggota->password) }}" />
                        </div>
                        @error('password')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Tanggal Lahir </label>
                        <div class="col-sm-6">
                            <input type="date" name="tgl_lahir" title="" class="form-control" placeholder="" value="{{ old('tgl_lahir', $anggota->tgl_lahir) }}" />
                        </div>
                        @error('tgl_lahir')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Jenis Kelamin </label>
                        <div class="col-sm-6">
                            <input type="text" name="jk" title="" class="form-control" placeholder="" value="{{ old('jk', $anggota->jk) }}" />
                        </div>
                        @error('jk')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Alamat </label>
                        <div class="col-sm-6">
                            <textarea type="text" name="alamat" rows="5" title="" class="form-control" placeholder="" value="">{{ old('alamat', $anggota->alamat) }}</textarea>
                        </div>
                        @error('alamat')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">No. HP </label>
                        <div class="col-sm-6">
                            <input type="text" name="tlp" title="" class="form-control" placeholder="" value="{{ old('tlp', $anggota->tlp) }}" />
                        </div>
                        @error('tlp')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Prodi </label>
                        <div class="col-sm-6">
                            <input type="text" name="prodi" title="" class="form-control" placeholder="" value="{{ old('prodi', $anggota->prodi) }}" />
                        </div>
                        @error('prodi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Foto </label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                        </div>
                        @error('foto')
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
                        </div>
                    </div>
                </footer>
            </section>
        </form>
    </div>
</div>

<!-- end: page -->
@endsection