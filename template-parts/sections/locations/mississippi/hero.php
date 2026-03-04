<?php
/**
 * Hero Section for Mississippi SEO
 */
?>
<style>
    .slug-mississippi {
        --brand-red: #BF0A30;
        --brand-navy: #01040f;
        --brand-blue: #002868;
        --brand-light: #f1f5f9;
        --brand-gray: #e2e8f0;
        --font-heading: 'Poppins', sans-serif;
        --font-body: 'Inter', sans-serif;
    }

    .section-padding { padding: 100px 0; }
    .bg-dark-ms { background: var(--brand-navy); color: white; }
    .bg-light-ms { background: var(--brand-light); }
    .text-brand-red { color: var(--brand-red); }

    /* Hero */
    .ms-hero {
        background: radial-gradient(circle at 70% 30%, #1e3a8a 0%, #01040f 70%), url('<?php echo SEO_SPECIALIST_URI; ?>/assets/images/backgrounds/pattern-hero.png');
        background-blend-mode: overlay;
        color: white;
        padding: 160px 0 120px;
        position: relative;
    }
    .hero-title {
        font-size: 3.5rem;
        background: linear-gradient(135deg, #ffffff 0%, #cbd5e1 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 24px;
        font-weight: 800;
        line-height: 1.1;
    }
    
    /* Responsive Cards */
    .ms-card {
        background: white;
        padding: 35px;
        border-radius: 20px;
        border: 1px solid #e2e8f0;
        height: 100%;
        transition: all 0.3s ease;
    }
    .ms-card:hover { 
        transform: translateY(-8px); 
        border-color: var(--brand-red); 
        box-shadow: 0 20px 40px rgba(0,0,0,0.06); 
    }

    .ms-badge {
        background: rgba(191, 10, 48, 0.1);
        color: var(--brand-red);
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 700;
        display: inline-block;
        margin-bottom: 20px;
        letter-spacing: 1px;
    }

    /* Table styles */
    .ms-timeline-wrapper {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        box-shadow: 0 15px 35px rgba(0,0,0,0.05);
    }
    .ms-timeline-table thead { background: var(--brand-navy); color: white; }

    @media(max-width:991px) {
        .ms-hero { text-align: center; }
        .hero-title { font-size: 2.75rem; }
    }
</style>

<section class="ms-hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7 text-start">
                <span class="ms-badge text-uppercase">Partnering for Growth</span>
                <h1 class="hero-title">SEO Services in Mississippi | SEO Specialist USA</h1>
                <p class="fs-5 text-light opacity-75 mb-4" style="font-weight: 300;">Mississippi businesses need strong online visibility to compete in today's digital marketplace. If you're searching for SEO services in Mississippi, you've found a partner that understands local market dynamics. Most companies struggle to appear in Google's top results, losing potential customers to competitors who've invested in strategic optimization. SEO Specialist USA helps Mississippi businesses dominate search results, drive qualified traffic, and convert visitors into paying customers.</p>
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
                    'button_text' => 'Get My Assessment',
                    'class'       => 'ms-hero-form'
                ));
                ?>
            </div>
        </div>
    </div>
</section>
