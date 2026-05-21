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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Books Table</h3>
                    </div>

                    <div class="card-body">
                        <table
                            id="books"
                            class="table table-bordered table-striped"
                        >
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Description</th>
                                    <th>Published Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Smth</td>
                                    <td>Smth</td>
                                    <td>Smth</td>
                                    <td>Smth</td>
                                    <td>Action</td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Description</th>
                                    <th>Published Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
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
