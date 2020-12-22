<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-light bg-white elevation-1 fixed-top">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('public/img/logo2.png') }}" width="100" height="20" class="d-inline-block align-top" alt="" loading="lazy">
    </a>
    <h5 class="text-primary ml-4" id="date"></h5>
    <span class="border-right ml-1" style="border-color: #FFC045 !important;">&nbsp;</span>
    <h5 class="ml-2" id="time"></h5>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    <i class="far fa-bell text-primary fa-2x"></i>
                    <span class="badge badge-warning navbar-badge">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-4" aria-labelledby="navbarDropdown">
                    <h5>Notifications</h5>
                    <ul>
                        <li>2 leave request(s) to approve</li>
                        <li>2 leave request(s) to approve</li>
                    </ul>
                    <div class="col text-center my-4">
                        <a href="{{ route('dash.notifications') }}" class="btn btn-primary">See all</a>
                    </div>
                    <h5>Ongoing Project</h5>
                    <p class="mt-2">Monday, 09 Nov 2020</p>
                    <ul>
                        <li>2 leave request(s) to approve</li>
                    </ul>
                    <p class="mt-2">Tuesday, 01 Dec 2020</p>
                    <ul>
                        <li>2 leave request(s) to approve</li>
                    </ul>
                    <div class="col text-center mt-4">
                        <a href="{{ route('dash.notifications') }}" class="btn btn-primary">See all</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dash.settings') }}"><i class="fas fa-cog text-primary fa-2x"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="{{ asset('public/img/dummy-profile-secondary.svg') }}" class="img-circle elevation-2" alt="User Image" width="30px"></a>
            </li>
        </ul>
    </div>
</nav>
