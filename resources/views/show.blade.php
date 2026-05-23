@extends('app') @section('content')
<div class="content-header">
    <div
        style="white-space: nowrap"
        class="container-fluid d-flex justify-content-center"
    >
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Displaying Books</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12col-lg-12">
                @if(session('create-msg'))
                    <div class="alert alert-success alert-dismissible fade show shadow-sm d-flex align-items-center justify-content-between" role="alert">
                        {{ session('create-msg') }}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('delete-msg'))
                    <div class="alert alert-success alert-dismissible fade show shadow-sm d-flex align-items-center justify-content-between" role="alert">
                        {{ session('delete-msg') }}
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <table
                            id="books"
                            class="table table-bordered table-striped"
                        >
                            <thead>
                                <tr class="text-center">
                                    <th class="align-middle">No</th>
                                    <th class="align-middle">Title</th>
                                    <th class="align-middle">Author</th>
                                    <th class="align-middle">Description</th>
                                    <th class="align-middle">Published Date</th>
                                    <th class="align-middle">Action</th>
                                </tr>
                            </thead>    

                            <tbody>
                                @php 
                                $count = 1;
                                @endphp

                                @foreach($books as $book)
                                <tr class="text-center">
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->description }}</td>
                                    <td>{{ $book->published_date }}</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-default mr-2" href="{{ route('books.edit', $book) }}">Edit</a>
                                            
                                            <form action="{{ route('books.destroy', $book) }}" method="post">
                                                @csrf
                                                @method('Delete')
                                                <input class="btn btn-default" type="submit" value="Delete">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection @push('scripts')
<script>
    $(function () {
        $("#books").DataTable({
            paging: true,
            searching: true,
            ordering: false,
            info: false,
            responsive: true,
            lengthChange: false,
            autoWidth: false,
        });
    });
</script>
@endpush
