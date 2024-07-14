<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" crossorigin="anonymous">

        <!-- aplication CSS -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

        <link rel="shortcut icon" href="/favicon.jpeg">
    </head>
    <body>
        <!-- Header -->
        <header>
            <!-- Nav Bar-->
            <nav class="navbar navbar-expand-lg navbar-light" id="nav">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.jpeg" alt="logo image" id="logo">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/courses" class="nav-link">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="/reports" class="nav-link">Reports</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <!-- Content -->
            @yield('content')
        </main>
        <!-- Footer -->
        <footer>
            <p>Gule courses &copy; 2024</p>
        </footer>
    </body>
</html>
