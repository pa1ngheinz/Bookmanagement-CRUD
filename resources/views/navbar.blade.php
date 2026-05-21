<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <div class="navbar-brand">
            <span class="brand-text font-weight-light">Book Management</span>
        </div>

        <div
            class="collapse navbar-collapse order-3 d-flex justify-content-center"
            id="navbarCollapse"
        >
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('books.index') }}" class="nav-link"
                        >All Books</a
                    >
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Add Books</a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Edit Books</a>
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
