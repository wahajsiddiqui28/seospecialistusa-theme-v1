<?php
/**
 * Component: Audit Modal Form
 * 
 * A modal-based contact form for SEO audits.
 * 
 * @package seospecialistusa
 */
?>

<!-- SEO Audit Modal -->
<div class="modal fade modal-audit-form" id="auditModal" tabindex="-1" aria-labelledby="auditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="auditModalLabel">Get in Touch</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="#" method="post" class="audit-modal-form">
                    <?php wp_nonce_field( 'audit_modal_nonce', 'audit_nonce' ); ?>
                    
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="col-12">
                            <input type="tel" name="phone" class="form-control" placeholder="Your Phone" required>
                        </div>
                        <div class="col-12">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-12">
                            <input type="url" name="website_url" class="form-control" placeholder="Website Url" required>
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" placeholder="Enter Your Message" required></textarea>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn-submit-modal shadow-sm">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
