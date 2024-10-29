<header id="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('image/cg-logo.png')}}" alt="logo" width="150" class="img-fluid" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#cg-offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/#about')}}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{Request::is('services') ? 'active' : ''}}" href="{{url('services')}}">services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('portfolio') ? 'active' : ''}}" href="{{url('portfolio')}}">portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="{{url('contact')}}">contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>

<!-- offcanvas -->
<div class="offcanvas offcanvas-end cg-off" data-bs-scroll="true" tabindex="-1" id="cg-offcanvas"
    aria-labelledby="cg-offcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">
            <img src="image/cg-logo.png" class="img-fluid" width="100" alt="logo" loading="lazy">
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <ul class="cg-off__menu">
            <li class="cg-off__list">
                <a href="{{url('/')}}" class="cg-off__link {{Request::is('/') ? 'active' : ''}}">Home</a>
            </li>
            <li class="cg-off__list">
                <a href="{{url('/#about')}}" class="cg-off__link">About</a>
            </li>
            <li class="cg-off__list">
                <a href="{{url('services')}}" class="cg-off__link {{Request::is('services') ? 'active' : ''}}">Services</a>
            </li>
            <li class="cg-off__list">
                <a href="{{url('portfolio')}}" class="cg-off__link {{Request::is('portfolio') ? 'active' : ''}}">Portfolio</a>
            </li>
            <li class="cg-off__list">
                <a href="{{url('contact')}}" class="cg-off__link {{Request::is('contact') ? 'active' : ''}}">Contact</a>
            </li>
        </ul>
    </div>
</div>
