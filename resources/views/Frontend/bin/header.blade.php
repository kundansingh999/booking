<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
</head>
<!-- class="homepage" style="background-image: url('/assets/img/cartoon.avif');" -->

<body>
    <!-------------------------------------------------Nav------------------------------------------->

    <nav class="navbar navbar-expand-lg text-bg-success  navbar-inverse navbar-fixed-top ">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">IJOR</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- <a class="nav-link active text-white" aria-current="page" href="{{url('/')}}"> -->
                        <img class="d-block" src="{{asset('assets\img\logo2.png')}}" alt="logo"
                            style="height: 80px;width: 165px;">
                        <!-- </a> -->
                    </li>
                    <div class="container d-flex p-4 nav-container"  style="margin-left: 75px;font-weight: 600;">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('gallery')}}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('membership')}}">Membership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('offer')}}">Offer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('contact')}}">Contacts Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('admin-login')}}">Admin login</a>
                        </li>
                    </div>
                </ul>

                <!-- <form class="d-flex" role="search"> -->
                @if (Auth::check())
                <a href="#" class="btn btn btn-success">{{Auth::user()->name}}</a>
                <a href="{{url('admin-logout')}}" class="btn btn btn-success">Logout</a>
                @else
                <a href="{{route('login')}}" class="btn btn btn-success">Login</a>
                <a href="{{route('register')}}" class="btn btn btn-success">Register</a>

                @endif
                </form>
            </div>
        </div>
    </nav>