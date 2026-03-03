<?php
/**
 * Locations Section
 * 
 * @package seospecialistusa
 */
?>

<section class="section-locations section-padding bg-white">
    <div class="container">
        <div class="locations-card-wrapper bg-brand-blue rounded shadow-premium py-4 border-3 border border-brand-red text-white position-relative" style="border: 4px solid #bf0a30 !important;">
            <h2 class="display-5 fw-bold text-center mb-5 text-white"><?php esc_html_e('SEO Specialist USA Areas', 'seospecialistusa'); ?></h2>
            
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <ul class="location-list list-unstyled">
                        <?php 
                        $states_1 = array('Vermont', 'Wyoming', 'Delaware', 'Rhode Island', 'Montana', 'New Mexico', 'Arkansas', 'Utah', 'South Dakota', 'North Dakota', 'Alaska', 'New Hampshire', 'Maine');
                        foreach ($states_1 as $state) : 
                            $state_slug = str_replace(' ', '-', strtolower($state)) . '';
                        ?>
                            <li class="location-item border-bottom py-2 d-flex align-items-center gap-3">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-brand-red opacity-75"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <a href="<?php echo esc_url( home_url( '/' . $state_slug . '/' ) ); ?>" class="text-white text-decoration-none location-link transition-all">
                                    <?php echo esc_html($state); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Column 2 -->
                <div class="col-md-6">
                    <ul class="location-list list-unstyled">
                        <?php 
                        $states_2 = array('West Virginia', 'Hawaii', 'Idaho', 'Nebraska', 'Iowa', 'Kansas', 'Mississippi');
                        foreach ($states_2 as $state) : 
                            $state_slug = str_replace(' ', '-', strtolower($state)) . '-seo';
                        ?>
                            <li class="location-item border-bottom py-2 d-flex align-items-center gap-3">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-brand-red opacity-75"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <a href="<?php echo esc_url( home_url( '/' . $state_slug . '/' ) ); ?>" class="text-white text-decoration-none location-link transition-all">
                                    <?php echo esc_html($state); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="mt-5 pt-3 d-flex justify-content-center gap-3 flex-wrap">
                <?php 
                get_template_part( 'template-parts/components/cta-buttons', null, array(
                    'wrapper_class' => 'locations-ctas d-flex align-items-center gap-3 flex-wrap',
                    'phone_class' => 'btn-white'
                )); 
                ?>
            </div>
        </div>
    </div>
</section>
