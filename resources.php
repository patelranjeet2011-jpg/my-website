<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources - KMFSL | Financial Knowledge & Support Center</title>
    <meta name="description" content="Access KMFSL's comprehensive resource center with FAQs, downloads, testimonials, and expert financial guidance for asset recovery services.">
    
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
    
    <!-- Resources Hero Section -->
    <section class="section-padding bg-gradient-to-br from-primary-50 via-white to-accent-50">
        <div class="container-custom">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-primary-100 text-primary-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="mr-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg">
                        <path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v240c0 88.4 71.6 160 160 160h8c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24h-8c-35.3 0-64-28.7-64-64v-64h80c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48z"></path>
                    </svg>
                    Knowledge & Support Center
                </div>
                <h1 class="text-4xl lg:text-6xl font-bold text-secondary-800 mb-6">
                    Resources & <span class="text-gradient">Support</span>
                </h1>
                <p class="text-xl text-secondary-600 max-w-4xl mx-auto leading-relaxed mb-8">
                    Access comprehensive resources, expert guidance, and support materials to help you navigate your financial asset recovery journey with confidence.
                </p>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-6 h-6 text-primary-600" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                            </svg>
                        </div>
                        <div class="text-2xl font-bold text-secondary-800 mb-1">100+</div>
                        <div class="text-sm text-secondary-600">FAQs Available</div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-6 h-6 text-primary-600" xmlns="http://www.w3.org/2000/svg">
                                <path d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
                            </svg>
                        </div>
                        <div class="text-2xl font-bold text-secondary-800 mb-1">50+</div>
                        <div class="text-sm text-secondary-600">Downloads</div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="w-6 h-6 text-primary-600" xmlns="http://www.w3.org/2000/svg">
                                <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                            </svg>
                        </div>
                        <div class="text-2xl font-bold text-secondary-800 mb-1">500+</div>
                        <div class="text-sm text-secondary-600">Success Stories</div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-6 h-6 text-primary-600" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
                            </svg>
                        </div>
                        <div class="text-2xl font-bold text-secondary-800 mb-1">24/7</div>
                        <div class="text-sm text-secondary-600">Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Resource Categories Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-secondary-800 mb-4">Resource <span class="text-gradient">Categories</span></h2>
                <p class="text-lg text-secondary-600 max-w-2xl mx-auto">Explore our comprehensive collection of resources designed to support your financial recovery journey.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- FAQ Card -->
                <div class="card hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-primary-600" xmlns="http://www.w3.org/2000/svg">
                            <path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-800 mb-4 text-center">Frequently Asked Questions</h3>
                    <p class="text-secondary-600 mb-6 text-center">Find answers to common questions about our services, processes, and requirements.</p>
                    <div class="text-center">
                        <a href="resources/faq.php" class="btn-primary inline-flex items-center">
                            View FAQs
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 512" class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg">
                                <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Downloads Card -->
                <div class="card hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-green-600" xmlns="http://www.w3.org/2000/svg">
                            <path d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-800 mb-4 text-center">Downloads & Forms</h3>
                    <p class="text-secondary-600 mb-6 text-center">Access essential forms, documents, and guides for your financial recovery process.</p>
                    <div class="text-center">
                        <a href="resources/downloads.php" class="btn-primary inline-flex items-center">
                            View Downloads
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 512" class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg">
                                <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Testimonials Card -->
                <div class="card hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="w-8 h-8 text-yellow-600" xmlns="http://www.w3.org/2000/svg">
                            <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-800 mb-4 text-center">Success Stories</h3>
                    <p class="text-secondary-600 mb-6 text-center">Read inspiring testimonials from clients who successfully recovered their assets.</p>
                    <div class="text-center">
                        <a href="resources/testimonials.php" class="btn-primary inline-flex items-center">
                            Read Stories
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 512" class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg">
                                <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Blog Card -->
                <div class="card hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-purple-600" xmlns="http://www.w3.org/2000/svg">
                            <path d="M172.2 226.8c-14.6-2.9-28.2 8.9-28.2 23.8V301c0 10.2 7.1 18.4 16.7 22 18.2 6.8 31.3 24.4 31.3 45 0 26.5-21.5 48-48 48s-48-21.5-48-48V120c0-13.3-10.7-24-24-24H24c-13.3 0-24 10.7-24 24v248c0 89.5 82.1 160.2 175 140.7 54.4-11.4 98.3-55.4 109.7-109.7 17.4-82.9-37-157.2-112.5-172.2zM209 0c-9.2-.5-17 6.8-17 16v31.6c0 8.5 6.6 15.5 15 15.9 129.4 7 233.4 112 240.9 241.5.5 8.4 7.5 15 15.9 15h32.1c9.2 0 16.5-7.8 16-17C503.4 139.8 372.2 8.6 209 0zm.3 96c-9.3-.7-17.3 6.7-17.3 16.1v32.1c0 8.4 6.5 15.3 14.8 15.9 76.8 6.3 138 68.2 144.9 145.2.8 8.3 7.6 14.7 15.9 14.7h32.2c9.3 0 16.8-8 16.1-17.3-8.4-110.1-96.5-198.2-206.6-206.7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-800 mb-4 text-center">Blog & Articles</h3>
                    <p class="text-secondary-600 mb-6 text-center">Stay updated with latest insights, tips, and news about financial asset recovery.</p>
                    <div class="text-center">
                        <a href="resources/blog.php" class="btn-primary inline-flex items-center">
                            Read Blog
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 512" class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg">
                                <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- News Room Card -->
                <div class="card hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="w-8 h-8 text-red-600" xmlns="http://www.w3.org/2000/svg">
                            <path d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 53.019 42.981 96 96 96s96-42.981 96-96V176h8c13.255 0 24-10.745 24-24V88c0-13.255 10.745-24 24-24h464c13.255 0 24-10.745 24-24V88c0-13.255-10.745-24-24-24zM96 464c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48zm400-88H232v-16c0-4.418-3.582-8-8-8h-16c-4.418 0-8 3.582-8 8v16H96c-13.255 0-24 10.745-24 24s10.745 24 24 24h104v16c0 4.418 3.582 8 8 8h16c4.418 0 8-3.582 8-8v-16h264c13.255 0 24-10.745 24-24s-10.745-24-24-24z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-800 mb-4 text-center">News & Updates</h3>
                    <p class="text-secondary-600 mb-6 text-center">Get the latest news, press releases, and company updates from KMFSL.</p>
                    <div class="text-center">
                        <a href="resources/news-room.php" class="btn-primary inline-flex items-center">
                            View News
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 512" class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg">
                                <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Digital Talk Show Card -->
                <div class="card hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg">
                            <path d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary-800 mb-4 text-center">Digital Talk Show</h3>
                    <p class="text-secondary-600 mb-6 text-center">Watch expert discussions and educational content about financial recovery.</p>
                    <div class="text-center">
                        <a href="resources/digital-talk-show.php" class="btn-primary inline-flex items-center">
                            Watch Videos
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 512" class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg">
                                <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
            </div>
        </div>
        

    </section>
    
    <!-- Resources Grid -->
    <section id="resources-grid" class="section-padding bg-white">
        <div class="container-custom px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">
                    Explore Our <span class="text-gradient">Resources</span>
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    Access comprehensive resources, expert guidance, and support materials to help you navigate your financial asset recovery journey.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- FAQ -->
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-100 transition-colors duration-300">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-blue-600 group-hover:text-primary-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary-800 mb-2">Frequently Asked Questions</h3>
                        <p class="text-secondary-600 mb-4">
                            Find answers to common questions about our services and processes.
                        </p>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-check-circle text-green-600 mr-2"></i>
                            100+ Common Questions
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-search text-orange-600 mr-2"></i>
                            Easy Search Function
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-clock text-purple-600 mr-2"></i>
                            Updated Regularly
                        </div>
                    </div>
                    
                    <a href="resources/faq.php" class="btn-primary w-full text-center">
                        View FAQs <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Downloads -->
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-100 transition-colors duration-300">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-green-600 group-hover:text-primary-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg">
                                <path d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary-800 mb-2">Downloads</h3>
                        <p class="text-secondary-600 mb-4">
                            Access forms, guides, and documents for your asset recovery process.
                        </p>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            Application Forms
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-book text-blue-600 mr-2"></i>
                            Process Guides
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-certificate text-green-600 mr-2"></i>
                            Sample Documents
                        </div>
                    </div>
                    
                    <a href="resources/downloads.php" class="btn-primary w-full text-center">
                        View Downloads <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Testimonials -->
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-100 transition-colors duration-300">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="w-8 h-8 text-yellow-600 group-hover:text-primary-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg">
                                <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary-800 mb-2">Success Stories</h3>
                        <p class="text-secondary-600 mb-4">
                            Read testimonials and success stories from our satisfied clients.
                        </p>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-users text-blue-600 mr-2"></i>
                            500+ Success Stories
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-trophy text-gold-600 mr-2"></i>
                            Verified Reviews
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-heart text-red-600 mr-2"></i>
                            Client Satisfaction
                        </div>
                    </div>
                    
                    <a href="resources/testimonials.php" class="btn-primary w-full text-center">
                        Read Stories <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- Blog -->
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-100 transition-colors duration-300">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-8 h-8 text-purple-600 group-hover:text-primary-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg">
                                <path d="M172.2 226.8c-14.6-2.9-28.2 8.9-28.2 23.8V301c0 10.2 7.1 18.4 16.7 22 18.2 6.8 31.3 24.4 31.3 45 0 26.5-21.5 48-48 48s-48-21.5-48-48V120c0-13.3-10.7-24-24-24H24c-13.3 0-24 10.7-24 24v248c0 89.5 82.1 160.2 175 140.7 54.4-11.4 98.3-55.4 109.7-109.7 17.4-82.9-37-157.2-112.5-172.2zM209 0c-9.2-.5-17 6.8-17 16v31.6c0 8.5 6.6 15.5 15 15.9 129.4 7 233.4 112 240.9 241.5.5 8.4 7.5 15 15.9 15h32.1c9.2 0 16.5-7.8 16-17C503.4 139.8 372.2 8.6 209 0zm.3 96c-9.3-.7-17.3 6.7-17.3 16.1v32.1c0 8.4 6.5 15.3 14.8 15.9 76.8 6.3 138 68.2 144.9 145.2.8 8.3 7.6 14.7 15.9 14.7h32.2c9.3 0 16.8-8 16.1-17.3-8.4-110.1-96.5-198.2-206.6-206.7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary-800 mb-2">Blog & Articles</h3>
                        <p class="text-secondary-600 mb-4">
                            Stay updated with latest insights and expert articles on financial recovery.
                        </p>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-newspaper text-blue-600 mr-2"></i>
                            Latest Articles
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>
                            Expert Insights
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-calendar text-green-600 mr-2"></i>
                            Regular Updates
                        </div>
                    </div>
                    
                    <a href="resources/blog.php" class="btn-primary w-full text-center">
                        Read Blog <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                
                <!-- News Room -->
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-100 transition-colors duration-300">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="w-8 h-8 text-red-600 group-hover:text-primary-600 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg">
                                <path d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 53.019 42.981 96 96 96s96-42.981 96-96V176h8c13.255 0 24-10.745 24-24V88c0-13.255 10.745-24 24-24h464c13.255 0 24-10.745 24-24V88c0-13.255-10.745-24-24-24zM96 464c-26.467 0-48-21.533-48-48s21.533-48 48-48 48 21.533 48 48-21.533 48-48 48zm400-88H232v-16c0-4.418-3.582-8-8-8h-16c-4.418 0-8 3.582-8 8v16H96c-13.255 0-24 10.745-24 24s10.745 24 24 24h104v16c0 4.418 3.582 8 8 8h16c4.418 0 8-3.582 8-8v-16h264c13.255 0 24-10.745 24-24s-10.745-24-24-24z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary-800 mb-2">News Room</h3>
                        <p class="text-secondary-600 mb-4">
                            Latest news, updates, and announcements from KMFSL.
                        </p>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-bullhorn text-blue-600 mr-2"></i>
                            Company News
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-chart-line text-green-600 mr-2"></i>
                            Industry Updates
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <i class="fas fa-bell text-orange-600 mr-2"></i>
                            Important Notices
                        </div>
                    </div>
                    
                    <a href="resources/news-room.php" class="btn-primary w-full text-center">
                        View News <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                

            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="section-padding bg-gradient-to-r from-primary-600 to-accent-500">
        <div class="container-custom">
            <div class="text-center text-white">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                    Need More Help?
                </h2>
                <p class="text-xl mb-8 opacity-90">
                    Can't find what you're looking for? Our expert team is here to help you with personalized assistance.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="contact.php" class="bg-white text-primary-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300">
                        Contact Support
                    </a>
                    <a href="tel:+917070972333" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-primary-600 transition-colors duration-300">
                        Call: +91 7070972333
                    </a>
                </div>
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
    
    <!-- ChatBot -->
    <?php include 'includes/chatbot.php'; ?>
    
    <!-- Slider JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentSlide = 0;
            const totalSlides = 2;
            let slideInterval;
            
            function showSlide(index) {
                const slides = document.querySelectorAll('.slide');
                const dots = document.querySelectorAll('.slider-dot');
                
                if (slides.length === 0) return;
                
                slides.forEach(slide => {
                    slide.classList.remove('active');
                });
                
                dots.forEach(dot => {
                    dot.classList.remove('active');
                });
                
                if (slides[index]) {
                    slides[index].classList.add('active');
                }
                
                if (dots[index]) {
                    dots[index].classList.add('active');
                }
            }
            
            window.showSlide = showSlide;
            
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            }
            
            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
            }
            
            function goToSlide(index) {
                currentSlide = index;
                showSlide(currentSlide);
            }
            
            window.nextSlide = nextSlide;
            window.prevSlide = prevSlide;
            window.goToSlide = goToSlide;
            
            // Auto-play slider
            function startSlideshow() {
                slideInterval = setInterval(nextSlide, 5000);
            }
            
            function stopSlideshow() {
                clearInterval(slideInterval);
            }
            
            // Start auto-play
            startSlideshow();
            
            // Pause on hover
            const slider = document.querySelector('.hero-slider');
            if (slider) {
                slider.addEventListener('mouseenter', stopSlideshow);
                slider.addEventListener('mouseleave', startSlideshow);
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href && href !== '#' && href.length > 1) {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    </script>
    
    <!-- Slider JavaScript -->
    <?php include 'complete-nodejs-slider.php'; ?>
</body>
</html>