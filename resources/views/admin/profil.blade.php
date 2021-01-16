@extends('layout/main')

@section('title', 'EDIT PROFIL')

@section('container')
<!-- start: page -->

<div class="row">
    <div class="col-md-12">
        <form action="{{ route('admin.update', 1) }}" method="POST" enctype="multipart/form-data" id="summary-form" class="form-horizontal">
            @csrf
            @method('PUT')
            <section class="panel">
                @foreach ($admprofil as $admprofils)
                <div class="panel-body">
                    <div class="validation-message">
                        <ul></ul>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Nama </label>
                        <div class="col-sm-6">
                            <input type="text" name="nama" class="form-control" title="" placeholder="" value="{{ $admprofils->nama }}" />
                        </div>
                        @error('nama')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Alamat </label>
                        <div class="col-sm-6">
                            <input type="text" name="alamat" class="form-control" title="" placeholder="" value="{{ $admprofils->alamat }}" />
                        </div>
                        @error('alamat')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Maps </label>
                        <div class="col-sm-6">
                            <input type="text" name="google_maps" title="" class="form-control" placeholder="" value="{{ $admprofils->google_maps }}" />
                        </div>
                        @error('google_maps')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Email </label>
                        <div class="col-sm-6">
                            <input type="text" name="email" title="" class="form-control" placeholder="" value="{{ $admprofils->email }}" />
                        </div>
                        @error('email')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">No. Telephone </label>
                        <div class="col-sm-6">
                            <input type="text" name="tlp" title="" class="form-control" placeholder="" value="{{ $admprofils->tlp }}" />
                        </div>
                        @error('tlp')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Situs situs </label>
                        <div class="col-sm-6">
                            <input type="text" name="situs" title="" class="form-control" placeholder="" value="{{ $admprofils->situs }}" />
                        </div>
                        @error('situs')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                @endforeach
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