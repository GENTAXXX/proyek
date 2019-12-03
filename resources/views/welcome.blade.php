@extends('layouts.layoutama')
@section('konten')
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
            <div class="mb-5 text-center">
                <h1 class="text-white font-weight-bold">Website Lowongan Kerja Sekolah Vokasi</h1>
                <h1 class="text-white font-weight-bold">UNIVERSITAS GADJAH MADA</h1>
                <p>Temukan pekerjaan yang anda cari di sini.</p>
            </div>
            <form method="post" class="search-jobs-form">
                <div class="row mb-5">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <input type="text" class="form-control form-control-lg" placeholder="Nama Pekerjaan...">
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <select class="form-control">
                            <option>Dimanapun</option>
                            <option>Yogyakarta</option>
                            <option>Jakarta</option>
                            <option>Bandung</option>
                            <option>Medan</option>
                            <option>Surabaya</option>
                            <option>Malang</option>
                            <option>Semarang</option>
                            <option>Bogor</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <select class="form-control">
                            <option>Part Time</option>
                            <option>Full Time</option>
                            <option>Magang</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/gedungsv.jpg');">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2 text-white">Statistics</h2>
                <p class="lead text-white"></p>
            </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="1930">0</strong>
                </div>
                <span class="caption">Pelamar</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="54">0</strong>
                </div>
                <span class="caption">Pekerjaan Ditawarkan</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="120">0</strong>
                </div>
                <span class="caption">Pekerjaan Terpenuhi</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <strong class="number" data-number="550">0</strong>
                </div>
                <span class="caption">Perusahaan</span>
            </div>
        </div>
    </div>
</section>
<section class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2">54 Lowongan</h2>
            </div>
        </div>
        @foreach($lowongan as $data)
        <div class="mb-5">
            <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
                <div class="col-md-2">
                    <a href="job-single.html"><img src="images/featured-listing-1.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4">
                    <span class="badge badge-primary px-2 py-1 mb-3">{{ $data->jns_pekerjaan }}</span>
                    <h2><a href="job-single.html">{{ $data->nama_pekerjaan }}</a> </h2>
                    <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
                </div>
                <div class="col-md-3 text-left">
                    <h3>{{ $data->lokasi }}</h3>
                    <span class="meta">Indonesia</span>
                </div>
                <div class="col-md-3 text-md-right">
                    <strong class="text-black">Rp{{ $data->gaji }}</strong>
                </div>
            </div>
        </div>
        @endforeach
        <div class="row pagination-wrap">
            <div class="col-md-6 text-center text-md-left">
                <div class="custom-pagination ml-auto">
                    <a href="#" class="prev">Previous</a>
                    <div class="d-inline-block">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                    </div>
                    <a href="#" class="next">Next</a>
                </div>
            </div>
        </div>
    </div>
    @endsection