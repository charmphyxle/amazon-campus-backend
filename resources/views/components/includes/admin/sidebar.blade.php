<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="index.html" class="brand-wrap">
            <img src="assets/imgs/theme/logo.svg" class="logo" alt="Nest Dashboard" />
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"><i
                    class="text-muted material-icons md-menu_open"></i></button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item active">
                <a class="menu-link" href="index.html">
                    <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-link" href="{{ route("news-and-events.index") }}">
                    <i class="icon material-icons md-comment"></i>
                    <span class="text">News & Events</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route("gallery.index") }}">
                    <i class="icon material-icons md-comment"></i>
                    <span class="text">Gallery</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route("testimonials.index") }}">
                    <i class="icon material-icons md-comment"></i>
                    <span class="text">Testimonials</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route("accreditations.index") }}">
                    <i class="icon material-icons md-comment"></i>
                    <span class="text">Accreditations</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route("application-forms.index") }}">
                    <i class="icon material-icons md-comment"></i>
                    <span class="text">Application Forms</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route("news-letters.index") }}">
                    <i class="icon material-icons md-comment"></i>
                    <span class="text">News Letters</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route("video-galleries.index") }}">
                    <i class="icon material-icons md-comment"></i>
                    <span class="text">Video Galleries</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route("video-testimonials.index") }}">
                    <i class="icon material-icons md-comment"></i>
                    <span class="text">Video Testimonials</span>
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
                    <a href="page-settings-1.html">Setting sample 1</a>
                    <a href="page-settings-2.html">Setting sample 2</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-blank.html">
                    <i class="icon material-icons md-local_offer"></i>
                    <span class="text"> Starter page </span>
                </a>
            </li>
        </ul>
        <br />
        <br />
    </nav>
</aside>
