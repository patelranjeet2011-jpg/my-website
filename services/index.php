<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - KMFSL</title>
    <meta name="description" content="Comprehensive financial services offered by KMFSL - IEPF claims, wealth recovery, NRI services and more.">
    
    <?php include '../includes/styles.php'; ?>
</head>
<body class="bg-gray-50">
    <?php include '../includes/header.php'; ?>
    
    <main style="margin-top: 80px;">
        <!-- Services Landing Page Content -->
        <section class="section-padding">
            <div class="container-custom px-4">
                <div class="text-center mb-16">
                    <h1 class="text-4xl font-bold text-secondary-800 mb-4">
                        Our <span class="text-gradient">Professional Services</span>
                    </h1>
                    <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                        Comprehensive financial asset recovery solutions with proven expertise
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service Cards -->
                    <div class="card hover:scale-105 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-4">IEPF Claim Services</h3>
                        <p class="text-secondary-600 mb-4">Recover unclaimed shares and dividends from IEPF</p>
                        <a href="iepf-claim.php" class="btn-primary">Learn More</a>
                    </div>
                    
                    <div class="card hover:scale-105 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-4">Wealth Recovery</h3>
                        <p class="text-secondary-600 mb-4">Comprehensive wealth recovery services</p>
                        <a href="wealth-samadhan.php" class="btn-primary">Learn More</a>
                    </div>
                    
                    <div class="card hover:scale-105 transition-transform duration-300">
                        <h3 class="text-xl font-semibold mb-4">NRI Services</h3>
                        <p class="text-secondary-600 mb-4">Specialized services for Non-Resident Indians</p>
                        <a href="nri-samadhan.php" class="btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include '../includes/footer.php'; ?>
</body>
</html>