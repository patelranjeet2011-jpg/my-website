<?php
$content = file_get_contents('services.php');
$content = str_replace('href="services/', 'href="', $content);
file_put_contents('services.php', $content);
echo "Services links fixed successfully!\n";
?>