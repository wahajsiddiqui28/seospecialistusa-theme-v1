<?php
/**
 * Hero Section for SEO Content Creation
 */
?>



<style>
    /* Page Specific Styles */
    .seo-content-page {
        font-family: 'Poppins', sans-serif;
        color: #333;
    }
    
    .seo-content-page h1, .seo-content-page h2, .seo-content-page h3 {
        font-weight: 700;
        line-height: 1.2;
    }

    /* Hero Section */
    .seo-hero {
        background-color: #002868;
        background-image: 
            radial-gradient(at 0% 0%, hsla(217,100%,30%,1) 0, transparent 50%), 
            radial-gradient(at 100% 100%, hsla(342,92%,36%,1) 0, transparent 50%),
            url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        padding: 180px 0 140px;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .seo-hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 25px;
        color: #fff;
        backdrop-filter: blur(5px);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .seo-hero-title {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 25px;
        color: #ffffff;
        line-height: 1.1;
        text-shadow: 0 10px 30px rgba(0,0,0,0.3);
    }

    .seo-hero-lead {
        font-size: 1.25rem;
        font-weight: 300;
        opacity: 0.9;
        margin-bottom: 40px;
        line-height: 1.7;
        max-width: 600px;
    }

    .hero-image-container {
        position: relative;
        z-index: 2;
    }

    .hero-main-img {
        border-radius: 20px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transform: perspective(1000px) rotateY(-5deg);
        transition: transform 0.5s ease;
    }

    .hero-image-container:hover .hero-main-img {
        transform: perspective(1000px) rotateY(0deg);
    }

    .hero-floating-card {
        position: absolute;
        background: white;
        padding: 15px 25px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        gap: 15px;
        z-index: 3;
        animation: float 6s ease-in-out infinite;
    }

    .card-top-right {
        top: -30px;
        right: -20px;
    }

    .card-bottom-left {
        bottom: -30px;
        left: -30px;
        animation-delay: 2s;
    }

    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    .hero-stat-icon {
        width: 40px;
        height: 40px;
        background: #BF0A30;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    @media (max-width: 991px) {
        .seo-hero { padding: 140px 0 80px; text-align: center; }
        .hero-image-container { margin-top: 60px; }
        .hero-main-img { transform: none; }
        .seo-hero-lead { margin-left: auto; margin-right: auto; }
        .seo-hero-title { font-size: 2.5rem; }
    }


    /* Global Section Styles */
    .section-padding {
        padding: 100px 0;
    }

    .section-image-wrapper {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        margin-bottom: 30px;
    }

    .section-image-wrapper img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }

    .section-image-wrapper:hover img {
        transform: scale(1.03);
    }

    @media (max-width: 991px) {
        .section-padding { padding: 60px 0; }
        .section-image-wrapper { margin-bottom: 40px; }
    }

    /* Value Proposition Section */
    .value-prop-section {
        background-color: #fff;
        position: relative;
        overflow: hidden;
    }
    
    .value-prop-section::before {
        content: '';
        position: absolute;
        right: 0;
        bottom: 0;
        width: 35%;
        height: 100%;
        background: #f8f9fa;
        z-index: 0;
        clip-path: polygon(15% 0%, 100% 0, 100% 100%, 0% 100%);
    }

    .value-content-wrapper {
        position: relative;
        z-index: 1;
        padding-left: 30px;
    }

    .value-heading-line {
        width: 70px;
        height: 5px;
        background: #BF0A30;
        margin-bottom: 25px;
        border-radius: 10px;
    }
    
    .value-image-container {
        position: relative;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 30px 60px rgba(0,0,0,0.12);
    }
    
    .value-image-container img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.7s ease;
    }
    
    .value-image-container:hover img {
        transform: scale(1.05);
    }
    
    .floating-quote-card {
        position: absolute;
        bottom: 40px;
        right: -30px;
        background: white;
        padding: 25px;
        border-radius: 16px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        max-width: 260px;
        border-left: 5px solid #BF0A30;
        animation: float-card 5s ease-in-out infinite;
    }
    
    @keyframes float-card {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
    
    @media(max-width:991px) {
        .value-prop-section::before { display: none; }
        .value-content-wrapper { padding-left: 0; margin-top: 40px; }
        .floating-quote-card { position: relative; bottom: auto; right: auto; margin: -30px auto 0;  }
    }

    /* Process Steps */
    /* Process Section Premium */
    /* Process Section Premium Refined */
    .process-section-premium {
        background-color: #002868;
        position: relative;
        padding: 100px 0;
        color: white;
        overflow: hidden;
    }
    
    .process-card-dark {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-top: 4px solid rgba(255, 255, 255, 0.1);
        padding: 40px;
        border-radius: 12px;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .process-card-dark:hover {
        transform: translateY(-8px);
        background: rgba(255, 255, 255, 0.06);
        border-top-color: #BF0A30;
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
    
    .process-number {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 5rem;
        font-weight: 900;
        color: rgba(255,255,255,0.03);
        line-height: 1;
        pointer-events: none;
    }

    .process-icon-circle {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #BF0A30 0%, #a6092a 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.75rem;
        color: white;
        margin-bottom: 25px;
        box-shadow: 0 10px 20px rgba(191, 10, 48, 0.3);
        transition: transform 0.4s ease;
    }

    .process-card-dark:hover .process-icon-circle {
        transform: scale(1.1) rotate(5deg);
    }
    
    .process-title-dark {
        color: white;
        font-weight: 700;
        margin-bottom: 1.25rem;
        font-size: 1.5rem;
        position: relative;
        z-index: 2;
    }
    
    .process-text-dark {
        color: #e2e8f0;
        font-size: 1.05rem;
        line-height: 1.7;
        position: relative;
        z-index: 2;
    }

    /* Industry Section Refined */
    .industry-section {
        background-color: #0b1120; /* Very dark blue/black */
        color: white;
        position: relative;
        padding: 100px 0;
    }

    .industry-heading {
        color: white;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 2rem;
    }

    .industry-card-modern {
        background: #1e293b; /* Lighter slate blue */
        border: 1px solid #334155;
        padding: 40px;
        border-radius: 20px;
        height: 100%;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .industry-card-modern:hover {
        transform: translateY(-5px);
        border-color: #BF0A30;
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    }
    
    .industry-icon {
        font-size: 2.5rem;
        color: #BF0A30;
        margin-bottom: 25px;
    }
    
    .industry-title {
        color: white;
        font-weight: 700;
        font-size: 1.35rem;
        margin-bottom: 15px;
    }
    
    .industry-text {
        color: #94a3b8; /* Slate gray text */
        line-height: 1.7;
        font-size: 0.95rem;
        margin-bottom: 0;
    }

    /* CTA Section */
    .cta-box-premium {
        background: white;
        border-radius: 24px;
        padding: 80px 60px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 30px 60px rgba(0,0,0,0.08);
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .cta-box-premium::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 8px;
        background: linear-gradient(90deg, #002868 0%, #BF0A30 100%);
    }

    /* FAQ */
    .accordion-button {
        font-weight: 600;
        color: #002868;
        background-color: white;
        padding: 24px 30px;
        border-radius: 12px !important;
        font-size: 1.1rem;
    }
    
    .accordion-button:not(.collapsed) {
        color: #BF0A30;
        background-color: rgba(191, 10, 48, 0.04);
        box-shadow: none;
    }
    
    .accordion-item {
        border: 1px solid #eee;
        border-radius: 12px !important;
        margin-bottom: 15px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
    }

    .accordion-body {
        padding: 30px;
        font-size: 1.05rem;
        line-height: 1.8;
    }

    /* Buttons */
    .btn-custom-red {
        background-color: #BF0A30;
        color: white;
        padding: 16px 45px;
        border-radius: 8px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        border: 2px solid #BF0A30;
        box-shadow: 0 10px 20px rgba(191, 10, 48, 0.2);
    }

    .btn-custom-red:hover {
        background-color: #a00828;
        border-color: #a00828;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(191, 10, 48, 0.3);
    }

    .btn-custom-white {
        background-color: white;
        color: #002868;
        padding: 16px 45px;
        border-radius: 8px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-custom-white:hover {
        background-color: #f8f9fa;
        color: #002868;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .seo-hero-title { font-size: 2.5rem; }
        .cta-box-premium { padding: 50px 30px; }
        .value-card { padding: 30px; }
    }
</style>
<section class="seo-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 seo-hero-content">
                <span class="hero-badge"><i class="fas fa-check-circle me-2"></i> Premium SEO Services</span>
                <h1 class="seo-hero-title"><?php esc_html_e('SEO Content Creation Services', 'seospecialistusa'); ?></h1>
                <p class="seo-hero-lead"><?php esc_html_e('SEO content creation services that deliver results start with strategy, not random blog posts. Most business content fails because it\'s written without understanding search intent, E-E-A-T standards, and what Google\'s algorithms demand.', 'seospecialistusa'); ?></p>
                <p class="seo-hero-lead"><?php esc_html_e('SEO Specialist USA solves this problem by engineering content that turns organic traffic into revenue, not just rankings into vanity metrics. We build content strategies designed for USA businesses that refuse to settle for page two results.', 'seospecialistusa'); ?></p>
                <div class="mt-4 d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-custom-red"><?php esc_html_e('Get a Free Audit', 'seospecialistusa'); ?></a>
                    <a href="#faqAccordion" class="btn-custom-white border-0 bg-transparent text-white border border-light"><?php esc_html_e('Learn More', 'seospecialistusa'); ?></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image-container">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop" alt="SEO Dashboard" class="img-fluid hero-main-img" loading="lazy">
                    
                    <!-- Floating Element 1 -->
                    <div class="hero-floating-card card-top-right">
                        <div class="hero-stat-icon"><i class="fas fa-chart-line"></i></div>
                        <div>
                            <div class="fw-bold text-dark small">Organic Traffic</div>
                            <div class="text-success fw-bold">+145%</div>
                        </div>
                    </div>

                    <!-- Floating Element 2 -->
                    <div class="hero-floating-card card-bottom-left">
                        <div class="hero-stat-icon" style="background:#002868;"><i class="fas fa-check"></i></div>
                        <div>
                            <div class="fw-bold text-dark small">Keywords</div>
                            <div class="text-dark fw-bold">Rank #1</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
