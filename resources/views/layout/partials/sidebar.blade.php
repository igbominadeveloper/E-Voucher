<nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h4">{{ auth()->user()->name }}</h1>
            <p>{{ ucwords(auth()->user()->roles()->first()->role) }}</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active"><a href="{{ route('home') }}"> <i class="icon-home"></i>Dashboard </a></li>
        <li><a href="/officers"> <i class="icon-grid"></i>Officers </a></li>
        <li><a href="/users"> <i class="icon-user"></i>User Accounts </a></li>
    </ul>
</nav>
