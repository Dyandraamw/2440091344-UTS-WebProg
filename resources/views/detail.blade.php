@extends('navbar')

@section('title','Book Detail')


@section('css')
    <style>
        .h2 {
            font-size: 25px;
        }
        .img-fluid{
            max-height: 700px;
            max-width: 500px;
            justify-content: center;
            align-content: center;
        }
    </style>
@endsection

@section('content')

    <nav class="navbar bg-light">
        <div class="container-fluid justify-content-center ">
        <span class="navbar-brand mb-0 h2">Book Details</span>
        </div>
    </nav>

    <div class="flex-wrap d-flex justify-content-center ">
        @foreach ($details as $book)
        <div class="card m-5 mb-4 " style="width: 550px;">
            <img src="{{ url('storage/'.$book->image) }}" class="img-fluid card-img-top m-4" alt="image">
            <div class="card-body">
              <h4 class="card-title">{{ $book->title }}</h4>
              <p class="card-text">Author : {{ $book->author }} </p>
              <p class="card-text">Year : {{ $book->year }} </p>
              <p class="card-text">Publisher : {{ $book->name }} </p>
              <p class="card-text">Synopsis :
                {{ $book->synopsis }} </p>
            </div>
        </div>
        @endforeach



    </div>



@endsection
