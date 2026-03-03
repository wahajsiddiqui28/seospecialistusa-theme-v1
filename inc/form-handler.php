<?php
/**
 * Form Handler - SMTP Configuration and AJAX Submission
 * 
 * @package seospecialistusa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configure SMTP for seospecialistusa.com
 * Using the phpmailer_init hook to override default wp_mail behavior
 */
function seospecialist_configure_smtp( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'smtp.hostinger.com';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 465;
    $phpmailer->Username   = 'info@seospecialistusa.com';
    $phpmailer->Password   = 'S!))osp8(7*^7eciali(JDsstUSA@343';
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->From       = 'info@seospecialistusa.com';
    $phpmailer->FromName   = 'SEO Specialist USA - Leads';
}
add_action( 'phpmailer_init', 'seospecialist_configure_smtp' );

/**
 * AJAX Handler for Hero Contact Form
 */
function seospecialist_handle_hero_form() {
    // Basic Security Check
    check_ajax_referer( 'hero_form_nonce', 'nonce' );

    // Sanitize and Get Form Data
    $name       = sanitize_text_field( $_POST['user_name'] );
    $phone      = sanitize_text_field( $_POST['user_phone'] );
    $email      = sanitize_email( $_POST['user_email'] );
    $message    = sanitize_textarea_field( $_POST['user_message'] );
    $services   = isset($_POST['user_services']) ? $_POST['user_services'] : array();
    $page_url   = isset($_POST['page_url']) ? esc_url($_POST['page_url']) : 'Unknown';
    $page_title = isset($_POST['page_title']) ? sanitize_text_field($_POST['page_title']) : 'Unknown Page';

    // Prepare Services String
    $services_str = !empty($services) ? implode(', ', array_map('sanitize_text_field', $services)) : 'None selected';

    // Email Settings
    $to          = array(
        'info@seospecialistusa.com',
        'takiseo.specialist@gmail.com',
        'maaz.ah2001@gmail.com',
        'hassanabidseo@gmail.com'
    );
    $subject     = 'New Inquiry: ' . $name . ' via ' . $page_title;
    
    // Logo URL
    $logo_url = SEO_SPECIALIST_URI . '/assets/images/logo/seospecialistusa-logo.jpg';
    
    // Email Content (Professional HTML Template)
    $current_year = date('Y');
    $esc_logo_url = esc_url($logo_url);
    $esc_name = esc_html($name);
    $esc_email = esc_html($email);
    $esc_phone = esc_html($phone);
    $esc_services_str = esc_html($services_str);
    $esc_page_title = esc_html($page_title);
    $esc_message = nl2br(esc_html($message));
    $esc_page_url = esc_url($page_url);

    $email_body = <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if mso]>
        <noscript>
            <xml>
                <o:OfficeDocumentSettings>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
            </xml>
        </noscript>
        <![endif]-->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
            
            body { 
                font-family: 'Poppins', 'Helvetica Neue', Helvetica, Arial, sans-serif; 
                background-color: #f0f4f8; 
                margin: 0; 
                padding: 0; 
                -webkit-font-smoothing: antialiased; 
            }
            .email-wrapper { 
                width: 100%; 
                background-color: #f0f4f8; 
                padding: 40px 15px; 
            }
            .email-container { 
                max-width: 600px; 
                margin: 0 auto; 
                background-color: #ffffff; 
                border-radius: 24px; 
                overflow: hidden; 
                box-shadow: 0 20px 60px rgba(0, 40, 104, 0.12); 
            }
            .top-accent {
                height: 8px;
                background: linear-gradient(90deg, #bf0a30 0%, #002868 100%);
            }
            .email-header { 
                padding: 40px 30px 30px; 
                text-align: center; 
                background-color: #ffffff;
            }
            .email-header img { 
                max-width: 220px; 
                height: auto; 
            }
            .hero-badge {
                display: inline-block;
                background: rgba(191, 10, 48, 0.08);
                color: #bf0a30;
                padding: 6px 16px;
                border-radius: 50px;
                font-size: 11px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin-bottom: 20px;
            }
            .main-title { 
                color: #002868; 
                font-size: 32px; 
                font-weight: 800; 
                margin: 0 0 10px 0; 
                line-height: 1.2;
                letter-spacing: -1px;
            }
            .sub-title {
                color: #64748b;
                font-size: 14px;
                margin-bottom: 40px;
                font-weight: 400;
            }
            .content-body { 
                padding: 0 40px 40px; 
            }
            .leads-card {
                background: #f8fafc;
                border-radius: 20px;
                padding: 25px;
                border: 1px solid #edf2f7;
            }
            .lead-row {
                padding: 15px 0;
                border-bottom: 1px solid #e2e8f0;
            }
            .lead-row:last-child {
                border-bottom: none;
            }
            .lead-label {
                font-size: 10px;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                color: #94a3b8;
                font-weight: 700;
                margin-bottom: 5px;
                display: block;
            }
            .lead-value {
                font-size: 15px;
                color: #0f172a;
                font-weight: 600;
                display: block;
            }
            .message-label {
                color: #bf0a30;
                font-size: 12px;
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin: 40px 0 15px;
                display: block;
            }
            .message-quote {
                background: #ffffff;
                padding: 30px;
                border-radius: 16px;
                border-left: 6px solid #bf0a30;
                color: #334155;
                font-size: 16px;
                line-height: 1.8;
                font-style: italic;
                box-shadow: 0 10px 20px rgba(0,0,0,0.03);
                position: relative;
            }
            .message-quote::before {
                content: '"';
                position: absolute;
                top: 10px;
                left: 10px;
                font-size: 60px;
                color: rgba(191, 10, 48, 0.05);
                font-family: serif;
                line-height: 1;
            }
            .page-info {
                margin-top: 30px;
                text-align: center;
                padding: 15px;
                background: #002868;
                border-radius: 12px;
                color: #ffffff;
                font-size: 12px;
            }
            .page-info a {
                color: #ffffff;
                text-decoration: none;
                font-weight: 600;
                border-bottom: 1px solid rgba(255,255,255,0.4);
            }
            .email-footer { 
                background-color: #0f172a; 
                padding: 40px; 
                text-align: center; 
                color: #94a3b8; 
                font-size: 12px; 
            }
            .footer-brand {
                color: #ffffff;
                font-size: 18px;
                font-weight: 800;
                margin-bottom: 5px;
                display: block;
            }
            .footer-links {
                margin: 20px 0;
            }
            .footer-links a { 
                color: #bf0a30; 
                text-decoration: none; 
                font-weight: 700; 
                margin: 0 10px;
            }
            @media only screen and (max-width: 480px) {
                .email-container { border-radius: 0; }
                .content-body { padding: 0 25px 30px; }
                .main-title { font-size: 24px; }
            }
        </style>
    </head>
    <body>
        <div class="email-wrapper">
            <div class="email-container">
                <div class="top-accent"></div>
                <div class="email-header">
                    <img src="{$esc_logo_url}" alt="SEO Specialist USA">
                </div>
                
                <div class="content-body">
                    <div style="text-align:center;">
                        <span class="hero-badge">New Growth Opportunity</span>
                        <h1 class="main-title">Inquiry Received</h1>
                        <p class="sub-title">A potential client is looking to elevate their business.</p>
                    </div>

                    <div class="leads-card">
                        <div class="lead-row">
                            <span class="lead-label">Prospect Name</span>
                            <span class="lead-value">{$esc_name}</span>
                        </div>
                        <div class="lead-row">
                            <span class="lead-label">Contact Email</span>
                            <span class="lead-value">{$esc_email}</span>
                        </div>
                        <div class="lead-row">
                            <span class="lead-label">Phone Number</span>
                            <span class="lead-value">{$esc_phone}</span>
                        </div>
                        <div class="lead-row">
                            <span class="lead-label">Services Interested</span>
                            <span class="lead-value">{$esc_services_str}</span>
                        </div>
                         <div class="lead-row">
                            <span class="lead-label">Came From Page</span>
                            <span class="lead-value">{$esc_page_title}</span>
                        </div>
                    </div>

                    <span class="message-label">Detailed Requirement:</span>
                    <div class="message-quote">
                        {$esc_message}
                    </div>

                    <div class="page-info">
                        Captured from: <a href="{$esc_page_url}">{$esc_page_url}</a>
                    </div>
                </div>

                <div class="email-footer">
                    <span class="footer-brand">SEO Specialist USA</span>
                    <p>Expert Digital Marketing & Search Dominion</p>
                    <div class="footer-links">
                        <a href="https://seospecialistusa.com">Website</a>
                        <a href="https://seospecialistusa.com/contact">Contact Us</a>
                    </div>
                    <p style="opacity:0.5; font-size:11px;">&copy; {$current_year} SEO Specialist USA. Confidential Lead Information.</p>
                </div>
            </div>
        </div>
    </body>
    </html>
HTML;
    $headers = array('Content-Type: text/html; charset=UTF-8');

    // Error Logging for Debugging
    global $ts_mail_errors;
    $ts_mail_errors = array();

    add_action( 'wp_mail_failed', function( $error ) {
        global $ts_mail_errors;
        $ts_mail_errors[] = $error->get_error_message();
    } );

    // Send Email
    $sent = wp_mail( $to, $subject, $email_body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Thank you! Your message has been sent successfully.' ) );
    } else {
        $error_msg = !empty($ts_mail_errors) ? implode(' | ', $ts_mail_errors) : 'Unknown mail error.';
        wp_send_json_error( array( 'message' => 'Mail Error: ' . $error_msg ) );
    }
}
add_action( 'wp_ajax_handle_hero_form', 'seospecialist_handle_hero_form' );
add_action( 'wp_ajax_nopriv_handle_hero_form', 'seospecialist_handle_hero_form' );
