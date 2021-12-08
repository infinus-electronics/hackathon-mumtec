<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <!-- <div class="container-fluid"> -->
        <!-- Toggler -->
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation"> -->
            <!-- <span class="navbar-toggler-icon"></span> -->
        <!-- </button> -->
        <!-- Brand -->
        <style>
            .navbar-vertical.navbar-expand-md .navbar-brand-img {
                max-height: 4rem !important;
            }       
        </style>
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/ASSSSS.png" class="navbar-brand-img" alt="...">
        </a>
    
    <!-- </div> -->

    <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('calendar') }}">
                        <i class="ni ni-calendar-grid-58 text-primary"></i> {{ __('Calendar') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kanban') }}">
                        <i class="ni ni-map-big text-primary"></i> {{ __('Kanban') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homework-help') }}">
                        <i class="ni ni-bullet-list-67 text-primary"></i> {{ __('Homework Help') }}
                    </a>
                </li>
    </ul>
</nav>