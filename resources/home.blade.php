@extends('layouts.main')

@section('title', 'Beranda')

@section('content')

{{-- HERO --}}
<section class="d-flex align-items-center text-white"
    style="height:80vh;
    background:linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),
    url('https://images.unsplash.com/photo-1580582932707-520aed937b7b') center/cover;">
    <div class="container text-center">
        <h1>SMA NEGERI X</h1>
        <p>Mencetak Generasi Unggul dan Berkarakter</p>
        <a href="#" class="btn btn-warning me-2">PPDB</a>
        <a href="#" class="btn btn-outline-light">Profil Sekolah</a>
    </div>
</section>

{{-- STATISTIK --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                <i class="bi bi-people fs-1 text-success"></i>
                <h4>850</h4>
                <p>Siswa</p>
            </div>
            <div class="col-md-3">
                <i class="bi bi-person-badge fs-1 text-success"></i>
                <h4>60</h4>
                <p>Guru</p>
            </div>
            <div class="col-md-3">
                <i class="bi bi-award fs-1 text-success"></i>
                <h4>A</h4>
                <p>Akreditasi</p>
            </div>
            <div class="col-md-3">
                <i class="bi bi-trophy fs-1 text-success"></i>
                <h4>120+</h4>
                <p>Prestasi</p>
            </div>
        </div>
    </div>
</section>

@endsection
