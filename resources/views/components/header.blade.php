<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href={{asset('images/logo2.png') }}/>

    <title>Mens Boutique</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        /* Add space below the fixed header */
        body {
            padding-top: 120px; /* Adjust this value as needed */
        }
    </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src={{asset('images/logo2.png')}} alt="" class="logo" style="height: 80px; width: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ">
                    @auth
                    <li class="nav-item mt-2">
                        <span style="font-weight: bold; text-transform: uppercase;">
                            Welcome <span style="margin-right: 10px;color: red;">{{ auth()->user()->name }}</span>
                        </span>
                    </li>

                        @can('admin')
                            <li class="nav-item">
                                <a href="/products/manage" class="nav-link">
                                    <i class="bi bi-person"></i> <span style="font-weight: bold;">Manage Product</span>
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="/carts" class="nav-link">
                                    <i class="bi bi-cart"></i> <span style="font-weight: bold;">Cart</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/products/myorders" class="nav-link">
                                    <i class="bi bi-receipt"></i> <span style="font-weight: bold;">My Orders</span>
                                </a>
                            </li>
                        @endcan

                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </form>
                        </li>
                        
                    @else
                    <li class="nav-item">
                        <a href="/register" class="nav-link">
                            <i class="bi bi-person-plus"></i> <span style="font-weight: bold;">Register</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">
                            <i class="bi bi-person"></i> <span style="font-weight: bold;">Login</span>
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </header>

    <main>

        {{$slot}}
    </main>

    <x-flash-message/>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
