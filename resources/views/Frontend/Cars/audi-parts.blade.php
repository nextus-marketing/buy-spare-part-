@extends('layouts.frontend')

@php
    $phone = '+18559944611';
    $phoneLabel = '+1 (855) 994-4611';
@endphp

@section('meta_title', 'Used Audi Parts | OEM Audi Engines, Transmissions & More - Buy Spare Part')
@section('meta_description', 'Find quality used and OEM Audi auto parts for A4, A6, A8, Q5, Q7, TT, S4 and more. Engines, transmissions, Quattro drivetrain, electrical parts. Call +1 (855) 994-4611. Nationwide shipping.')
@section('meta_keywords', 'used Audi parts, OEM Audi parts, Audi engine, Audi transmission, Audi A4 parts, Audi Q5 parts, Quattro drivetrain')
@section('canonical', 'https://buysparepart.org/audi-parts')
@section('og_title', 'Used Audi Parts | OEM Audi Engines, Transmissions & More - Buy Spare Part')
@section('og_description', 'Find quality used and OEM Audi auto parts for A4, A6, A8, Q5, Q7, TT, S4 and more. Engines, transmissions, Quattro drivetrain, electrical parts. Call +1 (855) 994-4611. Nationwide shipping.')
@section('og_url', 'https://buysparepart.org/audi-parts')

@section('content')

    <!-- Start Header Section -->
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/#cars-section">Cars</a></li>
                    <li>Audi Parts</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">Audi Parts</span>
                                <h1>Used Audi Parts for Every Model and Year</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->


    <!-- Start About Audi Parts Section -->
    <div class="home5-why-drivco-area pt-90 pb-90 mb-60">
        <div class="container">
            <div class="row g-lg-5 gy-5 align-items-center">

                <!-- Left Content -->
                <div class="col-lg-6">
                    <div class="drivco-content">
                        <div class="section-title-2 mb-30 wow fadeInUp" data-wow-delay="200ms">

                            <h2 style="font-size: 36px; font-weight: 800; line-height: 1.25; margin-top: 10px; margin-bottom: 20px;">
                                Premium Quality OEM & Used Audi Parts
                            </h2>

                            <p style="font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 16px;">
                                <strong>Buy Spare Part</strong> is your premier online provider for genuine OEM and top-grade replacement Audi auto parts. Whether you operate a luxury <strong>A4, A6, or A8 sedan</strong>, a versatile <strong>Q3, Q5, or Q7 SUV</strong>, or a performance-tuned <strong>S4, S5, or TT</strong>, we supply a comprehensive catalog of precision German-engineered components built to restore your vehicle to factory performance standards.
                            </p>

                            <p style="font-size: 16px; line-height: 1.7; color: #555; margin-bottom: 16px;">
                                From compression-tested TFSI turbocharged engines and smooth-shifting S-Tronic / Tiptronic transmissions to Quattro AWD differentials, steering racks, alternators, and electronic modules, each Audi part undergoes strict quality testing. Save up to 70% off dealer retail prices with fast, nationwide shipping.
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
                            <img src="/frontend/assets/Cars/audi.jpg"
                                 alt="Used Audi Auto Parts"
                                 class="img-fluid"
                                 style="max-height: 380px; width: auto; object-fit: contain;">
                            <div class="mt-3 text-center">
                                <span class="badge" style="background: #111827; color: #fff; padding: 8px 16px; font-size: 13px; font-weight: 600; border-radius: 50px;">
                                    Genuine German-Engineered Audi Replacement Parts
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End About Audi Parts Section -->


    <!-- Start Popular Audi Parts Grid -->
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
                            Popular <span style="color: #ff5900;">Audi Parts</span>
                        </h2>
                        <p class="text-muted" style="margin-top: 8px; font-size: 15px;">
                            Browse genuine recycled OEM parts for Audi A3, A4, A6, A8, Q3, Q5, Q7, Q8, TT, and S-line models.
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
                                <img src="/frontend/assets/Main/axleshaft.jpg" alt="Audi Axle Shaft">
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
                            <h6><a href="/transmission-parts/axle-shaft">Audi Axle Shaft</a></h6>
                            <small class="text-muted d-block">Quattro & FWD Drivetrain CV Axles</small>
                        </div>
                    </div>
                </div>

                <!-- 2. AC Compressor -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/suspension-parts/ac-compressor">
                                <img src="/frontend/assets/Main/ac_comporessor.jpg" alt="Audi AC Compressor">
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
                            <h6><a href="/suspension-parts/ac-compressor">Audi AC Compressor</a></h6>
                            <small class="text-muted d-block">Tested Climate Control Units</small>
                        </div>
                    </div>
                </div>

                <!-- 3. Car Starter -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/electrical-parts/starter">
                                <img src="/frontend/assets/Main/car_starter.jpg" alt="Audi Car Starter">
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
                            <h6><a href="/electrical-parts/starter">Audi Car Starter</a></h6>
                            <small class="text-muted d-block">Heavy-Duty High Torque Cranking</small>
                        </div>
                    </div>
                </div>

                <!-- 4. Intake Manifold -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/engine-parts/intake-manifold">
                                <img src="/frontend/assets/Main/intake_manifold.jpg" alt="Audi Intake Manifold">
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
                            <h6><a href="/engine-parts/intake-manifold">Audi Intake Manifold</a></h6>
                            <small class="text-muted d-block">Direct-Injection Runner Flap Assemblies</small>
                        </div>
                    </div>
                </div>

                <!-- 5. ABS Unit -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/electrical-parts/abs-unit">
                                <img src="/frontend/assets/Main/abs_unit.jpg" alt="Audi ABS Unit">
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
                            <h6><a href="/electrical-parts/abs-unit">Audi ABS Unit</a></h6>
                            <small class="text-muted d-block">Electronic Anti-Lock Control Hydraulic Module</small>
                        </div>
                    </div>
                </div>

                <!-- 6. Catalytic Converter -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/engine-parts/catalytic-converter">
                                <img src="/frontend/assets/Main/catalytic_converter.jpg" alt="Audi Catalytic Converter">
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
                            <small class="text-muted d-block">EPA & OEM Certified Exhaust Components</small>
                        </div>
                    </div>
                </div>

                <!-- 7. Coolant Pump -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/engine-parts/coolant-pump">
                                <img src="/frontend/assets/Main/coolant_pump.jpg" alt="Audi Coolant Pump">
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
                            <h6><a href="/engine-parts/coolant-pump">Audi Coolant Pump</a></h6>
                            <small class="text-muted d-block">Electric & Mechanical Water Pumps</small>
                        </div>
                    </div>
                </div>

                <!-- 8. Steering Column -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/suspension-parts/steering-column">
                                <img src="/frontend/assets/Main/steering_column.jpg" alt="Audi Steering Column">
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
                            <h6><a href="/suspension-parts/steering-column">Audi Steering Column</a></h6>
                            <small class="text-muted d-block">Precision Electronic Tilt & Telescoping</small>
                        </div>
                    </div>
                </div>

                <!-- 9. Car Engine -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/engine-parts/car-engine">
                                <img src="/frontend/assets/Main/engine.jpg" alt="Audi Car Engine">
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
                            <h6><a href="/engine-parts/car-engine">Audi Replacement Engine</a></h6>
                            <small class="text-muted d-block">Tested 2.0T TFSI, 3.0T V6 & V8 Long Blocks</small>
                        </div>
                    </div>
                </div>

                <!-- 10. Transmission -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/transmission-parts/transmission">
                                <img src="/frontend/assets/Main/transmission.jpg" alt="Audi Transmission">
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
                            <h6><a href="/transmission-parts/transmission">Audi Transmission</a></h6>
                            <small class="text-muted d-block">S-Tronic Dual Clutch & Tiptronic Automatic</small>
                        </div>
                    </div>
                </div>

                <!-- 11. Alternator -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/electrical-parts/alternator">
                                <img src="/frontend/assets/Main/alternators.jpg" alt="Audi Alternator">
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
                            <h6><a href="/electrical-parts/alternator">Audi Alternator</a></h6>
                            <small class="text-muted d-block">Bench Tested High-Output Charging</small>
                        </div>
                    </div>
                </div>

                <!-- 12. Rack & Pinion -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="shop-card2">
                        <div class="shop-img">
                            <a href="/suspension-parts/rack-pinion">
                                <img src="/frontend/assets/Main/rack_and_pinion.jpg" alt="Audi Rack and Pinion">
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
                            <h6><a href="/suspension-parts/rack-pinion">Audi Rack & Pinion</a></h6>
                            <small class="text-muted d-block">Electro-Mechanical Steering Gear</small>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Banner Callout inside parts section -->
            <div class="text-center p-4 rounded" style="background: #111827; color: #fff;">
                <h4 style="color: #fff; font-weight: 700; margin-bottom: 8px;">Don't see your specific Audi part listed above?</h4>
                <p style="color: #ccc; margin-bottom: 16px; font-size: 15px;">
                    We have access to over 500,000 recycled OEM auto parts nationwide. Call our Audi specialists for an instant inventory search.
                </p>
                <a href="tel:{{ $phone }}" class="primary-btn3 d-inline-flex align-items-center" style="gap: 8px;">
                    <i class="bi bi-telephone-fill"></i>
                    <span>Call Now: {{ $phoneLabel }}</span>
                </a>
            </div>

        </div>
    </div>
    <!-- End Popular Audi Parts Grid -->


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
            margin-bottom: 0;
            line-height: 1.5;
        }

        @media (max-width: 991px) {
            .journey-track {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .journey-track {
                grid-template-columns: 1fr;
            }
            .journey-heading {
                font-size: 2rem;
            }
        }
    </style>

    <section class="journey-section">
        <div class="container">
            <div class="text-center mb-20">
                <span class="journey-step-tag">Easy Process</span>
                <h2 class="journey-heading">HOW WE <span>WORK</span></h2>
                <p class="journey-subheading">Your seamless journey to getting your Audi back on the road!</p>
            </div>

            <div class="journey-track">
                <!-- Card 1 -->
                <div class="journey-card">
                    <div class="journey-icon-box">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <span class="journey-step-tag">Step 1</span>
                    <h3>Request a Quote</h3>
                    <p>Share your Audi's VIN, model, year, and required part number with our dedicated team.</p>
                </div>

                <!-- Card 2 -->
                <div class="journey-card">
                    <div class="journey-icon-box">
                        <i class="bi bi-headset"></i>
                    </div>
                    <span class="journey-step-tag">Step 2</span>
                    <h3>Sales Assistance</h3>
                    <p>Our experienced Audi specialists confirm part availability, grade, and direct OEM fitment.</p>
                </div>

                <!-- Card 3 -->
                <div class="journey-card">
                    <div class="journey-icon-box">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <span class="journey-step-tag">Step 3</span>
                    <h3>Secured Payment</h3>
                    <p>Transparent pricing, safe online checkout, full documentation, and warranty confirmation.</p>
                </div>

                <!-- Card 4 -->
                <div class="journey-card">
                    <div class="journey-icon-box">
                        <i class="bi bi-truck"></i>
                    </div>
                    <span class="journey-step-tag">Step 4</span>
                    <h3>Order Shipment</h3>
                    <p>Carefully crated and shipped via reliable nationwide freight or courier with real-time tracking.</p>
                </div>

                <!-- Card 5 -->
                <div class="journey-card">
                    <div class="journey-icon-box">
                        <i class="bi bi-wrench-adjustable"></i>
                    </div>
                    <span class="journey-step-tag">Step 5</span>
                    <h3>Installation Support</h3>
                    <p>Direct plug-and-play fitment specifications for your certified mechanic or personal shop.</p>
                </div>

                <!-- Card 6 -->
                <div class="journey-card">
                    <div class="journey-icon-box">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <span class="journey-step-tag">Step 6</span>
                    <h3>After-Sale Support</h3>
                    <p>Dedicated post-purchase warranty protection, exchange assistance, and expert care.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End How We Work Section -->


    <!-- Start Audi Specific FAQs Section -->
    <div class="faq-page-wrap pt-90 pb-90 mb-60" style="background: #fafafa;">
        <div class="container">
            <div class="row g-lg-4 gy-5">

                <!-- Left Side Info Box -->
                <div class="col-lg-4">
                    <div style="background: #fff; padding: 35px 25px; border-radius: 16px; border: 1px solid #eee; box-shadow: 0 10px 30px rgba(0,0,0,0.04); position: sticky; top: 100px;">
                        <span class="sub-title" style="color: #ff5900; font-weight: 700; text-transform: uppercase; font-size: 13px; letter-spacing: 1px;">
                            Got Questions?
                        </span>
                        <h3 style="font-size: 24px; font-weight: 800; margin-top: 8px; margin-bottom: 15px;">
                            Frequently Asked Questions About Audi Parts
                        </h3>
                        <p class="text-muted" style="font-size: 14px; line-height: 1.6; margin-bottom: 24px;">
                            Here are answers to the most common questions regarding Audi OEM fitment, part testing, freight shipping, and warranty terms.
                        </p>

                        <div class="p-3 rounded mb-25" style="background: #f8f9fa; border: 1px dashed #d1d5db;">
                            <h6 style="font-weight: 700; font-size: 15px; margin-bottom: 5px;">Need immediate help?</h6>
                            <p class="text-muted mb-0" style="font-size: 13px;">Our Audi parts technicians are on standby 24/7 to answer your questions.</p>
                        </div>

                        <a href="tel:{{ $phone }}" class="primary-btn3 w-100 text-center d-flex align-items-center justify-content-center" style="gap: 8px;">
                            <i class="bi bi-telephone-fill"></i>
                            <span>{{ $phoneLabel }}</span>
                        </a>
                    </div>
                </div>

                <!-- Right Side FAQ Accordion -->
                <div class="col-lg-8">
                    <div class="faq-area">
                        <div class="section-title-and-filter mb-30">
                            <div class="section-title">
                                <h3 style="font-size: 28px; font-weight: 800;">Audi Parts FAQs & Answers</h3>
                            </div>
                        </div>

                        <div class="faq-wrap">
                            <div class="accordion accordion-flush" id="audiFaqAccordion">

                                <!-- FAQ 1 -->
                                <div class="accordion-item mb-3" style="border: 1px solid #eee; border-radius: 10px; overflow: hidden; background: #fff;">
                                    <h5 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne"
                                            aria-expanded="true"
                                            aria-controls="flush-collapseOne"
                                            style="font-weight: 700; font-size: 16px; padding: 20px;">
                                            What types of Audi parts do you offer?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseOne"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="flush-headingOne"
                                        data-bs-parent="#audiFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            We supply a comprehensive inventory of Audi parts including complete turbocharged engines, S-Tronic and Tiptronic transmissions, Quattro drivetrain transfer units, suspension control arms, electronic steering columns, AC compressors, alternators, ABS modules, and exterior body panels across A3, A4, A6, A8, Q3, Q5, Q7, Q8, TT, and S-Line series.
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
                                            How do I find the right part for my Audi?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseTwo"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo"
                                        data-bs-parent="#audiFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            You can easily match parts by your Audi's year, model, and engine displacement, or by providing your VIN (Vehicle Identification Number). Our German automotive specialists are also available 24/7 at <a href="tel:{{ $phone }}" style="color: #ff5900; font-weight: 600;">{{ $phoneLabel }}</a> to verify exact fitment before you order.
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
                                            How can I verify that a part will fit my Audi?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseThree"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree"
                                        data-bs-parent="#audiFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            We cross-reference OEM part numbers directly with Audi factory parts databases. Whether you have an EA888 2.0L TFSI, 3.0L Supercharged/Turbo V6, or Quattro vs. FrontTrak front-wheel-drive configuration, our specialists ensure 100% direct fitment compatibility.
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
                                            What shipping options are available for Audi parts?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseFour"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour"
                                        data-bs-parent="#audiFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            We offer nationwide tracked freight and courier delivery. Larger components like complete engines and gearboxes are strapped to custom heavy-duty pallets and delivered with liftgate service directly to your residence or preferred automotive shop.
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
                                            What is your return policy on Audi parts?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseFive"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFive"
                                        data-bs-parent="#audiFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            We provide a straightforward, customer-friendly return policy on all eligible Audi parts. If an item arrives damaged or does not match your vehicle specifications, our team will process a fast replacement or refund under our warranty guarantee.
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
                                            Do your Audi auto parts come with a warranty?
                                        </button>
                                    </h5>
                                    <div id="flush-collapseSix"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSix"
                                        data-bs-parent="#audiFaqAccordion">
                                        <div class="accordion-body" style="padding: 0 20px 20px; color: #555; line-height: 1.7; font-size: 15px;">
                                            Yes, every used and OEM Audi part is thoroughly tested and comes standard with warranty coverage. Extended warranty packages are also available for complete peace of mind.
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
    <!-- End Audi Specific FAQs Section -->


    <!-- Start CTA Banner Section -->
    <div class="home2-inner-banner mb-100">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="700ms">
                <div class="col-lg-12">
                    <div class="inner-banner-content section-title-2 text-center" style="max-width: 800px; margin: 0 auto;">
                        <span class="sub-title" style="color: #ffffffff; font-weight: 700; text-transform: uppercase; font-size: 14px; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">
                            CALL US FOR A FREE CONSULTATION TODAY!
                        </span>
                        <h2>Need Help Finding the Right Audi Part?</h2>
                        <p style="font-size: 16px; line-height: 1.6; margin-top: 15px; margin-bottom: 25px;">
                            Share your VIN, Audi model, year, or part number with our automotive support team. We'll help you locate the exact match in minutes, with no guesswork and direct savings up to 70% off dealer prices.
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
