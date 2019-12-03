@extends('layouts.layout')
@section('konten')
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pekerjaan</th>
                <th>Lokasi</th>
                <th>Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lowongan as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>
                    <div class="col-md-4">
                        <span class="badge badge-primary px-2 py-1 mb-3">{{ $data->jns_pekerjaan }}</span>
                        <h2><a href="job-single.html">{{ $data->nama_pekerjaan }}</a> </h2>
                        <p class="meta">Publisher: <strong>John Stewart</strong></p>
                        <p class="meta">In: <strong>Design</strong></p>
                    </div>
                </td>
                <td>
                    <div class="col-md-3 text-left">
                        <h3>{{ $data->lokasi }}</h3>
                        <span class="meta">Indonesia</span>
                    </div>
                </td>
                <td>
                    <div class="col-md-3 text-md-right">
                        <strong class="text-black">Rp{{ $data->gaji }}</strong>
                    </div>
                </td>
                <td>
                    <button class="btn btn-info btn-flat btnEdit" data-id="{{ $data->id }}">
                        <span class="icon text-white-50">
                            <i class="fas fa-pen"></i>
                        </span>
                        <span class="text">Terima</span>
                    </button>
                    <a href="/lowongan/delete/{{ $data->id }}" class="btn btn-danger btn-flat">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Hapus</span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection