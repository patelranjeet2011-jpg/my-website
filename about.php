<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - KMFSL | Leading Financial Recovery Services</title>
    <meta name="description" content="Learn about Kaimur Financial Services - 25+ years of expertise in IEPF claims, share transmission, and financial asset recovery with 99% success rate.">
    
    <!-- Common Styles -->
    <?php include 'includes/styles.php'; ?>
    
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        /* Page specific styles */
        .about-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        /* All common styles are now loaded from includes/styles.php */ 
    </style>
    
    <!-- Page uses common styles from includes/styles.php -->
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    
    <!-- Hero Slider Section -->
    <section class="relative overflow-hidden" style="margin-top: 80px;">
        <div class="hero-slider">
            <!-- Complete Node.js Style Slider with 8 Slides -->
            <?php include 'complete-nodejs-slider-content.php'; ?>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/60 animate-bounce z-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>
    
    <!-- About KMFSL Section -->
    <section class="section-padding bg-gradient-to-br from-primary-50 via-white to-accent-50">
        <div class="container-custom">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl lg:text-6xl font-bold text-secondary-800 mb-6">
                        About <span class="text-gradient">KMFSL</span>
                    </h1>
                    <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                        Kaimur Financial Services Pvt. Ltd. (KMFSL) is India's premier financial asset recovery company, established in 2009 with a mission to reunite people with their forgotten wealth. With over 15 years of specialized expertise, we have successfully recovered ₹500+ Crores for more than 15,000 satisfied clients across India and globally.
                    </p>
                    <p class="text-lg text-secondary-600 mb-8 leading-relaxed">
                        Our comprehensive services include IEPF claim recovery, transmission of shares, dematerialization of physical certificates, insurance benefit recovery, NRI asset recovery, and wealth management solutions. We combine cutting-edge technology with personalized service to deliver exceptional results with a 94.2% success rate.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a class="btn-primary" href="contact.php">Get Free Consultation</a>
                        <a class="btn-secondary" href="services.php">Our Services</a>
                    </div>
                </div>
                <div class="relative">
                    <div class="w-full h-96 bg-gradient-to-br from-primary-100 to-accent-100 rounded-2xl flex items-center justify-center">
                        <div class="text-center">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" class="w-24 h-24 text-primary-600 mx-auto mb-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path>
                            </svg>
                            <h3 class="text-2xl font-bold text-secondary-800 mb-2">Serving India</h3>
                            <p class="text-secondary-600">Pan-India Financial Services</p>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-accent-500 rounded-full flex items-center justify-center animate-bounce">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="w-8 h-8 text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M97.12 362.63c-8.69-8.69-4.16-6.24-25.12-11.85-9.51-2.55-17.87-7.45-25.43-13.32L1.2 448.7c-4.39 10.77 3.81 22.47 15.43 22.03l52.69-2.01L105.56 507c8 8.44 22.04 5.81 26.43-4.96l52.05-127.62c-10.84 6.04-22.87 9.58-35.31 9.58-19.5 0-37.82-7.59-51.61-21.37zM382.8 448.7l-45.37-111.24c-7.56 5.88-15.92 10.77-25.43 13.32-21.07 5.64-16.45 3.18-25.12 11.85-13.79 13.78-32.12 21.37-51.62 21.37-12.44 0-24.47-3.55-35.31-9.58L252 502.04c4.39 10.77 18.44 13.4 26.43 4.96l36.25-38.28 52.69 2.01c11.62.44 19.82-11.27 15.43-22.03zM263 340c15.28-15.55 17.03-14.21 38.79-20.14 13.89-3.79 24.75-14.84 28.47-28.98 7.48-28.4 5.54-24.97 25.95-45.75 10.17-10.35 14.14-25.44 10.42-39.58-7.47-28.38-7.48-24.42 0-52.83 3.72-14.14-.25-29.23-10.42-39.58-20.41-20.78-18.47-17.36-25.95-45.75-3.72-14.14-14.58-25.19-28.47-28.98-27.88-7.61-24.52-5.62-44.95-26.41-10.17-10.35-25-14.4-38.89-10.61-27.87 7.6-23.98 7.61-51.9 0-13.89-3.79-28.72.25-38.89 10.61-20.41 20.78-17.05 18.8-44.94 26.41-13.89 3.79-24.75 14.84-28.47 28.98-7.47 28.39-5.54 24.97-25.95 45.75-10.17 10.35-14.15 25.44-10.42 39.58 7.47 28.36 7.48 24.4 0 52.82-3.72 14.14.25 29.23 10.42 39.59 20.41 20.78 18.47 17.35 25.95 45.75 3.72 14.14 14.58 25.19 28.47 28.98C104.6 325.96 106.27 325 121 340c13.23 13.47 33.84 15.88 49.74 5.82a39.676 39.676 0 0 1 42.53 0c15.89 10.06 36.5 7.65 49.73-5.82zM97.66 175.96c0-53.03 42.24-96.02 94.34-96.02s94.34 42.99 94.34 96.02-42.24 96.02-94.34 96.02-94.34-42.99-94.34-96.02z"></path>
                        </svg>
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-primary-500 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-6 h-6 text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section-padding bg-white">
        <div class="container-custom">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-100 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="w-10 h-10 text-blue-600 group-hover:text-primary-600 transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M97.12 362.63c-8.69-8.69-4.16-6.24-25.12-11.85-9.51-2.55-17.87-7.45-25.43-13.32L1.2 448.7c-4.39 10.77 3.81 22.47 15.43 22.03l52.69-2.01L105.56 507c8 8.44 22.04 5.81 26.43-4.96l52.05-127.62c-10.84 6.04-22.87 9.58-35.31 9.58-19.5 0-37.82-7.59-51.61-21.37zM382.8 448.7l-45.37-111.24c-7.56 5.88-15.92 10.77-25.43 13.32-21.07 5.64-16.45 3.18-25.12 11.85-13.79 13.78-32.12 21.37-51.62 21.37-12.44 0-24.47-3.55-35.31-9.58L252 502.04c4.39 10.77 18.44 13.4 26.43 4.96l36.25-38.28 52.69 2.01c11.62.44 19.82-11.27 15.43-22.03zM263 340c15.28-15.55 17.03-14.21 38.79-20.14 13.89-3.79 24.75-14.84 28.47-28.98 7.48-28.4 5.54-24.97 25.95-45.75 10.17-10.35 14.14-25.44 10.42-39.58-7.47-28.38-7.48-24.42 0-52.83 3.72-14.14-.25-29.23-10.42-39.58-20.41-20.78-18.47-17.36-25.95-45.75-3.72-14.14-14.58-25.19-28.47-28.98-27.88-7.61-24.52-5.62-44.95-26.41-10.17-10.35-25-14.4-38.89-10.61-27.87 7.6-23.98 7.61-51.9 0-13.89-3.79-28.72.25-38.89 10.61-20.41 20.78-17.05 18.8-44.94 26.41-13.89 3.79-24.75 14.84-28.47 28.98-7.47 28.39-5.54 24.97-25.95 45.75-10.17 10.35-14.15 25.44-10.42 39.58 7.47 28.36 7.48 24.4 0 52.82-3.72 14.14.25 29.23 10.42 39.59 20.41 20.78 18.47 17.35 25.95 45.75 3.72 14.14 14.58 25.19 28.47 28.98C104.6 325.96 106.27 325 121 340c13.23 13.47 33.84 15.88 49.74 5.82a39.676 39.676 0 0 1 42.53 0c15.89 10.06 36.5 7.65 49.73-5.82zM97.66 175.96c0-53.03 42.24-96.02 94.34-96.02s94.34 42.99 94.34 96.02-42.24 96.02-94.34 96.02-94.34-42.99-94.34-96.02z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-secondary-800 mb-2">25+</div>
                    <div class="text-secondary-600">Years of Excellence</div>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-100 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-10 h-10 text-green-600 group-hover:text-primary-600 transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-secondary-800 mb-2">10,000+</div>
                    <div class="text-secondary-600">Happy Clients</div>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-100 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-10 h-10 text-purple-600 group-hover:text-primary-600 transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-secondary-800 mb-2">₹500Cr+</div>
                    <div class="text-secondary-600">Amount Recovered</div>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-100 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-10 h-10 text-orange-600 group-hover:text-primary-600 transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-secondary-800 mb-2">99%</div>
                    <div class="text-secondary-600">Success Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="section-padding bg-gray-50">
        <div class="container-custom">
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="card">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 352 512" class="w-8 h-8 text-primary-600" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M96.06 454.35c.01 6.29 1.87 12.45 5.36 17.69l17.09 25.69a31.99 31.99 0 0 0 26.64 14.28h61.71a31.99 31.99 0 0 0 26.64-14.28l17.09-25.69a31.989 31.989 0 0 0 5.36-17.69l.04-38.35H96.01l.05 38.35zM0 176c0 44.37 16.45 84.85 43.56 115.78 16.52 18.85 42.36 58.23 52.21 91.45.04.26.07.52.11.78h160.24c.04-.26.07-.51.11-.78 9.85-33.22 35.69-72.6 52.21-91.45C335.55 260.85 352 220.37 352 176 352 78.61 272.91-.3 175.45 0 73.44.31 0 82.97 0 176zm176-80c-44.11 0-80 35.89-80 80 0 8.84-7.16 16-16 16s-16-7.16-16-16c0-61.76 50.24-112 112-112 8.84 0 16 7.16 16 16s-7.16 16-16 16z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary-800 mb-4">Our Mission</h3>
                    <p class="text-secondary-600 leading-relaxed">
                        To empower individuals and businesses by helping them recover their rightful assets through professional, transparent, and efficient services. We strive to bridge the gap between unclaimed wealth and its rightful owners with integrity and excellence.
                    </p>
                </div>
                <div class="card">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" class="w-8 h-8 text-accent-600" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary-800 mb-4">Our Vision</h3>
                    <p class="text-secondary-600 leading-relaxed">
                        To become India's most trusted and comprehensive financial asset recovery platform, leveraging technology and expertise to ensure no rightful claim goes unrecovered. We envision a future where asset recovery is seamless, transparent, and accessible to all.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section-padding bg-gray-50">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">Why Choose <span class="text-gradient">KMFSL</span>?</h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">We are committed to providing exceptional service and achieving the best results for our clients.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="card card-hover text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-primary-600" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-800 mb-4">Trusted & Secure</h3>
                    <p class="text-secondary-600">SEBI registered and RBI compliant with highest security standards for your peace of mind.</p>
                </div>
                
                <div class="card card-hover text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-8 h-8 text-primary-600" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-800 mb-4">Expert Team</h3>
                    <p class="text-secondary-600">Experienced professionals with deep knowledge of financial regulations and recovery processes.</p>
                </div>
                
                <div class="card card-hover text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-primary-600" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-800 mb-4">Proven Results</h3>
                    <p class="text-secondary-600">99% success rate with over ₹500 Crores recovered for our satisfied clients.</p>
                </div>
                
                <div class="card card-hover text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="w-8 h-8 text-primary-600" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-800 mb-4">Transparency</h3>
                    <p class="text-secondary-600">Complete transparency in our process with regular updates and clear communication.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">
                    Our <span class="text-gradient">Core Values</span>
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    The principles that guide our every action and decision in serving our clients.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-all duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3">Trust & Integrity</h3>
                    <p class="text-secondary-600">We maintain the highest standards of honesty and transparency in all our dealings.</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-all duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 352 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M96.06 454.35c.01 6.29 1.87 12.45 5.36 17.69l17.09 25.69a31.99 31.99 0 0 0 26.64 14.28h61.71a31.99 31.99 0 0 0 26.64-14.28l17.09-25.69a31.989 31.989 0 0 0 5.36-17.69l.04-38.35H96.01l.05 38.35zM0 176c0 44.37 16.45 84.85 43.56 115.78 16.52 18.85 42.36 58.23 52.21 91.45.04.26.07.52.11.78h160.24c.04-.26.07-.51.11-.78 9.85-33.22 35.69-72.6 52.21-91.45C335.55 260.85 352 220.37 352 176 352 78.61 272.91-.3 175.45 0 73.44.31 0 82.97 0 176zm176-80c-44.11 0-80 35.89-80 80 0 8.84-7.16 16-16 16s-16-7.16-16-16c0-61.76 50.24-112 112-112 8.84 0 16 7.16 16 16s-7.16 16-16 16z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3">Innovation</h3>
                    <p class="text-secondary-600">We continuously innovate our processes to provide better and faster services.</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-all duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3">Client-Centric</h3>
                    <p class="text-secondary-600">Our clients are at the heart of everything we do. Their success is our success.</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-all duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M434.7 64h-85.9c-8 0-15.7 3-21.6 8.4l-98.3 90c-.1.1-.2.3-.3.4-16.6 15.6-16.3 40.5-2.1 56 12.7 13.9 39.4 17.6 56.1 2.7.1-.1.3-.1.4-.2l79.9-73.2c6.5-5.9 16.7-5.5 22.6 1 6 6.5 5.5 16.6-1 22.6l-26.1 23.9L504 313.8c2.9 2.4 5.5 5 7.9 7.7V128l-54.6-54.6c-5.9-6-14.1-9.4-22.6-9.4zM544 128.2v223.9c0 17.7 14.3 32 32 32h64V128.2h-96zm48 223.9c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM0 384h64c17.7 0 32-14.3 32-32V128.2H0V384zm48-63.9c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16c0-8.9 7.2-16 16-16zm435.9 18.6L334.6 217.5l-30 27.5c-29.7 27.1-75.2 24.5-101.7-4.4-26.9-29.4-24.8-74.9 4.4-101.7L289.1 64h-83.8c-8.5 0-16.6 3.4-22.6 9.4L128 128v223.9h18.3l90.5 81.9c27.4 22.3 67.7 18.1 90-9.3l.2-.2 17.9 15.5c15.9 13 39.4 10.5 52.3-5.4l31.4-38.6 5.4 4.4c13.7 11.1 33.9 9.1 45-4.7l9.5-11.7c11.2-13.8 9.1-33.9-4.6-45.1z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3">Professional Excellence</h3>
                    <p class="text-secondary-600">We deliver professional services with expertise, dedication, and attention to detail.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team Section -->
    <section class="section-padding bg-gray-50">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">
                    Our <span class="text-gradient">Leadership Team</span>
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    Meet the experienced professionals who lead KMFSL with vision, expertise, and dedication.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-br from-primary-100 to-accent-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-12 h-12 text-primary-600" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-2">Rajesh Kumar</h3>
                    <p class="text-primary-600 font-medium mb-1">Founder & CEO</p>
                    <p class="text-sm text-secondary-500 mb-2">25+ Years</p>
                    <p class="text-sm text-accent-600 font-medium mb-3">Financial Recovery, IEPF Claims</p>
                    <p class="text-secondary-600 text-sm">Visionary leader with extensive experience in financial services and asset recovery.</p>
                </div>
                
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-br from-primary-100 to-accent-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-12 h-12 text-primary-600" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-2">Priya Sharma</h3>
                    <p class="text-primary-600 font-medium mb-1">Head of Operations</p>
                    <p class="text-sm text-secondary-500 mb-2">18+ Years</p>
                    <p class="text-sm text-accent-600 font-medium mb-3">Operations Management, Client Relations</p>
                    <p class="text-secondary-600 text-sm">Expert in streamlining operations and ensuring exceptional client experiences.</p>
                </div>
                
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-br from-primary-100 to-accent-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-12 h-12 text-primary-600" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-2">Amit Patel</h3>
                    <p class="text-primary-600 font-medium mb-1">Legal Head</p>
                    <p class="text-sm text-secondary-500 mb-2">20+ Years</p>
                    <p class="text-sm text-accent-600 font-medium mb-3">Corporate Law, Property Claims</p>
                    <p class="text-secondary-600 text-sm">Seasoned legal expert specializing in financial and property law matters.</p>
                </div>
                
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-br from-primary-100 to-accent-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-12 h-12 text-primary-600" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-2">Sunita Gupta</h3>
                    <p class="text-primary-600 font-medium mb-1">Head of Technology</p>
                    <p class="text-sm text-secondary-500 mb-2">15+ Years</p>
                    <p class="text-sm text-accent-600 font-medium mb-3">Digital Solutions, Process Automation</p>
                    <p class="text-secondary-600 text-sm">Technology leader driving digital transformation and innovation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Journey Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">
                    Our <span class="text-gradient">Journey</span>
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    Key milestones that have shaped our growth and success over the years.
                </p>
            </div>
            
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-primary-200 hidden lg:block"></div>
                
                <div class="space-y-12">
                    <div class="flex items-center lg:flex-row">
                        <div class="w-full lg:w-5/12 lg:pr-8">
                            <div class="card">
                                <div class="text-2xl font-bold text-primary-600 mb-2">1998</div>
                                <h3 class="text-xl font-semibold text-secondary-800 mb-3">Company Founded</h3>
                                <p class="text-secondary-600">Started with a vision to help people recover their unclaimed assets.</p>
                            </div>
                        </div>
                        <div class="hidden lg:flex w-2/12 justify-center">
                            <div class="w-4 h-4 bg-primary-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                        <div class="hidden lg:block w-5/12"></div>
                    </div>
                    
                    <div class="flex items-center lg:flex-row-reverse">
                        <div class="w-full lg:w-5/12 lg:pl-8">
                            <div class="card">
                                <div class="text-2xl font-bold text-primary-600 mb-2">2005</div>
                                <h3 class="text-xl font-semibold text-secondary-800 mb-3">SEBI Registration</h3>
                                <p class="text-secondary-600">Obtained SEBI registration to provide regulated financial services.</p>
                            </div>
                        </div>
                        <div class="hidden lg:flex w-2/12 justify-center">
                            <div class="w-4 h-4 bg-primary-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                        <div class="hidden lg:block w-5/12"></div>
                    </div>
                    
                    <div class="flex items-center lg:flex-row">
                        <div class="w-full lg:w-5/12 lg:pr-8">
                            <div class="card">
                                <div class="text-2xl font-bold text-primary-600 mb-2">2010</div>
                                <h3 class="text-xl font-semibold text-secondary-800 mb-3">1000+ Clients</h3>
                                <p class="text-secondary-600">Reached the milestone of serving over 1000 satisfied clients.</p>
                            </div>
                        </div>
                        <div class="hidden lg:flex w-2/12 justify-center">
                            <div class="w-4 h-4 bg-primary-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                        <div class="hidden lg:block w-5/12"></div>
                    </div>
                    
                    <div class="flex items-center lg:flex-row-reverse">
                        <div class="w-full lg:w-5/12 lg:pl-8">
                            <div class="card">
                                <div class="text-2xl font-bold text-primary-600 mb-2">2015</div>
                                <h3 class="text-xl font-semibold text-secondary-800 mb-3">Digital Transformation</h3>
                                <p class="text-secondary-600">Launched online platform for better client experience.</p>
                            </div>
                        </div>
                        <div class="hidden lg:flex w-2/12 justify-center">
                            <div class="w-4 h-4 bg-primary-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                        <div class="hidden lg:block w-5/12"></div>
                    </div>
                    
                    <div class="flex items-center lg:flex-row">
                        <div class="w-full lg:w-5/12 lg:pr-8">
                            <div class="card">
                                <div class="text-2xl font-bold text-primary-600 mb-2">2020</div>
                                <h3 class="text-xl font-semibold text-secondary-800 mb-3">₹100Cr+ Recovered</h3>
                                <p class="text-secondary-600">Successfully recovered over ₹100 crores for our clients.</p>
                            </div>
                        </div>
                        <div class="hidden lg:flex w-2/12 justify-center">
                            <div class="w-4 h-4 bg-primary-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                        <div class="hidden lg:block w-5/12"></div>
                    </div>
                    
                    <div class="flex items-center lg:flex-row-reverse">
                        <div class="w-full lg:w-5/12 lg:pl-8">
                            <div class="card">
                                <div class="text-2xl font-bold text-primary-600 mb-2">2024</div>
                                <h3 class="text-xl font-semibold text-secondary-800 mb-3">AI-Powered Services</h3>
                                <p class="text-secondary-600">Integrated AI and automation for faster processing.</p>
                            </div>
                        </div>
                        <div class="hidden lg:flex w-2/12 justify-center">
                            <div class="w-4 h-4 bg-primary-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                        <div class="hidden lg:block w-5/12"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="section-padding bg-gray-50">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">
                    <span class="text-gradient">Certifications</span> & Compliance
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    We maintain the highest standards of compliance and are certified by leading regulatory bodies.
                </p>
            </div>
            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-2">SEBI Registered</h3>
                    <p class="text-sm text-secondary-600">Securities and Exchange Board of India</p>
                </div>
                
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-2">RBI Compliant</h3>
                    <p class="text-sm text-secondary-600">Reserve Bank of India Guidelines</p>
                </div>
                
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-2">ISO 9001:2015</h3>
                    <p class="text-sm text-secondary-600">Quality Management System</p>
                </div>
                
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-2">MSME Registered</h3>
                    <p class="text-sm text-secondary-600">Ministry of MSME, Govt. of India</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding bg-gradient-to-r from-primary-600 to-accent-500">
        <div class="container-custom text-center text-white">
            <h2 class="text-4xl font-bold mb-4">Ready to Start Your Recovery Journey?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Join thousands of satisfied clients who have successfully recovered their assets with our expert guidance.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a class="btn-primary bg-white text-primary-600 hover:bg-gray-100" href="contact.php">Get Free Consultation</a>
                <a class="btn-secondary border-white text-white hover:bg-white hover:text-primary-600" href="services.php">Explore Our Services</a>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-secondary-800 mb-4">Get Your <span class="text-gradient">Free Consultation</span></h2>
                    <p class="text-xl text-secondary-600">Fill out the form below and our experts will contact you within 24 hours to discuss your case.</p>
                </div>
                <div class="card max-w-4xl mx-auto">
                    <div class="text-center mb-8">
                        <div class="flex justify-center mb-6">
                            <img src="kmfsl logo svg.svg" alt="KMFSL - Kaimur Financial Services" class="h-24 w-auto">
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-800 mb-2">Send us your enquiry</h3>
                        <p class="text-secondary-600">We'll get back to you within 24 hours</p>
                    </div>
                    <form class="space-y-6" action="subscribe.php" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-secondary-700 mb-2">Full Name *</label>
                                <div class="relative">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-secondary-400 w-4 h-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path>
                                    </svg>
                                    <input type="text" name="name" class="input-field pl-10" placeholder="Enter your full name" required>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-secondary-700 mb-2">Email Address *</label>
                                <div class="relative">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-secondary-400 w-4 h-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                                    </svg>
                                    <input type="email" name="email" class="input-field pl-10" placeholder="Enter your email address" required>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-secondary-700 mb-2">Phone Number *</label>
                                <div class="relative">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-secondary-400 w-4 h-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
                                    </svg>
                                    <input type="tel" name="phone" class="input-field pl-10" placeholder="Enter your phone number" required>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-secondary-700 mb-2">Service Required *</label>
                                <select name="service" class="input-field" required>
                                    <option value="">Select a service</option>
                                    <option value="IEPF Claim">IEPF Claim</option>
                                    <option value="Transmission of Shares">Transmission of Shares</option>
                                    <option value="Demat of Physical Shares">Demat of Physical Shares</option>
                                    <option value="Unclaimed Dividends">Unclaimed Dividends</option>
                                    <option value="Conversion of Shares/Debentures">Conversion of Shares/Debentures</option>
                                    <option value="Property Claim Samadhan">Property Claim Samadhan</option>
                                    <option value="Debtor Recovery">Debtor Recovery</option>
                                    <option value="Recovery of Unclaimed Mutual Funds">Recovery of Unclaimed Mutual Funds</option>
                                    <option value="Recovery of Inoperative Bank Accounts">Recovery of Inoperative Bank Accounts</option>
                                    <option value="Provident Funds Claim">Provident Funds Claim</option>
                                    <option value="Recovery of Unclaimed Matured Insurance">Recovery of Unclaimed Matured Insurance</option>
                                    <option value="Wealth Samadhan">Wealth Samadhan</option>
                                    <option value="NRI Samadhan">NRI Samadhan</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-secondary-700 mb-2">Preferred Contact Method</label>
                            <div class="flex space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="preferredContact" class="mr-2" value="email" checked>
                                    Email
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="preferredContact" class="mr-2" value="phone">
                                    Phone
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="preferredContact" class="mr-2" value="whatsapp">
                                    WhatsApp
                                </label>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-secondary-700 mb-2">Message *</label>
                            <textarea name="message" rows="4" class="input-field resize-none" placeholder="Please describe your requirements or any specific questions you have..." required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-primary inline-flex items-center justify-center min-w-[200px]">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-4 h-4 mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path>
                                </svg>
                                Send Enquiry
                            </button>
                        </div>
                        <div class="text-center text-sm text-secondary-500">
                            <p>By submitting this form, you agree to our <a href="privacy-policy.php" class="text-primary-600 hover:underline">Privacy Policy</a> and <a href="terms-conditions.php" class="text-primary-600 hover:underline">Terms & Conditions</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }
    </script>
    
    <!-- Slider JavaScript -->
    <?php include 'complete-nodejs-slider.php'; ?>
    
    <!-- ChatBot -->
    <?php include 'includes/chatbot.php'; ?>
</body>
</html>