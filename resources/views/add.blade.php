@extends('app') @section('content')
<div class="content-header">
    <div
        style="white-space: nowrap"
        class="container-fluid d-flex justify-content-center"
    >
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 style="font-weight: 500; font-size: 25px" class="m-0">
                    Add Book
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form
                            action="{{ route('books.store') }}"
                            method="post"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label"
                                    >Book title</label
                                >
                                <input
                                    class="form-control"
                                    type="text"
                                    name="title"
                                    id=""
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
                                    id=""
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
                                ></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="published_date" class="form-label"
                                    >Published date</label
                                >
                                <input
                                    type="date"
                                    class="form-control"
                                    name="published_date"
                                    id=""
                                />
                            </div>

                            <div class="d-flex justify-content-end">
                                <input
                                    class="btn btn-default"
                                    type="submit"
                                    name=""
                                    id=""
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
