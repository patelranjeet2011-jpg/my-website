<?php
// Temporary debug file to put in your web root and open in browser.
// It will try to send a test mail using native mail() and also
// write a small log entry to /email_attempts.log so we can see if your app runs.
//
// IMPORTANT: Remove this file after debugging.

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);

$logfile = __DIR__ . '/email_attempts.log';

function logit($msg) {
    global $logfile;
    $time = date('Y-m-d H:i:s');
    file_put_contents($logfile, "[$time] $msg\n", FILE_APPEND);
}

logit("Debug page opened");

// Test mail settings
$to = 'aapka@gmail.com'; // <-- अपना email डालें यहां
$subject = 'Password reset debug from site';
$message = "This is a debug test sent from password_reset_logger.php";
$headers = "From: noreply@kmfsl.in\r\n";

// Use envelope parameter -f to ensure proper Return-Path
$success = mail($to, $subject, $message, $headers, "-f noreply@kmfsl.in");

logit("mail() returned: " . ($success ? 'true' : 'false'));

// Show results in browser and also show last lines of the log
echo "<h3>mail() returned: " . ($success ? 'true' : 'false') . "</h3>";
echo "<p>Log file: email_attempts.log (last 50 lines)</p><pre>";
if (file_exists($logfile)) {
    $lines = file($logfile);
    $start = max(0, count($lines) - 50);
    echo htmlspecialchars(implode("", array_slice($lines, $start)));
} else {
    echo "Log file not found.";
}
echo "</pre>";