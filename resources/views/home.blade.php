@extends('app') @section('content')
<div class="content-header">
    <div
        style="white-space: nowrap"
        class="container-fluid d-flex justify-content-center"
    >
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 style="font-weight: 500; font-size: 25px" class="m-0">
                    Home Page
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            @foreach($books as $book)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
                <div class="card h-100">
                    <img src="{{ asset('images/'. $book->image) }}" class="card-img-top object-fit-cover" alt="" height="300px"/>

                    <div class="card-body">
                        <h5 class="h-5 font-weight-bold">{{ $book->title }}</h5> <br>
                        <p class="card-text">
                            {{ $book->description }}
                        </p>

                        <hr>

                        <p class="card-text">
                            {{ $book->published_date }}
                        </p>

                        <hr>

                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary" href="">View</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
