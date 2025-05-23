@extends('master')

@section('content')

<div class="row">
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                        <div class="stats-icon purple mb-2">
                            <i class="iconly-boldShow"></i>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Santri Putra</h6>
                        <h6 class="font-extrabold mb-0">{{ count($santris) }}</h6>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card"> 
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                        <div class="stats-icon blue mb-2">
                            <i class="iconly-boldProfile"></i>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Santri Putri</h6>
                        <h6 class="font-extrabold mb-0">183.000</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                        <div class="stats-icon green mb-2">
                            <i class="iconly-boldAdd-User"></i>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Total Santri</h6>
                        <h6 class="font-extrabold mb-0">80.000</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                        <div class="stats-icon red mb-2">
                            <i class="iconly-boldBookmark"></i>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">User</h6>
                        <h6 class="font-extrabold mb-0">112</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table table-dark mb-0">
            <a href="{{ route('santri.create') }}" class="btn btn-primary btn-sm"> Tambah Santri </a>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAME</th>
                    <th>TTL</th>
                    <th>JENIS KELAMIN</th>
                    <th>ANAK KE </th>
                    <th>ALAMAT</th>
                    <th>ASAL SEKOLAH</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($santris as $santri)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-bold-500">{{ $santri['nama'] }}</td>
                    <td>{{ $santri['ttl'] }}</td>
                    <td class="text-bold-500">{{ $santri['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan'}}</td>
                    <td>{{ $santri['anak_ke'] }}</td>
                    <td>{{ $santri['alamat'] }}</td>
                    <td>{{ $santri['asal_sekolah'] }}</td>
                    <td class="d-flex gap-2">  
                        <a href="{{ route('santri.edit', $santri['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('santri.destroy', $santri['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection