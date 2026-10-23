@extends('layouts.frontend')

@section('meta_title', 'Used Engine Parts | OEM Engines, Cylinder Heads & More – Buy Spare Part')
@section('meta_description', 'Find quality used and OEM engine parts including complete engines, cylinder heads, turbochargers, intake manifolds, and more. Call +1 (855) 994-4611 for availability. Nationwide shipping.')
@section('meta_keywords', 'used engine parts, OEM engines, cylinder heads, turbochargers, intake manifold, engine assemblies, replacement engines USA')
@section('canonical', 'https://buysparepart.org/engine-parts')
@section('og_title', 'Used Engine Parts | Complete Engine Assemblies & OEM Components – Buy Spare Part')
@section('og_description', 'Shop quality used and OEM engine parts. Complete engines, cylinder heads, turbochargers and more. Call +1 (855) 994-4611. Fast US shipping.')
@section('og_url', 'https://buysparepart.org/engine-parts')

@section('content')

    <!-- Start Header Section -->
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <li>Engine Parts</li>
                </ul>

                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">Engine Parts</span>

                                <h1>Tested Engine Assemblies & Components for Every Vehicle</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->


    <!-- Start Why Choose Us Section -->
    <div class="home5-why-drivco-area pt-90 pb-90 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">

                <!-- Left Content -->
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="drivco-content">

                        <div class="section-title-2 mb-60 wow fadeInUp"
                             data-wow-delay="200ms">

                            <h2>Power, Reliability & Precision-Engineered Performance</h2>

                            <p>
                               At Buy Spare Part, we supply an extensive catalog of tested OEM engine assemblies and precision internal engine components designed to restore your vehicle's peak efficiency and horsepower. Whether you need a low-mileage complete long block engine, compression-tested cylinder head, balanced camshaft, performance turbocharger, or reliable fuel pump, every unit is strictly inspected and verified by automotive technicians before dispatch. Benefit from exact VIN compatibility matching, unbeatable wholesale rates, and dedicated specialist assistance for all domestic and foreign makes.
                            </p>

                        </div>

                        <div class="banner-btn-group mt-30">
                            <a href="tel:+18559944611" class="primary-btn3">
                                24/7 Customer Support
                            </a>
                        </div>

                       
                    </div>
                </div>


                <!-- Right Image -->
                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                    <div class="drivco-img wow zoomIn" data-wow-delay="400ms">

                        <img src="/frontend/assets/engine.webp"
                             alt="Replacement engine parts for cars">

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

     <!-- Start Product Page Section -->
    <style>
    /* Keep every product image the same height so all cards line up */
    .product-page .shop-card2 .shop-img {
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
    }
    .product-page .shop-card2 .shop-img img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    /* Make all cards in a row equal height */
    .product-page .shop-card2 {
        height: 100%;
    }
</style>

<div class="product-page py-5">
    <div class="container">
        <div class="row mb-40">
            <div class="col-lg-12">
                <div class="show-item-and-filte">
                    <p>Showing <strong>All Engine</strong> car parts</p>
                </div>
            </div>
        </div>

        <div class="row g-xl-4 gy-5">
            <div class="col-xl-12">
                <!-- 4 cards per row on large screens, 3 on medium, 2 on tablets, 1 on mobile -->
                <div class="row g-4 mb-40">

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/car-engine"><img src="/frontend/assets/Main/engine.jpg" alt="Car Engine"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/car-engine">Car Engine</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/cylinder-head"><img src="/frontend/assets/Main/cylinder_head.jpg" alt="Cylinder Head"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/cylinder-head">Cylinder Head</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/camshaft"><img src="/frontend/assets/Main/camshaft.jpg" alt="Camshaft"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/camshaft">Camshaft</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/supercharger"><img src="/frontend/assets/Main/supercharger.jpg" alt="Supercharger"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/supercharger">Supercharger</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/turbocharger"><img src="/frontend/assets/Main/turbo-charger.jpg" alt="Turbocharger"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/turbocharger">Turbocharger</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/intake-manifold"><img src="/frontend/assets/Main/intake_manifold.jpg" alt="Intake Manifold"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/intake-manifold">Intake Manifold</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/exhaust-manifold"><img src="/frontend/assets/Main/exhaust_manifold.jpg" alt="Exhaust Manifold"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/exhaust-manifold">Exhaust Manifold</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/throttle-body"><img src="/frontend/assets/Main/throttle_body.jpg" alt="Throttle Body"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/throttle-body">Throttle Body</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/engine-mount"><img src="/frontend/assets/Main/engine-mount.jpg" alt="Engine Mount"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/engine-mount">Engine Mount</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/valve-cover"><img src="/frontend/assets/Main/valve-cover.jpg" alt="Valve Cover"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/valve-cover">Valve Cover</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/fuel-pump"><img src="/frontend/assets/Main/fuel_pump.jpg" alt="Fuel Pump"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/fuel-pump">Fuel Pump</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/coolant-pump"><img src="/frontend/assets/Main/coolant_pump.jpg" alt="Coolant Pump"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/coolant-pump">Coolant Pump</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/radiator"><img src="/frontend/assets/Main/car-radiator.jpg" alt="Radiator"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/radiator">Radiator</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/vacuum-pump"><img src="/frontend/assets/Main/vacuum_pump.jpg" alt="Vacuum Pump"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/vacuum-pump">Vacuum Pump</a></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="shop-card2">
                            <div class="shop-img">
                                <a href="/engine-parts/catalytic-converter"><img src="/frontend/assets/Main/catalytic_converter.jpg" alt="Catalytic Converter"></a>
                            </div>
                            <div class="content">
                                <div class="cart-btn">
                                    <a class="primary-btn2" href="tel:+18559944611">Enquire Now</a>
                                </div>
                                <div class="star">
                                    <ul>
                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-half"></i></li>
                                    </ul>
                                </div>
                                <h6><a href="/engine-parts/catalytic-converter">Catalytic Converter</a></h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


 <!-- Start Home2 Inner Banner section -->
    <div class="home2-inner-banner mb-100">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="700ms">
                <div class="col-lg-12">
                    <div class="inner-banner-content section-title-2">
                        <h2>Need Help Finding the Right Engine?</h2>
                        <p>Find quality replacement engines for your vehicle at competitive prices. Our team is here to help you choose the right engine for your car.</p>
                        <a class="primary-btn3" href="tel:+18559944611">
                            <svg width="24" height="15" viewBox="0 0 24 15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.25985 0C3.15704 0 3.05844 0.0413135 2.98574 0.114852C2.91304 0.18839 2.87219 0.28813 2.87219 0.392129C2.87219 0.496128 2.91304 0.595867 2.98574 0.669405C3.05844 0.742944 3.15704 0.784257 3.25985 0.784257H4.8105C4.91332 0.784257 5.01192 0.742944 5.08462 0.669405C5.15732 0.595867 5.19816 0.496128 5.19816 0.392129C5.19816 0.28813 5.15732 0.18839 5.08462 0.114852C5.01192 0.0413135 4.91332 0 4.8105 0H3.25985ZM5.77966 0C5.67684 0 5.57824 0.0413135 5.50554 0.114852C5.43284 0.18839 5.39199 0.28813 5.39199 0.392129C5.39199 0.496128 5.43284 0.595867 5.50554 0.669405C5.57824 0.742944 5.67684 0.784257 5.77966 0.784257H10.3347C10.4375 0.784257 10.5361 0.742944 10.6088 0.669405C10.6815 0.595867 10.7223 0.496128 10.7223 0.392129C10.7223 0.28813 10.6815 0.18839 10.6088 0.114852C10.5361 0.0413135 10.4375 0 10.3347 0H5.77966Z"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.22917 2.7464C4.12636 2.7464 4.02776 2.78771 3.95505 2.86125C3.88235 2.93479 3.84151 3.03453 3.84151 3.13853C3.84151 3.24253 3.88235 3.34227 3.95505 3.4158C4.02776 3.48934 4.12636 3.53066 4.22917 3.53066H13.1454C14.653 3.53066 15.5822 3.76829 16.3256 4.15002C16.9575 4.47431 17.4672 4.90546 18.1055 5.44542C18.2375 5.55698 18.3749 5.67305 18.5201 5.79402L18.6101 5.86892L18.726 5.88127C22.2653 6.25811 23.0622 7.46822 23.2246 8.08778V9.60865C23.2246 9.71265 23.1838 9.81239 23.1111 9.88593C23.0384 9.95947 22.9398 10.0008 22.8369 10.0008H21.8356C21.6511 8.88811 20.6943 8.04014 19.5418 8.04014C18.3893 8.04014 17.4325 8.88811 17.248 10.0008H10.2058C10.0212 8.88811 9.06448 8.04014 7.91196 8.04014C6.75944 8.04014 5.80269 8.88811 5.61816 10.0008H3.7446C3.64178 10.0008 3.54318 10.0421 3.47048 10.1156C3.39778 10.1892 3.35693 10.2889 3.35693 10.3929C3.35693 10.4969 3.39778 10.5966 3.47048 10.6702C3.54318 10.7437 3.64178 10.785 3.7446 10.785H5.61816C5.80269 11.8977 6.75944 12.7457 7.91196 12.7457C9.06448 12.7457 10.0212 11.8977 10.2058 10.785H17.248C17.4325 11.8977 18.3893 12.7457 19.5418 12.7457C20.6943 12.7457 21.6511 11.8977 21.8356 10.785H22.8369C23.1454 10.785 23.4412 10.6611 23.6593 10.4405C23.8774 10.2199 23.9999 9.92065 23.9999 9.60865V7.99543L23.99 7.95191C23.7431 6.86983 22.5791 5.52855 18.9239 5.11407C18.8217 5.02859 18.7215 4.9435 18.6227 4.85978C17.9828 4.31766 17.3942 3.81887 16.6766 3.45047C15.7966 2.99893 14.7391 2.7464 13.1454 2.7464H4.22917ZM17.9912 10.3929C17.9912 9.97691 18.1545 9.57795 18.4453 9.2838C18.7361 8.98965 19.1306 8.82439 19.5418 8.82439C19.9531 8.82439 20.3475 8.98965 20.6383 9.2838C20.9291 9.57795 21.0925 9.97691 21.0925 10.3929C21.0925 10.8089 20.9291 11.2079 20.6383 11.502C20.3475 11.7962 19.9531 11.9614 19.5418 11.9614C19.1306 11.9614 18.7361 11.7962 18.4453 11.502C18.1545 11.2079 17.9912 10.8089 17.9912 10.3929ZM7.91196 8.82439C7.5007 8.82439 7.10629 8.98965 6.81549 9.2838C6.52468 9.57795 6.36131 9.97691 6.36131 10.3929C6.36131 10.8089 6.52468 11.2079 6.81549 11.502C7.10629 11.7962 7.5007 11.9614 7.91196 11.9614C8.32322 11.9614 8.71763 11.7962 9.00843 11.502C9.29923 11.2079 9.46261 10.8089 9.46261 10.3929C9.46261 9.97691 9.29923 9.57795 9.00843 9.2838C8.71763 8.98965 8.32322 8.82439 7.91196 8.82439Z"></path>
                                <path d="M0 5.09873C0 4.99473 0.0408428 4.89499 0.113543 4.82146C0.186244 4.74792 0.284847 4.7066 0.387662 4.7066H4.74886C4.85167 4.7066 4.95027 4.74792 5.02297 4.82146C5.09567 4.89499 5.13652 4.99473 5.13652 5.09873C5.13652 5.20273 5.09567 5.30247 5.02297 5.37601C4.95027 5.44955 4.85167 5.49086 4.74886 5.49086H0.387662C0.284847 5.49086 0.186244 5.44955 0.113543 5.37601C0.0408428 5.30247 0 5.20273 0 5.09873ZM15.6836 5.60575C15.7563 5.67929 15.7971 5.77901 15.7971 5.88299C15.7971 5.98697 15.7563 6.08669 15.6836 6.16022L15.6532 6.19101C15.2897 6.55865 14.7968 6.76522 14.2828 6.76528H8.14089C8.03808 6.76528 7.93948 6.72397 7.86678 6.65043C7.79408 6.57689 7.75323 6.47715 7.75323 6.37315C7.75323 6.26915 7.79408 6.16941 7.86678 6.09587C7.93948 6.02234 8.03808 5.98102 8.14089 5.98102H14.2826C14.4354 5.98104 14.5866 5.95063 14.7277 5.89152C14.8688 5.83241 14.997 5.74577 15.105 5.63654L15.1355 5.60575C15.2082 5.53224 15.3068 5.49094 15.4096 5.49094C15.5123 5.49094 15.6109 5.53224 15.6836 5.60575ZM8.52856 14.6079C8.52856 14.5039 8.5694 14.4041 8.6421 14.3306C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3306C10.9106 14.4041 10.9514 14.5039 10.9514 14.6079C10.9514 14.7118 10.9106 14.8116 10.8379 14.8851C10.7652 14.9587 10.6666 15 10.5638 15H8.91622C8.8134 15 8.7148 14.9587 8.6421 14.8851C8.5694 14.8116 8.52856 14.7118 8.52856 14.6079ZM11.2422 14.6079C11.2422 14.5039 11.283 14.4041 11.3557 14.3306C11.4284 14.257 11.527 14.2157 11.6298 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3306C16.3379 14.4041 16.3787 14.5039 16.3787 14.6079C16.3787 14.7118 16.3379 14.8116 16.2652 14.8851C16.1925 14.9587 16.0939 15 15.991 15H11.6298C11.527 15 11.4284 14.9587 11.3557 14.8851C11.283 14.8116 11.2422 14.7118 11.2422 14.6079Z"></path>
                            </svg>
                           Call Now            
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start FAQ Section -->
    <div class="faq-page-wrap pt-100 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">

                <!-- Left Side Image -->
                <div class="col-lg-4 d-lg-flex d-none">
                    <div class="faq-img">
                        <img src="/frontend/assets/img/inner-page/faq-img.png"
                            alt="Frequently asked questions about engine parts">
                    </div>
                </div>

                <!-- Right Side FAQ -->
                <div class="col-lg-8">
                    <div class="faq-area">

                        <div class="section-title-and-filter mb-40">
                            <div class="section-title">
                                <h4>Engine Parts FAQs & Answers</h4>
                            </div>
                        </div>

                        <div class="faq-wrap">
                            <div class="accordion accordion-flush"
                                id="accordionFlushExample">

                                <!-- FAQ 1 -->
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne"
                                            aria-expanded="true"
                                            aria-controls="flush-collapseOne">
                                            How do I find the right engine for my car?
                                        </button>
                                    </h5>

                                    <div id="flush-collapseOne"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingOne"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            To find the right engine, check your vehicle's make,
                                            model, year, engine size, and VIN. Compare these
                                            details with the engine specifications and confirm
                                            compatibility before purchasing.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 2 -->
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            What types of engine parts are available?
                                        </button>
                                    </h5>

                                    <div id="flush-collapseTwo"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Engine parts may include engine blocks, cylinder heads,
                                            pistons, crankshafts, camshafts, oil pumps, timing
                                            components, and complete replacement engines, depending
                                            on availability and vehicle requirements.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 3 -->
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            Should I buy a new or used replacement engine?
                                        </button>
                                    </h5>

                                    <div id="flush-collapseThree"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            A new engine may offer manufacturer support, while a
                                            used engine can be a more budget-friendly option.
                                            Consider its condition, mileage, compatibility,
                                            warranty terms, and installation costs before deciding.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 4 -->
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseFour">
                                            How do I know if my engine needs replacement?
                                        </button>
                                    </h5>

                                    <div id="flush-collapseFour"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Excessive exhaust smoke, unusual engine noises,
                                            overheating, loss of power, and high oil consumption
                                            may indicate engine problems. Have a qualified mechanic
                                            inspect your vehicle to determine whether repairs or
                                            replacement are necessary.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 5 -->
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFive"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseFive">
                                            Do replacement engines come with a warranty?
                                        </button>
                                    </h5>

                                    <div id="flush-collapseFive"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFive"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Warranty coverage depends on the engine and seller's
                                            terms. Check the warranty duration, covered components,
                                            exclusions, and claim requirements before placing
                                            your order.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 6 -->
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseSix"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseSix">
                                            Can I install a replacement engine myself?
                                        </button>
                                    </h5>

                                    <div id="flush-collapseSix"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSix"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Engine replacement requires specialized tools and
                                            mechanical knowledge. Professional installation is
                                            generally recommended to ensure proper fitment,
                                            connections, and safe operation.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 7 -->
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseSeven"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseSeven">
                                            How can I confirm engine compatibility before ordering?
                                        </button>
                                    </h5>

                                    <div id="flush-collapseSeven"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSeven"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Check the engine code, VIN, vehicle year, make, model,
                                            and engine specifications. If you are unsure, contact
                                            the seller with your vehicle details to help verify
                                            compatibility before ordering.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End FAQ Section -->

@endsection
