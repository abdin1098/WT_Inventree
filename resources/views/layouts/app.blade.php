<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inventree | @yield('title', 'Dashboard')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    @stack('styles')
</head>

<body>

    <div class="app-wrapper">

        <aside class="sidebar" id="sidebar">

            <div class="brand">
                <i class="bi bi-boxes"></i>
                <span>Inventree</span>
            </div>

            <div class="sidebar-menu">

                <a href="/dashboard" class="nav-link">
                    <i class="bi bi-house-door"></i>
                    Dashboard
                </a>

                <a href="/profile" class="nav-link">
                    <i class="bi bi-person-circle"></i>
                    Profile
                </a>
                <div class="sidebar-logout">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button type="submit" class="nav-link">
                            <i class="bi bi-box-arrow-left"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>



        </aside>

        <main class="main-content">

            <header class="topbar">

                <button class="menu-toggle" id="menuToggle">
                    <i class="bi bi-list"></i>
                </button>

                <div class="search-area">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search...">
                </div>

                <div class="topbar-actions">

                    <button class="top-icon">
                        <i class="bi bi-calculator"></i>
                    </button>

                    <button class="top-icon">
                        <i class="bi bi-bell"></i>
                    </button>

                    <div class="admin-profile">
                        <div class="avatar">A</div>
                        <span>Admin</span>
                        <i class="bi bi-chevron-down"></i>
                    </div>

                </div>

            </header>

            @yield('content')

        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('js/dashboard.js') }}"></script>

    @stack('scripts')

</body>

</html>