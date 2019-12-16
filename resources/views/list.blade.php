@extends('layouts.layoutin')
@section('kontenIn')
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
            <div class="mb-5 text-center">
                <h1 class="text-white font-weight-bold">Daftar Lowongan Dibuat</h1>
                <p>Temukan pekerjaan yang anda cari di sini.</p>
            </div>
        </div>
    </div>
</div>
</section>
<section class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="section-title mb-2">109,234 Lowongan</h2>
            </div>
        </div>
        @foreach($lowongan as $data)
        <div class="mb-5">
            <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
                <div class="col-md-2">
                    <a href="job-single.html"><img src="img/{{ $data->image }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-4">
                    <span class="badge badge-primary px-2 py-1 mb-3">{{ $data->jns_pekerjaan }}</span>
                    <h2><a href="/detail-job/edit/{{ $data->id }} ">{{ $data->nama_pekerjaan }}</a> </h2>
                    <p class="meta">Publisher: <strong>John Stewart</strong> In: <strong>Design</strong></p>
                </div>
                <div class="col-md-3 text-left">
                    <h3>{{ $data->lokasi }}</h3>
                    <span class="meta">Indonesia</span>
                </div>
                <div class="col-md-3 text-md-right">
                    <strong class="text-black">Rp{{ $data->gaji }}</strong>
                </div>
                <div class="col-md-2 text-md-center text-right ">
                    <li type="none" class="">
                        <a href="/lowongan/edit/{{ $data->id }}" style="width: 70%;" class=" btn btn-sm btn-primary border-width-2 d-none d-lg-inline-block m-2"><span class="mr-2 icon-edit"></span>Edit</a>
                    </li>
                    <li type="none">
                        <a href="/lowongan/delete/{{ $data->id }}" style="width: 70%;" class=" btn btn-sm btn-danger border-width-2 d-none d-lg-inline-block m-2"><span class="mr-2 icon-trash"></span>Delete</a>
                    </li>
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