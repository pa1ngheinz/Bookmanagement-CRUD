<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
        <div class="navbar-brand">
            <span class="brand-text font-weight-bold">Book Management</span>
        </div>

        <div
            class="collapse navbar-collapse order-3 d-flex justify-content-center"
            id="navbarCollapse"
        >
            <!-- Left navbar links -->
            <ul class="navbar-nav flex-column flex-md-row gap-2 gap-md-3">
                <li
                    class="nav-item {{ Request::is('/') || request()->routeIs('books.show') ? 'custom-active' : '' }}"
                >
                    <a href="/" class="nav-link text-white">Home</a>
                </li>

                <li
                    class="nav-item {{ request()->routeIs('books.index') || request()->routeIs('books.edit') ? 'custom-active' : '' }}"
                >
                    <a
                        href="{{ route('books.index') }}"
                        class="nav-link text-white"
                        >Books Table</a
                    >
                </li>

                <li
                    class="nav-item {{ request()->routeIs('books.create')? 'custom-active' : '' }}"
                >
                    <a
                        href="{{ route('books.create') }}"
                        class="nav-link text-white"
                        >Add Books</a
                    >
                </li>
            </ul>
        </div>

        <!-- Right navbar links -->
        <div class="order-1 order-md-3 navbar-nav navbar-no-expand ml-5">
            <div class="profile">
                <a href="#" data-toggle="modal" data-target="#profile">
                    <img
                        src="{{ asset('images/profile/default.png') }}"
                        alt="Profile"
                        width="50"
                        height="50"
                    />
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- /.navbar -->

<!-- Profile modal popup -->
<div class="modal fade" id="profile">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Profile</h3>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="" enctype="multipart/form-data">
                    <div>
                        <img
                            src="{{ asset('images/profile/default.png') }}"
                            alt=""
                            height="100px"
                            width="100px"
                        /> <br> <br>
                        <input type="file" name="profile-photo"> <br> <br>
                    </div>

                    <hr>

                    <div>
                        <label for="">Username</label>
                        <input class="form-control" type="text" name="username" />
                    </div>

                    <div>
                        <label for="">Email</label>
                        <input class="form-control" type="text" name="email" />
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>
