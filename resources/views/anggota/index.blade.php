@extends('layout/main')

@section('title', 'Daftar ANGGOTA')

@section('container')
<!-- start: page -->

<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <a href="{{ route('anggota.create') }}" class="btn btn-md btn-success mb-3">TAMBAH ANGGOTA</a>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No. HP</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @forelse ($anggota as $anggotas)
                        <tr>
                            <td style='vertical-align:middle'>{{ $i++ }}</td>
                            <td style='vertical-align:middle'><img src="{{ Storage::url('public/foto/').$anggotas->foto }}" class="rounded" style="width: 100px"></td>
                            <td style='vertical-align:middle'>{{ $anggotas->name }}
                                <p>{{ $anggotas->nim }} | {{ $anggotas->prodi }}</p>
                            </td>
                            <td style='vertical-align:middle'>{{ $anggotas->email }}</td>
                            <td style='vertical-align:middle'>{{ $anggotas->tgl_lahir }}</td>
                            <td style='vertical-align:middle'>{{ $anggotas->jk }}</td>
                            <td style='vertical-align:middle'>{{ $anggotas->alamat }}</td>
                            <td style='vertical-align:middle'>{{ $anggotas->tlp }}</td>
                            <td class="actions-hover actions-fade">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('anggota.destroy', $anggotas->id) }}" method="POST">
                                    <!-- <a href="{{ route('anggota.edit', $anggotas->id) }}" class="fa fa-pencil"></a> -->
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="fa fa-trash-o"></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data anggota belum Tersedia.
                        </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>

<!-- end: page -->
@endsection