<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="{{ route('admin.index') }}" class="brand-wrap">
            <img src="{{ asset('images/logo-1.png') }}" class="logo" alt="Nest Dashboard" />
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"><i
                    class="text-muted material-icons md-menu_open"></i></button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('admin.index') }}">
                    <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.news-and-events.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route("admin.news-and-events.index") }}">
                    <i class="icon material-icons md-comment"></i>
                    <span class="text">News & Events</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route("admin.gallery.index") }}">
                    <i class="icon material-icons md-filter"></i>
                    <span class="text">Gallery</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route("admin.testimonials.index") }}">
                    <i class="icon material-icons md-article"></i>
                    <span class="text">Testimonials</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.accreditations.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route("admin.accreditations.index") }}">
                    <i class="icon material-icons md-stars"></i>
                    <span class="text">Accreditations</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.application-forms.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route("admin.application-forms.index") }}">
                    <i class="icon material-icons md-note"></i>
                    <span class="text">Application Forms</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.news-letters.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route("admin.news-letters.index") }}">
                    <i class="icon material-icons md-comment"></i>
                    <span class="text">News Letters</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.video-galleries.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route("admin.video-galleries.index") }}">
                    <i class="icon material-icons md-camera"></i>
                    <span class="text">Video Galleries</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.video-testimonials.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route("admin.video-testimonials.index") }}">
                    <i class="icon material-icons md-article"></i>
                    <span class="text">Video Testimonials</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.calendar-events.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route("admin.calendar-events.index") }}">
                    <i class="icon material-icons md-event"></i>
                    <span class="text">Calendar Events</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.posters.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route("admin.posters.index") }}">
                    <i class="icon material-icons md-image"></i>
                    <span class="text">Posters</span>
                </a>
            </li>

            {{-- 
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-person"></i>
                    <span class="text">Account</span>
                </a>
                <div class="submenu">
                    <a href="page-account-login.html">User login</a>
                    <a href="page-account-register.html">User registration</a>
                    <a href="page-error-404.html">Error 404</a>
                </div>
            </li>
             --}}
        </ul>
        <hr />
        <ul class="menu-aside">
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-settings"></i>
                    <span class="text">Settings</span>
                </a>
                <div class="submenu">                    
                    <a href="{{ route('admin.profile.index') }}">Profile</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-local_offer"></i>
                    <span class="text"> Website </span>
                </a>
            </li>
        </ul>
        <br />
        <br />
    </nav>
</aside>
