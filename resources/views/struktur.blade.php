@extends('components.template')
@section('title','Desa Darungan Struktur')
@section('main-content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Struktur Desa</h2>
                    <p>Dalam menjalankan tugas pokok fungsinya, tentu saja Desa Darungan mempunyai jajaran struktur yang
                        bertugas untuk menjalankan operasional pemerintahan desa</p>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Struktur</li>
            </ol>
        </div>
    </nav>
</div><!-- End Breadcrumbs -->
<div class='strukturgambar'>
    <center>
        <img src="{{ asset('assets/img/struktur1.png') }}" width="1380" height="650" />
        <br>
        <br>
    </center>
</div>
@endsection
