<?php
$content = file_get_contents('services.php');
$content = str_replace('href="iepf-claim.php"', 'href="services/iepf-claim.php"', $content);
$content = str_replace('href="transmission-shares.php"', 'href="services/transmission-shares.php"', $content);
$content = str_replace('href="demat-physical-shares.php"', 'href="services/demat-physical-shares.php"', $content);
$content = str_replace('href="unclaimed-dividends.php"', 'href="services/unclaimed-dividends.php"', $content);
$content = str_replace('href="conversion-shares.php"', 'href="services/conversion-shares.php"', $content);
$content = str_replace('href="property-claim.php"', 'href="services/property-claim.php"', $content);
$content = str_replace('href="debtor-recovery.php"', 'href="services/debtor-recovery.php"', $content);
$content = str_replace('href="mutual-funds-recovery.php"', 'href="services/mutual-funds-recovery.php"', $content);
$content = str_replace('href="bank-account-recovery.php"', 'href="services/bank-account-recovery.php"', $content);
$content = str_replace('href="provident-funds.php"', 'href="services/provident-funds.php"', $content);
$content = str_replace('href="insurance-recovery.php"', 'href="services/insurance-recovery.php"', $content);
$content = str_replace('href="wealth-samadhan.php"', 'href="services/wealth-samadhan.php"', $content);
$content = str_replace('href="nri-samadhan.php"', 'href="services/nri-samadhan.php"', $content);
file_put_contents('services.php', $content);
echo "All service paths fixed successfully!\n";
?>