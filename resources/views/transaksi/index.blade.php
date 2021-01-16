@extends('layout/main')

@section('title', 'Daftar Transaksi')

@section('container')
<!-- start: page -->

<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <a href="{{ route('transaksi.create') }}" class="btn btn-md btn-success mb-3">TAMBAH TANSAKSI</a>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Buku</th>
                            <th>Peminjam</th>
                            <th>Tgl Pinjam</th>
                            <th>Tgl Kembali</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @forelse ($transaksi as $transaksis)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $transaksis->id }}</td>
                            <td>{{ $transaksis->id_buku }}</td>
                            <td>{{ $transaksis->id_anggota }}</td>
                            <td>{{ $transaksis->tgl_pinjam }}</td>
                            <td>{{ $transaksis->tgl_kembali }}</td>
                            <td>{{ $transaksis->status }}</td>
                            <td>{{ $transaksis->ket }}</td>
                            <td class="actions-hover actions-fade">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('transaksi.destroy', $transaksis->id) }}" method="POST">
                                    <a href="{{ route('transaksi.edit', $transaksis->id) }}" class="fa fa-pencil"></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="fa fa-trash-o"></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data transaksi belum Tersedia.
                        </div>
                        @endforelse
                    </tbody>
            </div>
        </section>
    </div>
</div>

<!-- end: page -->
@endsection