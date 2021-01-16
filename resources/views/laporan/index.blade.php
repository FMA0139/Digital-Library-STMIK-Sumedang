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
                                        <strong class="amount">1281</strong>
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
                                        <strong class="amount">$ 14,890.30</strong>
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
                                        <strong class="amount">38</strong>
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
                                        <strong class="amount">3765</strong>
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
    </div>
</div>

<!-- end: page -->
@endsection