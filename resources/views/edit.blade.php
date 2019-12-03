@extends('layouts.layoutin')
@section('kontenIn')
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-12">
            <div class="mb-5 text-center">
                <h1 class="text-white font-weight-bold">Edit Lowongan</h1>
                <p>Temukan pekerjaan yang anda cari di sini.</p>
            </div>
        </div>
    </div>
</div>
</section>
<div class="ftco-section bg-light mt-5">
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <form method="POST" action="{{ route('lowonganAdd') }}" class="p-5 bg-white">
                    @csrf

                    @foreach($lowongan as $data)
                    <input value="{{ $data->id }}" name="id" hidden>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Nama Pekerjaan</label>
                            <input type="text" id="fullname" name="nama_pekerjaan" class="form-control" placeholder="eg. Professional UI/UX Designer" value="{{ $data->nama_pekerjaan }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="fullname">Jenis Pekerjaan</label>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-1">
                                <input type="radio" id="option-job-type-1" name="jns_pekerjaan" value="Full Time" checked="{{ ($data->jns_pekerjaan == 'Full Time') ? 'checked' : '' }}"> Full Time
                            </label>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-2">
                                <input type="radio" id="option-job-type-2" name="jns_pekerjaan" value="Part Time" checked="{{ ($data->jns_pekerjaan == 'Part Time') ? 'checked' : '' }}"> Part Time
                            </label>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="option-job-type-3">
                                <input type="radio" id="option-job-type-3" name="jns_pekerjaan" value="Magang" checked="{{ ($data->jns_pekerjaan == 'Magang') ? 'checked' : '' }}"> Magang
                        </div>
                    </div>
                    <div class="row form-group mb-4">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="fullname">Lokasi</label>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <input type="text" class="form-control" name="lokasi" placeholder="Western City, UK" value="{{ $data->lokasi }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="fullname">Deskripsi</label>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <textarea class="form-control" name="deskripsi" id="" cols="30" rows="5">{{ $data->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Email</label>
                            <input type="text" id="fullname" class="form-control" name="email" placeholder="eg. company@mail.com" value="{{ $data->email }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-2">
                            <label class="font-weight-bold" for="fullname">Telepon</label>
                            <input type="text" id="fullname" class="form-control" name="no_telp" placeholder="eg. 0821******" value="{{ $data->no_telp }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-md-2">
                            <label class="font-weight-bold" for="fullname">Gaji</label>
                            <input type="text" id="fullname" class="form-control" name="gaji" placeholder="eg. Rp2.0000.000 - Rp3.000.000" value="{{ $data->gaji }}">
                        </div>
                    </div>
                    <div class="row form-group mt-4">
                        <div class="col-md-12">
                            <input type="submit" value="Post" class="btn btn-primary py-2 px-5">
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Contact Info</h3>
                    <p class="mb-0 font-weight-bold">Alamat</p>
                    <p class="mb-4">Sekip unit III, Caturtunggal, Depok Sub-District, Terban, Kec. Gondokusuman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">+62 821 3705 7694</a></p>
                    <p class="mb-0 font-weight-bold">Alamat Email</p>
                    <p class="mb-0"><a href="#"><span class="__cf_email__" data-cfemail="671e081215020a060e0b2703080a060e094904080a">[email&#160;protected]</span></a></p>
                </div>
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">More Info</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
                    <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
    @endsection