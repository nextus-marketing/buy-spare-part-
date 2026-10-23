@extends('layouts.frontend')

@php
    $phone = 'tel:+18559944611';
    $phoneLabel = '+1 (855) 994-4611';
@endphp

@section('title')
    Engine Cradle | Transmission Parts | Buy Spare Part
@endsection

@section('content')

    <style>
        .info-card-area .info-card { background:#fff;border:1px solid #e8e8e8;border-radius:12px;padding:40px 32px;height:100%;transition:all .3s ease; }
        .info-card-area .info-card:hover { transform:translateY(-6px);box-shadow:0 12px 30px rgba(0,0,0,.08); }
        .info-card-area .info-card h4 { margin-bottom:14px; }
        .info-card-area .info-card p { margin-bottom:0; }
        .info-card-area .card-number { display:inline-flex;align-items:center;justify-content:center;width:54px;height:54px;border-radius:50%;background:#f4f4f4;font-weight:700;margin-bottom:20px; }
        .help-box { margin-top:30px; }
        .help-box span { display:block;font-weight:600; }
        .help-box a { font-size:24px;font-weight:700;text-decoration:none; }
    </style>

    <div class="inner-page-banner">
        <div class="banner-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/transmission-parts">Transmission Parts</a></li>
                    <li>Engine Cradle</li>
                </ul>
                <div class="banner-main-content-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 d-flex align-items-center">
                            <div class="banner-content">
                                <span class="sub-title">Engine Cradle</span>
                                <h1>Quality Engine Cradle Replacements</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home5-why-drivco-area pt-90 pb-90 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="drivco-content">
                        <div class="section-title-2 mb-40 wow fadeInUp" data-wow-delay="200ms">
                            <h2>Restore Chassis Rigidity With a New Engine Cradle</h2>
                            <strong>A corroded or damaged engine cradle (subframe) compromises the structural integrity of the front end, affecting suspension geometry, steering precision, and overall vehicle safety. We supply OEM-quality replacement cradles for most vehicles.</strong>
                            <br>
                            <p>The engine cradle, also known as the front subframe or engine support frame, provides the mounting points for the engine, transmission, and front suspension components. Corrosion and impact damage are the most common causes of failure. Our range includes complete front cradle assemblies and repair brackets for popular models.</p>
                        </div>
                        <div class="help-box wow fadeInUp" data-wow-delay="300ms">
                            <span>Need Help? Chat With An Expert</span>
                            <a href="{{ $phone }}">{{ $phoneLabel }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                    <div class="drivco-img wow zoomIn" data-wow-delay="400ms">
                        <img src="/frontend/assets/Main/cradle.jpg" alt="Engine cradle subframe replacement">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-card-area pb-90 mb-100">
        <div class="container">
            <div class="section-title-2 text-center mb-60 wow fadeInUp" data-wow-delay="200ms">
                <span class="sub-title">What We Offer</span>
                <h2>Our Engine Cradle Range</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="info-card">
                        <span class="card-number">01</span>
                        <h4>Complete Cradle Assemblies</h4>
                        <p>Full front subframe and engine cradle assemblies for a complete structural replacement.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="350ms">
                    <div class="info-card">
                        <span class="card-number">02</span>
                        <h4>Cradle Repair Sections</h4>
                        <p>Targeted cradle repair sections and brackets for localised corrosion or impact damage repairs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="info-card">
                        <span class="card-number">03</span>
                        <h4>Cradle Bushings & Hardware</h4>
                        <p>Subframe mounting bushings, bolts, and alignment hardware for cradle refurbishment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="faq-page-wrap pt-100 mb-100">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-4 d-lg-flex d-none">
                    <div class="faq-img">
                        <img src="/frontend/assets/img/inner-page/faq-img.png" alt="FAQ Engine Cradle">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="faq-area">
                        <div class="section-title-and-filter mb-40">
                            <div class="section-title">
                                <span class="sub-title">Frequently Asked Questions</span>
                                <h4>Everything You Need to Know About Engine Cradles</h4>
                            </div>
                        </div>
                        <div class="faq-wrap">
                            @php
                                $faqs = [
                                    ['{What is an engine cradle and what does it do?}', "{The engine cradle (or front subframe) is a structural frame below the engine bay that supports the engine, transmission, and front suspension. It is bolted to the main vehicle body.}"],
                                    ['{What causes engine cradle failure?}', "{The most common causes are road salt corrosion on the cradle metal and mounting points, and collision damage. Cradles can also crack from metal fatigue over time.}"],
                                    ['{How do I know if my engine cradle needs replacing?}', "{Signs include visible rust and corrosion on the subframe, knocking or clunking noises from the front end, uneven tyre wear, steering pulling to one side, and a failed vehicle inspection. Call {$phoneLabel} for advice.}"],
                                    ['{Is a cradle repair or full replacement better?}', "{For localised corrosion, repair sections can be a cost-effective solution. For severe corrosion or structural damage, a full replacement cradle is the safer and more reliable option.}"],
                                    ['{Does replacing an engine cradle require wheel alignment?}', "{Yes, the front wheel alignment should always be set after cradle replacement because the suspension geometry reference points change with the new cradle.}"],
                                    ['{How do I confirm the correct engine cradle for my vehicle?}', "{Provide your vehicle year, make, model, and drivetrain (FWD or AWD). Engine cradles are highly vehicle-specific so accurate identification is essential.}"],
                                ];
                            @endphp
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @foreach ($faqs as $i => $faq)
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="flush-heading{{ $i }}">
                                            <button class="accordion-button {{ $i === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $i }}" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="flush-collapse{{ $i }}">{{ $faq[0] }}</button>
                                        </h5>
                                        <div id="flush-collapse{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" aria-labelledby="flush-heading{{ $i }}" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">{{ $faq[1] }}</div>
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

    <div class="home2-inner-banner mb-100">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="700ms">
                <div class="col-lg-12">
                    <div class="inner-banner-content section-title-2">
                        <h2>Talk to a Parts Specialist</h2>
                        <p>Provide your vehicle details and our team will source the correct engine cradle or subframe for your vehicle.</p>
                        <a class="primary-btn3" href="{{ $phone }}">
                            <svg width="24" height="15" viewBox="0 0 24 15" xmlns="http://www.w3.org/2000/svg"><path d="M3.25985 0C3.15704 0 3.05844 0.0413135 2.98574 0.114852C2.91304 0.18839 2.87219 0.28813 2.87219 0.392129C2.87219 0.496128 2.91304 0.595867 2.98574 0.669405C3.05844 0.742944 3.15704 0.784257 3.25985 0.784257H4.8105C4.91332 0.784257 5.01192 0.742944 5.08462 0.669405C5.15732 0.595867 5.19816 0.496128 5.19816 0.392129C5.19816 0.28813 5.15732 0.18839 5.08462 0.114852C5.01192 0.0413135 4.91332 0 4.8105 0H3.25985ZM5.77966 0C5.67684 0 5.57824 0.0413135 5.50554 0.114852C5.43284 0.18839 5.39199 0.28813 5.39199 0.392129C5.39199 0.496128 5.43284 0.595867 5.50554 0.669405C5.57824 0.742944 5.67684 0.784257 5.77966 0.784257H10.3347C10.4375 0.784257 10.5361 0.742944 10.6088 0.669405C10.6815 0.595867 10.7223 0.496128 10.7223 0.392129C10.7223 0.28813 10.6815 0.18839 10.6088 0.114852C10.5361 0.0413135 10.4375 0 10.3347 0H5.77966Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4.22917 2.7464C4.12636 2.7464 4.02776 2.78771 3.95505 2.86125C3.88235 2.93479 3.84151 3.03453 3.84151 3.13853C3.84151 3.24253 3.88235 3.34227 3.95505 3.4158C4.02776 3.48934 4.12636 3.53066 4.22917 3.53066H13.1454C14.653 3.53066 15.5822 3.76829 16.3256 4.15002C16.9575 4.47431 17.4672 4.90546 18.1055 5.44542C18.2375 5.55698 18.3749 5.67305 18.5201 5.79402L18.6101 5.86892L18.726 5.88127C22.2653 6.25811 23.0622 7.46822 23.2246 8.08778V9.60865C23.2246 9.71265 23.1838 9.81239 23.1111 9.88593C23.0384 9.95947 22.9398 10.0008 22.8369 10.0008H21.8356C21.6511 8.88811 20.6943 8.04014 19.5418 8.04014C18.3893 8.04014 17.4325 8.88811 17.248 10.0008H10.2058C10.0212 8.88811 9.06448 8.04014 7.91196 8.04014C6.75944 8.04014 5.80269 8.88811 5.61816 10.0008H3.7446C3.64178 10.0008 3.54318 10.0421 3.47048 10.1156C3.39778 10.1892 3.35693 10.2889 3.35693 10.3929C3.35693 10.4969 3.39778 10.5966 3.47048 10.6702C3.54318 10.7437 3.64178 10.785 3.7446 10.785H5.61816C5.80269 11.8977 6.75944 12.7457 7.91196 12.7457C9.06448 12.7457 10.0212 11.8977 10.2058 10.785H17.248C17.4325 11.8977 18.3893 12.7457 19.5418 12.7457C20.6943 12.7457 21.6511 11.8977 21.8356 10.785H22.8369C23.1454 10.785 23.4412 10.6611 23.6593 10.4405C23.8774 10.2199 23.9999 9.92065 23.9999 9.60865V7.99543L23.99 7.95191C23.7431 6.86983 22.5791 5.52855 18.9239 5.11407C18.8217 5.02859 18.7215 4.9435 18.6227 4.85978C17.9828 4.31766 17.3942 3.81887 16.6766 3.45047C15.7966 2.99893 14.7391 2.7464 13.1454 2.7464H4.22917Z"></path></svg>
                            Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection