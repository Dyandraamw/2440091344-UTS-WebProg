@extends('navbar')

@section('title','Publishers')


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
        <span class="navbar-brand mb-0 h2">Publishers</span>
        </div>
    </nav>

    <div class="flex-wrap d-flex  justify-content-center ">
        @foreach ($details as $detail)
            @if( $detail->publisher_id == 1)
            <div class="card m-2 bg-dark mx-auto p-3" style="width: 40%;">
                <img src="{{ url('storage/'.$detail->p_img) }}" class="card-img-top" alt="publisher image">
                <div class="card-body text-light">
                  <h5 class="card-title">{{ $detail->name }}</h5>
                  <p class="card-text"> Address : {{ $detail->address }}</p>
                  <p class="card-text"> Phone : {{ $detail->phone }}</p>
                  <p class="card-text"> Email : {{ $detail->email }}</p>
                </div>
            </div>
              @break
            @endif
        @endforeach
    </div>

    <div class="flex-wrap d-flex  justify-content-center ">

        @foreach ($details as $detail)
            @if( $detail->publisher_id == 1)
                <div class="card m-5 mb-4" style="width: 20rem;">
                    <img src="{{ url('storage/'.$detail->image) }}" class="img-fluid card-img-top" alt="image">
                    <div class="card-body">
                    <h5 class="card-title">{{ $detail->title }}</h5>
                    <p class="card-text">by
                        {{ $detail->author }}
                    </p>
                    <a href="/detail/{{ $detail->id }}" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <div class="flex-wrap d-flex  justify-content-center ">
        @foreach ($details as $detail)
            @if( $detail->publisher_id == 2)
            <div class="card m-2 bg-dark mx-auto p-3" style="width: 40%;">
                <img src="{{ url('storage/'.$detail->p_img) }}" class="card-img-top" alt="publisher image">
                <div class="card-body text-light">
                  <h5 class="card-title">{{ $detail->name }}</h5>
                  <p class="card-text"> Address : {{ $detail->address }}</p>
                  <p class="card-text"> Phone : {{ $detail->phone }}</p>
                  <p class="card-text"> Email : {{ $detail->email }}</p>
                </div>
            </div>
              @break
            @endif
        @endforeach
    </div>

    <div class="flex-wrap d-flex  justify-content-center ">

        @foreach ($details as $detail)
            @if( $detail->publisher_id == 2)
                <div class="card m-5 mb-4" style="width: 20rem;">
                    <img src="{{ url('storage/'.$detail->image) }}" class="img-fluid card-img-top" alt="image">
                    <div class="card-body">
                    <h5 class="card-title">{{ $detail->title }}</h5>
                    <p class="card-text">by
                        {{ $detail->author }}
                    </p>
                    <a href="/detail/{{ $detail->id }}" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>



@endsection
