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
            @if(session('info'))
                <div class="alert alert-success alert-dismissible fade show shadow-sm d-flex align-items-center justify-content-between" role="alert">
                    {{ session('info') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <div class="row">
            @forelse($books as $book)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-5">
                <div class="card h-100">
                    <div class="embed-responsive embed-responsive-4by3">
                        <img src="{{ asset('images/'. $book->image) }}" class="card-img-top object-fit-cover embed-responsive-item" alt=""/>
                    </div>
                    

                    <div class="card-body">
                        <h5 class="h-5 font-weight-bold">{{ $book->title }}</h5> <br>
                        <hr>

                        <p class="card-text">
                            {{ $book->author }}
                        </p>

                        <hr>

                        <div class="d-flex justify-content-center">
                            <a class="btn btn-primary" href="{{ route('books.show', $book) }}">View details</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-12 d-flex justify-content-center">
                    <div>
                        <p style="color: red !important;">You haven't added any books yet!!</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
