<header>
    <!-- Navbar #1 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-ji">
        <div class="container">
            <a class="navbar-brand d-none d-lg-block" href="mailto:consult@avvanz.com">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24">
                    <path class="text-marigold" fill="currentColor" d="M64 112c-8.8 0-16 7.2-16 16l0 22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1l0-22.1c0-8.8-7.2-16-16-16L64 112zM48 212.2L48 384c0 8.8 7.2 16 16 16l384 0c8.8 0 16-7.2 16-16l0-171.8L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64l384 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128z"/>
                </svg>
                consult@avvanz.com
            </a>
            <div class="navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link login-1 text-uppercase fw-bolder" href="https://www.avvanz.com/screenglobal/">ScreenGlobal LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-2 text-uppercase fw-bolder" href="https://www.avvanz.com/cddglobal/">CDDGLOBAL LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-3 text-uppercase fw-bolder" href="https://learnglobal.apptitude.xyz/">LEARNGLOBAL LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>            
    <!-- Navbar #2 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container" id="navbarBrand">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/homepage/avvanzLogo.webp') }}" width="150" height="50" alt="Avvanz Logo" class="image-navbar-logo">
            </a>            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @php
                        $currentRouteName = Route::currentRouteName();
                    @endphp

                    <li class="nav-item dropdown nav-main-display">
                        <!-- Main "About Us" link -->
                        <a class="nav-link dropdown-toggle navigation text-uppercase fw-bolder nav-main {{ $currentRouteName == 'about-main' ? 'active' : '' }}" href="#" data-href="{{ route('about-main') }}" id="navbarDropdownAbout" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Go to About Us page">
                            About Us
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu nav-main-content" aria-labelledby="navbarDropdownAbout">
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'about-1' ? 'active' : '' }}" href="{{ route('about-1') }}">
                                    Workplace Safety and Health Guideline
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'about-2' ? 'active' : '' }}" href="{{ route('about-2') }}">
                                    Environmental, Social and Governance
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'about-3' ? 'active' : '' }}" href="{{ route('about-3') }}">
                                    Join Avvanz
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-main-display">
                        <a class="nav-link dropdown-toggle navigation text-uppercase fw-bolder nav-main {{ $currentRouteName == 'screen-main' ? 'active' : '' }}" href="#" data-href="{{ route('screen-main') }}" id="navbarDropdownScreen" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Go to Screen page">
                            Screen
                        </a>
                        <ul class="dropdown-menu nav-main-content" aria-labelledby="navbarDropdownScreen">
                            <li class="dropdown-submenu-right dropend nav-submenu-display">
                                <a class="dropdown-item dropdown-toggle navigation-item fw-bolder {{ $currentRouteName == 'screen-1' ? 'active' : '' }}" href="{{ route('screen-1') }}">
                                    Background Screening
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'screen-sub-1' ? 'active' : '' }}" href="{{ route('screen-sub-1') }}">Why Avvanz Screen</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'screen-sub-2' ? 'active' : '' }}" href="{{ route('screen-sub-2') }}">Background Checks</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'screen-sub-3' ? 'active' : '' }}" href="{{ route('screen-sub-3') }}">Avvanz Screen Global</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'screen-sub-4' ? 'active' : '' }}" href="{{ route('screen-sub-4') }}">Process</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'screen-sub-5' ? 'active' : '' }}" href="{{ route('screen-sub-5') }}">KYC AML Compliance</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'screen-2' ? 'active' : '' }}" href="{{ route('screen-2') }}">ScreenChain</a></li>
                            <li>
                                <hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'screen-3' ? 'active' : '' }}" href="{{ route('screen-3') }}">Singapore Work Passes</a></li>
                            <li>
                                <hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'screen-4' ? 'active' : '' }}" href="{{ route('screen-4') }}">Company Due Diligence</a></li>
                            <li>
                                <hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'screen-5' ? 'active' : '' }}" href="{{ route('screen-5') }}">Partnership Integration</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-main-display">
                        <a class="nav-link dropdown-toggle navigation text-uppercase fw-bolder nav-main {{ $currentRouteName == 'develop-main' ? 'active' : '' }}" href="#" data-href="{{ route('develop-main') }}" id="navbarDropdownDevelop" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Go to Develop page">
                            Develop
                        </a>
                        <ul class="dropdown-menu nav-main-content" aria-labelledby="navbarDropdownDevelop">
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'develop-1' ? 'active' : '' }}" href="{{ route('develop-1') }}">Star Trainers</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'develop-2' ? 'active' : '' }}" href="{{ route('develop-2') }}">Learn Global</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'develop-3' ? 'active' : '' }}" href="{{ route('develop-3') }}">Nibble & Learn</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-main-display">
                        <a class="nav-link dropdown-toggle navigation text-uppercase fw-bolder" href="#" id="navbarDropdownResources" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Go to Resources page">
                            Resources
                        </a>
                        <ul class="dropdown-menu nav-main-content" aria-labelledby="navbarDropdownResources">
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'resources-1' ? 'active' : '' }}" href="{{ route('resources-1') }}">Blog</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'resources-2' ? 'active' : '' }}" href="{{ route('resources-2') }}">Newsletter</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'resources-3' ? 'active' : '' }}" href="{{ route('resources-3') }}">Industry Reports</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'resources-4' ? 'active' : '' }}" href="{{ route('resources-4') }}">Webinar & Video</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'resources-5' ? 'active' : '' }}" href="{{ route('resources-5') }}">Press and Media</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-main-display">
                        <a class="nav-link navigation text-uppercase fw-bolder {{ $currentRouteName == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown nav-main-display">
                        <a class="nav-link dropdown-toggle navigation text-uppercase fw-bolder" href="#" data-href="{{ route('global') }}" id="navbarDropdownGlobal" role="button" data-bs-toggle="dropdown" aria-expanded="false"  aria-label="Go to Global page">
                            Global
                        </a>
                        <ul class="dropdown-menu nav-main-content" aria-labelledby="navbarDropdownGlobal">
                            <li class="dropdown-submenu-left dropend nav-submenu-display">
                                <a class="dropdown-item dropdown-toggle navigation-item fw-bolder" href="#">APAC</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'global-singapore' ? 'active' : '' }}" href="{{ route('global-singapore') }}">Singapore</a></li>
                                    <li><a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'global-australia' ? 'active' : '' }}" href="{{ route('global-australia') }}">Australia</a></li>
                                    <li><a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'global-ph' ? 'active' : '' }}" href="{{ route('global-ph') }}">Philippines</a></li>
                                    {{-- <li><a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'global-india' ? 'active' : '' }}" href="{{ route('global-india') }}">India</a></li> --}}
                                </ul>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-submenu-left dropend nav-submenu-display">
                                <a class="dropdown-item dropdown-toggle navigation-item fw-bolder" href="#">Americas</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'global-usa' ? 'active' : '' }}" href="{{ route('global-usa') }}">USA</a></li>
                                    <li><a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'global-latin-america' ? 'active' : '' }}" href="{{ route('global-latin-america') }}">Latin America</a></li>
                                </ul>
                            </li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="dropdown-submenu-left dropend nav-submenu-display">
                                <a class="dropdown-item dropdown-toggle navigation-item fw-bolder" href="#">EMEA</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'global-uae' ? 'active' : '' }}" href="{{ route('global-uae') }}">Middle East</a></li>
                                    <li><a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'global-uk' ? 'active' : '' }}" href="{{ route('global-uk') }}">United Kingdom</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>