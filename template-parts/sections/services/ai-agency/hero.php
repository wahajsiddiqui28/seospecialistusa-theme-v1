<?php
/**
 * Hero Section for AI SEO Agency
 */
?>
<style>
    body{
     font-family: 'Poppins', sans-serif;
}
p,p{
     font-family: 'Poppins', sans-serif;
}
.accordion-header{
     font-family: 'Poppins', sans-serif !important;
}
    .ast-container {
        display: block !important;
        padding: 0;
    }
    :root {
        --color-brand-red: #BF0A30;
        --color-brand-blue: #002868;
        --color-brand-dark: #000000;
        --color-brand-white: #ffffff;
    }

    .ai-seo-page {
        font-family: 'Poppins', sans-serif;
        color: var(--color-brand-dark);
        overflow-x: hidden;
    }

    .ai-seo-page h1, .ai-seo-page h2, .ai-seo-page h3, .ai-seo-page h4 {
        font-weight: 700;
        line-height: 1.2;
    }

    .section-padding {
        padding: 100px 0;
    }

    @media (max-width: 991px) {
        .section-padding {
            padding: 60px 0;
        }
    }

    /* Hero Section Premium Redesign */
    .ai-hero {
        background: radial-gradient(circle at top right, #1e1b4b 0%, #0f172a 40%, #020617 100%);
        position: relative;
        min-height: 85vh;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 120px 0;
        color: white;
    }

    /* Background Texture */
    .ai-hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: radial-gradient(#ffffff 1px, transparent 1px);
        background-size: 40px 40px;
        opacity: 0.03;
        z-index: 1;
        pointer-events: none;
    }

    /* Ambient Glow */
    .ai-hero::after {
        content: "";
        position: absolute;
        top: -30%;
        right: -10%;
        width: 60%;
        height: 80%;
        background: radial-gradient(circle, rgba(68, 56, 202, 0.2) 0%, transparent 70%);
        filter: blur(100px);
        z-index: 0;
        animation: float-glow 8s infinite ease-in-out alternate;
    }

    @keyframes float-glow {
        0% { transform: translate(0, 0); opacity: 0.8; }
        100% { transform: translate(-30px, 20px); opacity: 1; }
    }

    .ai-hero-glass-panel {
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 24px;
        padding: 60px 40px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), inset 0 0 0 1px rgba(255, 255, 255, 0.05);
        position: relative;
        overflow: hidden;
    }

    /* Light effect behind heading */
    .ai-hero-glass-panel::before {
        content: "";
        position: absolute;
        top: -150px;
        left: 50%;
        transform: translateX(-50%);
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.15) 0%, transparent 70%);
        filter: blur(60px);
        pointer-events: none;
    }

    .ai-hero h1 {
        font-family: 'Poppins', sans-serif !important;
        font-size: 4rem;
        font-weight: 700;
        letter-spacing: -0.02em;
        margin-bottom: 1.5rem;
        line-height: 1.1;
        text-shadow: 0 4px 12px rgba(0,0,0,0.3);
        position: relative;
    }

    @media (min-width: 992px) {
        .ai-hero h1 { font-size: 4rem; }
    }
    
    .text-gradient-ai {
        background: linear-gradient(135deg, #fff 30%, #a5b4fc 100%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .text-accent-underline {
        position: relative;
        display: inline-block;
        z-index: 1;
    }

    .text-accent-underline::after {
        content: "";
        position: absolute;
        bottom: 5px;
        left: 0;
        width: 100%;
        height: 12px;
        background: var(--color-brand-red);
        opacity: 0.4;
        z-index: -1;
        transform: skewX(-10deg);
    }

    .ai-hero p {
        font-family: 'Inter', sans-serif;
font-size: 1rem;
        line-height: 1.6;
        color: #cbd5e1;
        margin-bottom: 2.5rem;
        font-weight: 300;
    }
    
    /* Premium Buttons */
    .btn-ai-primary {
        background: linear-gradient(135deg, #BF0A30 0%, #8a0622 100%);
        color: white;
    padding: 15px 20px;
        border-radius: 16px;
        font-weight: 600;
        font-size: 1.1rem;
        border: none;
        box-shadow: 0 10px 25px rgba(191, 10, 48, 0.3), inset 0 1px 0 rgba(255,255,255,0.2);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        position: relative;
        overflow: hidden;
    }

    .btn-ai-primary::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: 0.5s;
    }

    .btn-ai-primary:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(191, 10, 48, 0.5);
        color: white;
    }

    .btn-ai-primary:hover::before {
        left: 100%;
    }
    
    .btn-ai-secondary {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(5px);
        color: white;
    padding: 15px 20px;
        border-radius: 16px;
        font-weight: 600;
        font-size: 1.1rem;
        border: 1px solid rgba(255,255,255,0.15);
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-ai-secondary:hover {
        background: rgba(255,255,255,0.1);
        border-color: rgba(255,255,255,0.4);
        color: white;
        transform: translateY(-4px);
    }

    /* Trust Badges */
    .trust-badges {
        margin-top: 45px;
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        padding-top: 30px;
        border-top: 1px solid rgba(255,255,255,0.05);
    }

    .trust-badge-item {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 0.9rem;
        color: #94a3b8;
        font-weight: 500;
        background: rgba(15, 23, 42, 0.4);
        padding: 10px 20px;
        border-radius: 50px;
        border: 1px solid rgba(255,255,255,0.05);
        transition: 0.3s;
    }

    .trust-badge-item:hover {
        background: rgba(15, 23, 42, 0.6);
        border-color: rgba(255,255,255,0.1);
        color: white;
    }
    
    .trust-badge-item i {
        color: #818cf8;
    }

    /* Wave Divider */
    .hero-wave-bottom {
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        line-height: 0;
        z-index: 2;
        pointer-events: none;
    }
    
    .hero-wave-bottom svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 80px;
    }

    .hero-wave-bottom .shape-fill {
        fill: #f8f9fa; /* Matches next section bg */
    }

    @media (max-width: 768px) {
        .ai-hero { padding: 100px 0; }
        .ai-hero-glass-panel { padding: 40px 20px; }
        .btn-ai-primary, .btn-ai-secondary { width: 100%; justify-content: center; margin-bottom: 15px; }
        .trust-badges { gap: 10px; }
        .trust-badge-item { font-size: 0.8rem; padding: 8px 14px; }
    }

    /* Cards */
    .ai-card {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        border: 1px solid rgba(0,0,0,0.05);
    }

    .ai-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(0,0,0,0.1);
        border-color: var(--color-brand-red);
    }

    .ai-card-icon {
        font-size: 2.5rem;
        color: var(--color-brand-red);
        margin-bottom: 20px;
    }

    /* Dark Section */
    .bg-brand-dark {
        background-color: #0b1120;
        color: white;
    }
    
    .bg-brand-blue {
        background-color: var(--color-brand-blue);
        color: white;
    }

    .text-brand-red {
        color: var(--color-brand-red);
    }

    /* Lists */
    .ai-list-check li {
        position: relative;
        padding-left: 30px;
        margin-bottom: 15px;
        list-style: none;
    }

    .ai-list-check li::before {
        content: '\f00c';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 2px;
        color: var(--color-brand-red);
    }

    /* Accordion */
    .accordion-button:not(.collapsed) {
        background-color: rgba(191, 10, 48, 0.05);
        color: var(--color-brand-red);
        box-shadow: none;
    }
    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0,0,0,0.1);
    }

    /* Specific Component Styles */
    .feature-box {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        padding: 30px;
        border-radius: 15px;
        height: 100%;
    }
</style>

<section class="ai-hero">
    <div class="container-fluid">
        <div class="row align-items-center" >
            <div class="col-lg-8">
                <div class="ai-hero-content-wrapper">
            <div class="ai-hero-glass-panel">
                <h1><span class="text-white">AI SEO Agency:</span> <span class="text-gradient-ai">Dominating the Era of</span> <span class="text-white">Generative Search</span></h1>
                <p class="mb-4 ">An AI SEO agency optimizes your brand for ChatGPT, Perplexity, Claude, and other generative AI systems changing how customers find businesses. SEO Specialist USA is a top AI SEO agency specializing in this new landscape. We optimize your brand's data structure and digital footprint so AI systems cite your business as the trusted recommendation.</p>
                <p class="mb-4 ">Traditional SEO focuses on rankings. LLM SEO focuses on citations. When someone asks an AI assistant about your industry, your brand needs to be in that response</p>
                
                <div class="mt-4 mb-2">
                     <?php 
                        get_template_part( 'template-parts/components/cta-buttons', null, array(
                            'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                            'phone_class' => 'btn-dark-blue',
                        )); 
                    ?>
                </div>

                <div class="trust-badges">
                    <div class="trust-badge-item">
                        <i class="fas fa-brain"></i> <?php esc_html_e('AI-Driven Strategy', 'seospecialistusa'); ?>
                    </div>
                    <div class="trust-badge-item">
                        <i class="fas fa-search"></i> <?php esc_html_e('Google-Friendly SEO', 'seospecialistusa'); ?>
                    </div>
                    <div class="trust-badge-item">
                        <i class="fas fa-chart-line"></i> <?php esc_html_e('Data & Analytics Based', 'seospecialistusa'); ?>
                    </div>
                </div>
            </div>
        </div>
            </div>
            <div class="col-lg-4">
                <?php
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'button_text' => 'Send',
                        'class'       => 'ai-seo-hero-form'
                    ));
                ?>
            </div>
        </div>
        
    </div>

    <!-- Wave Divider -->
    <div class="hero-wave-bottom">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</section>
