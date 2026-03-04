<?php
/**
 * Vermont Local Insights Section (Tabs)
 */
?>
<section class="section-padding bg-light-vermont local-insights-vt">
    <div class="container">
        <div class="text-center mb-5 text-white">
            <h2 class="text-white">Explore Vermont Local Insights That Strengthen Your SEO Strategy</h2>
            <p class="mx-auto mt-3" style="max-width: 900px;">To create an effective SEO strategy, it's important to understand the places, communities, and business environments that shape Vermont's search behavior. This allows your website to align with local intent and attract the right customers.</p>
        </div>
        
        <div class="row g-4 align-items-center">
            <div class="col-lg-4">
                <div class="vt-tabs-sidebar">
                    <button class="vt-tab-btn active" data-tab="burlington">Burlington</button>
                    <button class="vt-tab-btn" data-tab="montpelier">Montpelier</button>
                    <button class="vt-tab-btn" data-tab="stowe">Stowe</button>
                    <button class="vt-tab-btn" data-tab="champlain">Lake Champlain Region</button>
                    <button class="vt-tab-btn" data-tab="woodstock">Woodstock & Manchester</button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow">
                    <div id="burlington" class="vt-tab-content active">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 style="color: var(--brand-blue);">Burlington</h3>
                                <p>Vermont's largest city and a hub for retail, dining, health services, and growing tech startups. High online activity makes SEO essential for visibility and competition.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pages/locations-pages/vermont/Burlington.avif" alt="Burlington" class="img-fluid rounded-3">
                            </div>
                        </div>
                    </div>
                    <div id="montpelier" class="vt-tab-content">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 style="color: var(--brand-blue);">Montpelier</h3>
                                <p>As the state capital, Montpelier has a concentrated market for professional services and boutiques. Local SEO ensures businesses reach both residents and visitors.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pages/locations-pages/vermont/Montpelier-2048x1056.jpg.webp" alt="Montpelier" class="img-fluid rounded-3">
                            </div>
                        </div>
                    </div>
                    <div id="stowe" class="vt-tab-content">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 style="color: var(--brand-blue);">Stowe</h3>
                                <p>A prime destination for tourism and skiing. SEO strategies for Stowe businesses focus on seasonal visibility and capturing tourist search intent.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pages/locations-pages/vermont/Stowe.avif" alt="Stowe" class="img-fluid rounded-3">
                            </div>
                        </div>
                    </div>
                    <div id="champlain" class="vt-tab-content">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 style="color: var(--brand-blue);">Lake Champlain Region</h3>
                                <p>Targeting visitors and locals along the lake, from boating services to lakeside dining. Localized content is key to capturing regional traffic.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pages/locations-pages/vermont/LakeChamplainRegion-2048x1371.jpg.webp" alt="Lake Champlain" class="img-fluid rounded-3">
                            </div>
                        </div>
                    </div>
                    <div id="woodstock" class="vt-tab-content">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 style="color: var(--brand-blue);">Woodstock & Manchester</h3>
                                <p>Known for luxury tourism and boutique shopping. SEO helps high-end services and retailers stand out to a discerning audience.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pages/locations-pages/vermont/WoodstockManchester-2048x1148.jpg.webp" alt="Woodstock" class="img-fluid rounded-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.vt-tab-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons and contents
            document.querySelectorAll('.vt-tab-btn').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.vt-tab-content').forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked button and target content
            btn.classList.add('active');
            document.getElementById(btn.dataset.tab).classList.add('active');
        });
    });
</script>
