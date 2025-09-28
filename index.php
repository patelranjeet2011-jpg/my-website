<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMFSL - Kaimur Financial Services | Professional Asset Recovery</title>
    <meta name="description" content="Professional financial asset recovery services including IEPF claims, share transmission, demat services, and wealth management solutions.">
    <meta name="keywords" content="IEPF claim, share transmission, demat services, financial recovery, wealth management">
    
    <!-- Common Styles -->
    <?php include 'includes/styles.php'; ?>
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

    <!-- Services Overview Section -->
    <section id="services" class="section-padding bg-gray-50">
        <div class="container-custom px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">
                    Our <span class="text-gradient">Professional Services</span>
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    Comprehensive financial solutions designed to recover and protect your assets with expert guidance and proven results.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- IEPF Claim -->
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="text-center">
                        <div class="text-6xl mb-4">📊</div>
                        <h3 class="text-xl font-semibold text-secondary-800 mb-3">IEPF Claim Services</h3>
                        <p class="text-secondary-600 mb-4">Recover your unclaimed shares and dividends transferred to IEPF with our expert assistance.</p>
                        
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Professional Documentation
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Quick Processing
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Maximum Recovery
                            </li>
                        </ul>
                        
                        <a href="services/iepf-claim.php" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group-hover:translate-x-1 transition-all duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Wealth Recovery -->
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="text-center">
                        <div class="text-6xl mb-4">💰</div>
                        <h3 class="text-xl font-semibold text-secondary-800 mb-3">Wealth Recovery</h3>
                        <p class="text-secondary-600 mb-4">Comprehensive wealth recovery services for unclaimed assets and forgotten investments.</p>
                        
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Asset Identification
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Legal Compliance
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Complete Recovery
                            </li>
                        </ul>
                        
                        <a href="services/wealth-samadhan.php" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group-hover:translate-x-1 transition-all duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                
                <!-- NRI Services -->
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="text-center">
                        <div class="text-6xl mb-4">🌍</div>
                        <h3 class="text-xl font-semibold text-secondary-800 mb-3">NRI Services</h3>
                        <p class="text-secondary-600 mb-4">Specialized financial services for Non-Resident Indians with global support.</p>
                        
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Global Support
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Legal Compliance
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Expert Guidance
                            </li>
                        </ul>
                        
                        <a href="services/nri-samadhan.php" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group-hover:translate-x-1 transition-all duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Property Claim -->
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="text-center">
                        <div class="text-6xl mb-4">🏠</div>
                        <h3 class="text-xl font-semibold text-secondary-800 mb-3">Property Claim</h3>
                        <p class="text-secondary-600 mb-4">Professional assistance in property disputes and inheritance claims.</p>
                        
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Legal Documentation
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Dispute Resolution
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Expert Support
                            </li>
                        </ul>
                        
                        <a href="services/property-claim.php" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group-hover:translate-x-1 transition-all duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Share Services -->
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="text-center">
                        <div class="text-6xl mb-4">📈</div>
                        <h3 class="text-xl font-semibold text-secondary-800 mb-3">Share Services</h3>
                        <p class="text-secondary-600 mb-4">Complete share management including demat conversion and transmission.</p>
                        
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Demat Conversion
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Share Transmission
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Professional Handling
                            </li>
                        </ul>
                        
                        <a href="services/demat-physical-shares.php" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group-hover:translate-x-1 transition-all duration-300">
                            Learn More
                            <i class="fas fa-arrow-right ml-2 w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Associate Program -->
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="text-center">
                        <div class="text-6xl mb-4">🤝</div>
                        <h3 class="text-xl font-semibold text-secondary-800 mb-3">Associate Program</h3>
                        <p class="text-secondary-600 mb-4">Join our network of partners and earn attractive commissions.</p>
                        
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Attractive Commissions
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Training Support
                            </li>
                            <li class="flex items-center justify-center text-sm text-secondary-600">
                                <i class="fas fa-check-circle w-4 h-4 text-green-500 mr-2"></i>
                                Business Growth
                            </li>
                        </ul>
                        
                        <a href="contact.php" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group-hover:translate-x-1 transition-all duration-300">
                            Join Now
                            <i class="fas fa-arrow-right ml-2 w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="section-padding bg-primary-600">
        <div class="container-custom">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center text-white">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="w-12 h-12 mx-auto mb-4 text-primary-200" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M97.12 362.63c-8.69-8.69-4.16-6.24-25.12-11.85-9.51-2.55-17.87-7.45-25.43-13.32L1.2 448.7c-4.39 10.77 3.81 22.47 15.43 22.03l52.69-2.01L105.56 507c8 8.44 22.04 5.81 26.43-4.96l52.05-127.62c-10.84 6.04-22.87 9.58-35.31 9.58-19.5 0-37.82-7.59-51.61-21.37zM382.8 448.7l-45.37-111.24c-7.56 5.88-15.92 10.77-25.43 13.32-21.07 5.64-16.45 3.18-25.12 11.85-13.79 13.78-32.12 21.37-51.62 21.37-12.44 0-24.47-3.55-35.31-9.58L252 502.04c4.39 10.77 18.44 13.4 26.43 4.96l36.25-38.28 52.69 2.01c11.62.44 19.82-11.27 15.43-22.03zM263 340c15.28-15.55 17.03-14.21 38.79-20.14 13.89-3.79 24.75-14.84 28.47-28.98 7.48-28.4 5.54-24.97 25.95-45.75 10.17-10.35 14.14-25.44 10.42-39.58-7.47-28.38-7.48-24.42 0-52.83 3.72-14.14-.25-29.23-10.42-39.58-20.41-20.78-18.47-17.36-25.95-45.75-3.72-14.14-14.58-25.19-28.47-28.98-27.88-7.61-24.52-5.62-44.95-26.41-10.17-10.35-25-14.4-38.89-10.61-27.87 7.6-23.98 7.61-51.9 0-13.89-3.79-28.72.25-38.89 10.61-20.41 20.78-17.05 18.8-44.94 26.41-13.89 3.79-24.75 14.84-28.47 28.98-7.47 28.39-5.54 24.97-25.95 45.75-10.17 10.35-14.15 25.44-10.42 39.58 7.47 28.36 7.48 24.4 0 52.82-3.72 14.14.25 29.23 10.42 39.59 20.41 20.78 18.47 17.35 25.95 45.75 3.72 14.14 14.58 25.19 28.47 28.98C104.6 325.96 106.27 325 121 340c13.23 13.47 33.84 15.88 49.74 5.82a39.676 39.676 0 0 1 42.53 0c15.89 10.06 36.5 7.65 49.73-5.82zM97.66 175.96c0-53.03 42.24-96.02 94.34-96.02s94.34 42.99 94.34 96.02-42.24 96.02-94.34 96.02-94.34-42.99-94.34-96.02z"></path>
                    </svg>
                    <div class="text-4xl font-bold mb-2">25+</div>
                    <div class="text-primary-200">Years Experience</div>
                </div>
                <div class="text-center text-white">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-12 h-12 mx-auto mb-4 text-primary-200" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                    </svg>
                    <div class="text-4xl font-bold mb-2">10,000+</div>
                    <div class="text-primary-200">Happy Clients</div>
                </div>
                <div class="text-center text-white">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-12 h-12 mx-auto mb-4 text-primary-200" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
                    </svg>
                    <div class="text-4xl font-bold mb-2">₹500Cr+</div>
                    <div class="text-primary-200">Amount Recovered</div>
                </div>
                <div class="text-center text-white">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-12 h-12 mx-auto mb-4 text-primary-200" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path>
                    </svg>
                    <div class="text-4xl font-bold mb-2">99%</div>
                    <div class="text-primary-200">Success Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">Why Choose <span class="text-gradient">KMFSL</span>?</h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto mb-6">India's most trusted financial asset recovery specialists with 15+ years of proven expertise in recovering unclaimed investments, insurance benefits, and dormant assets.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                    <div class="bg-primary-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-primary-600 mb-1">₹500Cr+</div>
                        <div class="text-sm text-secondary-600">Total Assets Recovered</div>
                    </div>
                    <div class="bg-green-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-green-600 mb-1">15,000+</div>
                        <div class="text-sm text-secondary-600">Happy Clients Served</div>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-4">
                        <div class="text-2xl font-bold text-blue-600 mb-1">94.2%</div>
                        <div class="text-sm text-secondary-600">Success Rate</div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3">Trusted & Secure</h3>
                    <p class="text-secondary-600">SEBI registered and RBI compliant with highest security standards.</p>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3">Expert Team</h3>
                    <p class="text-secondary-600">Experienced professionals with 25+ years in financial services.</p>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3">Proven Track Record</h3>
                    <p class="text-secondary-600">99% success rate with over ₹500 crores recovered for clients.</p>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3">Transparent Process</h3>
                    <p class="text-secondary-600">Complete transparency with regular updates and progress tracking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Success Stories Section -->
    <section class="section-padding bg-gray-50">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">Client <span class="text-gradient">Success Stories</span></h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">Real stories from satisfied clients who have successfully recovered their assets with our help.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="font-semibold text-secondary-800">Rajesh Kumar</h4>
                            <p class="text-sm text-secondary-600">Mumbai</p>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-green-600">₹2.5L</div>
                            <div class="text-xs text-secondary-500">IEPF Claim</div>
                        </div>
                    </div>
                    <p class="text-secondary-700 italic mb-4">"KMFSL helped me recover ₹2.5 lakhs from IEPF. Their professional approach and timely updates made the entire process smooth."</p>
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <div class="flex items-center justify-between text-sm text-secondary-500">
                        <span>Recovery Time: 45 days</span>
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs font-medium">Completed</span>
                    </div>
                </div>
                <div class="card">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="font-semibold text-secondary-800">Priya Sharma</h4>
                            <p class="text-sm text-secondary-600">Delhi</p>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-green-600">₹1.8L</div>
                            <div class="text-xs text-secondary-500">NRI Services</div>
                        </div>
                    </div>
                    <p class="text-secondary-700 italic mb-4">"Excellent service for NRI clients. They handled all my documentation from the US and recovered my unclaimed mutual funds."</p>
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <div class="flex items-center justify-between text-sm text-secondary-500">
                        <span>Recovery Time: 60 days</span>
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs font-medium">Completed</span>
                    </div>
                </div>
                <div class="card">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="font-semibold text-secondary-800">Amit Patel</h4>
                            <p class="text-sm text-secondary-600">Ahmedabad</p>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-green-600">₹3.2L</div>
                            <div class="text-xs text-secondary-500">Share Services</div>
                        </div>
                    </div>
                    <p class="text-secondary-700 italic mb-4">"Professional team with deep expertise. They successfully converted my physical shares to demat format without any hassle."</p>
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <div class="flex items-center justify-between text-sm text-secondary-500">
                        <span>Recovery Time: 30 days</span>
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs font-medium">Completed</span>
                    </div>
                </div>
            </div>
            
            <!-- Additional Success Stories -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="card">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="font-semibold text-secondary-800">Sunita Devi</h4>
                            <p class="text-sm text-secondary-600">Patna</p>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-green-600">₹4.1L</div>
                            <div class="text-xs text-secondary-500">Insurance Recovery</div>
                        </div>
                    </div>
                    <p class="text-secondary-700 italic mb-4">"After my husband's demise, KMFSL helped me claim his unclaimed insurance policies. Their compassionate approach during difficult times was remarkable."</p>
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <div class="flex items-center justify-between text-sm text-secondary-500">
                        <span>Recovery Time: 75 days</span>
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs font-medium">Completed</span>
                    </div>
                </div>
                <div class="card">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="font-semibold text-secondary-800">Vikram Singh</h4>
                            <p class="text-sm text-secondary-600">Jaipur</p>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-green-600">₹6.8L</div>
                            <div class="text-xs text-secondary-500">Property Claim</div>
                        </div>
                    </div>
                    <p class="text-secondary-700 italic mb-4">"Outstanding service for property claim resolution. They handled complex legal documentation and recovered my ancestral property rights efficiently."</p>
                    <div class="flex text-yellow-400 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <div class="flex items-center justify-between text-sm text-secondary-500">
                        <span>Recovery Time: 90 days</span>
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs font-medium">Completed</span>
                    </div>
                </div>
            </div>
            
            <!-- Success Statistics -->
            <div class="mt-16 bg-white rounded-2xl p-8 shadow-lg">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-secondary-800 mb-2">Our Success in Numbers</h3>
                    <p class="text-secondary-600">Proven track record of successful asset recovery</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">₹500+</div>
                        <div class="text-sm text-secondary-600">Crores Recovered</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">5000+</div>
                        <div class="text-sm text-secondary-600">Happy Clients</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">99%</div>
                        <div class="text-sm text-secondary-600">Success Rate</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">15+</div>
                        <div class="text-sm text-secondary-600">Years Experience</div>
                    </div>
                </div>
            </div>
            
            <!-- View More Testimonials Button -->
            <div class="text-center mt-12">
                <a href="resources/testimonials.php" class="btn-primary inline-flex items-center">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="w-5 h-5 mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                    </svg>
                    View More Success Stories
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="section-padding bg-gradient-to-r from-primary-600 to-accent-500">
        <div class="container-custom text-center text-white">
            <h2 class="text-4xl font-bold mb-4">Ready to Recover Your Assets?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join thousands of satisfied clients who have successfully recovered their unclaimed assets with our expert assistance.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a class="btn-primary bg-white text-primary-600 hover:bg-gray-100" href="client/login.php">Get Started Today</a>
                <a class="btn-secondary border-white text-white hover:bg-white hover:text-primary-600" href="contact.php">Free Consultation</a>
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
                    <form id="contact-form" class="space-y-6">
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
    
    <!-- ChatBot -->
    <?php include 'includes/chatbot.php'; ?>
    
    <!-- Slider JavaScript -->
    <?php include 'complete-nodejs-slider.php'; ?>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');
    if (form) {
        form.addEventListener('submit', function (event) {
            // पेज को रिफ्रेश होने से रोकता है
            event.preventDefault();

            const submitButton = form.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;
            submitButton.innerHTML = 'Submitting...';
            submitButton.disabled = true;

            // फॉर्म से सभी डेटा इकट्ठा करता है
            const formData = new FormData(form);
            const data = {
                name: formData.get('name'),
                email: formData.get('email'),
                phone: formData.get('phone'),
                service: formData.get('service'),
                preferred_contact: formData.get('preferredContact'),
                message: formData.get('message')
            };

            // डेटा को आपके backend API पर भेजता है
            fetch('/php-backend/api/contact_submit.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    // सफल होने पर
                    alert('Thank you for your enquiry! We will contact you soon.');
                    form.reset(); // फॉर्म को खाली कर देता है
                } else {
                    // असफल होने पर
                    alert('An error occurred: ' + result.message);
                }
            })
            .catch(error => {
                // सर्वर से कोई जवाब न मिलने पर
                console.error('Submission error:', error);
                alert('Could not submit the form. Please try again later.');
            })
            .finally(() => {
                // बटन को वापस ठीक कर देता है
                submitButton.innerHTML = originalButtonText;
                submitButton.disabled = false;
            });
        });
    }
});
</script>
</body>
</html>