@extends('layout/main')

@section('title', 'Admin Dashboard')

@section('container')
<!-- start: page -->

<div class="row">
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-6">
                <section class="panel panel-featured-left panel-featured-primary">
                    <div class="panel-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fa fa-life-ring"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">TOTAL BUKU</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $buku->count() }}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a href="/buku" class="text-muted text-uppercase">(Lihat Semua)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6">
                <section class="panel panel-featured-left panel-featured-secondary">
                    <div class="panel-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-secondary">
                                    <i class="fa fa-usd"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">TOTAL ANGGOTA</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $anggota->count() }}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a href="/anggota" class="text-muted text-uppercase">(Lihat Semua)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6">
                <section class="panel panel-featured-left panel-featured-tertiary">
                    <div class="panel-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-tertiary">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">TOTAL TRANSAKSI</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $transaksi->count() }}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a href="/transaksi" class="text-muted text-uppercase">(Lihat Semua)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6">
                <section class="panel panel-featured-left panel-featured-quartenary">
                    <div class="panel-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-quartenary">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">PENGUNJUNG HARI INI</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $bukutamu->count() }}</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a href="/pengunjung" class="text-muted text-uppercase">(Lihat Semua)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Daftar Transaksi</h2>
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
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($transaksi as $transaksis)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $transaksis->id }}</td>
                            <td>{{ $transaksis->id_buku }}</td>
                            <td>{{ $transaksis->id_anggota }}</td>
                            <td>{{ $transaksis->tgl_pinjam }}</td>
                            <td>{{ $transaksis->tgl_kembali }}</td>
                            <td>{{ $transaksis->status }}</td>
                            <td>{{ $transaksis->ket }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>




</div>

<!-- end: page -->
@endsection