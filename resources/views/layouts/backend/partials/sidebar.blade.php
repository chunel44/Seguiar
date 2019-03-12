<div class="sidebar" data-active-color="orange" data-background-color="black" data-image="{{ asset('admin/img/sidebar-2.jpg') }}">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="#" class="simple-text">
            Admin Seguiar
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="#" class="simple-text">
            SGR
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <a href="">
                <div class="photo">
                    <img src="{{asset('frontend/img/home/seguiar2.png')}}">
                </div>
            </a>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    Seguiar
                </a>
            </div>
        </div>
        <ul class="nav">
            <li class="{{ Request::is('admin/dashboard*') ? 'active' : null }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/post*') ? 'active' : null }}">
                <a href="{{ route('admin.post.index') }}">
                    <i class="material-icons">date_range</i>
                    <p>Posts</p>
                </a>
            </li>
        </ul>
    </div>
</div>
