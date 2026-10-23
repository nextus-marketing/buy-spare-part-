@extends('layouts.frontend')

@php
    $phone = '+18559944611';
    $phoneLabel = '+1 (855) 994-4611';
@endphp

@section('title')
    Car Engine | Engine Parts | Buy Spare Part
@endsection

@section('content')

    <style>
        .info-card-area .info-card {
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 12px;
            padding: 40px 32px;
            height: 100%;
            transition: all .3s ease;
        }
        .info-card-area .info-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
        }
        .info-card-area .info-card h4 { margin-bottom: 14px; }
        .info-card-area .info-card p { margin-bottom: 0; }
        .info-card-area .card-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: #f4f4f4;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .help-box { margin-top: 30px; }
        .help-box span { display: block; font-weight: 600; }
        .help-box a { font-size: 24px; font-weight: 700; text-decoration: none; }
    </style>

    <!-- Start Header Section -->
    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/engine-parts">Engine Parts</a></li>
                    <li>Car Engine</li>
                </ul>

                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">Car Engine</span>
                                <h1>Premium Engine Replacement Solutions</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->


    <!-- Start Complete Engine Systems Section -->
    <div class="home5-why-drivco-area pt-90 pb-90 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">

                <div class="col-lg-6 d-flex align-items-center">
                    <div class="drivco-content">
                        <div class="section-title-2 mb-40 wow fadeInUp" data-wow-delay="200ms">
                            <h2>Complete Engine Systems</h2>

                            <strong>
                                Bring back your vehicle's power with quality replacement engines. We supply OEM-equivalent and performance-grade engines for nearly every make and model, so your car can run like new again.
                            </strong>
                            <br>

                            <p>Whether your engine has failed, you are planning an upgrade, or you simply need dependable engine components, our inventory covers complete engine assemblies as well as individual parts. From cylinder heads and camshafts to fuel injection systems and turbochargers, every component is tested for quality and durability. We confirm compatibility with your vehicle's specifications and guide you through every step of choosing the right part.</p>
                        </div>

                        <div class="help-box wow fadeInUp" data-wow-delay="300ms">
                            <span>Need Help? Chat With An Expert</span>
                            <a href="tel:{{ $phone }}">{{ $phoneLabel }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                    <div class="drivco-img wow zoomIn" data-wow-delay="400ms">
                        <img src="/frontend/assets/Main/engine.jpg" alt="Replacement car engine">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Complete Engine Systems Section -->


    <!-- Start What We Offer Section -->
    <div class="info-card-area pb-90 mb-100">
        <div class="container">
            <div class="section-title-2 text-center mb-60 wow fadeInUp" data-wow-delay="200ms">
                <span class="sub-title">What We Offer</span>
                <h2>Our Engine Product Range</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="info-card">
                        <span class="card-number">01</span>
                        <h4>Complete Engine Assemblies</h4>
                        <p>Full replacement engines ready for installation with all necessary components included.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="350ms">
                    <div class="info-card">
                        <span class="card-number">02</span>
                        <h4>High-Performance Components</h4>
                        <p>Cylinder heads, pistons, camshafts, and turbochargers for enhanced power output.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="info-card">
                        <span class="card-number">03</span>
                        <h4>Engine Support Parts</h4>
                        <p>Gaskets, seals, water pumps, fuel systems, and manifolds for complete maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End What We Offer Section -->


   


    <!-- Start FAQ Section -->
    <div class="faq-page-wrap pt-100 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">

                <div class="col-lg-4 d-lg-flex d-none">
                    <div class="faq-img">
                        <img src="/frontend/assets/img/inner-page/faq-img.png" alt="Frequently asked questions about car engines">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="faq-area">

                        <div class="section-title-and-filter mb-40">
                            <div class="section-title">
                                <span class="sub-title">Frequently Asked Questions</span>
                                <h4>Everything You Need to Know About Engine Replacement</h4>
                            </div>
                        </div>

                        <div class="faq-wrap">
                            @php
                                $faqs = [
                                    ['How do I select the correct engine for my vehicle?', "Start with your vehicle's make, model, year, and engine size, which you can find from the VIN or in your owner's manual. Compare these details with the engine listing, or call us at {$phoneLabel} and our team will help you identify the right match."],
                                    ['What types of engines and engine parts do you carry?', 'Our range includes complete engine assemblies, crate, long block and short block engines, cylinder heads, camshafts, superchargers and turbochargers, intake and exhaust manifolds, engine blocks, fuel injection systems, water pumps, gaskets and seals, and catalytic converters. Both OEM-equivalent and performance-grade options are available.'],
                                    ['Are your engines tested before sale?', 'Yes. Every engine is inspected and tested for performance and reliability before it ships, so you receive a part you can depend on.'],
                                    ['Should I choose a new or a remanufactured engine?', 'A new engine offers a fresh start, while a remanufactured engine is professionally rebuilt to like-new condition at a lower price, with worn components, gaskets and seals replaced. Check the product listing for the exact condition of each engine.'],
                                    ['Do you offer installation services or guidance?', 'We do not install engines ourselves, but our team can answer installation questions and help troubleshoot concerns. We recommend having a qualified mechanic fit your engine to ensure proper setup.'],
                                    ['How do I confirm engine compatibility before ordering?', 'Send us your VIN, engine code, or part number along with your vehicle year, make, and model. Our support team will verify compatibility before you place your order.'],
                                ];
                            @endphp

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @foreach ($faqs as $i => $faq)
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="flush-heading{{ $i }}">
                                            <button class="accordion-button {{ $i === 0 ? '' : 'collapsed' }}"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse{{ $i }}"
                                                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                                aria-controls="flush-collapse{{ $i }}">
                                                {{ $faq[0] }}
                                            </button>
                                        </h5>

                                        <div id="flush-collapse{{ $i }}"
                                            class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                            aria-labelledby="flush-heading{{ $i }}"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                {{ $faq[1] }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End FAQ Section -->

 <!-- Start Talk To A Specialist Section -->
    <div class="home2-inner-banner mb-100">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="700ms">
                <div class="col-lg-12">
                    <div class="inner-banner-content section-title-2">
                        <h2>Talk to a Parts Specialist</h2>
                        <p>Share your VIN, make, model, or part number and one of our specialists will help you find the right engine in minutes, with no guesswork.</p>
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
    <!-- End Talk To A Specialist Section -->

@endsection