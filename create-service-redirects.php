<?php
// Script to create redirect files for all services in resources/services folder

$services = [
    'debtor-recovery.php',
    'demat-physical-shares.php',
    'iepf-claim.php',
    'mutual-funds-recovery.php',
    'nri-samadhan.php',
    'property-claim.php',
    'provident-funds.php',
    'transmission-shares.php',
    'unclaimed-dividends.php',
    'wealth-samadhan.php'
];

// Create resources/services directory if it doesn't exist
if (!is_dir('resources/services')) {
    mkdir('resources/services', 0755, true);
}

foreach ($services as $service) {
    $redirectContent = "<?php\n// Redirect to correct path\nheader('Location: /services/{$service}');\nexit();\n?>";
    
    $filePath = "resources/services/{$service}";
    
    if (!file_exists($filePath)) {
        file_put_contents($filePath, $redirectContent);
        echo "Created redirect for: {$service}\n";
    } else {
        echo "Already exists: {$service}\n";
    }
}

echo "All service redirects created successfully!\n";
?>