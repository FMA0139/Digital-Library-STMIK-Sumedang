@extends('layouts/main')

@section('title', 'Buku Dan Media')

@section('container')
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Daftar Buku & Media</h2>
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
            <div class="books-full-width">
                <div class="container">

                    <!-- Start: Search Section -->
                    <section class="search-filters">
                        <div class="container">
                            <div class="filter-box">
                                <h3>Apa Yang Anda Cari?</h3>
                                <form action="{{ route('welcome.bukusearch') }}" method="GET" role="search">
                                    <div class="col-md-10 col-sm-6">
                                        <div class="form-group">
                                            <label class="sr-only">Cari</label>
                                            <input class="form-control" placeholder="Cari" id="term" name="term" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="submit" value="Search" title="Search buku">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- End: Search Section -->

                    <div class="booksmedia-fullwidth">
                        <ul>
                            @foreach ($buku as $bukus)
                            <li>
                                <figure>
                                    <a href="{{ route('welcome.show',$bukus->id) }}"><img src="{{ Storage::url('public/cover/').$bukus->cover }}" style="height: 540px; width: 360px" alt="Book"></a>
                                    <figcaption>
                                        <header>
                                            <h4><a href="{{ route('welcome.show',$bukus->id) }}">{{ $bukus->judul }}</a></h4>
                                            <p><strong>Penulis:</strong> {{ $bukus->pengarang }}</p>
                                            <p><strong>ISBN:</strong> {{ $bukus->isbnissn }}</p>
                                        </header>
                                        <p>{{ $bukus->deskripsi }}</p>
                                    </figcaption>
                                </figure>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <nav class="navigation pagination text-center">
                        <div class="nav-links">
                            {{ $buku->links() }}
                        </div>
                    </nav>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- End: Products Section -->

@endsection