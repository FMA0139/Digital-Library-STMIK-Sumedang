@extends('layouts/main')

@section('title', 'Detail Buku')

@section('container')

<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Detail Buku</h2>
            <span class="underline center"></span>
            <!-- <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p> -->
        </div>
    </div>
</section>
<!-- End: Page Banner -->

<!-- Start: Products Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="booksmedia-detail-main">
                <div class="container">
                    <div class="row">
                        <br>
                        <br>
                    </div>
                    <div class="booksmedia-detail-box">
                        <div class="detailed-box">
                            <div class="col-xs-12 col-sm-5 col-md-3">
                                <div class="post-thumbnail">

                                    <img src="{{ Storage::url('public/cover/').$buku->cover }}" alt="Book Image">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-center-content">
                                    <h2>{{ $buku->judul }}</h2><br>
                                    <p><strong>Author:</strong> {{ $buku->isbnissn }}</p><br>
                                    <p><strong>ISBN/ISSN:</strong> {{ $buku->isbnissn }}</p><br>
                                    <p><strong>Pengarang:</strong> {{ $buku->pengarang }}</p><br>
                                    <p><strong>Penerbit:</strong> {{ $buku->penerbit }}</p><br>
                                    <p><strong>Tahun:</strong> {{ $buku->tahun }}</p><br>
                                    <p><strong>Jumlah:</strong> {{ $buku->jumlah }}</p><br>
                                    <p><strong>Rak:</strong> {{ $buku->lokasi }}</p><br>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <p><strong>Deskripsi:</strong> {{ $buku->deskripsi }} </p>

                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Products Section -->

@endsection