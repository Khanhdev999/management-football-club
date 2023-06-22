<h3 style="text-align: center;">MANAGEMENT FOOTBALL CLUB</h3>
<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
    <div class="container">
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/managements">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/coachs">Coach</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/players">Player</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/teams">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tournaments">Tournament</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav ml-auto">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ Auth::user()->name }} <span class="visually-hidden"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout <span class="visually-hidden"></span></a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login <span class="visually-hidden"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register <span class="visually-hidden"></span></a>
                </li>
            @endif
            </ul>
    </div>
</nav>
<style>
    .mr-auto :hover{
        text-decoration:underline;   
    }
</style>