@extends('layout/main')

@section('title', 'Daftar Buku Tamu')

@section('container')
<!-- start: page -->

<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <a href="{{ route('bukutamu.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PENGUNJUNG</a>
                <a href="/pengunjung" target="_blank" class="btn btn-md btn-success mb-3">HALAMAN PENGUNJUNG</a>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Prodi</th>
                            <th>Waktu</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @forelse ($bukutamu as $bukutamus)
                        <tr>
                            <td style='vertical-align:middle'>{{ $i++ }}</td>
                            <td style='vertical-align:middle'>{{ $bukutamus->nim }}</td>
                            <td style='vertical-align:middle'>{{ $bukutamus->nama }}</td>
                            <td style='vertical-align:middle'>{{ $bukutamus->kelas }}</td>
                            <td style='vertical-align:middle'>{{ $bukutamus->prodi }}</td>
                            <td style='vertical-align:middle'>{{ $bukutamus->created_at }}</td>
                            <td class="actions-hover actions-fade">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('bukutamu.destroy', $bukutamus->id) }}" method="POST">
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