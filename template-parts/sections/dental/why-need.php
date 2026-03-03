<?php
/**
 * Dental SEO Why Need Section
 * 
 * @package seospecialistusa
 */
?>

<section class="dental-why-need py-5 bg-white border-bottom border-brand-red border-opacity-50">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why Dentists Need Professional <br> Dental SEO</h2>
                
                <p class="fs-6 text-muted mb-4 pe-lg-5">
                    Most dental practices rely on local visibility. When someone searches “dentist near me,” your clinic should be one of the first names they see, not buried beneath competitors. That’s where SEO becomes important.
                </p>

                <p class="fs-6 text-muted mb-4 pe-lg-5">
                    Our dental SEO service helps you reach people who are actively looking for treatments you offer, from teeth whitening and braces to dental implants and cleanings. With the right keywords, optimized website structure, and strong local presence, your practice can capture qualified leads right from Google Search and Maps.
                </p>

                <h5 class="fw-bold mb-4 text-brand-red">With our help, your dental clinic can:</h5>

                <ul class="dental-benefits-list list-unstyled mb-5">
                    <li class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-dot-circle text-brand-red small"></i>
                        <span class="fs-6 text-dark"><span class="fw-bold">Get found</span> in Google’s top local search results.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-dot-circle text-brand-red small"></i>
                        <span class="fs-6 text-dark"><span class="fw-bold">Generate</span> more appointment calls and form submissions.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-dot-circle text-brand-red small"></i>
                        <span class="fs-6 text-dark"><span class="fw-bold">Strengthen</span> your reputation through online reviews.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-dot-circle text-brand-red small"></i>
                        <span class="fs-6 text-dark"><span class="fw-bold">Build</span> long-term brand authority in your city.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-dot-circle text-brand-red small"></i>
                        <span class="fs-6 text-dark"><span class="fw-bold">Outperform</span> local competitors and corporate chains.</span>
                    </li>
                </ul>

                <p class="mb-4 text-dark fw-medium">Your future patients are searching right now. We make sure they find you first.</p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'dental-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Browser Mockup Slider -->
            <div class="col-lg-5 m-0">
                <div class="dental-mockup-wrapper bg-light p-3 p-lg-4 rounded-4 shadow-sm border position-relative">
                    <div class="mockup-header d-flex gap-2 mb-3 px-2">
                        <span class="dot bg-danger" style="width: 10px; height: 10px; border-radius: 50%;"></span>
                        <span class="dot bg-warning" style="width: 10px; height: 10px; border-radius: 50%;"></span>
                        <span class="dot bg-success" style="width: 10px; height: 10px; border-radius: 50%;"></span>
                    </div>

                    <div id="dentalWhyNeedSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner rounded-2 overflow-hidden shadow-sm">
                            <div class="carousel-item active" data-bs-interval="4000">
                                <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/dental-seo/image-2-1536x864.jpg.webp' ); ?>" alt="Dental SEO Visual 1" class="img-fluid w-100 object-fit-cover" style="height: 300px;">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/dental-seo/image-3-1536x1024.jpg.webp' ); ?>" alt="Dental SEO Visual 2" class="img-fluid w-100 object-fit-cover" style="height: 300px;">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/dental-seo/image-1-1536x1024.jpg.webp' ); ?>" alt="Dental SEO Visual 3" class="img-fluid w-100 object-fit-cover" style="height: 300px;">
                            </div>
                        </div>

                        <!-- Custom Indicators -->
                        <div class="carousel-indicators position-relative mt-4 mb-0">
                            <button type="button" data-bs-target="#dentalWhyNeedSlider" data-bs-slide-to="0" class="active bg-brand-red rounded-circle border-0" style="width: 12px; height: 12px; opacity: 1;" aria-current="true"></button>
                            <button type="button" data-bs-target="#dentalWhyNeedSlider" data-bs-slide-to="1" class="bg-brand-red rounded-circle border-0" style="width: 12px; height: 12px; opacity: 0.3;"></button>
                            <button type="button" data-bs-target="#dentalWhyNeedSlider" data-bs-slide-to="2" class="bg-brand-red rounded-circle border-0" style="width: 12px; height: 12px; opacity: 0.3;"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
