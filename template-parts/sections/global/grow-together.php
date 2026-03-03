<?php
/**
 * Section: Let's Grow Together (Reusable Banner with Form)
 * 
 * @package seospecialistusa
 */

$title = isset($args['title']) ? $args['title'] : "Let's Grow Together";
$subtitle = isset($args['subtitle']) ? $args['subtitle'] : "Ready to take your brand global?";
?>

<section class="section-grow-together py-5">
    <div class="container-custom">
        <div class="grow-together-wrapper bg-brand-blue rounded-5 p-4 p-lg-5 overflow-hidden position-relative">
            <div class="row align-items-center g-5">
                <!-- Left Side: Content -->
                <div class="col-lg-7 text-white">
                    <div class="grow-content pe-lg-4">
                        <h2 class="display-3 fw-bold mb-4 text-white"><?php echo esc_html($title); ?></h2>
                        <p class="fs-6 opacity-90 mb-5 pb-2 lh-base">
                            At SEO Specialist USA, we don't just promote your business — we build your online success story. From search rankings to social engagement, we help you grow stronger, faster, and smarter in the digital space.
                        </p>

                        <h3 class="h2 fw-bold mb-4"><?php echo esc_html($subtitle); ?></h3>
                        <p class="fs-6 opacity-90 mb-5">
                            Let's start your growth journey with SEO Specialist USA today.
                        </p>

                        <div class="grow-actions d-flex align-items-center gap-3 flex-wrap">
                            <?php 
                            get_template_part( 'template-parts/components/cta-buttons', null, array(
                                'wrapper_class' => 'locations-ctas d-flex align-items-center gap-3 flex-wrap',
                                'phone_class' => 'btn-primary-custom',
                                'button_class' => 'btn-white'
                            )); 
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Form Card -->
                <div class="col-lg-5">
                    <?php 
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'title' => 'Get in Touch',
                        'button_text' => 'Send',
                        'class' => 'grow-together-form'
                    )); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
