@extends('navbar')

@section('title','Fantasy')


@section('css')
    <style>
        .h2 {
            font-size: 25px;
        }
        .img-fluid{
            max-height: 450px;
        }
    </style>
@endsection

@section('content')

    <nav class="navbar bg-light">
        <div class="container-fluid justify-content-center ">
        <span class="navbar-brand mb-0 h2">Fantasy</span>
        </div>
    </nav>

    <div class="flex-wrap d-flex  justify-content-center ">
        @foreach ($books as $book)
        <div class="card m-5 mb-4" style="width: 20rem;">
            <img src="{{ url('storage/'.$book->image) }}" class="img-fluid card-img-top" alt="image">
            <div class="card-body">
              <h5 class="card-title">{{ $book->title }}</h5>
              <p class="card-text">by
                {{ $book->author }}
              </p>
              <a href="/detail/{{ $book->id }}" class="btn btn-warning">Detail</a>
            </div>
        </div>
        @endforeach



    </div>



@endsection
