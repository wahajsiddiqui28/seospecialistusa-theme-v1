<?php
/**
 * Locations Section
 * 
 * @package seospecialistusa
 */
?>

<style>
    .locations-premium-card {
        background: radial-gradient(circle at top right, #020617 0%, #002868 100%);
        border: 3px solid var(--brand-red);
        border-radius: 24px;
        box-shadow: 0 20px 40px rgba(0, 40, 104, 0.15);
        position: relative;
        overflow: hidden;
    }
    
    /* Decorative glowing accents */
    .locations-premium-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(191,10,48,0.15) 0%, transparent 60%);
        z-index: 0;
    }

    .locations-premium-card > * {
        position: relative;
        z-index: 1;
    }

    .location-pill {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        backdrop-filter: blur(10px);
    }

    .location-pill:hover {
        background: rgba(191, 10, 48, 0.1); /* brand-red transparent */
        border-color: var(--brand-red);
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    
    .location-pill .loc-icon {
        color: var(--brand-red);
        transition: transform 0.3s ease;
    }

    .location-pill:hover .loc-icon {
        transform: scale(1.2);
    }

    .loc-badge {
        letter-spacing: 1.5px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.8rem;
    }
</style>

<section class="section-locations section-padding bg-white">
    <div class="container">
        <div class="locations-premium-card p-4 p-md-5 p-xl-5">
            <div class="text-center mb-5 mt-2">
                <span class="badge bg-brand-red px-3 py-2 rounded-pill loc-badge mb-3 shadow-sm">Our Service Areas</span>
                <h2 class="display-5 fw-bold text-white mb-0"><?php esc_html_e('SEO Specialist USA Areas', 'seospecialistusa'); ?></h2>
            </div>
            
            <?php 
            // All states combined and sorted for better UX
            $all_states = array(
                'Vermont', 'Wyoming', 'Delaware', 'Rhode Island', 'Montana', 
                'New Mexico', 'Arkansas', 'Utah', 'South Dakota', 'North Dakota', 
                'Alaska', 'New Hampshire', 'Maine', 'West Virginia', 'Hawaii', 
                'Idaho', 'Nebraska', 'Iowa', 'Kansas', 'Mississippi'
            );
            sort($all_states); 
            ?>

            <div class="row g-3 g-md-4">
                <?php foreach ($all_states as $state) : 
                    $state_slug = str_replace(' ', '-', strtolower($state));
                ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="<?php echo esc_url( home_url( '/' . $state_slug . '/' ) ); ?>" class="location-pill d-flex align-items-center gap-3 p-3 text-white text-decoration-none h-100">
                        <div class="loc-icon">
                            <i class="fas fa-map-marker-alt fs-5"></i>
                        </div>
                        <span class="fw-medium text-truncate" title="<?php echo esc_attr($state); ?>">
                            <?php echo esc_html($state); ?>
                        </span>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- CTA Buttons -->
            <div class="mt-5 pt-4 d-flex justify-content-center border-top border-white border-opacity-10">
                <?php 
                get_template_part( 'template-parts/components/cta-buttons', null, array(
                    'wrapper_class' => 'locations-ctas d-flex align-items-center gap-3 flex-wrap',
                    'phone_class' => 'btn-white',
                    'use_modal' => true
                )); 
                ?>
            </div>
        </div>
    </div>
</section>
