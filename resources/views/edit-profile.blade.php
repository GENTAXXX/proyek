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

                <form action="{{ route('profileStore') }}" method="POST" class="p-5 bg-white" style="margin-top: -150px;" enctype="multipart/form-data">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Ganti Foto Profil</label>
                            <input type="file" name="image">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Nama Lengkap</label>
                            <input type="text" id="fname" class="form-control" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                    @foreach($profile as $data)
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">Nama Perusahaan</label>
                            <input type="text" id="name" name="nama_perusahaan" class="form-control" value="{{ $data->nama_perusahaan }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $data->alamat }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">No. Telepon</label>
                            <input type="text" id="no_telp" name="no_telp" class="form-control" value="{{ $data->no_telp }}">
                        </div>
                    </div>
                    @endforeach
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="email">Email</label>
                            <input type="email" id="email" class="form-control" value="{{ Auth::user()->email }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="pass1">Password</label>
                            <input type="password" id="pass1" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="pass2">Re-type Password</label>
                            <input type="password" id="pass2" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" name="save" style="width:100%;" class=" btn btn-sm btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-save"></span>Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@endsection