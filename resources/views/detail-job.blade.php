@extends('layouts.layoutin')
@section('kontenIn')
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
            <div class="mb-5 text-center">
                <h1 class="text-white font-weight-bold">Detail Lowongan</h1>

            </div>
        </div>
    </div>
</div>
</section>
@foreach($lowongan as $data)
<section class="site-section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex align-items-center">
                    <div>
                        <h2>{{ $data->nama_pekerjaan }}</h2>
                        <div>
                            <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>CV Oxid</span>
                            <span class="m-2"><span class="icon-room mr-2"></span>{{ $data->lokasi }}</span>
                            <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">{{ $data->jns_pekerjaan }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <figure class="mb-5"><img src="{{ url('img') }}/{{ $data->image }}" class="img-fluid rounded"></figure>
                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Deskripsi Pekerjaan
                    </h3>
                    <p> {{ $data->deskripsi }}</p>
                </div>
                <div class="mb-5">
                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Kriteria</h3>
                    <ul class="list-unstyled m-0 p-0">
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{ $data->kriteria }}</span></li>
                    </ul>
                </div>
                <div class="mb-5">
                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Syarat
                    </h3>
                    <ul class="list-unstyled m-0 p-0">
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{ $data->syarat }}</span></li>
                    </ul>
                </div>
                <div class="mb-5">
                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Contacts
                    </h3>
                    <ul class="list-unstyled m-0 p-0">
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{ $data->email }}</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{ $data->no_telp }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light p-3 border rounded mb-4">
                    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Ringkasan</h3>
                    <ul class="list-unstyled pl-3 mb-0">
                        <li class="mb-2"><strong class="text-black">Dirilis Pada:</strong> {{ $data->created_at }}</li>
                        <li class="mb-2"><strong class="text-black">Jenis Pekerjaan:</strong> {{ $data->jns_pekerjaan }}</li>
                        <li class="mb-2"><strong class="text-black">Lokasi:</strong> {{ $data->lokasi }}</li>
                        <li class="mb-2"><strong class="text-black">Gaji:</strong> Rp{{ $data->gaji }}</li>
                        <li class="mb-2"><strong class="text-black">Batas Lamaran:</strong> {{ $data->batas }}</li>
                    </ul>
                </div>
                <div class="bg-light p-3 border rounded">
                    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                    <div class="px-3">
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection