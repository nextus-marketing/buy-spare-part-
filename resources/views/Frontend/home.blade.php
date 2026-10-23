@extends('layouts.frontend')

@php
    $phone = '+18888552919';
    $phoneLabel = '+1 (888) 855-2919';
@endphp

@section('meta_title', 'Buy Spare Part | Quality Used & OEM Auto Parts – Engines, Transmissions & More')
@section('meta_description', 'Buy Spare Part is your premier destination for tested OEM and recycled auto components. Certified engines, transmissions, suspension, and electrical parts for all makes. Call +1 (888) 855-2919. Fast nationwide delivery.')
@section('meta_keywords', 'used car parts, OEM auto parts, replacement engines, used transmissions, suspension parts, electrical car parts, buy spare part, buy spare parts online, auto parts USA')
@section('canonical', 'https://buysparepart.org/')
@section('og_title', 'Buy Spare Part | Certified OEM & Quality Replacement Auto Parts')
@section('og_description', 'Find inspected OEM and quality replacement auto parts for all major makes and models. Engines, transmissions, electrical, suspension & more. Call +1 (888) 855-2919.')
@section('og_url', 'https://buysparepart.org/')
@section('og_image', 'https://buysparepart.org/frontend/assets/logo.png')

@section('content')

    <!-- Start Home6 Banner section -->
    <div class="home6-banner-area">
        <div class="container-fluid">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="banner-content">
                        <span>Certified OEM & Quality Auto Parts</span>
                        <h1>Top Quality <span style="color: #ff5900;">Auto Spare Parts</span> & OEM Assemblies</h1>
                        <p>Discover inspected replacement engines, transmissions, suspension, electrical modules, and body components for nearly every vehicle at competitive wholesale prices.</p>
                        <div class="banner-content-bottom">
                            <a href="tel:{{ $phone }}" class="primary-btn7">
                                <svg width="24" height="15" viewBox="0 0 24 15" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.25985 0C3.15704 0 3.05844 0.0413135 2.98574 0.114852C2.91304 0.18839 2.87219 0.28813 2.87219 0.392129C2.87219 0.496128 2.91304 0.595867 2.98574 0.669405C3.05844 0.742944 3.15704 0.784257 3.25985 0.784257H4.8105C4.91332 0.784257 5.01192 0.742944 5.08462 0.669405C5.15732 0.595867 5.19816 0.496128 5.19816 0.392129C5.19816 0.28813 5.15732 0.18839 5.08462 0.114852C5.01192 0.0413135 4.91332 0 4.8105 0H3.25985ZM5.77966 0C5.67684 0 5.57824 0.0413135 5.50554 0.114852C5.43284 0.18839 5.39199 0.28813 5.39199 0.392129C5.39199 0.496128 5.43284 0.595867 5.50554 0.669405C5.57824 0.742944 5.67684 0.784257 5.77966 0.784257H10.3347C10.4375 0.784257 10.5361 0.742944 10.6088 0.669405C10.6815 0.595867 10.7223 0.496128 10.7223 0.392129C10.7223 0.28813 10.6815 0.18839 10.6088 0.114852C10.5361 0.0413135 10.4375 0 10.3347 0H5.77966Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.22917 2.7464C4.12636 2.7464 4.02776 2.78771 3.95505 2.86125C3.88235 2.93479 3.84151 3.03453 3.84151 3.13853C3.84151 3.24253 3.88235 3.34227 3.95505 3.4158C4.02776 3.48934 4.12636 3.53066 4.22917 3.53066H13.1454C14.653 3.53066 15.5822 3.76829 16.3256 4.15002C16.9575 4.47431 17.4672 4.90546 18.1055 5.44542C18.2375 5.55698 18.3749 5.67305 18.5201 5.79402L18.6101 5.86892L18.726 5.88127C22.2653 6.25811 23.0622 7.46822 23.2246 8.08778V9.60865C23.2246 9.71265 23.1838 9.81239 23.1111 9.88593C23.0384 9.95947 22.9398 10.0008 22.8369 10.0008H21.8356C21.6511 8.88811 20.6943 8.04014 19.5418 8.04014C18.3893 8.04014 17.4325 8.88811 17.248 10.0008H10.2058C10.0212 8.88811 9.06448 8.04014 7.91196 8.04014C6.75944 8.04014 5.80269 8.88811 5.61816 10.0008H3.7446C3.64178 10.0008 3.54318 10.0421 3.47048 10.1156C3.39778 10.1892 3.35693 10.2889 3.35693 10.3929C3.35693 10.4969 3.39778 10.5966 3.47048 10.6702C3.54318 10.7437 3.64178 10.785 3.7446 10.785H5.61816C5.80269 11.8977 6.75944 12.7457 7.91196 12.7457C9.06448 12.7457 10.0212 11.8977 10.2058 10.785H17.248C17.4325 11.8977 18.3893 12.7457 19.5418 12.7457C20.6943 12.7457 21.6511 11.8977 21.8356 10.785H22.8369C23.1454 10.785 23.4412 10.6611 23.6593 10.4405C23.8774 10.2199 23.9999 9.92065 23.9999 9.60865V7.99543L23.99 7.95191C23.7431 6.86983 22.5791 5.52855 18.9239 5.11407C18.8217 5.02859 18.7215 4.9435 18.6227 4.85978C17.9828 4.31766 17.3942 3.81887 16.6766 3.45047C15.7966 2.99893 14.7391 2.7464 13.1454 2.7464H4.22917ZM17.9912 10.3929C17.9912 9.97691 18.1545 9.57795 18.4453 9.2838C18.7361 8.98965 19.1306 8.82439 19.5418 8.82439C19.9531 8.82439 20.3475 8.98965 20.6383 9.2838C20.9291 9.57795 21.0925 9.97691 21.0925 10.3929C21.0925 10.8089 20.9291 11.2079 20.6383 11.502C20.3475 11.7962 19.9531 11.9614 19.5418 11.9614C19.1306 11.9614 18.7361 11.7962 18.4453 11.502C18.1545 11.2079 17.9912 10.8089 17.9912 10.3929ZM7.91196 8.82439C7.5007 8.82439 7.10629 8.98965 6.81549 9.2838C6.52468 9.57795 6.36131 9.97691 6.36131 10.3929C6.36131 10.8089 6.52468 11.2079 6.81549 11.502C7.10629 11.7962 7.5007 11.9614 7.91196 11.9614C8.32322 11.9614 8.71763 11.7962 9.00843 11.502C9.29923 11.2079 9.46261 10.8089 9.46261 10.3929C9.46261 9.97691 9.29923 9.57795 9.00843 9.2838C8.71763 8.98965 8.32322 8.82439 7.91196 8.82439Z">
                                    </path>
                                    <path
                                        d="M0 5.09873C0 4.99473 0.0408428 4.89499 0.113543 4.82146C0.186244 4.74792 0.284847 4.7066 0.387662 4.7066H4.74886C4.85167 4.7066 4.95027 4.74792 5.02297 4.82146C5.09567 4.89499 5.13652 4.99473 5.13652 5.09873C5.13652 5.20273 5.09567 5.30247 5.02297 5.37601C4.95027 5.44955 4.85167 5.49086 4.74886 5.49086H0.387662C0.284847 5.49086 0.186244 5.44955 0.113543 5.37601C0.0408428 5.30247 0 5.20273 0 5.09873ZM15.6836 5.60575C15.7563 5.67929 15.7971 5.77901 15.7971 5.88299C15.7971 5.98697 15.7563 6.08669 15.6836 6.16022L15.6532 6.19101C15.2897 6.55865 14.7968 6.76522 14.2828 6.76528H8.14089C8.03808 6.76528 7.93948 6.72397 7.86678 6.65043C7.79408 6.57689 7.75323 6.47715 7.75323 6.37315C7.75323 6.26915 7.79408 6.16941 7.86678 6.09587C7.93948 6.02234 8.03808 5.98102 8.14089 5.98102H14.2826C14.4354 5.98104 14.5866 5.95063 14.7277 5.89152C14.8688 5.83241 14.997 5.74577 15.105 5.63654L15.1355 5.60575C15.2082 5.53224 15.3068 5.49094 15.4096 5.49094C15.5123 5.49094 15.6109 5.53224 15.6836 5.60575ZM8.52856 14.6079C8.52856 14.5039 8.5694 14.4041 8.6421 14.3306C8.7148 14.257 8.8134 14.2157 8.91622 14.2157H10.5638C10.6666 14.2157 10.7652 14.257 10.8379 14.3306C10.9106 14.4041 10.9514 14.5039 10.9514 14.6079C10.9514 14.7118 10.9106 14.8116 10.8379 14.8851C10.7652 14.9587 10.6666 15 10.5638 15H8.91622C8.8134 15 8.7148 14.9587 8.6421 14.8851C8.5694 14.8116 8.52856 14.7118 8.52856 14.6079ZM11.2422 14.6079C11.2422 14.5039 11.283 14.4041 11.3557 14.3306C11.4284 14.257 11.527 14.2157 11.6298 14.2157H15.991C16.0939 14.2157 16.1925 14.257 16.2652 14.3306C16.3379 14.4041 16.3787 14.5039 16.3787 14.6079C16.3787 14.7118 16.3379 14.8116 16.2652 14.8851C16.1925 14.9587 16.0939 15 15.991 15H11.6298C11.527 15 11.4284 14.9587 11.3557 14.8851C11.283 14.8116 11.2422 14.7118 11.2422 14.6079Z">
                                    </path>
                                </svg>
                                Call Now: {{ $phoneLabel }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex justify-content-lg-end">
                    <div class="banner-img-group">
                        <div class="top-img-group">
                            <div class="top-left-card">
                                <div class="icon">
                                    <img src="/frontend/assets/img/home6/icon/banner-icon.svg" alt="">
                                </div>
                                <div class="content">
                                    <h4>50,000+</h4>
                                    <span>Tested Parts</span>
                                </div>
                            </div>
                            <div class="top-right-img">
                                <img src="/frontend/assets/engine.webp" alt="Car Engine Replacement">
                            </div>
                        </div>

                        <div class="bottom-img-group">
                            <div class="bottom-left-img">
                                <img src="/frontend/assets/transmission.jpeg" alt="Car Transmission Parts">
                            </div>
                            <div class="bottom-right-img">
                                <img src="/frontend/assets/car-ac.jpg" alt="Car AC Compressor & Suspension">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home6 Banner section -->

    <!-- ==========================================
     BUY SPARE PART - TRUST STATS + HOW IT WORKS
     ========================================== -->

<section class="bcp-works" aria-labelledby="bcpWorksTitle">
    <div class="bcp-works-card">

        <!-- ========== TRUST STATS ========== -->
        <div class="bcp-stats">

            <div class="bcp-stat">
                <div class="bcp-stars" aria-label="5 out of 5 stars">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <strong>10,000+</strong>
                <span>Happy Customers</span>
            </div>

            <div class="bcp-stat">
                <strong>4.9 <svg class="bcp-inline-star" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></strong>
                <span>Average Rating</span>
            </div>

            <div class="bcp-stat">
                <strong>43H</strong>
                <span>Quick Dispatch</span>
            </div>

            <div class="bcp-stat">
                <strong>USA</strong>
                <span>Nationwide Shipping</span>
            </div>
        </div>

        <p class="bcp-lead">
            Trusted nationwide for high-quality OEM auto parts, VIN verified compatibility, and fast shipping across the USA.
        </p>

        <!-- ========== HOW IT WORKS ========== -->
        <div class="bcp-box">

            <h2 class="bcp-box-title" id="bcpWorksTitle">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                     stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5m-6 6 6-6 6 6"/></svg>
                HOW IT WORKS
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                     stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5m-6 6 6-6 6 6"/></svg>
            </h2>

            <div class="bcp-steps">

                <!-- Step 1 -->
                <div class="bcp-step">
                    <div class="bcp-step-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.36 11.36 0 003.56.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.56 1 1 0 01-.25 1.02z"/>
                        </svg>
                        <span class="bcp-num">1</span>
                    </div>
                    <div class="bcp-step-text">
                        <h3>Call Us</h3>
                        <p>Call <a href="tel:+18888552919">+1 (888) 855-2919</a> and speak with our parts specialist.</p>
                    </div>
                    <svg class="bcp-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </div>

                <!-- Step 2 -->
                <div class="bcp-step">
                    <div class="bcp-step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="5" y="4" width="14" height="17" rx="2.5"/>
                            <path d="M9 4V3h6v1M9 13l2.2 2.2L15.5 11"/>
                        </svg>
                        <span class="bcp-num">2</span>
                    </div>
                    <div class="bcp-step-text">
                        <h3>VIN Verification</h3>
                        <p>We verify your car's VIN for compatibility and check nationwide inventory.</p>
                    </div>
                    <svg class="bcp-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </div>

                <!-- Step 3 -->
                <div class="bcp-step">
                    <div class="bcp-step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="10.5" cy="10.5" r="6.5"/>
                            <path d="m20 20-4.9-4.9"/>
                        </svg>
                        <span class="bcp-num">3</span>
                    </div>
                    <div class="bcp-step-text">
                        <h3>Find The Best Match</h3>
                        <p>We match the right OEM or aftermarket part at the best price for your vehicle.</p>
                    </div>
                    <svg class="bcp-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </div>

                <!-- Step 4 -->
                <div class="bcp-step">
                    <div class="bcp-step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M2 6h11v10H2zM13 9h4.5l3.5 3.5V16h-8"/>
                            <circle cx="7" cy="17.5" r="2" fill="currentColor"/>
                            <circle cx="17" cy="17.5" r="2" fill="currentColor"/>
                        </svg>
                        <span class="bcp-num">4</span>
                    </div>
                    <div class="bcp-step-text">
                        <h3>Fast Delivery</h3>
                        <p>Your part is dispatched quickly and shipped to your door anywhere in the USA.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- ========== BOTTOM CALL BAR ========== -->
        <div class="bcp-bar">
            <div class="bcp-bar-left">
                
                <div>
                    <strong>Quality Parts. Trusted Service.</strong>
                    <span>Call us today: <a href="tel:+18888552919">+1 (888) 855-2919</a></span>
                </div>
            </div>

            <a href="tel:+18888552919" class="bcp-call-btn">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.36 11.36 0 003.56.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.56 1 1 0 01-.25 1.02z"/>
                </svg>
                Call Now
            </a>
        </div>

    </div>
</section>


<style>
/* ==========================================
   BRAND TOKENS (same palette as your popup)
   ========================================== */
.bcp-works {
    --bcp-navy: #172554;
    --bcp-blue: #ff5900;
    --bcp-blue-dark: #ff5900;
    --bcp-blue-soft: #eef4ff;
    --bcp-blue-line: #dbe7ff;
    --bcp-green: #059669;
    --bcp-green-soft: #d1fae5;
    --bcp-text: #64748b;

    padding: 24px 16px;
    font-family: inherit;
}
.bcp-works *,
.bcp-works *::before,
.bcp-works *::after {
    box-sizing: border-box;
}

.bcp-works-card {
    max-width: 1200px;
    margin: 0 auto;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid var(--bcp-blue-line);
    border-radius: 24px;
    box-shadow: 0 18px 50px rgba(23, 37, 84, 0.08);
}

/* ==========================================
   1. TRUST STATS
   ========================================== */
.bcp-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    padding: 32px 32px 0;
}

.bcp-stat {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 4px;
    min-height: 118px;
    padding: 16px 10px;
    text-align: center;
    background: linear-gradient(180deg, #f8faff 0%, var(--bcp-blue-soft) 100%);
    border: 1px solid var(--bcp-blue-line);
    border-radius: 18px;
    transition: transform .25s ease, box-shadow .25s ease;
}
.bcp-stat:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 26px rgba(37, 99, 235, 0.12);
}
.bcp-stat strong {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: var(--bcp-blue);
    font-size: clamp(26px, 3.2vw, 36px);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -.5px;
}
.bcp-stat span {
    color: var(--bcp-text);
    font-size: 14px;
    font-weight: 500;
    line-height: 1.3;
}

.bcp-stars {
    display: flex;
    gap: 3px;
    margin-bottom: 2px;
}
.bcp-stars svg,
.bcp-inline-star {
    fill: var(--bcp-blue);
}
.bcp-stars svg { width: 16px; height: 16px; }
.bcp-inline-star { width: .75em; height: .75em; }

.bcp-lead {
    max-width: 760px;
    margin: 24px auto 0;
    padding: 0 24px;
    color: var(--bcp-navy);
    font-size: 16px;
    line-height: 1.65;
    text-align: center;
}

/* ==========================================
   2. HOW IT WORKS
   ========================================== */
.bcp-box {
    position: relative;
    margin: 44px 32px 32px;
    padding: 52px 24px 30px;
    background: #ffffff;
    border: 1px solid var(--bcp-blue-line);
    border-radius: 22px;
}

.bcp-box-title {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0;
    padding: 0 16px;
    background: #ffffff;
    color: var(--bcp-navy);
    font-size: clamp(20px, 2.8vw, 30px);
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: .3px;
    white-space: nowrap;
}
.bcp-box-title svg {
    width: 16px;
    height: 16px;
    color: var(--bcp-blue);
}

.bcp-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 28px;
}

.bcp-step {
    position: relative;
    display: flex;
    align-items: flex-start;
    gap: 14px;
}

.bcp-step-icon {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 58px;
    height: 58px;
    border-radius: 18px;
    background: var(--bcp-blue-soft);
    border: 1px solid var(--bcp-blue-line);
    color: var(--bcp-blue);
    transition: background .25s ease, color .25s ease, transform .25s ease;
}
.bcp-step-icon > svg {
    width: 26px;
    height: 26px;
}
.bcp-step:hover .bcp-step-icon {
    background: var(--bcp-blue);
    color: #ffffff;
    transform: translateY(-3px);
}

.bcp-num {
    position: absolute;
    top: -8px;
    left: -8px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: var(--bcp-navy);
    border: 2px solid #ffffff;
    color: #ffffff;
    font-size: 12px;
    font-weight: 800;
    line-height: 1;
}

.bcp-step-text {
    min-width: 0;
    padding-right: 22px;
}
.bcp-step-text h3 {
    margin: 2px 0 6px;
    color: var(--bcp-navy);
    font-size: 16px;
    font-weight: 800;
    line-height: 1.25;
    text-transform: uppercase;
    letter-spacing: .2px;
}
.bcp-step-text p {
    margin: 0;
    color: var(--bcp-text);
    font-size: 13.5px;
    line-height: 1.6;
}
.bcp-step-text p a {
    color: var(--bcp-blue);
    font-weight: 700;
    text-decoration: none;
    white-space: nowrap;
}
.bcp-step-text p a:hover {
    text-decoration: underline;
}

.bcp-arrow {
    position: absolute;
    top: 18px;
    right: -22px;
    width: 18px;
    height: 18px;
    color: #94a3b8;
}

/* ==========================================
   3. BOTTOM CALL BAR
   ========================================== */
.bcp-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 20px 32px;
    background: linear-gradient(135deg, #543017ff 0%, #8a391eff 55%, #ff5900 100%);
    color: #ffffff;
}
.bcp-bar-left {
    display: flex;
    align-items: center;
    gap: 14px;
    min-width: 0;
}
.bcp-bar-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 46px;
    height: 46px;
    border-radius: 14px;
    background: var(--bcp-green-soft);
    color: var(--bcp-green);
}
.bcp-bar-icon svg {
    width: 24px;
    height: 24px;
}
.bcp-bar-left strong {
    display: block;
    color: #ffffff;
    font-size: clamp(16px, 2vw, 20px);
    font-weight: 800;
    line-height: 1.25;
}
.bcp-bar-left span {
    display: block;
    margin-top: 3px;
    color: #fee0bfff;
    font-size: 13px;
    line-height: 1.4;
}
.bcp-bar-left span a {
    color: #ffffff;
    font-weight: 700;
    text-decoration: none;
}

.bcp-call-btn {
    position: relative;
    overflow: hidden;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    gap: 9px;
    padding: 13px 28px;
    border-radius: 14px;
    background: #ffffff;
    color: var(--bcp-blue-dark);
    font-size: 15px;
    font-weight: 800;
    line-height: 1;
    text-decoration: none !important;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    transition: transform .2s ease, box-shadow .2s ease;
}
.bcp-call-btn svg {
    width: 17px;
    height: 17px;
    animation: bcpRing 2.2s ease-in-out infinite;
    transform-origin: 50% 50%;
}
.bcp-call-btn:hover {
    color: var(--bcp-blue-dark);
    transform: translateY(-2px);
    box-shadow: 0 12px 26px rgba(0, 0, 0, 0.28);
}

@keyframes bcpRing {
    0%, 60%, 100% { transform: rotate(0); }
    66%  { transform: rotate(-16deg); }
    74%  { transform: rotate(14deg); }
    82%  { transform: rotate(-10deg); }
    90%  { transform: rotate(6deg); }
}

/* ==========================================
   4. LAPTOP / TABLET  (2 x 2 steps)
   ========================================== */
@media (max-width: 1024px) {
    .bcp-steps {
        grid-template-columns: repeat(2, 1fr);
        gap: 34px 28px;
    }
    .bcp-arrow { display: none; }
    .bcp-step-text { padding-right: 0; }
}

@media (max-width: 820px) {
    .bcp-stats {
        grid-template-columns: repeat(2, 1fr);
        padding: 24px 20px 0;
        gap: 12px;
    }
    .bcp-box { margin: 40px 20px 24px; padding: 48px 20px 26px; }
    .bcp-bar { padding: 18px 20px; }
}

/* ==========================================
   5. MOBILE
   ========================================== */
@media (max-width: 600px) {
    .bcp-works { padding: 12px 10px; }
    .bcp-works-card { border-radius: 20px; }

    .bcp-stat { min-height: 104px; padding: 12px 8px; border-radius: 16px; }
    .bcp-stat span { font-size: 12.5px; }
    .bcp-stars svg { width: 13px; height: 13px; }

    .bcp-lead { margin-top: 18px; padding: 0 18px; font-size: 14.5px; }

    .bcp-box { margin: 36px 14px 18px; padding: 44px 16px 8px; border-radius: 18px; }
    .bcp-box-title { gap: 7px; padding: 0 10px; }
    .bcp-box-title svg { width: 13px; height: 13px; }

    .bcp-steps { grid-template-columns: 1fr; gap: 0; }
    .bcp-step {
        padding: 16px 0;
        border-bottom: 1px dashed var(--bcp-blue-line);
    }
    .bcp-step:last-child { border-bottom: 0; }
    .bcp-step-icon { width: 52px; height: 52px; border-radius: 16px; }
    .bcp-step-icon > svg { width: 23px; height: 23px; }
    .bcp-step-text h3 { font-size: 15px; }
    .bcp-step-text p { font-size: 13px; }

    .bcp-bar {
        flex-direction: column;
        align-items: stretch;
        gap: 14px;
        padding: 18px 16px;
        text-align: center;
    }
    .bcp-bar-left {
        flex-direction: column;
        gap: 10px;
    }
    .bcp-call-btn { width: 100%; padding: 15px 20px; }
}

@media (max-width: 380px) {
    .bcp-stat strong { font-size: 24px; }
    .bcp-stat span { font-size: 12px; }
    .bcp-box { margin-left: 10px; margin-right: 10px; padding-left: 12px; padding-right: 12px; }
    .bcp-box-title { font-size: 18px; }
}

@media (prefers-reduced-motion: reduce) {
    .bcp-call-btn svg { animation: none; }
    .bcp-stat,
    .bcp-step-icon,
    .bcp-call-btn { transition: none; }
}
</style>
<!-- END BUY SPARE PART HOW IT WORKS -->

    <!-- Start Product Page Section -->
    <div class="product-page py-5">
        <div class="container">
            <div class="row mb-40">
                <div class="col-lg-12">
                    <div class="show-item-and-filte">
                        <p>Showing <strong>Popular Replacement</strong> car parts</p>
                    </div>
                </div>
            </div>
            <div class="row g-xl-4 gy-5">
                <div class="col-xl-3">
                    <div class="product-sidebar">
                        <div class="product-widget mb-20">
                            <div class="check-box-item">
                                <h6 class="product-widget-title mb-20">Product Category</h6>
                                <div class="checkbox-container">
                                    <ul class="wp-block-categoris-cloud">
                                        <li><a href="/engine-parts" class="active"><span>Engine Parts</span> <span class="number-of-categoris">(15)</span></a></li>
                                        <li><a href="/transmission-parts" class="active"><span>Transmission Parts</span> <span class="number-of-categoris">(07)</span> </a></li>
                                        <li><a href="/suspension-parts" class="active"><span>Suspension Parts</span> <span class="number-of-categoris">(11)</span></a></li>
                                        <li><a href="/electrical-parts" class="active"><span>Electrical Parts</span> <span class="number-of-categoris">(12)</span></a></li>
                                        <li><a href="/exterior-parts" class="active"><span>Exterior Parts</span> <span class="number-of-categoris">(09)</span></a></li>
                                        <li><a href="/interior-parts" class="active"><span>Interior Parts</span> <span class="number-of-categoris">(07)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Contact CTA Box Start -->
                        <div class="product-widget mb-20">
                            <div class="parts-help-box">
                                <div class="parts-help-icon">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <h5>Need Help Finding a Part?</h5>
                                <p>
                                    Not sure which part fits your vehicle? Our team of specialists is here to verify exact compatibility.
                                </p>
                                <a href="tel:{{ $phone }}" class="parts-call-btn">
                                    <i class="bi bi-telephone-fill"></i>
                                    {{ $phoneLabel }}
                                </a>
                                <a href="mailto:sales@buysparepart.org" class="parts-email-btn">
                                    <i class="bi bi-envelope-fill"></i>
                                    Email Us
                                </a>
                                <div class="parts-help-note">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Guaranteed Exact Vehicle Fitment
                                </div>
                            </div>
                        </div>
                        <!-- Contact CTA Box End -->

                        <div class="product-widget">
                            <div class="check-box-item">
                                <h6 class="product-widget-title mb-20">Recent Products</h6>
                                <ul class="recent-product-list">
                                    <li class="recent-product">
                                        <div class="product-img">
                                            <a href="/interior-parts/car-steering">
                                                <img src="/frontend/assets/Main/sterring_wheel.jpg" alt="Steering Wheel Assembly">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6><a href="/interior-parts/car-steering">Replacement Steering Wheel Assembly</a></h6>
                                        </div>
                                    </li>

                                    <li class="recent-product">
                                        <div class="product-img">
                                            <a href="/suspension-parts/power-steering-pump">
                                                <img src="/frontend/assets/Main/power_steering_pump.jpg" alt="Power Steering Pump">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6><a href="/suspension-parts/power-steering-pump">Power Steering Pump Replacement</a></h6>
                                        </div>
                                    </li>

                                    <li class="recent-product">
                                        <div class="product-img">
                                            <a href="/electrical-parts/ignition-switch">
                                                <img src="/frontend/assets/Main/ignition_switch.jpg" alt="Ignition Switch">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6><a href="/electrical-parts/ignition-switch">Automotive Ignition Switch</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9">
                    <div class="row g-4 mb-40">
                        <!-- Product 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/engine-parts/car-engine">
                                        <img src="/frontend/assets/Main/engine.jpg" alt="Car Engine">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
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

                        <!-- Product 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/engine-parts/engine-mount">
                                        <img src="/frontend/assets/Main/engine-mount.jpg" alt="Engine Mount">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
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

                        <!-- Product 3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/suspension-parts/brake-caliper-rotors">
                                        <img src="/frontend/assets/Main/braker_caliper.jpg" alt="Brake Caliper & Rotors">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
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
                                    <h6><a href="/suspension-parts/brake-caliper-rotors">Brake Caliper & Rotors</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/electrical-parts/instrument-cluster">
                                        <img src="/frontend/assets/Main/car_instrument.jpg" alt="Instrument Cluster">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
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
                                    <h6><a href="/electrical-parts/instrument-cluster">Instrument Cluster</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/transmission-parts/transmission">
                                        <img src="/frontend/assets/Main/transmission.jpg" alt="Transmission">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
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
                                    <h6><a href="/transmission-parts/transmission">Transmission</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/transmission-parts/drive-shaft">
                                        <img src="/frontend/assets/Main/drive_shaft.webp" alt="Drive Shaft">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
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
                                    <h6><a href="/transmission-parts/drive-shaft">Drive Shaft</a></h6>
                                </div>
                            </div>
                        </div>

                        <!-- Product 7 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/engine-parts/cylinder-head">
                                        <img src="/frontend/assets/Main/cylinder_head.jpg" alt="Cylinder Head">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
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

                        <!-- Product 8 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/engine-parts/fuel-pump">
                                        <img src="/frontend/assets/Main/fuel_pump.jpg" alt="Fuel Pump">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
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

                        <!-- Product 9 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="shop-card2">
                                <div class="shop-img">
                                    <a href="/suspension-parts/shock-absorber">
                                        <img src="/frontend/assets/Main/shock_absorber.jpg" alt="Shock Absorber">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="cart-btn">
                                        <a class="primary-btn2" href="tel:{{ $phone }}">Enquire Now</a>
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
                                    <h6><a href="/suspension-parts/shock-absorber">Shock Absorber</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Page Section -->

    <!-- Start Why Choose section -->
    <div class="why-choose-area pt-90 pb-90 mb-100">
        <div class="container">
            <div class="row mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title-2 text-center">
                        <h2>Why Choose Buy Spare Part</h2>
                        <p>Your premier nationwide resource for tested OEM replacements, verified vehicle fitment, and transparent warranty coverage.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-50 g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="choose-card">
                        <div class="choose-top">
                            <div class="choose-icon">
                                <img src="/frontend/assets/img/home1/icon/affordable.svg" alt="">
                            </div>
                            <h5><span>Affordable</span> Pricing</h5>
                        </div>
                        <p>Save up to 60% compared to new dealership replacement costs while getting genuine OEM fit and performance.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="choose-card">
                        <div class="choose-top">
                            <div class="choose-icon">
                                <img src="/frontend/assets/img/home1/icon/guarantee.svg" alt="">
                            </div>
                            <h5>Thoroughly <span>Tested</span></h5>
                        </div>
                        <p>Every engine, transmission, pump, and electrical unit undergoes multi-point inspection before leaving our warehouse.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="choose-card">
                        <div class="choose-top">
                            <div class="choose-icon">
                                <img src="/frontend/assets/img/home1/icon/warranty.svg" alt="">
                            </div>
                            <h5>Warranty <span>Protection</span></h5>
                        </div>
                        <p>We stand behind the durability of our parts with warranty coverage and dedicated after-sale specialist support.</p>
                    </div>
                </div>
            </div>
            <div class="our-activetis">
                <div class="row justify-content-center g-lg-4 gy-5">
                    <div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-lg-start justify-content-sm-center wow fadeInUp" data-wow-delay="200ms">
                        <div class="single-activiti">
                            <div class="icon">
                                <img src="/frontend/assets/img/home1/icon/av-car.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">50</h5>
                                    <span>K+</span>
                                </div>
                                <p>Parts In Stock</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-sm-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="single-activiti">
                            <div class="icon">
                                <img src="/frontend/assets/img/home1/icon/sold-car.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">40</h5>
                                    <span>K+</span>
                                </div>
                                <p>Orders Shipped</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-sm-6 divider d-flex justify-content-sm-center wow fadeInUp" data-wow-delay="400ms">
                        <div class="single-activiti">
                            <div class="icon">
                                <img src="/frontend/assets/img/home1/icon/use-car.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">200</h5>
                                    <span>+</span>
                                </div>
                                <p>Makes & Models</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-sm-6 d-flex justify-content-lg-end justify-content-sm-center wow fadeInUp" data-wow-delay="500ms">
                        <div class="single-activiti">
                            <div class="icon">
                                <img src="/frontend/assets/img/home1/icon/happy-customar.svg" alt="">
                            </div>
                            <div class="content">
                                <div class="number">
                                    <h5 class="counter">98.5</h5>
                                    <span>%</span>
                                </div>
                                <p>Customer Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- End Why Choose section -->

    <!-- Start Brands Section -->
    <div class="toprated-used-cars mb-100" id="brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h4 class="text-center">Explore Car Parts by Brand</h4>
                    </div>
                    <div class="brand-list mt-10">
                        <ul>
                            <li><a href="/acura-parts">Acura Parts</a></li>
                            <li><a href="/audi-parts">Audi Parts</a></li>
                            <li><a href="/bmw-parts">BMW Parts</a></li>
                            <li><a href="/chevrolet-parts">Chevrolet Parts</a></li>
                            <li><a href="/dodge-parts">Dodge Parts</a></li>
                            <li><a href="/ford-parts">Ford Parts</a></li>
                            <li><a href="/gmc-parts">GMC Parts</a></li>
                            <li><a href="/honda-parts">Honda Parts</a></li>
                            <li><a href="/hyundai-parts">Hyundai Parts</a></li>
                            <li><a href="/infiniti-parts">Infiniti Parts</a></li>
                            <li><a href="/jeep-parts">Jeep Parts</a></li>
                            <li><a href="/kia-parts">Kia Parts</a></li>
                            <li><a href="/lexus-parts">Lexus Parts</a></li>
                            <li><a href="/mazda-parts">Mazda Parts</a></li>
                            <li><a href="/mercedes-benz-parts">Mercedes-Benz Parts</a></li>
                            <li><a href="/nissan-parts">Nissan Parts</a></li>
                            <li><a href="/subaru-parts">Subaru Parts</a></li>
                            <li><a href="/tesla-parts">Tesla Parts</a></li>
                            <li><a href="/toyota-parts">Toyota Parts</a></li>
                            <li><a href="/volkswagen-parts">Volkswagen Parts</a></li>
                            <li><a href="/volvo-parts">Volvo Parts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brands Section -->

    <!-- Start Fitment Assistance Banner Section -->
    <div class="recommended-car-section">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-lg-8 d-flex align-items-lg-end justify-content-center">
                    <div class="recommended-left">
                        <div class="section-title1 wow fadeInUp" data-wow-delay="200ms">
                            <span>Expert Fitment Assistance</span>
                            <h2>Not Sure Which Part Fits Your Vehicle?</h2>
                        </div>
                        <div class="think-img wow zoomIn" data-wow-delay="400ms">
                            <img src="/frontend/assets/img/home1/recommended-img.png" alt="Auto Parts Specialist Assistance">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-lg-end justify-content-center">
                    <div class="recommended-right wow fadeInUp" data-wow-delay="300ms">
                        <p>Share your vehicle's VIN, engine size, and year with our specialists. We'll cross-reference OEM parts catalogs to find your exact match in minutes.</p>
                        <a class="primary-btn2" href="tel:{{ $phone }}">Call An Expert: {{ $phoneLabel }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fitment Assistance Banner Section -->

    <!-- Start Testimonial Section -->
    <div class="customar-feedback-area style-2 py-5">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <h2>What Our Customers Are Saying</h2>
                        <p>Verified reviews from vehicle owners, mechanics, and auto repair shops nationwide.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-100">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                    <div class="customer-feedback-left">
                        <a href="tel:{{ $phone }}" class="trustpilot">
                            <h5>Excellent!</h5>
                            
                            <img class="star" src="/frontend/assets/img/home1/icon/trustpilot-star3.svg" alt="">
                        </a>
                        <a href="tel:{{ $phone }}" class="google">
                            <img class="logo" src="/frontend/assets/logo.png" alt="">
                            <div class="star">
                                <ul>
                                    <li class="active"><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li class=""><i class="bi bi-star-half"></i></li>
                                </ul>
                            </div>
                            <span>Call Now: +1 (888) 855-2919</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="200ms">
                    <div class="customer-feedback-right">
                        <div class="swiper customer-feedback-slider mb-40">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Engine Runs Like New!</span>
                                            </div>
                                            <!-- <div class="logo">
                                                <img src="/frontend/assets/img/home1/icon/google3.svg" alt="">
                                            </div> -->
                                        </div>
                                        <p>"Ordered a replacement engine for my Silverado. Delivery was swift, compression tested high across all cylinders, and installation went smoothly. Saved over $2,000!"</p>
                                        <div class="author-name">
                                            <h6>David Miller</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                 <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Flawless Transmission</span>
                                            </div>
                                             <!-- <div class="logo">
                                                <img src="/frontend/assets/img/home1/icon/google3.svg" alt="">
                                            </div> -->
                                        </div>
                                        <p>"The transmission arrived right on schedule. Exact VIN match, clean fluid channels, and shifts like factory new. Their phone support was remarkably helpful."</p>
                                        <div class="author-name">
                                            <h6>Marcus Turner</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <div class="star">
                                                    <ul>
                                                        <li class="active"><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li class=""><i class="bi bi-star-half"></i></li>
                                                    </ul>
                                                </div>
                                                <span>Great Fit & Savings</span>
                                            </div>
                                            <!-- <div class="logo">
                                                <img src="/frontend/assets/img/home1/icon/google3.svg" alt="">
                                            </div> -->
                                        </div>
                                        <p>"Needed an OEM power steering pump and suspension control arms. The parts arrived clean, intact, and worked perfectly. Excellent value for money!"</p>
                                        <div class="author-name">
                                            <h6>Robert Jenkins</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="feedback-card">
                                        <div class="feedback-top">
                                            <div class="stat-area">
                                                <!-- <img src="/frontend/assets/img/home1/icon/trustpilot-star.svg" alt=""> -->
                                                <span>Verified Fitment</span>
                                            </div>
                                            <!-- <div class="logo">
                                                <img src="/frontend/assets/img/home1/icon/trustpilot-log3.svg" alt="">
                                            </div> -->
                                        </div>
                                        <p>"Called their team before ordering to verify my vehicle trim. They confirmed the exact part number within 2 minutes. Fast shipping and solid warranty coverage."</p>
                                        <div class="author-name">
                                            <h6>Amanda Cooper</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 divider">
                                <div class="slider-btn-group style-2 justify-content-md-between justify-content-center">
                                    <div class="slider-btn prev-4 d-md-flex d-none">
                                        <svg width="11" height="19" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 6.50008L8 0L2.90909 6.50008L8 13L0 6.50008Z"></path>
                                        </svg>
                                    </div>
                                    <div class="view-btn-area">
                                        <p>Thousands of 5-Star Reviews Nationwide</p>
                                        <a class="view-btn" href="tel:{{ $phone }}">Call For Part Quotes</a>
                                    </div>
                                    <div class="slider-btn next-4 d-md-flex d-none">
                                        <svg width="11" height="19" viewBox="0 0 8 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 6.50008L0 0L5.09091 6.50008L0 13L8 6.50008Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Section -->

    <!-- Start Blog / Auto Advice Section -->
    <div class="news-section five six pb-90 pt-90">
        <div class="container">
            <div class="row mb-60 wow fadeInUp" data-wow-delay="200ms">
                <div class="col-lg-12 d-flex align-items-end justify-content-between flex-wrap gap-4">
                    <div class="section-title-2">
                        <h2>Auto Maintenance & Parts Advice</h2>
                        <p>Helpful tips, fitment guides, and maintenance insights from our automotive experts.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-card style-2 dark">
                        <div class="news-img">
                            <a href="/engine-parts"><img src="/frontend/assets/rack-1.jpg" alt="Engine and Transmission Compatibility Guide"></a>
                        </div>
                        <div class="content">
                            <h6><a href="/engine-parts">How to Verify Engine & Transmission Compatibility by VIN</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-card style-2 dark">
                        <div class="news-img">
                            <a href="/suspension-parts"><img src="/frontend/assets/rack-2.webp" alt="Signs of Worn Steering and Suspension"></a>
                        </div>
                        <div class="content">
                            <h6><a href="/suspension-parts">Top Signs Your Suspension & Steering Rack Need Replacement</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-card style-2 dark">
                        <div class="news-img">
                            <a href="/electrical-parts"><img src="/frontend/assets/rack-3.jpg" alt="Choosing Quality Tested OEM Auto Parts"></a>
                        </div>
                        <div class="content">
                            <h6><a href="/electrical-parts">OEM vs Aftermarket Used Parts: Maximizing Longevity & Savings</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog / Auto Advice Section -->
@endsection