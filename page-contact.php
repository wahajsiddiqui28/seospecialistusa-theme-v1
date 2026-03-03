<?php
/**
 * Template Name: Contact Page
 * 
 * @package seospecialistusa
 */

get_header();

// Contact Page Sections
get_template_part( 'template-parts/sections/contact/hero' );
get_template_part( 'template-parts/sections/contact/details-form' );
?>

<!-- Floating WhatsApp Button -->
<a href="<?php echo esc_url(seo_specialist_get_whatsapp_link()); ?>" class="floating-whatsapp-contact shadow-lg" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<style>
.floating-whatsapp-contact {
    position: fixed;
    bottom: 30px;
    left: 30px;
    width: 50px;
    height: 50px;
    background-color: #25d366;
    color: white;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    z-index: 9999;
    transition: all 0.3s ease;
    text-decoration: none;
}
.floating-whatsapp-contact:hover {
    transform: scale(1.1);
    color: white;
    background-color: #128c7e;
}
</style>

<?php
get_footer();
