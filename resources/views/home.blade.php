@extends('layouts.mainLayout')

@section('title', 'Home')

@section('content')
    <style>
        .navbar-brand {
            font-size: 2rem;
            margin-left: 10px;
        }

        .nav-link {
            color: orangered;
            font-size: 1.5rem;
            margin: 0px 10px;
        }

        .welcome-text {
            font-size: auto;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffe6d5;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bakso Mang Upi</a>
            <div class="navbar-nav">
                <a class="nav-link" href="home">Home</a>
                <a class="nav-link" href="menu" target="blank">Menu</a>
            </div>

            <div class="dropdown ms-auto">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">Others</button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="about">About Us</a></li>
                    <hr>
                    <li><a class="dropdown-item" href="login">login</a></li>
                    <hr>
                    <li><a class="dropdown-item" href="login">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="welcome-section">
        <h1 class="welcome-title">Welcome !!</h1>
        <p class="welcome-text">
            Selamat datang di website Bakso Mang {{ $nama }}!<br>
            Nikmati pengalaman makan yang lezat<br>
            dengan desain yang simple, interaktif, dan informatif.<br>
            Proyek ini menggabungkan estetika modern dengan sentuhan lokal untuk memenuhi kebutuhan pengguna.
        </p>
    </div>
@endsection
