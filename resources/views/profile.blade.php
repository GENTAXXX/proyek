@extends('layouts.layoutin')
@section('kontenIn')
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
            <div class="mb-5 text-center">
                <h1 class="text-white font-weight-bold">Profile</h1>
                <p>Temukan pekerjaan yang anda cari di sini.</p>
            </div>
        </div>
    </div>
</div>
</section>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mb-5">
                <form action="#" class="p-5 bg-white" style="margin-top: -150px;">
                    @foreach($profile as $data)
                    <div class="row form-group">
                        <div class="m-lg-auto p-lg-3">
                            <img src="img/{{ $data->image }}" style="border-radius: 50%; width: 150px;height: 150px;border-color: dodgerblue;border-width: 10pt;" alt="">
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Nama Lengkap</label>
                            <h4>{{ Auth::user()->name }}</h4>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">Nama Perusahaan</label>
                            <h4>{{ $data->nama_perusahaan }}</h4>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">Alamat</label>
                            <h4>{{ $data->alamat }}</h4>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">No. Telepon</label>
                            <h4>{{ $data->no_telp }}</h4>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label>
                            <h4>{{ Auth::user()->email }}</h4>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="pass1">Password</label>
                            <h4>********</h4>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <a href="/profile/edit" style="width:100%;" class=" btn btn-sm btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-edit"></span>Edit</a>
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@endsection