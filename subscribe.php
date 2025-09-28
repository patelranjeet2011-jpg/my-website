<?php

$response = ['success' => false, 'message' => ''];

if ($_POST && isset($_POST['email'])) {
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    
    if (!$email) {
        $response['message'] = 'Please enter a valid email address.';
    } else {
        // Send welcome email
        $to = $email;
        $subject = 'Welcome to KMFSL Newsletter';
        $message = "
        Thank you for subscribing to KMFSL Newsletter!
        
        You will now receive:
        - Latest updates on financial recovery services
                - Tips for asset management
                - Important regulatory changes
                - Exclusive offers and insights
                
                If you wish to unsubscribe at any time, please contact us at help@kmfsl.in
                
                Best regards,
                KMFSL Team
                ";
                
                $headers = "From: help@kmfsl.in\r\n";
                $headers .= "Reply-To: help@kmfsl.in\r\n";
                
                if (mail($to, $subject, $message, $headers)) {
                    $response['success'] = true;
                    $response['message'] = 'Thank you for subscribing! Check your email for confirmation.';
                } else {
                    $response['success'] = true;
                    $response['message'] = 'Thank you for subscribing to our newsletter!';
                }
    }
} else {
    $response['message'] = 'Invalid request.';
}

// Return JSON response for AJAX requests
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

// For regular form submissions, redirect back with message
session_start();
$_SESSION['newsletter_message'] = $response['message'];
$_SESSION['newsletter_success'] = $response['success'];

$redirect_url = $_SERVER['HTTP_REFERER'] ?? 'index.php';
header('Location: ' . $redirect_url);
exit;
?>