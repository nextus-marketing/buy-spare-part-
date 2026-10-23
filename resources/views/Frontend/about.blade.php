@extends('layouts.frontend')

@php
    $phone = '+18559944611';
    $phoneLabel = '+1 (855) 994-4611';
@endphp

@section('title')
    About Us - Premium OEM & Quality Replacement Auto Parts | Buy Spare Part
@endsection

@section('content')

    <style>
        .info-card-area .info-card {
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 12px;
            padding: 36px 28px;
            height: 100%;
            transition: all .3s ease;
        }
        .info-card-area .info-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
        }
        .info-card-area .info-card h4 { margin-bottom: 12px; font-size: 20px; }
        .info-card-area .info-card p { margin-bottom: 0; color: #555; line-height: 1.6; }
        .info-card-area .card-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: #f4f4f4;
            color: #ff5900;
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .help-box { margin-top: 30px; }
        .help-box span { display: block; font-weight: 600; color: #666; margin-bottom: 5px; }
        .help-box a { font-size: 24px; font-weight: 700; text-decoration: none; color: #ff5900; }
        .category-pill-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 25px;
        }
        .category-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            background: #f7f8fa;
            border: 1px solid #e5e7eb;
            border-radius: 50px;
            color: #1f2937;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all .25s ease;
        }
        .category-pill:hover {
            background: #ff5900;
            color: #fff;
            border-color: #ff5900;
            transform: translateY(-2px);
        }
    </style>

    <!-- Start Header Section -->
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <li>About Us</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">About Us</span>
                                <h1>Certified OEM & Quality Replacement Auto Parts Across America</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->


    <!-- Start Main About Us Story Section -->
    <div class="home5-why-drivco-area pt-90 pb-90 mb-80">
        <div class="container">
            <div class="row g-lg-5 gy-5 align-items-center">

                <!-- Left Content -->
               <div class="col-lg-6">
                    <div class="drivco-content">
                        <div class="section-title-2 mb-30 wow fadeInUp" data-wow-delay="200ms">
                            <span class="sub-title">Who We Are</span>
                            <h2>America's Leading Supplier of Tested OEM & Used Auto Parts</h2>

                            <strong>
                                At Buy Spare Part, we connect vehicle owners, certified mechanics, and collision centers with thoroughly inspected, high-performance OEM replacement components.
                            </strong>
                            <br><br>

                            <p>
                                Founded with a commitment to reliability and customer satisfaction, <strong>Buy Spare Part</strong> takes the uncertainty out of shopping for replacement automotive components. Our extensive nationwide inventory features thousands of tested engines, transmissions, electrical modules, steering racks, suspension assemblies, and body panels for all domestic and import vehicles.
                            </p>

                            <p>
                                Every item in our catalog undergoes rigorous multi-point testing, compression analysis, and VIN compatibility verification before dispatch. Backed by solid warranty protection and expedited nationwide freight, we provide dealer-grade quality at up to 70% off retail prices.
                            </p>
                        </div>

                        <div class="help-box wow fadeInUp" data-wow-delay="300ms">
                            <span>Need Help? Chat With An Expert</span>
                            <a href="tel:{{ $phone }}">{{ $phoneLabel }}</a>
                        </div>
                    </div>
                </div>

                <!-- Right Image Showcase -->
                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                    <div class="drivco-img wow zoomIn" data-wow-delay="400ms">
                        <img src="/frontend/assets/mechanical.png" alt="Quality Used Auto Parts Specialist" style="max-width: 100%; border-radius: 14px;">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Main About Us Story Section -->


    <!-- Start Our Process Section -->
    <div class="info-card-area pb-90 mb-80">
        <div class="container">
            <div class="section-title-2 text-center mb-60 wow fadeInUp" data-wow-delay="200ms">
                <span class="sub-title">How It Works</span>
                <h2>Our Seamless Quality Delivery Process</h2>
                <p class="mx-auto" style="max-width: 680px; color: #666;">
                    From accurate VIN matching to secure insured delivery, our proven 4-stage fulfillment process ensures you receive the exact working part your vehicle needs.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="info-card">
                        <span class="card-number">01</span>
                        <h4>1. Precise Vehicle Matching</h4>
                        <p>Browse our extensive inventory or speak with a specialist to cross-reference your vehicle's VIN, engine code, and transmission type.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="350ms">
                    <div class="info-card">
                        <span class="card-number">02</span>
                        <h4>2. Multi-Point Quality Testing</h4>
                        <p>Every mechanical, electrical, and structural assembly is bench-tested, pressure-checked, and visually verified by technicians.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="info-card">
                        <span class="card-number">03</span>
                        <h4>3. Protective Pallet Packing</h4>
                        <p>Parts are cleaned, drained of fluids, and wrapped in industrial heavy-duty packaging or custom pallets to prevent in-transit damage.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="650ms">
                    <div class="info-card">
                        <span class="card-number">04</span>
                        <h4>4. Fast Insured Freight</h4>
                        <p>Dispatched swiftly with full tracking directly to your residence, business, or preferred repair shop anywhere in the USA.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Process Section -->


    <!-- Start Why Choose Us / Product Range Section -->
    <div class="welcome-banner-section pb-90 pt-50 mb-80" style="background: #fbfbfb;">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="section-title-2 wow fadeInUp" data-wow-delay="200ms">
                        <span class="sub-title">What We Offer</span>
                        <h2>Comprehensive Auto Parts Across 6 Core Categories</h2>
                        <p style="color: #555; line-height: 1.7;">
                            We take pride in stocking an unmatched inventory of tested used automotive parts suitable for foreign and domestic vehicles. Whether you drive a sedan, coupe, SUV, crossover, or commercial truck, we have the exact OEM components you need.
                        </p>

                        <div class="category-pill-wrap wow fadeInUp" data-wow-delay="300ms">
                            <a href="/engine-parts" class="category-pill">
                                <i class="bi bi-gear-wide-connected"></i> Engine Parts
                            </a>
                            <a href="/transmission-parts" class="category-pill">
                                <i class="bi bi-speedometer2"></i> Transmission Parts
                            </a>
                            <a href="/suspension-parts" class="category-pill">
                                <i class="bi bi-sliders"></i> Suspension Parts
                            </a>
                            <a href="/electrical-parts" class="category-pill">
                                <i class="bi bi-lightning-charge"></i> Electrical Parts
                            </a>
                            <a href="/exterior-parts" class="category-pill">
                                <i class="bi bi-shield-check"></i> Exterior Parts
                            </a>
                            <a href="/interior-parts" class="category-pill">
                                <i class="bi bi-car-front"></i> Interior Parts
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-sm-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="info-card" style="background: #fff; padding: 30px 24px; border-radius: 12px; border: 1px solid #e8e8e8; height: 100%;">
                                <h4 style="color: #ff5900; font-size: 20px; margin-bottom: 10px;">OEM Exact Fit</h4>
                                <p style="color: #555; font-size: 14px; margin-bottom: 0;">Genuine original factory parts engineered for perfect vehicle alignment and performance.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="info-card" style="background: #fff; padding: 30px 24px; border-radius: 12px; border: 1px solid #e8e8e8; height: 100%;">
                                <h4 style="color: #ff5900; font-size: 20px; margin-bottom: 10px;">Expert Support</h4>
                                <p style="color: #555; font-size: 14px; margin-bottom: 0;">Experienced parts specialists available via phone to answer any technical questions.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="info-card" style="background: #fff; padding: 30px 24px; border-radius: 12px; border: 1px solid #e8e8e8; height: 100%;">
                                <h4 style="color: #ff5900; font-size: 20px; margin-bottom: 10px;">Thoroughly Tested</h4>
                                <p style="color: #555; font-size: 14px; margin-bottom: 0;">All mechanical, electrical, and drivetrain parts are inspected before leaving our facility.</p>
                            </div>
                        </div>

                        <div class="col-sm-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="info-card" style="background: #fff; padding: 30px 24px; border-radius: 12px; border: 1px solid #e8e8e8; height: 100%;">
                                <h4 style="color: #ff5900; font-size: 20px; margin-bottom: 10px;">Cost-Effective</h4>
                                <p style="color: #555; font-size: 14px; margin-bottom: 0;">Save up to 60% compared to new dealership replacement costs without sacrificing quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us / Product Range Section -->


    <!-- Start CTA Section -->
    <div class="home2-inner-banner mb-100">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="700ms">
                <div class="col-lg-12">
                    <div class="inner-banner-content section-title-2">
                        <h2>Need Help Finding the Right Auto Part?</h2>
                        <p>Share your vehicle's VIN, year, make, model, or part number with our dedicated parts advisors. We will verify compatibility within minutes and secure you the lowest delivered rate.</p>
                        <a class="primary-btn3" href="tel:{{ $phone }}">
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
    <!-- End CTA Section -->

@endsection