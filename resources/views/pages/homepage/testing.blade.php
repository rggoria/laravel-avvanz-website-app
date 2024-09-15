<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Bootstrap Website</title>
    <meta name="description" content="Our Multi-award winning background checks platform ScreenGlobal will help you mitigate risk due to wrongful hires.">
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" media="print" onload="this.media='all'">
    <!-- Font Awesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  media="print" onload="this.media='all'">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/testing1.css') }}" media="print" onload="this.media='all'">
    <link rel="preload" href="https://www.avvanz.com/wp-content/plugins/w3-total-cache/pub/js/lazyload.min.js" as="script">
    <link rel="stylesheet" href="{{ asset('css/testing2.css') }}" media="print" onload="this.media='all'">
    <style>
       * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Navbar custom styles */
        .navbar {
            padding: 0.5rem 1rem;
        }

        /* Ensure flex alignment is handled by Bootstrap */
        .navbar-expand-lg {
            flex-direction: row;
            flex-wrap: nowrap;
        }

        /* Make sure the navbar brand and toggler button align properly */
        .navbar-brand {
            margin-right: auto; /* Pushes brand to the left */
        }

        /* Adjust padding and margin as needed */
        .navbar-nav {
            margin-left: auto; /* Pushes nav items to the right */
        }
    </style>
</head>
<body>
    <header>   
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-ji">
            <div class="container">
                <a class="navbar-brand d-none d-lg-block" href="mailto:consult@avvanz.com">
                    <i class="far fa-envelope text-marigold"></i>
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

        <nav class="navbar navbar-expand-lg navbar-dark bg-ji">
            <div class="container">
                <a class="navbar-brand d-none d-lg-block" href="mailto:consult@avvanz.com">
                    <i class="far fa-envelope text-marigold"></i>
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

        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/homepage/avvanzLogo.webp') }}" alt="Avvanz Logo" class="image-navbar-logo">
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
                            <a class="nav-link dropdown-toggle navigation text-uppercase fw-bolder nav-main {{ $currentRouteName == 'about-main' ? 'active' : '' }}" href="#" data-href="{{ route('about-main') }}" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu nav-main-content" aria-labelledby="navbarScrollingDropdown">
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
                            <a class="nav-link dropdown-toggle navigation text-uppercase fw-bolder nav-main {{ $currentRouteName == 'screen-main' ? 'active' : '' }}" href="#" data-href="{{ route('screen-main') }}" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Screen
                            </a>
                            <ul class="dropdown-menu nav-main-content" aria-labelledby="navbarScrollingDropdown">
                                <li class="dropdown-submenu dropend nav-submenu-display">
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
                            <a class="nav-link dropdown-toggle navigation text-uppercase fw-bolder nav-main {{ $currentRouteName == 'develop-main' ? 'active' : '' }}" href="#" data-href="{{ route('develop-main') }}" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Develop
                            </a>
                            <ul class="dropdown-menu nav-main-content" aria-labelledby="navbarScrollingDropdown">
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
                            <a class="nav-link dropdown-toggle navigation text-uppercase fw-bolder" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu nav-main-content" aria-labelledby="navbarScrollingDropdown">
                                <li>
                                    <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'resources-1' ? 'active' : '' }}" href="{{ route('resources-1') }}">Blog</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'resources-2' ? 'active' : '' }}" href="{{ route('resources-2') }}">Industry Reports</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'resources-3' ? 'active' : '' }}" href="{{ route('resources-3') }}">Webinar & Video</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item navigation-item fw-bolder {{ $currentRouteName == 'resources-4' ? 'active' : '' }}" href="{{ route('resources-4') }}">Press and Media</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-main-display">
                            <a class="nav-link navigation text-uppercase fw-bolder {{ $currentRouteName == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item nav-main-display">
                            <a class="nav-link navigation text-uppercase fw-bolder {{ $currentRouteName == 'global' ? 'active' : '' }}" href="{{ route('global') }}">Global</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> --}}
    </header>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" async></script>
</body>
</html>
