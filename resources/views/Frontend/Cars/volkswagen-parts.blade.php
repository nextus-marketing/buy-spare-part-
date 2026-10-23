@extends('layouts.frontend')

@php
    $phone = '+18888552919';
    $phoneLabel = '+1 (888) 855-2919';
@endphp

@section('meta_title', 'Used Volkswagen Parts | OEM VW TSI Engines, DSG Transmissions & More - Buy Spare Part')
@section('meta_description', 'Shop quality used Volkswagen parts for Jetta, Golf, GTI, Tiguan, Atlas, Passat and more. TSI engines, DSG transmissions, 4MOTION, electrical. Call +1 (888) 855-2919. Nationwide shipping.')
@section('meta_keywords', 'used Volkswagen parts, OEM VW parts, VW engine, TSI engine, DSG transmission, Jetta parts, Golf GTI parts')
@section('canonical', 'https://buysparepart.org/volkswagen-parts')
@section('og_title', 'Used Volkswagen Parts | OEM VW TSI Engines, DSG Transmissions & More - Buy Spare Part')
@section('og_description', 'Shop quality used Volkswagen parts for Jetta, Golf, GTI, Tiguan, Atlas, Passat and more. TSI engines, DSG transmissions, 4MOTION, electrical. Call +1 (888) 855-2919. Nationwide shipping.')
@section('og_url', 'https://buysparepart.org/volkswagen-parts')

@section('content')

    <!-- Start Header Section -->
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/#cars-section">Cars</a></li>
                    <li>Volkswagen Parts</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">Volkswagen Parts</span>
                                <h1>Used Volkswagen Parts for Every Model and Year</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->


    <!-- Start About Volkswagen Parts Section -->
    <div class="home5-why-drivco-area pt-90 pb-90 mb-60">
        <div class="container">
            <div class="row g-lg-5 gy-5 align-items-center">

                <!-- Left Content -->
                <div class="col-lg-6">
                    <div class="drivco-content">
                        <div class="section-title-2 mb-30 wow fadeInUp" data-wow-delay="200ms">

                            <h2 style="font-size: 36px; font-weight: 800; line-height: 1.25; margin-top: 10px; margin-bottom: 20px;">
                                Premium Quality OEM & Used Volkswagen Parts
                            </h2>

                            <p style="font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 16px;">
                                <strong>Buy Spare Part</strong> is your premier online provider for genuine OEM and top-grade replacement Volkswagen auto parts. Whether you drive a popular <strong>Jetta or Passat sedan</strong>, an iconic <strong>Golf or GTI hatchback</strong>, an adventurous <strong>Tiguan, Atlas, or Touareg SUV</strong>, or a classic <strong>Beetle</strong>, we supply a comprehensive catalog of precision German-engineered components built to restore your vehicle to factory performance standards.
                            </p>

                            <p style="font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 16px;">
                                From compression-tested TSI turbocharged (EA888), TDI diesel, and VR6 engines to smooth-shifting DSG dual-clutch and automatic transmissions, Haldex 4MOTION transfer cases, steering racks, and alternators, each Volkswagen part undergoes strict quality testing. Save up to 70% off dealer retail prices with fast, nationwide shipping.
                            </p>

                        </div>

                        <div class="banner-btn-group">
                            <a href="tel:{{ $phone }}" class="primary-btn3 d-inline-flex align-items-center" style="gap: 10px;">
                                <i class="bi bi-telephone-fill"></i>
                                <span>24/7 Support: {{ $phoneLabel }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="drivco-img text-center wow zoomIn" data-wow-delay="300ms" style="max-width: 520px; width: 100%;">
                        <div style="background: linear-gradient(145deg, #ffffff, #f1f3f5); padding: 30px; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.08); border: 1px solid #e9ecef;">
                            <img src="/frontend/assets/Cars/volks.webp"
                                 alt="Used Volkswagen Auto Parts"
                                 class="img-fluid"
                                 style="max-height: 380px; width: auto; object-fit: contain;">
                            <div class="mt-3 text-center">
                                <span class="badge" style="background: #111827; color: #fff; padding: 8px 16px; font-size: 13px; font-weight: 600; border-radius: 50px;">
                                    German Engineered Volkswagen Replacement Parts
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End About Volkswagen Parts Section -->


    <!-- Start Popular Volkswagen Parts Grid -->
    <style>
        .product-page .shop-card2 .shop-img {
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            background: #fff;
        }
        .product-page .shop-card2 .shop-img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        .product-page .shop-card2:hover .shop-img img {
            transform: scale(1.05);
        }
        .product-page .shop-card2 {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background: #fff;
            border: 1px solid #eee;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .product-page .shop-card2:hover {
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
            border-color: #ff5900;
        }
        .product-page .shop-card2 .content {
            padding: 15px 20px 20px;
            text-align: center;
            background: #fff;
        }
        .product-page .shop-card2 .content h6 {
            margin-top: 10px;
            font-size: 16px;
            font-weight: 700;
        }
        .product-page .shop-card2 .content h6 a {
            color: #111827;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .product-page .shop-card2 .content h6 a:hover {
            color: #ff5900;
        }
    </style>

    <div class="product-page py-5" style="background: #fbfbfb;">
        <div class="container">
            <div class="row mb-40 align-items-center">
                <div class="col-lg-8">
                    <div class="section-title-2">
                        <span class="sub-title" style="color: #ff5900; font-weight: 700; text-transform: uppercase; font-size: 14px; letter-spacing: 1px;">
                            Top Replacement Categories
                        </span>
                        <h2 style="font-size: 34px; font-weight: 800; margin-top: 6px;">
                            Popular <span style="color: #ff5900;">Volkswagen Parts</span>
                        </h2>
                        <p class="text-muted" style="margin-top: 8px; font-size: 15px;">
                            Browse genuine recycled OEM parts for Volkswagen Jetta, Passat, Golf, GTI, Tiguan, Atlas, Taos, and Arteon models.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="tel:{{ $phone }}" class="primary-btn2 d-inline-flex align-items-center" style="gap: 8px;">
                        <i class="bi bi-telephone"></i>
                        <span>Check Part Inventory</span>
                    </a>
                </div>
            </div>

            <!-- Product Cards Grid -->
            <div class="row g-4 mb-40">

                <!-- 1. Axle Shaft -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/transmission-parts/axle-shaft">
                                <img src="/frontend/assets/Main/axleshaft.jpg" alt="Volkswagen Axle Shaft">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/transmission-parts/axle-shaft">Volkswagen Axle Shaft</a></h6>
                            <small class="text-muted d-block">Precision CV Axle Assembly</small>
                        </div>
                    </div>
                </div>

                <!-- 2. AC Compressor -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/suspension-parts/ac-compressor">
                                <img src="/frontend/assets/Main/ac_comporessor.jpg" alt="Volkswagen AC Compressor">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-half"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/suspension-parts/ac-compressor">Volkswagen AC Compressor</a></h6>
                            <small class="text-muted d-block">Sanden Climate Compressor</small>
                        </div>
                    </div>
                </div>

                <!-- 3. Car Starter -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/electrical-parts/starter">
                                <img src="/frontend/assets/Main/car_starter.jpg" alt="Volkswagen Car Starter">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/electrical-parts/starter">Volkswagen Car Starter</a></h6>
                            <small class="text-muted d-block">Bosch Tested Starting Motor</small>
                        </div>
                    </div>
                </div>

                <!-- 4. Intake Manifold -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/engine-parts/intake-manifold">
                                <img src="/frontend/assets/Main/intake_manifold.jpg" alt="Volkswagen Intake Manifold">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-half"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/engine-parts/intake-manifold">Volkswagen Intake Manifold</a></h6>
                            <small class="text-muted d-block">TSI Runner Flap Intake Manifold</small>
                        </div>
                    </div>
                </div>

                <!-- 5. ABS Unit -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/electrical-parts/abs-unit">
                                <img src="/frontend/assets/Main/abs_unit.jpg" alt="Volkswagen ABS Unit">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/electrical-parts/abs-unit">Volkswagen ABS Unit</a></h6>
                            <small class="text-muted d-block">Tested Anti-Lock Brake Pump</small>
                        </div>
                    </div>
                </div>

                <!-- 6. Catalytic Converter -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/engine-parts/catalytic-converter">
                                <img src="/frontend/assets/Main/catalytic_converter.jpg" alt="Volkswagen Catalytic Converter">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-half"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/engine-parts/catalytic-converter">Catalytic Converter</a></h6>
                            <small class="text-muted d-block">EPA Certified Emission Control</small>
                        </div>
                    </div>
                </div>

                <!-- 7. Coolant Pump -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/engine-parts/coolant-pump">
                                <img src="/frontend/assets/Main/coolant_pump.jpg" alt="Volkswagen Coolant Pump">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/engine-parts/coolant-pump">Volkswagen Coolant Pump</a></h6>
                            <small class="text-muted d-block">Thermostat Housing & Water Pump</small>
                        </div>
                    </div>
                </div>

                <!-- 8. Steering Column -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/suspension-parts/steering-column">
                                <img src="/frontend/assets/Main/steering_column.jpg" alt="Volkswagen Steering Column">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-half"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/suspension-parts/steering-column">Volkswagen Steering Column</a></h6>
                            <small class="text-muted d-block">Electronic Steering Dynamics</small>
                        </div>
                    </div>
                </div>

                <!-- 9. Car Engine -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/engine-parts/car-engine">
                                <img src="/frontend/assets/Main/engine.jpg" alt="Volkswagen Car Engine">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/engine-parts/car-engine">Volkswagen Engine</a></h6>
                            <small class="text-muted d-block">Compression Tested EA888 TSI Turbo</small>
                        </div>
                    </div>
                </div>

                <!-- 10. Transmission -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/transmission-parts/car-transmission">
                                <img src="/frontend/assets/Main/transmission.jpg" alt="Volkswagen Transmission">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/transmission-parts/car-transmission">Volkswagen Transmission</a></h6>
                            <small class="text-muted d-block">Tested DSG Dual-Clutch & Automatic</small>
                        </div>
                    </div>
                </div>

                <!-- 11. Alternator -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/electrical-parts/alternator">
                                <img src="/frontend/assets/Main/alternators.jpg" alt="Volkswagen Alternator">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-half"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/electrical-parts/alternator">Volkswagen Alternator</a></h6>
                            <small class="text-muted d-block">Bosch Bench-Tested Charging Power</small>
                        </div>
                    </div>
                </div>

                <!-- 12. Rack & Pinion -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/suspension-parts/rack-pinion">
                                <img src="/frontend/assets/Main/rack_pinion.jpg" alt="Volkswagen Rack & Pinion">
                            </a>
                        </div>
                        <div class="content">
                            <div class="cart-btn">
                                <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
                            </div>
                            <div class="star mt-2">
                                <ul class="d-flex justify-content-center gap-1 list-unstyled mb-1">
                                    <li class="active text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                    <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h6><a href="/suspension-parts/rack-pinion">Volkswagen Steering Rack</a></h6>
                            <small class="text-muted d-block">Electric Servo Steering Rack</small>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Banner Callout inside parts section -->
            <div class="text-center p-4 rounded" style="background: #111827; color: #fff;">
                <h4 style="color: #fff; font-weight: 700; margin-bottom: 8px;">Don't see your specific Volkswagen part listed above?</h4>
                <p style="color: #ccc; margin-bottom: 16px; font-size: 15px;">
                    We have access to over 500,000 recycled OEM auto parts nationwide. Call our Volkswagen specialists for an instant inventory search.
                </p>
                <a href="tel:{{ $phone }}" class="primary-btn3 d-inline-flex align-items-center" style="gap: 8px;">
                    <i class="bi bi-telephone-fill"></i>
                    <span>Call Now: {{ $phoneLabel }}</span>
                </a>
            </div>

        </div>
    </div>
    <!-- End Popular Volkswagen Parts Grid -->


    <!-- Start How We Work / 6-Step Journey Section -->
    <style>
        .journey-section {
            background: #fff;
            padding: 80px 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }
        .journey-heading {
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 8px;
            color: #111827;
        }
        .journey-heading span {
            color: #ff5900;
        }
        .journey-subheading {
            color: #6b7280;
            font-size: 17px;
            margin-bottom: 0;
        }
        .journey-track {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 45px;
        }
        .journey-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 16px;
            padding: 30px 22px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            position: relative;
        }
        .journey-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(255, 78, 33, 0.15);
            border-color: #ff5900;
        }
        .journey-icon-box {
            width: 66px;
            height: 66px;
            margin: 0 auto 16px;
            border-radius: 50%;
            background: rgba(255, 78, 33, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        .journey-icon-box i {
            font-size: 26px;
            color: #ff5900;
            transition: all 0.3s ease;
        }
        .journey-card:hover .journey-icon-box {
            background: #ff5900;
        }
        .journey-card:hover .journey-icon-box i {
            color: #fff;
        }
        .journey-step-tag {
            display: block;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            color: #ff5900;
            margin-bottom: 6px;
        }
        .journey-card h3 {
            font-size: 18px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 8px;
        }
        .journey-card p {
            font-size: 14px;
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 0;
        }
        @media (max-width: 991px) {
            .journey-track {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 575px) {
            .journey-track {
                grid-template-columns: 1fr;
            }
            .journey-heading {
                font-size: 1.85rem;
            }
        }
    </style>

    <section class="journey-section">
        <div class="container">
            <div class="text-center">
                <span class="sub-title" style="color: #ff5900; font-weight: 700; text-transform: uppercase; font-size: 14px; letter-spacing: 1px;">
                    Fast & Dependable Service
                </span>
                <h2 class="journey-heading">How We Deliver Quality <span>Volkswagen Parts</span></h2>
                <p class="journey-subheading">From request to doorstep delivery — a streamlined, transparent purchasing process.</p>
            </div>

            <div class="journey-track">

                <!-- Step 1 -->
                <div class="journey-card">
                    <span class="journey-step-tag">Step 01</span>
                    <div class="journey-icon-box">
                        <i class="bi bi-chat-left-dots"></i>
                    </div>
                    <h3>Provide Vehicle Specs</h3>
                    <p>Share your Volkswagen model, year, trim, or VIN. We confirm exact fitment against genuine manufacturer parts records.</p>
                </div>

                <!-- Step 2 -->
                <div class="journey-card">
                    <span class="journey-step-tag">Step 02</span>
                    <div class="journey-icon-box">
                        <i class="bi bi-search"></i>
                    </div>
                    <h3>Locate in Scrap Network</h3>
                    <p>We source clean, low-mileage original components from premier automotive recyclers and dismantling yards nationwide.</p>
                </div>

                <!-- Step 3 -->
                <div class="journey-card">
                    <span class="journey-step-tag">Step 03</span>
                    <div class="journey-icon-box">
                        <i class="bi bi-tools"></i>
                    </div>
                    <h3>Quality Check & Testing</h3>
                    <p>Parts are thoroughly inspected, compression-tested (for engines), and bench-tested before being cleared for shipment.</p>
                </div>

                <!-- Step 4 -->
                <div class="journey-card">
                    <span class="journey-step-tag">Step 04</span>
                    <div class="journey-icon-box">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3>Transparent Pricing & Warranty</h3>
                    <p>Receive an all-inclusive quote covering parts, shipping, and backed by a comprehensive replacement warranty.</p>
                </div>

                <!-- Step 5 -->
                <div class="journey-card">
                    <span class="journey-step-tag">Step 05</span>
                    <div class="journey-icon-box">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <h3>Seamless & Secure Checkout</h3>
                    <p>Finalize your purchase easily using secure payment options with complete order confirmation and tracking details.</p>
                </div>

                <!-- Step 6 -->
                <div class="journey-card">
                    <span class="journey-step-tag">Step 06</span>
                    <div class="journey-icon-box">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h3>Fast Nationwide Delivery</h3>
                    <p>Your Volkswagen components are securely palletized or boxed and dispatched with real-time tracking direct to your door.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- End How We Work / 6-Step Journey Section -->


    <!-- Start Volkswagen Specific FAQs Section -->
    <div class="home5-faq-area pt-90 pb-90" style="background: #fbfbfb;">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10">
                    <div class="section-title-2 text-center mb-50 wow fadeInUp" data-wow-delay="200ms">
                        <span class="sub-title" style="color: #ff5900; font-weight: 700; text-transform: uppercase; font-size: 14px; letter-spacing: 1px;">
                            FREQUENTLY ASKED QUESTIONS
                        </span>
                        <h2 style="font-size: 34px; font-weight: 800; margin-top: 6px;">
                            Common Questions About Used Volkswagen Parts
                        </h2>
                        <p class="text-muted" style="margin-top: 8px; font-size: 15px;">
                            Everything you need to know about purchasing reliable OEM Volkswagen auto parts from Buy Spare Part.
                        </p>
                    </div>

                    <div class="faq-content">
                        <div class="faq-accordion">
                            <div class="accordion accordion-flush" id="volkswagenFaqAccordion">

                                <!-- FAQ 1 -->
                                <div class="accordion-item mb-3" style="border: 1px solid #eee; border-radius: 10px; overflow: hidden; background: #fff;">
                                    <h5 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseOne"
                                            style="font-weight: 700; font-size: 16px; padding: 20px;">
                                            Are used Volkswagen parts reliable?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseOne"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne"
                                        data-bs-parent="#volkswagenFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            Yes, absolutely. Genuine OEM Volkswagen components are engineered to exacting German automotive standards. Recycled OEM parts ensure precise tolerances, seamless computer communication, and superior endurance compared to generic aftermarket alternatives.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 2 -->
                                <div class="accordion-item mb-3" style="border: 1px solid #eee; border-radius: 10px; overflow: hidden; background: #fff;">
                                    <h5 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseTwo"
                                            style="font-weight: 700; font-size: 16px; padding: 20px;">
                                            How do you test used Volkswagen engines and DSG transmissions?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseTwo"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo"
                                        data-bs-parent="#volkswagenFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            Every VW engine undergoes compression testing across all cylinders, turbocharger shaft play examination, and leak tests. Volkswagen DSG dual-clutch and Tiptronic transmissions are rigorously checked for mechatronic solenoid integrity, smooth gear transitions, and clean fluid.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 3 -->
                                <div class="accordion-item mb-3" style="border: 1px solid #eee; border-radius: 10px; overflow: hidden; background: #fff;">
                                    <h5 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseThree"
                                            style="font-weight: 700; font-size: 16px; padding: 20px;">
                                            How do I make sure the part fits my specific Volkswagen vehicle?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseThree"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree"
                                        data-bs-parent="#volkswagenFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            Simply provide your 17-digit Vehicle Identification Number (VIN) to our support team. We match engine codes (such as CPRA, CXCA, or EA888 Gen 3), transmission codes, drive type (FWD or 4MOTION AWD), and body trim to ensure 100% accurate fitment.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 4 -->
                                <div class="accordion-item mb-3" style="border: 1px solid #eee; border-radius: 10px; overflow: hidden; background: #fff;">
                                    <h5 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseFour"
                                            style="font-weight: 700; font-size: 16px; padding: 20px;">
                                            What shipping options are available for Volkswagen parts?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseFour"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour"
                                        data-bs-parent="#volkswagenFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            We offer reliable nationwide shipping with tracked delivery. Heavy items such as complete Volkswagen engines and transmissions are securely packaged on sturdy pallets and freight-shipped with liftgate assistance directly to your residence or preferred commercial repair facility.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 5 -->
                                <div class="accordion-item mb-3" style="border: 1px solid #eee; border-radius: 10px; overflow: hidden; background: #fff;">
                                    <h5 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFive"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseFive"
                                            style="font-weight: 700; font-size: 16px; padding: 20px;">
                                            What is your return policy on Volkswagen parts?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseFive"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFive"
                                        data-bs-parent="#volkswagenFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            We stand behind our products with a hassle-free return policy on all eligible Volkswagen auto parts. If an item arrives damaged or does not match your vehicle specifications, our customer service team will promptly process an exchange or refund under our warranty guarantee.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 6 -->
                                <div class="accordion-item mb-3" style="border: 1px solid #eee; border-radius: 10px; overflow: hidden; background: #fff;">
                                    <h5 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseSix"
                                            aria-expanded="false"
                                            aria-controls="flush-collapseSix"
                                            style="font-weight: 700; font-size: 16px; padding: 20px;">
                                            Do your Volkswagen auto parts come with a warranty?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseSix"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSix"
                                        data-bs-parent="#volkswagenFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            Yes, all our used and OEM Volkswagen parts are thoroughly inspected, tested, and include standard warranty coverage. Extended warranty packages are also available to give you complete peace of mind on every mile you drive.
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
    <!-- End Volkswagen Specific FAQs Section -->


    <!-- Start CTA Banner Section -->
    <div class="home2-inner-banner mb-100">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="700ms">
                <div class="col-lg-12">
                    <div class="inner-banner-content section-title-2 text-center" style="max-width: 800px; margin: 0 auto;">
                        <span class="sub-title" style="color: #ffffffff; font-weight: 700; text-transform: uppercase; font-size: 14px; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">
                            CALL US FOR A FREE CONSULTATION TODAY!
                        </span>
                        <h2>Need Help Finding the Right Volkswagen Part?</h2>
                        <p style="font-size: 16px; line-height: 1.6; margin-top: 15px; margin-bottom: 25px;">
                            Share your VIN, Volkswagen model, year, or part number with our automotive support team. We'll help you locate the exact match in minutes, with no guesswork and direct savings up to 70% off dealer prices.
                        </p>
                        <a class="primary-btn3 d-inline-flex align-items-center" href="tel:{{ $phone }}" style="gap: 10px; font-size: 17px; padding: 14px 28px;">
                            <i class="bi bi-telephone-fill"></i>
                            Call Now: {{ $phoneLabel }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CTA Banner Section -->

@endsection
