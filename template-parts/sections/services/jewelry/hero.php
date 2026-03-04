<?php
/**
 * Hero Section for Jewelry SEO
 */
?>
<style>
    .jewelry-page {
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
    .bg-dark-jewelry { background: var(--brand-navy); color: white; }
    .bg-light-jewelry { background: var(--brand-light); }
    .text-brand-red { color: var(--brand-red); }

    /* Buttons */
    .btn-jewelry-primary {
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
    .btn-jewelry-primary:hover { transform: translateY(-4px); }

    /* Hero */
    .jewelry-hero {
        background: radial-gradient(circle at top right, #1e1b4b 0%, #020617 60%, #000000 100%);
        color: white;
        padding: 60px 0;
        position: relative;
    }
    .hero-title {
        font-size: 3.5rem;
        background: linear-gradient(to right, #ffffff, #e2e8f0);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 24px;
    }

    /* Cards */
    .jewelry-card {
        background: white;
        padding: 40px;
        border-radius: 20px;
        border: 1px solid #e2e8f0;
        height: 100%;
        transition: transform 0.3s ease;
    }
    .jewelry-card:hover { transform: translateY(-5px); border-color: var(--brand-red); }

    /* Timeline */
    .process-timeline { border-left: 2px solid var(--brand-blue); padding-left: 30px; margin-left: 20px; }
    .process-step { margin-bottom: 40px; position: relative; }
    .process-step::before {
        content: ''; position: absolute; left: -39px; top: 0; width: 16px; height: 16px;
        background: var(--brand-red); border-radius: 50%; border: 2px solid white;
    }

    /* Table */
    .trends-table {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .trends-table thead {
        background: var(--brand-navy);
        color: white;
    }

    .accordion-button:not(.collapsed) { background-color: #fdf2f4; color: var(--brand-red); }
    .accordion-button:focus { box-shadow: none; border-color: rgba(0,0,0,0.125); }

    @media(max-width:991px) {
        .jewelry-hero { text-align: center; }
        .hero-title { font-size: 2.5rem; }
    }
</style>

<section class="jewelry-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="hero-title">Jewelry SEO Services Company in USA</h1>
                <p class="lead text-light mb-4" style="font-weight: 300;">Jewelry SEO services position your store on Google's first page where shoppers search for engagement rings, necklaces, and fine jewelry. Our strategies attract high-intent customers ready to make purchase decisions.</p>
                <p class="mb-5 text-white-50 mx-auto" style="max-width: 800px;">Strong search presence ensures buyers find your store when they're comparing options and ready to buy, not just browsing.</p>
                <div class="d-flex gap-3 flex-wrap">
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
                        'button_text' => 'Send',
                        'class'       => 'ai-seo-hero-form'
                    ));
                ?>
            </div>
        </div>
    </div>
</section>
