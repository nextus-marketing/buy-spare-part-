<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- =============================================
         SEO META TAGS
         Each page can override via @section('meta_*')
         ============================================= -->
    @php
        $metaTitle       = trim($__env->yieldContent('meta_title')) ?: (trim($__env->yieldContent('title')) ?: 'Buy Spare Part | Quality Used & OEM Auto Parts Nationwide');
        $metaDescription = trim($__env->yieldContent('meta_description')) ?: 'Buy Spare Part supplies quality used and OEM replacement engines, transmissions, electrical, suspension, and body parts for all major brands. Call us at +1 (888) 855-2919 for instant availability. Nationwide shipping.';
        $metaKeywords    = trim($__env->yieldContent('meta_keywords'))     ?: 'used car parts, OEM auto parts, replacement engines, transmissions, electrical parts, suspension parts, buy spare part, buy spare parts, used auto parts USA';
        $metaRobots      = trim($__env->yieldContent('meta_robots'))       ?: 'index, follow';
        $metaCanonical   = trim($__env->yieldContent('canonical'))         ?: ('https://buysparepart.org' . request()->getPathInfo());
        $ogTitle         = trim($__env->yieldContent('og_title'))          ?: $metaTitle;
        $ogDescription   = trim($__env->yieldContent('og_description'))    ?: $metaDescription;
        $ogUrl           = trim($__env->yieldContent('og_url'))            ?: $metaCanonical;
        $ogImage         = trim($__env->yieldContent('og_image'))          ?: 'https://buysparepart.org/frontend/assets/logo.png';
        $ogType          = trim($__env->yieldContent('og_type'))           ?: 'website';
    @endphp

    <!-- Primary Meta -->
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords"    content="{{ $metaKeywords }}">
    <meta name="author"      content="Buy Spare Part — Spare Part Zone LLC">
    <meta name="robots"      content="{{ $metaRobots }}">
    <meta name="theme-color" content="#ff5900">

    <!-- Contact / Business -->
    <meta name="contact"  content="+1 (888) 855-2919">
    <meta name="reply-to" content="support@buysparepart.org">

    <!-- Canonical -->
    <link rel="canonical" href="{{ $metaCanonical }}">

    <!-- =============================================
         OPEN GRAPH (OG) TAGS — No social accounts
         ============================================= -->
    <meta property="og:type"         content="{{ $ogType }}">
    <meta property="og:site_name"    content="Buy Spare Part">
    <meta property="og:title"        content="{{ $ogTitle }}">
    <meta property="og:description"  content="{{ $ogDescription }}">
    <meta property="og:url"          content="{{ $ogUrl }}">
    <meta property="og:image"        content="{{ $ogImage }}">
    <meta property="og:image:width"  content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale"       content="en_US">
    <meta property="og:phone_number" content="+18888552919">

    <!-- =============================================
         STRUCTURED DATA — LocalBusiness (JSON-LD)
         ============================================= -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AutoPartsStore",
        "name": "Buy Spare Part",
        "alternateName": "Spare Part Zone LLC",
        "url": "https://buysparepart.org",
        "logo": "https://buysparepart.org/frontend/assets/logo.png",
        "image": "https://buysparepart.org/frontend/assets/logo.png",
        "description": "Buy Spare Part supplies quality used and OEM replacement engines, transmissions, electrical, suspension, and body parts for all major vehicle brands. Nationwide shipping available.",
        "telephone": "+18888552919",
        "priceRange": "$$",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "US"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+18888552919",
            "contactType": "customer support",
            "areaServed": "US",
            "availableLanguage": "English",
            "contactOption": "TollFree"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
        },
        "sameAs": []
    }
    </script>

    <!-- Bootstrap CSS -->
    <link href="/frontend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/assets/css/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="/frontend/assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- Fontawesome all CSS -->
    <link href="/frontend/assets/css/all.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="/frontend/assets/css/animate.min.css" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="/frontend/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="/frontend/assets/css/fontawesome.min.css" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="/frontend/assets/css/swiper-bundle.min.css">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="/frontend/assets/css/slick.css">
    <link rel="stylesheet" href="/frontend/assets/css/slick-theme.css">
    <!-- Magnific-popup CSS -->
    <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.css">
    <!-- BoxIcon  CSS -->
    <link href="/frontend/assets/css/boxicons.min.css" rel="stylesheet">
    <!-- Select2  CSS -->
    <link href="/frontend/assets/css/nice-select.css" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="/frontend/assets/css/style.css">
    <!--  my CSS  -->
    <link rel="stylesheet" href="/frontend/assets/css/my.css">

    <link rel="shortcut icon" href="/frontend/assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18485553211"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'AW-18485553211'); </script>
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-B473XQNT7Q"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-B473XQNT7Q'); </script>
</head>

<body class="tt-magic-cursor">
   
    <div class="top-bar style-6">
        <div class="logo-and-menu">
            <div class="company-logo">
                <a href="/" style="display: inline-flex; align-items: center; max-width: 100%;">
                    <img src="/frontend/assets/logo.png"
                        alt="Buy Spare Part"
                        style="display: block; width: 220px; max-width: 100%; height: auto; max-height: 65px; object-fit: contain;">
                </a>
            </div>
            
        </div>
        <div class="topbar-right">
            <ul>
               
                <li>
                    <div class="hotline-area d-xl-flex d-none">
                        <div class="icon">
                            <img src="/frontend/assets/img/home1/icon/hotline-icon.svg" alt="">
                        </div>
                        <div class="content">
                            <span>To More Inquiry</span>
                            <h6><a href="tel:+18888552919">+1 (888) 855-2919</a></h6>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </div>


    <!-- Start header section -->
    <header class="header-area style-6">
        <div class="header-logo d-lg-none d-flex">
            <a href="/"><img alt="image" class="img-fluid" src="/frontend/assets/logo.png"></a>
        </div>
        <div class="main-menu">
            <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                <div class="mobile-logo-wrap">
                    <a href="/"><img alt="image" src="/frontend/assets/logo.png"></a>
                </div>
            </div>
            <ul class="menu-list">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/about">About Us</a>
                </li>
                
                <li>
                    <a href="/#brands">Find By Brands</a>
                </li>

                <li class="menu-item-has-children">
                    <a href="#" class="drop-down">Auto Parts</a>
                    <i class="bi bi-plus dropdown-icon"></i>

                    <ul class="sub-menu">

                        <!-- Engine Parts -->
                        <li class="menu-item-has-children">
                            <a href="/engine-parts">Engine Parts</a>
                            <i class="bi bi-plus dropdown-icon"></i>

                            <ul class="sub-menu">
                                <li><a href="/engine-parts/car-engine">Engine</a></li>
                                <li><a href="/engine-parts/cylinder-head">Cylinder Head</a></li>
                                <li><a href="/engine-parts/camshaft">Camshaft</a></li>
                                <li><a href="/engine-parts/turbocharger">Turbocharger</a></li>
                                <li><a href="/engine-parts/supercharger">Supercharger</a></li>
                                <li><a href="/engine-parts/intake-manifold">Intake Manifold</a></li>
                                <li><a href="/engine-parts/exhaust-manifold">Exhaust Manifold</a></li>
                                <li><a href="/engine-parts/throttle-body">Throttle Body</a></li>
                                <li><a href="/engine-parts/engine-mount">Engine Mount</a></li>
                                <li><a href="/engine-parts/valve-cover">Valve Cover</a></li>
                                <li><a href="/engine-parts/fuel-pump">Fuel Pump</a></li>
                                <li><a href="/engine-parts/coolant-pump">Coolant Pump</a></li>
                                <li><a href="/engine-parts/radiator">Radiator</a></li>
                                <li><a href="/engine-parts/vacuum-pump">Vacuum Pump</a></li>
                                <li><a href="/engine-parts/catalytic-converter">Catalytic Converter</a></li>
                            </ul>
                        </li>

                        <!-- Transmission Parts -->
                        <li class="menu-item-has-children">
                            <a href="/transmission-parts">Transmission Parts</a>
                            <i class="bi bi-plus dropdown-icon"></i>
                            <ul class="sub-menu">
                                <li><a href="/transmission-parts/transmission">Transmission</a></li>
                                <li><a href="/transmission-parts/drive-shaft">Drive Shaft</a></li>
                                <li><a href="/transmission-parts/axle-shaft">Axle Shaft</a></li>
                                <li><a href="/transmission-parts/floor-shifter">Floor Shifter</a></li>
                                <li><a href="/transmission-parts/cradle">Cradle</a></li>
                                <li><a href="/transmission-parts/crossmember">Crossmember</a></li>
                                <li><a href="/transmission-parts/subframe">Subframe</a></li>
                            </ul>
                        </li>

                        <!-- Suspension Parts -->
                        <li class="menu-item-has-children">
                            <a href="/suspension-parts">Suspension Parts</a>
                            <i class="bi bi-plus dropdown-icon"></i>

                            <ul class="sub-menu">
                                <li><a href="/suspension-parts/shock-absorber">Shock Absorber</a></li>
                                <li><a href="/suspension-parts/rack-pinion">Rack &amp; Pinion</a></li>
                                <li><a href="/suspension-parts/control-arms">Control Arms</a></li>
                                <li><a href="/suspension-parts/brake-caliper-rotors">Brake Caliper / Rotors</a></li>
                                <li><a href="/suspension-parts/power-steering-pump">Power Steering Pump</a></li>
                                <li><a href="/suspension-parts/steering-column">Steering Column</a></li>
                                <li><a href="/suspension-parts/strut">Strut</a></li>
                                <li><a href="/suspension-parts/ac-compressor">AC Compressor</a></li>
                                <li><a href="/suspension-parts/ac-condenser">AC Condenser</a></li>
                                <li><a href="/suspension-parts/blower-motor">Blower Motor</a></li>
                                <li><a href="/suspension-parts/ac-heater-control-system">AC Heater Control System</a></li>
                            </ul>
                        </li>

                        <!-- Electrical Parts -->
                        <li class="menu-item-has-children">
                            <a href="/electrical-parts">Electrical Parts</a>
                            <i class="bi bi-plus dropdown-icon"></i>

                            <ul class="sub-menu">
                                <li><a href="/electrical-parts/alternator">Alternator</a></li>
                                <li><a href="/electrical-parts/starter">Starter</a></li>
                                <li><a href="/electrical-parts/ignition-switch">Ignition Switch</a></li>
                                <li><a href="/electrical-parts/fuse-box">Fuse Box</a></li>
                                <li><a href="/electrical-parts/instrument-cluster">Instrument Cluster</a></li>
                                <li><a href="/electrical-parts/wiper-motor">Wiper Motor</a></li>
                                <li><a href="/electrical-parts/window-motor-regulator">Window Motor &amp; Regulator</a></li>
                                <li><a href="/electrical-parts/cd-player-radio">CD Player / Radio</a></li>
                                <li><a href="/electrical-parts/tail-light">Tail Light</a></li>
                                <li><a href="/electrical-parts/headlight">Headlight</a></li>
                                <li><a href="/electrical-parts/fog-lamps">Fog Lamps</a></li>
                                <li><a href="/electrical-parts/abs-unit">ABS Unit</a></li>
                            </ul>
                        </li>

                        <!-- Exterior Body Parts -->
                        <li class="menu-item-has-children">
                            <a href="/exterior-parts">Exterior Body Parts</a>
                            <i class="bi bi-plus dropdown-icon"></i>

                            <ul class="sub-menu">
                                <li><a href="/exterior-parts/bumpers">Bumpers</a></li>
                                <li><a href="/exterior-parts/fenders">Fenders</a></li>
                                <li><a href="/exterior-parts/hood">Hood</a></li>
                                <li><a href="/exterior-parts/doors">Doors</a></li>
                                <li><a href="/exterior-parts/mirrors">Mirrors</a></li>
                                <li><a href="/exterior-parts/grilles">Grilles</a></li>
                                <li><a href="/exterior-parts/fender-flare">Fender Flare</a></li>
                                <li><a href="/exterior-parts/wheel-rim">Wheel / Rim</a></li>
                                <li><a href="/exterior-parts/wheel-hub">Wheel Hub</a></li>
                            </ul>
                        </li>

                        <!-- Interior Body Parts -->
                        <li class="menu-item-has-children">
                            <a href="/interior-parts">Interior Body Parts</a>
                            <i class="bi bi-plus dropdown-icon"></i>

                            <ul class="sub-menu">
                                <li><a href="/interior-parts/seats">Seats</a></li>
                                <li><a href="/interior-parts/seat-belts">Seat Belts</a></li>
                                <li><a href="/interior-parts/center-console">Center Console</a></li>
                                <li><a href="/interior-parts/sun-visor">Sun Visor</a></li>
                                <li><a href="/interior-parts/mirrors">Mirrors</a></li>
                                <li><a href="/interior-parts/air-bag">Air Bag</a></li>
                                <li><a href="/interior-parts/car-steering">Steering</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="/contact" class="drop-down">CONTACT US</a>
                </li>
            </ul>
            <div class="hotline-area d-lg-none d-flex">
                
                <div class="content">
                    <span>To More Inquiry</span>
                    <h6><a href="tel:+18888552919">+1 (888) 855-2919</a></h6>
                </div>
            </div>
        </div>
        <div class="nav-right d-flex jsutify-content-end align-items-center">
           
            <a type="button" class="primary-btn6"
               href="tel:+18888552919">

                <i class="fa-solid fa-phone"></i>
                Call Now

</a>


            <div class="sidebar-button mobile-menu-btn ">
                <span></span>
            </div>
        </div>
    </header>
    <!-- End header section -->
    @yield('content')
    <!-- Start Footer Section -->
   <footer class="style-3">
    <div class="container-fluid">

        <div class="footer-top">
            <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 justify-content-center g-lg-4 gy-5">

        <div class="col d-flex justify-content-lg-start">
            <div class="footer-widget">
                <div class="widget-title">
                    <h5>About Us</h5>
                </div>
                <div class="about-description">
                    <p style="color:#fff;">Find quality used and OEM replacement parts for your cars. Call our parts team with your vehicle details and let us help you find the right part.</p>
                    <p style="color:#fff;">Spare Part Zone LLC DBA Buy Spare Part</p>
                </div>
            </div>
        </div>

        <div class="col d-flex justify-content-sm-center">
            <div class="footer-widget">
                <div class="widget-title">
                    <h5>Quick Links</h5>
                </div>
                <div class="menu-container">
                    <ul>
                        <li><a href="/">Home
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                        <li><a href="/about">About Us
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                        <li><a href="/#brands">Find By Brands
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col d-flex justify-content-lg-center justify-content-sm-end">
            <div class="footer-widget">
                <div class="widget-title">
                    <h5>Support</h5>
                </div>
                <div class="menu-container">
                    <ul>
                        <li><a href="/contact">Contact Us
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                        <li><a href="/privacy-policy">Privacy Policy
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                        <li><a href="/terms-conditions">Terms and Conditions
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                        <li><a href="/refund-policy">Refund Policy
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col d-flex justify-content-xl-end justify-content-sm-center">
            <div class="footer-widget">
                <div class="widget-title">
                    <h5>Auto Parts</h5>
                </div>
                <div class="menu-container">
                    <ul>
                        <li><a href="/engine-parts">Engine Parts
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                        <li><a href="/transmission-parts">Transmission Parts
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                        <li><a href="/electrical-parts">Electrical Parts
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                        <li><a href="/suspension-parts">Suspension Parts
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                        <li><a href="/exterior-parts">Exterior Parts
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                        <li><a href="/interior-parts">Interior Parts
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1605 0H0.849401C0.626751 0 0.413219 0.0884475 0.255781 0.245885C0.0983438 0.403323 0.00989626 0.616854 0.00989626 0.839505C0.00989626 1.06216 0.0983438 1.27569 0.255781 1.43312C0.413219 1.59056 0.626751 1.67901 0.849401 1.67901H7.13309L0.256291 8.55665C0.17611 8.63409 0.112154 8.72673 0.0681567 8.82915C0.0241591 8.93157 0.00100033 9.04173 3.16969e-05 9.1532C-0.000936937 9.26467 0.020304 9.37522 0.062515 9.47839C0.104726 9.58156 0.167062 9.67529 0.245885 9.75412C0.324709 9.83294 0.418441 9.89527 0.521613 9.93748C0.624785 9.9797 0.735331 10.0009 0.846799 9.99997C0.958268 9.999 1.06843 9.97584 1.17085 9.93184C1.27327 9.88785 1.36591 9.82389 1.44335 9.74371L8.32099 2.86649V9.1506C8.32099 9.37325 8.40944 9.58678 8.56688 9.74422C8.72431 9.90166 8.93785 9.9901 9.1605 9.9901C9.38315 9.9901 9.59668 9.90166 9.75412 9.74422C9.91155 9.58678 10 9.37325 10 9.1506V0.839505C10 0.616854 9.91155 0.403323 9.75412 0.245885C9.59668 0.0884475 9.38315 0 9.1605 0Z" />
                                </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>

            </div>
        </div>

        <div class="footer-center">
            <div class="footer-logo">
                <a href="/"><img src="/frontend/assets/footer-logo.png" alt=""  style="display: block; width: 220px; max-width: 100%; height: auto; max-height: 65px; object-fit: contain;"></a>
            </div>
            <div class="contact-area">
                <div class="hotline-area">
                    <div class="icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path d="M31.1603 24.6852L24.6834 20.3658C23.8615 19.8221 22.7597 20.001 22.152 20.7769L20.2654 23.2027C20.1481 23.3573 19.9789 23.4645 19.789 23.5045C19.599 23.5444 19.4011 23.5145 19.2314 23.4203L18.8725 23.2224C17.6828 22.574 16.2025 21.7667 13.22 18.7831C10.2375 15.7995 9.42859 14.3181 8.78012 13.1306L8.58334 12.7717C8.48781 12.6021 8.45678 12.4037 8.49597 12.213C8.53516 12.0223 8.64193 11.8522 8.79662 11.734L11.2208 9.84792C11.9964 9.2402 12.1756 8.13874 11.6324 7.31655L7.31309 0.83963C6.75648 0.00237835 5.63977 -0.24896 4.77809 0.269026L2.06967 1.89597C1.21867 2.39626 0.594346 3.20652 0.327557 4.15695C-0.647737 7.71055 0.0859667 13.8435 9.12038 22.879C16.3071 30.0651 21.6572 31.9976 25.3345 31.9976C26.1809 32.0013 27.0239 31.8912 27.8409 31.6703C28.7915 31.4038 29.6018 30.7794 30.1018 29.9281L31.7304 27.2214C32.2491 26.3595 31.9979 25.2421 31.1603 24.6852ZM30.8115 26.6742L29.1867 29.3826C28.8277 29.997 28.2449 30.4488 27.5603 30.6432C24.2797 31.5439 18.5483 30.7979 9.87489 22.1245C1.20149 13.4511 0.455538 7.72017 1.35622 4.4391C1.55097 3.75367 2.00324 3.17011 2.61841 2.81053L5.32682 1.1857C5.7007 0.960737 6.18538 1.06978 6.4269 1.4331L8.77324 4.95577L10.7426 7.90946C10.9784 8.26609 10.9009 8.74409 10.5645 9.00798L8.13978 10.8941C7.40188 11.4583 7.19117 12.4792 7.64547 13.2895L7.83801 13.6393C8.51953 14.8892 9.36684 16.4442 12.4603 19.5371C15.5537 22.63 17.1081 23.4773 18.3575 24.1588L18.7078 24.3518C19.518 24.8061 20.539 24.5954 21.1032 23.8575L22.9893 21.4328C23.2533 21.0966 23.7311 21.0191 24.0879 21.2547L30.5642 25.5741C30.9278 25.8154 31.0368 26.3004 30.8115 26.6742ZM18.1324 5.33496C23.1367 5.34053 27.1921 9.39599 27.1977 14.4003C27.1977 14.6948 27.4364 14.9335 27.7309 14.9335C28.0255 14.9335 28.2642 14.6948 28.2642 14.4003C28.258 8.8072 23.7255 4.27462 18.1324 4.2685C17.8378 4.2685 17.5991 4.50721 17.5991 4.80173C17.5991 5.09625 17.8378 5.33496 18.1324 5.33496Z" />
                                <path d="M18.1324 8.53424C21.3704 8.53805 23.9944 11.162 23.9982 14.4001C23.9982 14.5415 24.0544 14.6771 24.1544 14.7771C24.2544 14.8771 24.39 14.9333 24.5314 14.9333C24.6728 14.9333 24.8085 14.8771 24.9085 14.7771C25.0085 14.6771 25.0646 14.5415 25.0646 14.4001C25.0602 10.5733 21.9591 7.47215 18.1324 7.46777C17.8378 7.46777 17.5991 7.70649 17.5991 8.00101C17.5991 8.29553 17.8378 8.53424 18.1324 8.53424Z" />
                                <path d="M18.1324 11.7344C19.6041 11.7362 20.7968 12.9289 20.7986 14.4007C20.7986 14.5422 20.8548 14.6778 20.9548 14.7778C21.0548 14.8778 21.1905 14.934 21.3319 14.934C21.4733 14.934 21.6089 14.8778 21.7089 14.7778C21.8089 14.6778 21.8651 14.5422 21.8651 14.4007C21.8627 12.3402 20.1929 10.6703 18.1324 10.668C17.8378 10.668 17.5991 10.9067 17.5991 11.2012C17.5991 11.4957 17.8378 11.7344 18.1324 11.7344Z" />
                            </svg>
                    </div>
                    <div class="content">
                        <span>To More Inquiry</span>
                        <h6><a href="tel:+18888552919">+1 (888) 855-2919</a></h6>
                    </div>
                </div>
                <div class="hotline-area">
                    <div class="icon">
                        <svg width="32" height="33" viewBox="0 0 32 33" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.4005 32.0023H1.60049C1.17627 32.0019 0.769552 31.8332 0.469585 31.5332C0.169619 31.2332 0.000911967 30.8265 0.000488386 30.4023V10.669C0.000424993 10.5676 0.0292616 10.4683 0.0836186 10.3827C0.137976 10.2971 0.215601 10.2288 0.307397 10.1858C0.399192 10.1427 0.501355 10.1267 0.601912 10.1397C0.702468 10.1526 0.797252 10.1939 0.875155 10.2588L13.961 21.1346C14.535 21.6089 15.2564 21.8683 16.001 21.8683C16.7456 21.8683 17.467 21.6089 18.041 21.1346L31.1258 10.2583C31.2038 10.1934 31.2986 10.152 31.3992 10.1391C31.4998 10.1262 31.602 10.1422 31.6938 10.1853C31.7856 10.2284 31.8633 10.2968 31.9176 10.3825C31.9719 10.4682 32.0007 10.5675 32.0005 10.669V30.4023C32.0001 30.8265 31.8314 31.2332 31.5314 31.5332C31.2314 31.8332 30.8247 32.0019 30.4005 32.0023ZM1.06716 11.8055V30.4023C1.06716 30.6967 1.30609 30.9356 1.60049 30.9356H30.4005C30.5419 30.9356 30.6776 30.8794 30.7776 30.7794C30.8776 30.6794 30.9338 30.5438 30.9338 30.4023V11.8055L18.7216 21.9548C17.956 22.5875 16.994 22.9337 16.0009 22.9339C15.0079 22.934 14.0457 22.5882 13.28 21.9559L1.06716 11.8055Z" />
                                <path d="M0.534374 11.2024C0.42111 11.2026 0.310717 11.1668 0.219187 11.1C0.127657 11.0333 0.0597426 10.9392 0.0252829 10.8313C-0.00917678 10.7234 -0.00839247 10.6074 0.0275222 10.4999C0.063437 10.3925 0.132617 10.2993 0.22504 10.2339L5.02504 6.83119C5.14046 6.74936 5.28366 6.71673 5.42314 6.74049C5.56262 6.76424 5.68695 6.84243 5.76877 6.95785C5.8506 7.07327 5.88323 7.21648 5.85947 7.35595C5.83572 7.49543 5.75753 7.61976 5.64211 7.70159L0.842107 11.1043C0.752234 11.1682 0.644662 11.2025 0.534374 11.2024ZM31.4666 11.2024C31.3564 11.2025 31.2488 11.1682 31.1589 11.1043L26.3589 7.70159C26.2447 7.61935 26.1676 7.49531 26.1445 7.35649C26.1213 7.21768 26.154 7.07534 26.2353 6.9605C26.3167 6.84566 26.4401 6.76762 26.5788 6.7434C26.7174 6.71918 26.86 6.75073 26.9754 6.83119L31.7754 10.2339C31.8678 10.2993 31.9369 10.3924 31.9729 10.4997C32.0088 10.607 32.0097 10.723 31.9754 10.8308C31.941 10.9386 31.8733 11.0328 31.7819 11.0996C31.6906 11.1664 31.5798 11.2024 31.4666 11.2024ZM20.9285 3.73572C20.8181 3.73582 20.7103 3.70152 20.6202 3.63759L18.0709 1.82959C17.4975 1.34491 16.7721 1.07691 16.0213 1.07233C15.2705 1.06775 14.5419 1.32688 13.9626 1.80452L11.3813 3.63759C11.2659 3.71941 11.1227 3.75204 10.9832 3.72828C10.8437 3.70453 10.7194 3.62634 10.6376 3.51092C10.5557 3.3955 10.5231 3.2523 10.5469 3.11282C10.5706 2.97334 10.6488 2.84901 10.7642 2.76719L13.3136 0.959185C14.0773 0.33469 15.0346 -0.00443301 16.0212 4.37621e-05C17.0077 0.00452053 17.9619 0.352318 18.72 0.983718L21.2373 2.76719C21.3297 2.83266 21.3989 2.92585 21.4348 3.03327C21.4707 3.14069 21.4715 3.25675 21.4371 3.36465C21.4026 3.47254 21.3347 3.56667 21.2432 3.63338C21.1516 3.7001 21.0412 3.73594 20.928 3.73572H20.9285ZM0.880507 31.7144C0.770687 31.7146 0.663477 31.6809 0.573522 31.6179C0.483567 31.5549 0.415252 31.4657 0.377909 31.3624C0.340566 31.2591 0.336016 31.1468 0.364879 31.0409C0.393742 30.9349 0.454612 30.8405 0.539174 30.7704L12.7098 20.6584C12.7637 20.6136 12.8259 20.5799 12.8928 20.5592C12.9598 20.5385 13.0301 20.5311 13.0999 20.5376C13.1696 20.5441 13.2374 20.5642 13.2994 20.5969C13.3614 20.6295 13.4163 20.6741 13.461 20.728C13.5058 20.7819 13.5395 20.8441 13.5602 20.911C13.5809 20.9779 13.5883 21.0482 13.5818 21.118C13.5754 21.1878 13.5552 21.2556 13.5226 21.3175C13.4899 21.3795 13.4453 21.4344 13.3914 21.4792L1.22077 31.5912C1.12524 31.6708 1.00485 31.7144 0.880507 31.7144ZM31.12 31.7144C30.9956 31.7145 30.8752 31.6709 30.7797 31.5912L18.609 21.4792C18.5538 21.4349 18.5079 21.38 18.474 21.3178C18.4402 21.2556 18.4191 21.1872 18.4119 21.1167C18.4048 21.0463 18.4117 20.9751 18.4324 20.9073C18.4531 20.8396 18.4871 20.7766 18.5323 20.7221C18.5776 20.6676 18.6333 20.6227 18.6961 20.59C18.7589 20.5573 18.8276 20.5374 18.8982 20.5315C18.9688 20.5256 19.0399 20.5338 19.1073 20.5557C19.1746 20.5776 19.237 20.6127 19.2906 20.6589L31.4613 30.7709C31.5459 30.841 31.6067 30.9355 31.6356 31.0414C31.6645 31.1474 31.6599 31.2597 31.6226 31.3629C31.5852 31.4662 31.5169 31.5554 31.427 31.6184C31.337 31.6814 31.2298 31.7146 31.12 31.7144Z" />
                                <path d="M26.6672 15.1919C26.5258 15.1919 26.3901 15.1358 26.2901 15.0357C26.1901 14.9357 26.1339 14.8001 26.1339 14.6586V3.74021C26.1323 3.75088 26.1109 3.73595 26.0752 3.73595H5.92587C5.91421 3.73524 5.90252 3.73691 5.89152 3.74085C5.88052 3.7448 5.87043 3.75093 5.86187 3.75888L5.8672 14.6586C5.8672 14.8001 5.81101 14.9357 5.71099 15.0357C5.61097 15.1358 5.47532 15.1919 5.33387 15.1919C5.19242 15.1919 5.05677 15.1358 4.95675 15.0357C4.85673 14.9357 4.80054 14.8001 4.80054 14.6586V3.73595C4.80891 3.44547 4.93203 3.17014 5.14294 2.97023C5.35384 2.77032 5.63536 2.66211 5.92587 2.66928H26.0752C26.3657 2.66211 26.6472 2.77032 26.8581 2.97023C27.069 3.17014 27.1922 3.44547 27.2005 3.73595V14.6586C27.2005 14.8001 27.1443 14.9357 27.0443 15.0357C26.9443 15.1358 26.8087 15.1919 26.6672 15.1919Z" />
                            </svg>
                    </div>
                    <div class="content">
                        <span>To Send Mail</span>
                        <h6><a href="mailto:sales@buysparepart.org">sales@buysparepart.org</a></h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm">
            <div class="copyright-area">
                <p>Copyright ©2026 <a href="/">Spare Part Zone LLC DBA Buy Spare Part</a> All rights reserved.</p>
            </div>
            <div class="social-area">
                <h6>Follow Us:</h6>
                <ul>
                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="https://twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class='bx bxl-linkedin'></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram-alt'></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>
    <!-- End Footer Section -->

    
<!-- Modern Floating Call Button -->
<a href="tel:+18888552919" class="floating-call-btn" aria-label="Call us now">
    <span class="call-icon">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="25" height="25" viewBox="0 0 24 24"
             fill="none" stroke="currentColor"
             stroke-width="2" stroke-linecap="round"
             stroke-linejoin="round">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2
            19.79 19.79 0 0 1-8.63-3.07
            19.5 19.5 0 0 1-6-6
            A19.79 19.79 0 0 1 2.12 4.18
            2 2 0 0 1 4.11 2h3
            a2 2 0 0 1 2 1.72
            c.12.96.36 1.9.7 2.8
            a2 2 0 0 1-.45 2.11L8.09 9.91
            a16 16 0 0 0 6 6l1.27-1.27
            a2 2 0 0 1 2.11-.45
            c.9.34 1.84.58 2.8.7
            A2 2 0 0 1 22 16.92z"/>
        </svg>
    </span>

    <span class="call-text">
        <strong>Call Us Now</strong>
    </span>
</a>

<style>
.floating-call-btn {
    position: fixed;
    left: 25px;
    bottom: 25px;
    z-index: 9999;
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 9px 20px 9px 9px;
    background: #ff5900;
    color: #ffffff;
    text-decoration: none;
    border-radius: 50px;
    box-shadow: 0 8px 25px rgba(255, 89, 0, 0.35);
    font-family: Arial, sans-serif;
    transition: transform 0.3s ease,
                box-shadow 0.3s ease;
}

.floating-call-btn:hover {
    color: #ffffff;
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(255, 89, 0, 0.45);
}

.call-icon {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #ff5900;
    background: #ffffff;
    border-radius: 50%;
    animation: callPulse 2s infinite;
}

.call-text {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.call-text strong {
    font-size: 14px;
    font-weight: 700;
}

.call-text small {
    font-size: 12px;
    color: #ffffff;
}

@keyframes callPulse {
    0%, 100% {
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
    }
    50% {
        box-shadow: 0 0 0 7px rgba(255, 255, 255, 0);
    }
}

@media (max-width: 576px) {
    .floating-call-btn {
        left: 15px;
        bottom: 15px;
        padding: 7px;
    }

    .call-icon {
        width: 50px;
        height: 50px;
    }

    .call-text strong {
        font-size: 12px;
    }

    .call-text small {
        font-size: 11px;
    }
}
</style>


<!-- ==========================================
     BUY SPARE PART - RECTANGLE CALL OFFER POPUP
     No scrolling. Fits desktop, tablet, mobile
     (portrait + landscape).
     ========================================== -->

<div id="callOfferOverlay" class="cp-overlay" aria-hidden="true">

    <div class="cp-card">

        <!-- Close button (outside the link so a close tap never calls) -->
        <button type="button" id="callOfferClose" class="cp-close" aria-label="Close popup">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2.6" stroke-linecap="round" aria-hidden="true">
                <path d="M6 6l12 12M18 6L6 18"/>
            </svg>
        </button>

        <!-- Entire card is clickable and calls -->
        <a href="tel:+18888552919" id="callOfferCard" class="cp-link"
           aria-label="Call Buy Spare Part at +1 888-855-2919">

            <!-- LEFT / TOP : OFFER -->
            <div class="cp-side">
                <span class="cp-orb cp-orb-1"></span>
                <span class="cp-orb cp-orb-2"></span>

                <span class="cp-badge">
                    <span class="cp-badge-dot"></span>
                    SPECIAL OFFER
                </span>

                <div class="cp-head">
                    <div class="cp-discount">
                        <span class="cp-upto">UP TO</span>
                        <span class="cp-percent">35<small>%</small></span>
                        <span class="cp-off">OFF</span>
                    </div>

                    <div class="cp-head-text">
                        <h2>The Right Parts,<br><span>Better Prices!</span></h2>
                        <p>Quality auto parts for your vehicle</p>
                    </div>
                </div>

                <ul class="cp-benefits">
                    <li>
                        <span class="cp-check">
                            <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor"
                                 stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m5 12 4 4L19 6"/>
                            </svg>
                        </span>
                        OEM &amp; Aftermarket Parts
                    </li>
                    <li>
                        <span class="cp-check">
                            <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor"
                                 stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m5 12 4 4L19 6"/>
                            </svg>
                        </span>
                        Nationwide Delivery
                    </li>
                    <li>
                        <span class="cp-check">
                            <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor"
                                 stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m5 12 4 4L19 6"/>
                            </svg>
                        </span>
                        Vehicle Fitment Assistance
                    </li>
                </ul>
            </div>

            <!-- RIGHT / BOTTOM : TIMER + CALL -->
            <div class="cp-main">

                <p class="cp-desc">
                    Talk to our specialists for pricing, availability and the right parts for your vehicle.
                </p>

                <div class="cp-timer">
                    <div class="cp-timer-label">
                        <span class="cp-live"></span>
                        LIMITED-TIME OFFER ENDS IN
                    </div>

                    <div class="cp-timer-units">
                        <div class="cp-unit">
                            <strong id="offerHours">01</strong>
                            <small>HRS</small>
                        </div>
                        <span class="cp-sep">:</span>
                        <div class="cp-unit">
                            <strong id="offerMinutes">45</strong>
                            <small>MIN</small>
                        </div>
                        <span class="cp-sep">:</span>
                        <div class="cp-unit">
                            <strong id="offerSeconds">00</strong>
                            <small>SEC</small>
                        </div>
                    </div>
                </div>

                <!-- CTA button: icon + text centered, arrow removed -->
                <div class="cp-cta">
                    <span class="cp-cta-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24"
                             fill="currentColor" aria-hidden="true">
                            <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.36 11.36 0 003.56.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.56 1 1 0 01-.25 1.02z"/>
                        </svg>
                    </span>
                    <span class="cp-cta-text">
                        <small>Call our parts team</small>
                        <strong>+1 (888) 855-2919</strong>
                    </span>
                </div>

                <p class="cp-note">Tap anywhere on this card to call our team</p>
            </div>
        </a>
    </div>
</div>


<style>
/* ==========================================
   1. OVERLAY
   ========================================== */
.cp-overlay {
    position: fixed;
    inset: 0;
    z-index: 999999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 16px;
    box-sizing: border-box;
    background: rgba(152, 62, 27, 0.55);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
}
.cp-overlay.is-visible {
    display: flex;
    animation: cpFade .25s ease;
}
.cp-overlay *,
.cp-overlay *::before,
.cp-overlay *::after {
    box-sizing: border-box;
}

/* ==========================================
   2. CARD (rectangle, never scrolls)
   ========================================== */
.cp-card {
    position: relative;
    width: 100%;
    max-width: 780px;
    overflow: hidden;
    background: #ffffff;
    border-radius: 24px;
    box-shadow:
        0 0 0 1px rgba(255, 255, 255, 0.35),
        0 30px 80px rgba(84, 52, 23, 0.38);
    animation: cpPop .4s cubic-bezier(.2, .9, .3, 1.15);
}

.cp-link {
    display: grid;
    grid-template-columns: 1.08fr 1fr;
    color: #d8702eff;
    text-decoration: none !important;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
}
.cp-link:hover,
.cp-link:focus,
.cp-link:active {
    color: #d8702eff;
    text-decoration: none !important;
}
.cp-link:focus-visible {
    outline: 3px solid #ff5900;
    outline-offset: -3px;
    border-radius: 24px;
}

/* ==========================================
   3. CLOSE BUTTON
   ========================================== */
.cp-close {
    position: absolute;
    top: 12px;
    right: 12px;
    z-index: 5;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    margin: 0;
    padding: 0;
    border: 1px solid #dce5f5;
    border-radius: 50%;
    background: #ffffff;
    color: #d8702eff;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(23, 37, 84, 0.18);
    transition: background .2s ease, color .2s ease, transform .2s ease;
}
.cp-close:hover {
    background: #ff5900;
    color: #ffffff;
    transform: rotate(90deg);
}

/* ==========================================
   4. LEFT PANEL (offer)
   ========================================== */
.cp-side {
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 20px;
    padding: 32px 28px;
    background: linear-gradient(135deg, #be560cff 0%, #d1610cff 50%, #eb8825ff 100%);
    color: #ffffff;
}

.cp-orb {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}
.cp-orb-1 {
    top: -70px;
    right: -50px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(250, 178, 96, 0.45), transparent 70%);
}
.cp-orb-2 {
    bottom: -90px;
    left: -50px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(185, 98, 16, 0.25), transparent 70%);
}

.cp-badge {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 7px 12px;
    border-radius: 30px;
    background: #d1fae5;
    color: #047857;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: .8px;
    line-height: 1;
}
.cp-badge-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #10b981;
    animation: cpBlink 1.6s ease-in-out infinite;
}

.cp-head {
    position: relative;
    display: flex;
    align-items: center;
    gap: 16px;
}

.cp-discount {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 88px;
    height: 88px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.25);
    line-height: 1;
}
.cp-upto {
    font-size: 8px;
    font-weight: 800;
    letter-spacing: 1px;
    color: #bfdbfe;
}
.cp-percent {
    margin: 3px 0 2px;
    font-size: 36px;
    font-weight: 900;
    letter-spacing: -1.5px;
}
.cp-percent small {
    margin-left: 1px;
    font-size: 17px;
    font-weight: 800;
}
.cp-off {
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.5px;
    color: #6ee7b7;
}

.cp-head-text h2 {
    margin: 0 0 6px;
    color: #ffffff;
    font-size: 23px;
    line-height: 1.2;
    font-weight: 800;
    letter-spacing: -.5px;
}
.cp-head-text h2 span {
    color: #fda893ff;
}
.cp-head-text p {
    margin: 0;
    color: #fda893ff;
    font-size: 12.5px;
    line-height: 1.45;
}

/* Benefits */
.cp-benefits {
    position: relative;
    display: grid;
    gap: 8px;
    width: 100%;
    margin: 0;
    padding: 0;
    list-style: none;
}
.cp-benefits li {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0;
    padding: 9px 12px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.18);
    color: #ffffff;
    font-size: 13px;
    font-weight: 600;
    line-height: 1.25;
}
.cp-check {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: #d1fae5;
    color: #059669;
}

/* ==========================================
   5. RIGHT PANEL (timer + call)
   ========================================== */
.cp-main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 16px;
    padding: 40px 28px 26px;
    background: #ffffff;
}

.cp-desc {
    margin: 0;
    color: #64748b;
    font-size: 13px;
    line-height: 1.65;
}

/* Timer */
.cp-timer {
    padding: 14px 12px;
    background: linear-gradient(180deg, #f5f8ff 0%, #eef4ff 100%);
    border: 1px solid #dbe7ff;
    border-radius: 16px;
}
.cp-timer-label {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    margin-bottom: 11px;
    color: #526176;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: .7px;
    text-align: center;
}
.cp-live {
    position: relative;
    flex-shrink: 0;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #10b981;
}
.cp-live::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 50%;
    background: #10b981;
    animation: cpPing 1.6s ease-out infinite;
}

.cp-timer-units {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}
.cp-unit {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 4px;
    width: 62px;
    padding: 9px 4px 7px;
    background: #ffffff;
    border: 1px solid #ffe6dbff;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(235, 103, 37, 0.08);
}
.cp-unit strong {
    color: #172554;
    font-size: 24px;
    font-weight: 800;
    line-height: 1;
    font-variant-numeric: tabular-nums;
}
.cp-unit small {
    color: #64748b;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: .5px;
}
.cp-sep {
    margin-top: -14px;
    color: #ff5900;
    font-size: 22px;
    font-weight: 800;
}

/* CTA (centered, equal padding, no arrow) */
.cp-cta {
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    width: 100%;
    padding: 11px 15px;
    border-radius: 16px;
    background: linear-gradient(135deg, #ff5900 0%, #ff5900 100%);
    color: #ffffff;
    box-shadow: 0 10px 24px rgba(235, 179, 37, 0.32);
    transition: transform .2s ease, box-shadow .2s ease;
}
.cp-cta::before {
    content: "";
    position: absolute;
    top: 0;
    left: -80%;
    width: 50%;
    height: 100%;
    background: linear-gradient(100deg, transparent, rgba(255, 255, 255, 0.28), transparent);
    transform: skewX(-20deg);
    animation: cpShine 3.2s ease-in-out infinite;
}
.cp-link:hover .cp-cta {
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(235, 176, 37, 0.4);
}
.cp-cta-icon {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.18);
}
.cp-cta-icon::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 12px;
    border: 2px solid rgba(255, 255, 255, 0.5);
    animation: cpRing 2s ease-out infinite;
}
.cp-cta-text {
    display: flex;
    flex-direction: column;
    gap: 3px;
    min-width: 0;
}
.cp-cta-text small {
    color: #fed1bfff;
    font-size: 11px;
    font-weight: 600;
    line-height: 1;
}
.cp-cta-text strong {
    font-size: 17px;
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -.2px;
    white-space: nowrap;
}

.cp-note {
    margin: -4px 0 0;
    color: #94a3b8;
    font-size: 10.5px;
    line-height: 1.4;
    text-align: center;
}

/* ==========================================
   6. ANIMATIONS
   ========================================== */
@keyframes cpFade { from { opacity: 0; } to { opacity: 1; } }
@keyframes cpPop {
    from { opacity: 0; transform: translateY(18px) scale(.96); }
    to   { opacity: 1; transform: translateY(0) scale(1); }
}
@keyframes cpBlink { 0%, 100% { opacity: 1; } 50% { opacity: .35; } }
@keyframes cpPing {
    0%   { transform: scale(1); opacity: .6; }
    80%, 100% { transform: scale(3); opacity: 0; }
}
@keyframes cpShine { 0%, 60% { left: -80%; } 100% { left: 140%; } }
@keyframes cpRing {
    0%   { transform: scale(1); opacity: .7; }
    100% { transform: scale(1.5); opacity: 0; }
}

/* ==========================================
   7. TABLET  (narrower two-column)
   ========================================== */
@media (max-width: 860px) and (min-width: 601px) {
    .cp-card { max-width: 640px; }
    .cp-side { padding: 28px 22px; gap: 16px; }
    .cp-main { padding: 38px 22px 22px; gap: 14px; }
    .cp-head { gap: 12px; }
    .cp-discount { width: 76px; height: 76px; border-radius: 17px; }
    .cp-percent { font-size: 30px; }
    .cp-head-text h2 { font-size: 19px; }
    .cp-head-text p { font-size: 12px; }
    .cp-benefits li { font-size: 12px; padding: 8px 10px; }
    .cp-unit { width: 54px; }
    .cp-unit strong { font-size: 21px; }
    .cp-cta-text strong { font-size: 15.5px; }
}

/* ==========================================
   8. MOBILE PORTRAIT  (stacked, no scroll)
   ========================================== */
@media (max-width: 600px) {
    .cp-overlay { padding: 12px; }
    .cp-card { max-width: 400px; border-radius: 20px; }
    .cp-link { grid-template-columns: 1fr; }

    .cp-side {
        gap: 12px;
        padding: 16px 16px 18px;
    }
    .cp-badge { padding: 6px 10px; font-size: 9px; }

    .cp-head { gap: 12px; }
    .cp-discount { width: 72px; height: 72px; border-radius: 16px; }
    .cp-upto { font-size: 7px; }
    .cp-percent { font-size: 28px; margin: 2px 0 1px; }
    .cp-percent small { font-size: 14px; }
    .cp-off { font-size: 9.5px; }
    .cp-head-text h2 { font-size: 18px; margin-bottom: 4px; }
    .cp-head-text p { font-size: 11.5px; }

    /* benefits become compact chips */
    .cp-benefits {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
    }
    .cp-benefits li {
        padding: 5px 10px 5px 6px;
        gap: 6px;
        border-radius: 30px;
        font-size: 11px;
    }
    .cp-check { width: 17px; height: 17px; }
    .cp-check svg { width: 10px; height: 10px; }

    .cp-main { gap: 12px; padding: 16px 16px 14px; }
    .cp-desc { font-size: 12.5px; line-height: 1.55; text-align: center; }

    .cp-timer { padding: 10px 8px; border-radius: 14px; }
    .cp-timer-label { margin-bottom: 8px; font-size: 9.5px; }
    .cp-unit { width: 56px; padding: 7px 4px 6px; border-radius: 10px; }
    .cp-unit strong { font-size: 20px; }
    .cp-sep { font-size: 19px; margin-top: -12px; }

    .cp-cta { padding: 10px 13px; gap: 10px; border-radius: 14px; }
    .cp-cta-icon { width: 38px; height: 38px; border-radius: 11px; }
    .cp-cta-text strong { font-size: 16px; }
    .cp-note { font-size: 10px; margin-top: -2px; }
}

/* Small phones: tighter */
@media (max-width: 360px) {
    .cp-overlay { padding: 8px; }
    .cp-side { padding: 14px 12px 14px; }
    .cp-main { padding: 12px 12px 12px; }
    .cp-discount { width: 64px; height: 64px; }
    .cp-percent { font-size: 25px; }
    .cp-head-text h2 { font-size: 16.5px; }
    .cp-unit { width: 50px; }
    .cp-unit strong { font-size: 18px; }
    .cp-cta-text strong { font-size: 14.5px; }
    .cp-cta-text small { font-size: 10px; }
}

/* Short phone screens: drop the least important text so it always fits */
@media (max-width: 600px) and (max-height: 700px) {
    .cp-desc { display: none; }
}
@media (max-width: 600px) and (max-height: 580px) {
    .cp-note { display: none; }
    .cp-benefits { display: none; }
}

/* ==========================================
   9. LANDSCAPE PHONES / SHORT SCREENS
      (two columns, compact, no scroll)
   ========================================== */
@media (max-height: 480px) and (min-width: 480px) {
    .cp-overlay { padding: 8px; }
    .cp-card { max-width: 640px; border-radius: 18px; }
    .cp-link { grid-template-columns: 1.08fr 1fr; }

    .cp-side { gap: 10px; padding: 14px 16px; }
    .cp-badge { padding: 5px 9px; font-size: 8.5px; }
    .cp-head { gap: 10px; }
    .cp-discount { width: 64px; height: 64px; border-radius: 14px; }
    .cp-percent { font-size: 25px; }
    .cp-percent small { font-size: 12px; }
    .cp-head-text h2 { font-size: 16px; margin-bottom: 3px; }
    .cp-head-text p { font-size: 11px; }

    .cp-benefits { display: flex; flex-wrap: wrap; gap: 5px; }
    .cp-benefits li {
        padding: 4px 9px 4px 5px;
        gap: 6px;
        border-radius: 30px;
        font-size: 10.5px;
    }
    .cp-check { width: 16px; height: 16px; }
    .cp-check svg { width: 9px; height: 9px; }

    .cp-main { gap: 10px; padding: 34px 16px 12px; }
    .cp-desc, .cp-note { display: none; }

    .cp-timer { padding: 8px; }
    .cp-timer-label { margin-bottom: 6px; font-size: 9px; }
    .cp-unit { width: 48px; padding: 6px 3px 5px; }
    .cp-unit strong { font-size: 18px; }
    .cp-sep { font-size: 17px; margin-top: -11px; }

    .cp-cta { padding: 8px 12px; gap: 9px; border-radius: 13px; }
    .cp-cta-icon { width: 34px; height: 34px; border-radius: 10px; }
    .cp-cta-text strong { font-size: 15px; }
    .cp-cta-text small { font-size: 10px; }
}
@media (max-height: 360px) and (min-width: 480px) {
    .cp-benefits { display: none; }
}

/* ==========================================
   10. ACCESSIBILITY
   ========================================== */
@media (prefers-reduced-motion: reduce) {
    .cp-overlay.is-visible,
    .cp-card,
    .cp-badge-dot,
    .cp-live::after,
    .cp-cta::before,
    .cp-cta-icon::after {
        animation: none;
    }
    .cp-close,
    .cp-cta {
        transition: none;
    }
}
</style>


<script>
(function () {
    'use strict';

    const overlay = document.getElementById('callOfferOverlay');
    const closeButton = document.getElementById('callOfferClose');

    if (!overlay || !closeButton) {
        return;
    }

    let popupClosed = false;
    let countdownInterval = null;
    let remainingSeconds = 1 * 60 * 60 + 45 * 60; // 01:45:00

    const hoursElement = document.getElementById('offerHours');
    const minutesElement = document.getElementById('offerMinutes');
    const secondsElement = document.getElementById('offerSeconds');

    // Show the popup 10 seconds after every page load/refresh.
    window.setTimeout(function () {
        if (popupClosed) {
            return;
        }

        overlay.classList.add('is-visible');
        overlay.setAttribute('aria-hidden', 'false');

        startCountdown();
    }, 10000);

    // Only the close button closes the popup.
    closeButton.addEventListener('click', function (event) {
        event.preventDefault();
        event.stopPropagation();

        popupClosed = true;

        overlay.classList.remove('is-visible');
        overlay.setAttribute('aria-hidden', 'true');

        if (countdownInterval !== null) {
            window.clearInterval(countdownInterval);
            countdownInterval = null;
        }
    });

    // Clicking outside the card must not close the popup.
    overlay.addEventListener('click', function (event) {
        if (event.target === overlay) {
            event.preventDefault();
        }
    });

    // Countdown resets to 01:45:00 on every page refresh.
    function pad(value) {
        return String(value).padStart(2, '0');
    }

    function updateCountdown() {
        if (hoursElement) {
            hoursElement.textContent = pad(Math.floor(remainingSeconds / 3600));
        }
        if (minutesElement) {
            minutesElement.textContent = pad(Math.floor((remainingSeconds % 3600) / 60));
        }
        if (secondsElement) {
            secondsElement.textContent = pad(remainingSeconds % 60);
        }

        if (remainingSeconds > 0) {
            remainingSeconds--;
        } else if (countdownInterval !== null) {
            window.clearInterval(countdownInterval);
            countdownInterval = null;
        }
    }

    function startCountdown() {
        if (countdownInterval !== null) {
            return;
        }

        updateCountdown();
        countdownInterval = window.setInterval(updateCountdown, 1000);
    }
})();
</script>
<!-- END BUY SPARE PART CALL POPUP -->
    <!--  Main jQuery  -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/frontend/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/frontend/assets/js/jquery-ui.js"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="/frontend/assets/js/bootstrap.min.js"></script>
    <script src="/frontend/assets/js/popper.min.js"></script>
    <!-- Swiper slider JS -->
    <script src="/frontend/assets/js/swiper-bundle.min.js"></script>
    <script src="/frontend/assets/js/slick.js"></script>
    <!-- Waypoints JS -->
    <script src="/frontend/assets/js/waypoints.min.js"></script>
    <!-- WOW JS -->
    <script src="/frontend/assets/js/wow.min.js"></script>
    <!-- Counterup JS -->
    <script src="/frontend/assets/js/jquery.counterup.min.js"></script>
    <!-- Isotope  JS -->
    <script src="/frontend/assets/js/isotope.pkgd.min.js"></script>
    <!-- Magnific-popup  JS -->
    <script src="/frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- GSAP  JS -->
    <script src="/frontend/assets/js/gsap.min.js"></script>
    <script src="/frontend/assets/js/simpleParallax.min.js"></script>
    <script src="/frontend/assets/js/TweenMax.min.js"></script>
    <!-- Marquee  JS -->
    <script src="/frontend/assets/js/jquery.marquee.min.js"></script>
    <!-- Select2  JS -->
    <script src="/frontend/assets/js/jquery.nice-select.min.js"></script>
    <!-- Select2  JS -->
    <script src="/frontend/assets/js/jquery.fancybox.min.js"></script>
    <!-- Custom JS -->
    <script src="/frontend/assets/js/custom.js"></script>
    <script>
        $(".marquee_text").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
        $(".marquee_text2").marquee({
            direction: "left",
            duration: 25000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            startVisible: true,
        });
    </script>

<script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/v4bc70e2c01a94c73b74392e4234840661791215815920" integrity="sha512-L0ha0OXavK/8okipN9F8BtP84dg9DUhPERbBXzwI6dgTA55d2+yweo3pn5CSFYs45/r8md2+xvUPtTdvTNRfjA==" data-cf-beacon='{"version":"2024.11.0","token":"70834e4b23964a2eaf7cf4ec0e5e9a84","r":1,"spa":2}' crossorigin="anonymous"></script>
</body>
</html>