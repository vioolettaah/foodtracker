<!DOCTYPE html>
<html>
    <head>
        <title>FoodTrackerWAW</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <?php //echo asset('bootstrap/css/bootstrap.min.css');option to access public folder ?>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="jumbotron"><h1 class="text-center">Food Tracker and Recipe Recommendation</h1></div>
        <hr>
        <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link inactive" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inactive" aria-current="page" href="/user/foodroutine">Food Tracker</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/user/recipe" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Recipe
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/user/recipe" style="color: white">All Recipes</a></li>
                            <form action="{{ route('filter') }}" method="GET">
                                <li><button type="submit" name="filter" value="BreakFast" class="dropdown-item">Breakfast</button></li>
                                <li><button type="submit" name="filter" value="Brunch" class="dropdown-item">Brunch</button></li>
                                <li><button type="submit" name="filter" value="Lunch" class="dropdown-item">Lunch</button></li>
                                <li><button type="submit" name="filter" value="Snack" class="dropdown-item">Snack</button></li>
                                <li><button type="submit" name="filter" value="Dinner" class="dropdown-item">Dinner</button></li>
                            </form>
                        </ul>
                    </li>
                </ul>
                <form action="{{ route('search') }}" class="d-flex me-3" method="GET">
                    <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color: white">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('profile.show') }}" style="color: white">{{ __('Profile') }}</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="color: white; background: none; border: none;">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
