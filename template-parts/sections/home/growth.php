<?php
/**
 * Growth Section - SEO Results Gallery
 * 
 * @package seospecialistusa
 */

$growth_images = array(
    'Calls-from-GMB-Location-1.webp',
    'Calls-from-GMB-Location-2.webp',
    'Family-Law-Website.webp',
    'Flowers-Delivery-Local-Ecommerce-Website.webp',
    'GMB-Keywords-Stats-Location-1.webp',
    'GMB-Keywords-Stats-Location-2.webp',
    'Gummies-Ecommerce-Website.webp',
    'Injury-Lawyer-Website.webp',
    'Internet-Broadband-Website.webp',
    'Lean-Manufacture-Blogs-Website.webp',
    'Organic-Baby-Food-Ecommerce-Website.webp',
    'Personal-Injurt-lawyer-Website.webp',
    'Profile-Interactions-Location-1.webp',
    'Profile-Interactions-Location-2.webp',
    'Tires-Website.webp',
    'Website-clicks-form-GMB-Location-1.webp',
    'Website-clicks-form-GMB-Location-2.webp',
);
?>

<section class="section-growth section-padding bg-light-soft overflow-hidden">
    <div class="container-fluid">
        <div class="section-header text-center mb-5">
            <h2 class="display-5 fw-bold text-brand-blue mb-4">Proven SEO Growth for Our Clients</h2>
        </div>

        <!-- Swiper Slider Container -->
        <div class="swiper growth-swiper pb-5">
            <div class="swiper-wrapper">
                <?php foreach ( $growth_images as $image ) : 
                    // Create clean alt text from filename
                    $alt_text = str_replace( array('-', '.webp'), array(' ', ''), $image );
                    ?>
                    <div class="swiper-slide h-auto">
                        <div class="growth-card h-100 p-2 bg-white rounded shadow-sm border">
                            <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/home/proven-seo-growth-for-our-clients/<?php echo esc_attr( $image ); ?>" 
                                 alt="<?php echo esc_attr( $alt_text ); ?>" 
                                 class="img-fluid rounded w-100 h-100 object-fit-contain"
                                 loading="lazy">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Swiper Pagination -->
            <div class="swiper-pagination mt-4"></div>
            
            <!-- Swiper Navigation -->
            <div class="swiper-button-white-custom swiper-button-next"></div>
            <div class="swiper-button-white-custom swiper-button-prev"></div>
        </div>
    </div>
</section>

<style>
    .growth-swiper {
        padding: 20px 0 50px;
    }
    .growth-card {
        transition: transform 0.3s ease;
        background: #fff;
    }
    .growth-card:hover {
        transform: translateY(-5px);
    }
    .growth-swiper .swiper-pagination-bullet-active {
        background: var(--brand-red);
    }
    .growth-swiper .swiper-button-next,
    .growth-swiper .swiper-button-prev {
        color: var(--brand-blue);
        background: rgba(255,255,255,0.9);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .growth-swiper .swiper-button-next:after,
    .growth-swiper .swiper-button-prev:after {
        font-size: 18px;
        font-weight: bold;
    }
</style>
