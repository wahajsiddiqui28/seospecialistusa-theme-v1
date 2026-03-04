<?php
/**
 * Hero Section for Kansas SEO
 */
?>
<style>
    .slug-kansas {
        --brand-red: #BF0A30;
        --brand-navy: #020617;
        --brand-blue: #002868;
        --brand-light: #f8f9fa;
        --brand-gray: #cbd5e1;
        --brand-white: #ffffff;
        --font-heading: 'Poppins', sans-serif;
        --font-body: 'Inter', sans-serif;
        color: var(--brand-navy);
        overflow-x: hidden;
    }

    .section-padding { padding: 100px 0; }
    .bg-dark-kansas { background: var(--brand-navy); color: white; }
    .bg-light-kansas { background: var(--brand-light); }
    .text-brand-red { color: var(--brand-red); }

    /* Buttons */
    .btn-kansas-primary {
        background: linear-gradient(135deg, #BF0A30 0%, #990826 100%);
        color: white !important;
        padding: 16px 32px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 10px 25px rgba(191,10,48,0.3);
        display: inline-flex; align-items: center; gap: 10px;
        transition: transform 0.3s ease;
    }
    .btn-kansas-primary:hover { transform: translateY(-4px); }

    /* Hero */
    .kansas-hero {
        background: radial-gradient(circle at top right, #1e1b4b 0%, #020617 60%, #000000 100%);
        color: white;
        padding: 160px 0 120px;
        position: relative;
        overflow: hidden;
    }

    .hero-title {
        font-size: 3.5rem;
        background: linear-gradient(to right, #ffffff, #e2e8f0);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 24px;
        line-height: 1.1;
    }

    /* Cards */
    .kansas-card {
        background: white;
        padding: 40px;
        border-radius: 20px;
        border: 1px solid #e2e8f0;
        height: 100%;
        transition: transform 0.3s ease;
    }
    .kansas-card:hover { transform: translateY(-5px); border-color: var(--brand-red); box-shadow: 0 15px 30px rgba(0,0,0,0.05); }

    /* For Timeline Table */
    .timeline-table-wrapper {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0,0,0,0.05);
    }
    .timeline-table thead {
        background: var(--brand-navy);
        color: white;
    }

    /* Accordion */
    .accordion-button:not(.collapsed) { background-color: #fdf2f4; color: var(--brand-red); }
    .accordion-button:focus { box-shadow: none; border-color: rgba(0,0,0,0.125); }

    @media(max-width:991px) {
        .kansas-hero { text-align: center; }
        .hero-title { font-size: 2.5rem; }
    }
</style>

<section class="kansas-hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7 text-start">
                <span class="badge bg-brand-red px-3 py-2 rounded-pill mb-4 text-uppercase fw-bold ls-1">Market Authority in Kansas</span>
                <h1 class="hero-title fw-extrabold">SEO Services in Kansas | SEO Specialist USA</h1>
                <p class="fs-5 text-light opacity-75 mb-4" style="font-weight: 300;">Kansas businesses need strong online visibility to compete in today's digital marketplace. Professional SEO services in Kansas help companies connect with customers actively searching for their products and services throughout the state.</p>
                <p class="fs-5 text-light opacity-75 mb-4" style="font-weight: 300;">SEO Specialist USA helps Kansas businesses rank higher in search results and attract more qualified leads. We build custom strategies based on your market, competition, and business goals.</p>
                
                <div class="d-flex justify-content-start gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>
            <div class="col-lg-5">
                <?php
                get_template_part( 'template-parts/components/form', 'hero', array(
                    'button_text' => 'Get Free Analysis',
                    'class'       => 'kansas-hero-form'
                ));
                ?>
            </div>
        </div>
    </div>
</section>
