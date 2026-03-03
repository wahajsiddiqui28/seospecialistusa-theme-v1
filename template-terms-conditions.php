<?php
/**
 * Template Name: Terms & Conditions
 * 
 * @package seospecialistusa
 */

get_header(); ?>

<style>
    .terms-hero {
        background: radial-gradient(circle at top right, #1e1b4b 0%, #002868 60%, #000000 100%);
        padding: 100px 0 80px;
        color: white;
        text-align: center;
        position: relative;
    }
    .terms-hero::before {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: url('<?php echo SEO_SPECIALIST_URI; ?>/assets/images/home/services-bg-pattern.jpg');
        background-size: cover;
        opacity: 0.1;
        mix-blend-mode: overlay;
    }
    .terms-hero h1 {
        color: white;
        font-size: clamp(2.5rem, 5vw, 4rem);
        margin-bottom: 20px;
        font-weight: 800;
        letter-spacing: -1px;
        position: relative;
    }
    .terms-hero .last-updated {
        display: inline-block;
        background: rgba(191, 10, 48, 0.2);
        color: #ff4d6d;
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: 1px solid rgba(191, 10, 48, 0.3);
        position: relative;
    }
    .terms-content-section {
        padding: 80px 0;
        background-color: #f0f4f8;
    }
    .terms-card {
        background: white;
        padding: clamp(30px, 5vw, 60px);
        border-radius: 30px;
        box-shadow: 0 20px 50px rgba(0, 40, 104, 0.08);
        border: 1px solid rgba(0, 40, 104, 0.05);
    }
    .terms-body p {
        margin-bottom: 25px;
        color: #475569;
        font-size: 1.1rem;
        line-height: 1.8;
    }
    .terms-body h2 {
        color: var(--brand-blue);
        font-size: 1.75rem;
        margin: 50px 0 25px;
        font-weight: 800;
        letter-spacing: -0.5px;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    .terms-body h2::before {
        content: '';
        display: block;
        width: 12px;
        height: 12px;
        background-color: var(--brand-red);
        border-radius: 3px;
        transform: rotate(45deg);
    }
    .terms-body ul {
        margin-bottom: 35px;
        padding-left: 20px;
    }
    .terms-body li {
        margin-bottom: 15px;
        color: #475569;
        font-size: 1.05rem;
        position: relative;
        list-style: none;
        padding-left: 15px;
    }
    .terms-body li::before {
        content: '→';
        position: absolute;
        left: -10px;
        color: var(--brand-red);
        font-weight: bold;
    }
    .terms-body strong {
        color: var(--brand-blue);
    }
    .terms-body a {
        color: var(--brand-red);
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        border-bottom: 1px dashed rgba(191, 10, 48, 0.3);
    }
    .terms-body a:hover {
        color: var(--brand-blue);
        border-bottom-color: var(--brand-blue);
    }
    .contact-info-card {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        padding: 40px;
        border-radius: 20px;
        border-left: 6px solid var(--brand-red);
        margin-top: 60px;
        position: relative;
        overflow: hidden;
    }
    .contact-info-card::after {
        content: '\f0e0';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        right: -10px;
        bottom: -20px;
        font-size: 120px;
        color: rgba(0, 0, 0, 0.03);
    }
    .contact-info-card p {
        margin-bottom: 10px;
    }
    @media (max-width: 768px) {
        .terms-card { padding: 30px 20px; }
        .terms-body h2 { font-size: 1.4rem; }
    }
</style>

<main id="primary" class="site-main">
    <section class="terms-hero">
        <div class="container-custom">
            <h1>Terms & Conditions</h1>
            <span class="last-updated">Last Updated: 6 November 2025</span>
        </div>
    </section>

    <section class="terms-content-section">
        <div class="container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="terms-card">
                        <div class="terms-body">
                            <p>These <a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms & Conditions</a> (“Terms”) govern the use of the website <a href="https://www.seospecialistusa.com">https://www.seospecialistusa.com</a> and any related services offered by <strong>SEO Specialist USA</strong> (“we”, “us”, “our”).</p>
                            <p>By accessing or using our website, you agree to be bound by these Terms. If you do not agree, please discontinue use immediately.</p>

                            <h2>1) Definitions</h2>
                            <ul>
                                <li><strong>Website</strong> refers to <a href="https://www.seospecialistusa.com">https://www.seospecialistusa.com</a></li>
                                <li><strong>User / You</strong> means any person, visitor, client, or entity using our website or services</li>
                                <li><strong>Services</strong> refers to SEO services, digital marketing services, consultancy, or any related services provided</li>
                            </ul>

                            <h2>2) Use of Website</h2>
                            <p>You agree to use this website only for lawful purposes. You agree not to:</p>
                            <ul>
                                <li>Use the website in a way that may damage its function or security</li>
                                <li>Copy, modify, reproduce or distribute website content without permission</li>
                                <li>Engage in any unauthorized automation, scraping, or data extraction</li>
                            </ul>

                            <h2>3) Service Information & Availability</h2>
                            <p>We may offer various SEO and marketing services. Service descriptions may change at any time without notice. Availability of services is not guaranteed and may depend on capacity, pricing, policies, and region.</p>

                            <h2>4) Pricing & Payments</h2>
                            <p>All pricing (where displayed) is subject to change without notice. Custom quotations may be provided depending on project scope, workload, software costs, advertisement budget, third-party platform fees or other variables. Invoices must be paid according to the terms displayed on each invoice.</p>

                            <h2>5) Refunds Policy</h2>
                            <p>Due to the nature of digital marketing and SEO services, all payments are generally non-refundable unless a refund is required by law. If a special written refund policy is agreed for a specific project, that clause will overrule this section for that project only.</p>

                            <h2>6) Third-Party Services</h2>
                            <p>We may use third-party tools, platforms or software including but not limited to Google, Facebook, Instagram, TikTok, analytics providers and advertising networks. We cannot control changes made by external platforms and we are not responsible for their performance, uptime, policy changes or cost changes.</p>

                            <h2>7) Results Disclaimer</h2>
                            <p>SEO and digital marketing outcomes vary based on many factors, including competition, algorithm updates, user behaviour and market conditions. We do not guarantee rankings, conversions, impressions, traffic volume, or revenue results. Any statement regarding performance improvement must be considered an estimate — not a guarantee.</p>

                            <h2>8) Intellectual Property</h2>
                            <p>All content on this website, including text, graphics, logos, and code, is the property of SEO Specialist USA. You agree not to:</p>
                            <ul>
                                <li>Reproduce, duplicate, or copy any material from the website for commercial purposes</li>
                                <li>Unauthorized use of brand names, logos, or trademarked material</li>
                            </ul>

                            <h2>9) Privacy</h2>
                            <p>We handle data according to our <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a>. By using this website you also agree to our Privacy Policy.</p>

                            <h2>10) Limitation of Liability</h2>
                            <p>To the maximum extent permitted by law, SEO Specialist USA is not liable for any direct or indirect damages arising from:</p>
                            <ul>
                                <li>Use of the website</li>
                                <li>Loss of profits, revenue, business or data</li>
                                <li>Advertising platform changes</li>
                                <li>Third-party downtime or errors</li>
                            </ul>

                            <h2>11) Changes to Terms</h2>
                            <p>We may update these Terms at any time. New Terms become effective once posted on this page. It is your responsibility to check this page regularly.</p>

                            <h2>12) Contact Information</h2>
                            <div class="contact-info-card">
                                <p>For questions about these Terms, contact us:</p>
                                <p><strong>SEO Specialist USA</strong></p>
                                <p>Email: <a href="mailto:<?php echo esc_attr( seo_specialist_get_email() ); ?>"><?php echo esc_html( seo_specialist_get_email() ); ?></a></p>
                                <p>Website: <a href="https://www.seospecialistusa.com">https://www.seospecialistusa.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
