<?php
/**
 * Component: Hero Contact Form
 * 
 * Reusable contact form for hero sections and landing pages.
 * 
 * @package seospecialistusa
 */

$form_title = isset($args['title']) ? $args['title'] : 'Get in Touch';
$button_text = isset($args['button_text']) ? $args['button_text'] : 'Send';
$form_class = isset($args['class']) ? $args['class'] : '';
?>

<div class="hero-contact-card <?php echo esc_attr($form_class); ?>">
    <h2 class="form-title text-brand-blue"><?php echo esc_html($form_title); ?></h2>
    
    <div class="form-message mb-3" style="display:none;"></div>

    <form action="#" method="post" class="hero-form">
        <?php wp_nonce_field( 'hero_form_nonce', 'hero_nonce' ); ?>
        <input type="hidden" name="page_url" value="<?php echo esc_url(get_permalink()); ?>">
        <input type="hidden" name="page_title" value="<?php echo esc_attr(get_the_title()); ?>">
        <div class="form-group">
            <input type="text" name="user_name" placeholder="Enter Your Name" required>
        </div>
        <div class="form-group">
            <input type="tel" name="user_phone" placeholder="Your Phone" required>
        </div>
        <div class="form-group">
            <input type="email" name="user_email" placeholder="Email" required>
        </div>
        <div class="form-group custom-multiselect-wrapper">
            <div class="multiselect-header">
                <span class="selected-text">Select a Service</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="multiselect-options">
                <label class="option-item">
                    <input type="checkbox" name="user_services[]" value="seo">
                    <span>Search Engine Optimization (SEO)</span>
                </label>
                <label class="option-item">
                    <input type="checkbox" name="user_services[]" value="ppc">
                    <span>Pay-per Click (PPC)</span>
                </label>
                <label class="option-item">
                    <input type="checkbox" name="user_services[]" value="marketing">
                    <span>Social Media Marketing</span>
                </label>
                <label class="option-item">
                    <input type="checkbox" name="user_services[]" value="web-design">
                    <span>Website Design & Development</span>
                </label>
                <label class="option-item">
                    <input type="checkbox" name="user_services[]" value="audit">
                    <span>SEO Audit</span>
                </label>
            </div>
        </div>
        <div class="form-group">
            <textarea name="user_message" placeholder="Enter Your Message" required></textarea>
        </div>
        <div class="form-submit text-end">
            <button type="submit" class="btn-premium btn-primary-custom w-100"><?php echo esc_html($button_text); ?></button>
        </div>
    </form>
</div>

