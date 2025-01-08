<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Brand</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/menu') }}">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffe6d5;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Bakso Mang Upi</a>
        <div class="navbar-nav">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/menu" target="blank">Menu</a>
        </div>

        <div class="dropdown ms-auto">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-bs-toggle="dropdown" aria-expanded="false">Others</button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="/about">About Us</a></li>
                <hr>
                <li><a class="dropdown-item" href="/login">Login</a></li>
                <hr>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
 --}}
