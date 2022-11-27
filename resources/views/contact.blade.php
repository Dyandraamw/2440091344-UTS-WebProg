@extends('navbar')

@section('title','Contact')

@section('css')
    <style>
        .h2 {
            font-size: 25px;
        }
    </style>
@endsection

@section('content')
    <nav class="navbar bg-light">
        <div class="container-fluid justify-content-center ">
        <span class="navbar-brand mb-0 h2">Contact</span>
        </div>
    </nav>

    <div class="card m-4 bg-dark mx-auto p-3" style="width: 50%;">
        <div class="card-body text-light mb-3 mt-3">
            <h3 class="card-title mb-3">Store Adress</h3>
            <p class="card-text"> Jalan Pembangunan Baru Raya,</p>
            <p class="card-text">Kompleks Pertokoan Emerald Blok III/12,</p>
            <p class="card-text"> Bintaro, Tangerang Selatan,</p>
            <p class="card-text"> Indonesia</p>
        </div>

        <div class="card-body text-light mb-3 mt-3">
            <h3 class="card-title mb-3">Open Daily</h3>
            <p class="card-text"> 08.00 - 20.00</p>

        </div>

        <div class="card-body text-light mb-3 mt-3">
            <h3 class="card-title mb-3">Store Adress</h3>
            <p class="card-text"> Phone : 021-0889-9776-655</p>
            <p class="card-text"> Email : hapybookstore@happy.com</p>
        </div>
    </div>

@endsection
