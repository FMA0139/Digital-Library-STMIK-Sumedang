@extends('layout/main')

@section('title', 'TAMBAH DATA BUKU')

@section('container')
<!-- start: page -->

<div class="row">
    <div class="col-md-12">
        <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data" id="summary-form" class="form-horizontal">
            @csrf
            <section class="panel">
                <div class="panel-body">
                    <div class="validation-message">
                        <ul></ul>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Judul </label>
                        <div class="col-sm-6">
                            <input type="text" name="judul" class="form-control" title="" placeholder="" value="{{ old('judul') }}" />
                        </div>
                        @error('judul')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">ISBN/ISSN </label>
                        <div class="col-sm-6">
                            <input type="text" name="isbnissn" class="form-control" title="" placeholder="" value="{{ old('isbnissn') }}" />
                        </div>
                        @error('isbnissn')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Pengarang </label>
                        <div class="col-sm-6">
                            <input type="text" name="pengarang" title="" class="form-control" placeholder="" value="{{ old('pengarang') }}" />
                        </div>
                        @error('pengarang')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Penerbit </label>
                        <div class="col-sm-6">
                            <input type="text" name="penerbit" title="" class="form-control" placeholder="" value="{{ old('penerbit') }}" />
                        </div>
                        @error('penerbit')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Tahun </label>
                        <div class="col-sm-6">
                            <input type="text" name="tahun" title="" class="form-control" placeholder="" value="{{ old('tahun') }}" />
                        </div>
                        @error('tahun')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Jumlah </label>
                        <div class="col-sm-6">
                            <input type="text" name="jumlah" title="" class="form-control" placeholder="" value="{{ old('jumlah') }}" />
                        </div>
                        @error('jumlah')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Deskripsi </label>
                        <div class="col-sm-6">
                            <textarea type="description" name="deskripsi" rows="5" title="" class="form-control" placeholder="" value="">{{ old('deskripsi') }}</textarea>
                        </div>
                        @error('deskripsi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Rak </label>
                        <div class="col-sm-6">
                            <input type="text" name="lokasi" title="" class="form-control" placeholder="" value="{{ old('lokasi') }}" />
                        </div>
                        @error('lokasi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Cover </label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control @error('cover') is-invalid @enderror" name="cover">
                        </div>
                        @error('cover')
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