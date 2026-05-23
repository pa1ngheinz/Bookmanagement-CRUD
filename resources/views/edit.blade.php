@extends('app') @section('content')
<div class="content-header">
    <div
        style="white-space: nowrap"
        class="container-fluid d-flex justify-content-center"
    >
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 style="font-weight: 500; font-size: 25px" class="m-0">
                    Edit Book
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show shadow-sm d-flex align-items-center justify-content-between" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                @endif

                <div class="card">
                    <div class="card-body">
                        <form
                            action="{{ route('books.update', $book) }}"
                            method="post"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label"
                                    >Book title</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    name="title"
                                    value="{{ old('title', $book->title) }}"
                                />
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label"
                                    >Book author</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    name="author"
                                    value="{{ old('author', $book->author) }}"
                                />
                            </div>

                            <div class="mb-3">
                                <label for="author" class="form-label"
                                    >Book image</label
                                >
                                <br />
                                <input type="file" name="image" id="" />
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label"
                                    >Book description</label
                                >
                                <textarea
                                    class="form-control"
                                    name="description"
                                    id=""
                                >{{ old('description', $book->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="published_date" class="form-label"
                                    >Published date</label
                                >
                                <input
                                    type="date"
                                    class="form-control"
                                    name="published_date"
                                    value="{{ old('published_date', $book->published_date) }}"
                                />
                            </div>

                            <div class="d-flex justify-content-end">
                                <input
                                    class="btn btn-default"
                                    type="submit"
                                    value="Update"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
