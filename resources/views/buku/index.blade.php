@extends('layout/main')

@section('title', 'Daftar Buku')

@section('container')
<!-- start: page -->

<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <a href="{{ route('buku.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA BUKU</a>
                <a href="/bukumedia" target="_blank" class="btn btn-md btn-success mb-3">HALAMAN BUKU</a>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Cover</th>
                            <th>Judul</th>
                            <th>ISBN/ISSN</th>
                            <th>Jumlah</th>
                            <th>Deskripsi</th>
                            <th>Rak</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @forelse ($buku as $bukus)
                        <tr>
                            <td style='vertical-align:middle'>{{ $i++ }}</td>
                            <td style='vertical-align:middle'><img src="{{ Storage::url('public/cover/').$bukus->cover }}" class="rounded" style="width: 60px"></td>
                            <td style='vertical-align:middle'>{{ $bukus->judul }}
                                <p>{{ $bukus->pengarang }} | {{ $bukus->penerbit }} | {{ $bukus->tahun }}</p>
                            </td>
                            <td style='vertical-align:middle'>{{ $bukus->isbnissn }}</td>
                            <td style='vertical-align:middle'>{{ $bukus->jumlah }}</td>
                            <td style='vertical-align:middle'>{{ $bukus->deskripsi }}</td>
                            <td style='vertical-align:middle'>{{ $bukus->lokasi }}</td>
                            <td class="actions-hover actions-fade">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('buku.destroy', $bukus->id) }}" method="POST">
                                    <a href="{{ route('buku.edit', $bukus->id) }}" class="fa fa-pencil"></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="fa fa-trash-o"></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data Buku belum Tersedia.
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