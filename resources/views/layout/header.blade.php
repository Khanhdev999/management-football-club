<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/management">Home</a>
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
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
            <form class="form-inline mt-2 mt-md-0" method="get" action="search.html">
                <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search"
                    name="keyword_tensanpham">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
        </div>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="/regier">Register</a>
            </li>
            <li class="nav-item text-nowrap">
                <!-- Nếu chưa đăng nhập thì hiển thị nút Đăng nhập -->
                <a class="nav-link" href="/login">Login</a>
            </li>
        </ul>
    </div>
</nav>
