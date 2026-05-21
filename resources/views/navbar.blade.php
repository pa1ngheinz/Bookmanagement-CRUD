<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md bg-primary">
    <div class="container">
        <div class="navbar-brand">
            <span class="brand-text font-weight-bold">Book Management</span>
        </div>

        <div
            class="collapse navbar-collapse order-3 d-flex justify-content-center"
            id="navbarCollapse"
        >
            <!-- Left navbar links -->
            <ul class="navbar-nav d-flex gap-3">
                <li
                    class="nav-item {{ Request::is('/')? 'custom-active' : '' }}"
                >
                    <a href="/" class="nav-link text-white">Home</a>
                </li>

                <li
                    class="nav-item {{ Request::is('books')? 'custom-active' : '' }}"
                >
                    <a
                        href="{{ route('books.index') }}"
                        class="nav-link text-white"
                        >Book Lists</a
                    >
                </li>

                <li
                    class="nav-item {{ Request::is('books/create')? 'custom-active' : '' }}"
                >
                    <a
                        href="{{ route('books.create') }}"
                        class="nav-link text-white"
                        >Add Books</a
                    >
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link text-white">Edit Books</a>
                </li>
            </ul>
        </div>

        <!-- Right navbar links -->
        <div class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <div class="profile">
                <a href="">
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
