<?php
/**
 * Hero Section for Iowa SEO
 */
?>
<style>
    .iowa-page {
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
    .bg-dark-iowa { background: var(--brand-navy); color: white; }
    .bg-light-iowa { background: var(--brand-light); }
    .text-brand-red { color: var(--brand-red); }

    /* Buttons */
    .btn-iowa-primary {
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
    .btn-iowa-primary:hover { transform: translateY(-4px); }

    .btn-iowa-secondary {
        background: transparent;
        border: 1px solid rgba(255,255,255,0.3);
        color: white !important;
        padding: 16px 32px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        backdrop-filter: blur(5px);
        display: inline-flex; align-items: center; gap: 10px;
        transition: transform 0.3s ease;
    }
    .btn-iowa-secondary:hover { background: rgba(255,255,255,0.1); transform: translateY(-4px); }

    /* Hero */
    .iowa-hero {
        background: radial-gradient(circle at top right, #1e1b4b 0%, #020617 60%, #000000 100%);
        color: white;
        padding: 140px 0 100px;
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
    .iowa-card {
        background: white;
        padding: 40px;
        border-radius: 20px;
        border: 1px solid #e2e8f0;
        height: 100%;
        transition: transform 0.3s ease;
    }
    .iowa-card:hover { transform: translateY(-5px); border-color: var(--brand-red); }

    /* Table */
    .process-table-container {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .process-table thead {
        background: var(--brand-navy);
        color: white;
    }

    /* Accordion */
    .accordion-button:not(.collapsed) { background-color: #fdf2f4; color: var(--brand-red); }
    .accordion-button:focus { box-shadow: none; border-color: rgba(0,0,0,0.125); }

    /* Hero Form Style */
    .hero-form-container {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(15px);
        padding: 40px;
        border-radius: 24px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }
    .hero-form-container h3 {
        color: white;
        font-size: 1.5rem;
        margin-bottom: 25px;
        font-weight: 600;
    }
    .hero-form-container input, 
    .hero-form-container textarea {
        background: transparent !important;
        border: none !important;
        border-bottom: 1px solid rgba(255,255,255,0.2) !important;
        border-radius: 0 !important;
        color: white !important;
        padding: 12px 0 !important;
        width: 100%;
        transition: all 0.3s ease;
    }   
    .hero-form-container input::placeholder,
    .hero-form-container textarea::placeholder {
        color: rgba(255,255,255,0.4) !important;
    }
    .hero-form-container input:focus, 
    .hero-form-container textarea:focus {
        border-bottom-color: var(--brand-red) !important;
        outline: none !important;
    }

    .hero-form-container button[type="submit"] {
        width: 100%;
        background: linear-gradient(135deg, #BF0A30 0%, #990826 100%) !important;
        color: white !important;
        border: none !important;
        border-radius: 50px !important;
        padding: 16px 32px !important;
        font-weight: 600 !important;
        margin-top: 20px !important;
        cursor: pointer;
        transition: all 0.3s ease !important;
        box-shadow: 0 10px 20px rgba(191,10,48,0.2) !important;
    }
    .hero-form-container button[type="submit"]:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 15px 30px rgba(191,10,48,0.4) !important;
    }

    @media(max-width:991px) {
        .iowa-hero { text-align: center; padding: 100px 0 60px; }
        .hero-title { font-size: 2.5rem; }
        .hero-form-container { margin-top: 50px; text-align: left; }
    }
</style>

<section class="iowa-hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7 text-start">
                <h1 class="display-4 fw-bold text-white">SEO Services in Iowa checking</h1>
                <p class="fs-6 text-light mb-4" style="font-weight: 300;">Iowa businesses struggle to appear in Google searches when potential customers look for their services. Our SEO services in Iowa help companies rank higher in search results, attract qualified traffic, and convert online visibility into revenue. From Des Moines to Cedar Rapids, businesses compete in markets where local search visibility directly impacts growth. SEO Specialist USA delivers strategies that work for Iowa's unique business landscape, helping you dominate your market without requiring a physical office in your city.</p>
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
                    'button_text' => 'Send',
                    'class'       => 'iowa-hero-form'
                ));
                ?>
            </div>
        </div>
    </div>
</section>
