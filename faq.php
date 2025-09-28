<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - KMFSL | Frequently Asked Questions</title>
    <meta name="description" content="Get answers to frequently asked questions about KMFSL's financial recovery services, IEPF claims, share transmission, and more.">
    
    <!-- Common Styles -->
    <?php include 'includes/styles.php'; ?>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    
    <!-- FAQ Hero Section -->
    <section class="section-padding bg-gradient-to-br from-primary-50 via-white to-accent-50" style="margin-top: 80px;">
        <div class="container-custom">
            <div class="text-center mb-12">
                <div class="inline-flex items-center bg-primary-100 text-primary-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 512 512">
                        <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                    </svg>
                    Frequently Asked Questions
                </div>
                <h1 class="text-4xl lg:text-6xl font-bold text-secondary-800 mb-6">
                    <span class="text-gradient">FAQ</span> Center
                </h1>
                <p class="text-xl text-secondary-600 max-w-4xl mx-auto leading-relaxed mb-8">
                    Find answers to the most commonly asked questions about our services, processes, and policies. Our comprehensive FAQ section covers everything you need to know about asset recovery.
                </p>
                <div class="max-w-2xl mx-auto">
                    <div class="relative">
                        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 text-secondary-400" width="20" height="20" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                        <input type="text" placeholder="Search your questions..." class="w-full pl-12 pr-4 py-4 border border-secondary-200 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent text-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Questions Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-secondary-800 mb-4">Popular <span class="text-gradient">Questions</span></h2>
                <p class="text-lg text-secondary-600 max-w-2xl mx-auto">Most frequently asked questions by our clients.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex items-start justify-between mb-4">
                        <svg class="w-6 h-6 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                        </svg>
                        <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 hover:text-primary-600 transition-colors">What is KMFSL and what services do you provide?</h3>
                    <p class="text-sm text-secondary-600 line-clamp-3">Kaimur Financial Services Pvt. Ltd. (KMFSL) is India's leading financial asset recovery company established in 2009. We specialize in recovering unclaimed investments, insurance benefits, dormant assets, and provide comprehensive wealth recovery solutions. Our services include IEPF claim recovery, share transmission, demat services, insurance recovery, NRI asset recovery, and more.</p>
                    <div class="mt-4 text-primary-600 text-sm font-medium">Click to read more →</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex items-start justify-between mb-4">
                        <svg class="w-6 h-6 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                        </svg>
                        <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 hover:text-primary-600 transition-colors">What is IEPF and how can I claim my money from it?</h3>
                    <p class="text-sm text-secondary-600 line-clamp-3">IEPF (Investor Education and Protection Fund) is a fund established by the Government of India where unclaimed dividends, matured deposits, and shares are transferred after 7 years. To claim your money, you need to file Form IEPF-5 along with required documents. KMFSL can help you with the entire process, from documentation to final recovery.</p>
                    <div class="mt-4 text-primary-600 text-sm font-medium">Click to read more →</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex items-start justify-between mb-4">
                        <svg class="w-6 h-6 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                        </svg>
                        <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 hover:text-primary-600 transition-colors">What is share transmission and when is it required?</h3>
                    <p class="text-sm text-secondary-600 line-clamp-3">Share transmission is the process of transferring shares from a deceased shareholder to their legal heirs or nominees. It is required when the original shareholder passes away and the shares need to be transferred to the rightful heirs. This process involves legal documentation and compliance with regulatory requirements.</p>
                    <div class="mt-4 text-primary-600 text-sm font-medium">Click to read more →</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex items-start justify-between mb-4">
                        <svg class="w-6 h-6 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                        </svg>
                        <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 hover:text-primary-600 transition-colors">Why should I convert my physical shares to demat form?</h3>
                    <p class="text-sm text-secondary-600 line-clamp-3">Converting physical shares to demat form offers several benefits: Easy and instant trading, No risk of loss or theft of certificates, Faster settlement of trades, Easy portfolio tracking, Automatic credit of corporate benefits, and Reduced paperwork. It's also mandatory for trading shares above ₹2 lakhs.</p>
                    <div class="mt-4 text-primary-600 text-sm font-medium">Click to read more →</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex items-start justify-between mb-4">
                        <svg class="w-6 h-6 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                        </svg>
                        <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 hover:text-primary-600 transition-colors">Can I recover unclaimed insurance benefits?</h3>
                    <p class="text-sm text-secondary-600 line-clamp-3">Yes, you can recover unclaimed insurance benefits including matured life insurance policies, health insurance reimbursements, motor insurance claims, and other general insurance benefits. KMFSL helps you identify and recover these unclaimed benefits through proper legal procedures.</p>
                    <div class="mt-4 text-primary-600 text-sm font-medium">Click to read more →</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex items-start justify-between mb-4">
                        <svg class="w-6 h-6 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                        </svg>
                        <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 hover:text-primary-600 transition-colors">Do you provide services for NRI clients?</h3>
                    <p class="text-sm text-secondary-600 line-clamp-3">Yes, we provide specialized NRI services including remote processing of claims, Power of Attorney assistance, FEMA compliance guidance, and support for clients in 50+ countries. Our NRI desk is available 24/7 to assist with your asset recovery needs.</p>
                    <div class="mt-4 text-primary-600 text-sm font-medium">Click to read more →</div>
                </div>
            </div>
        </div>
    </section>

    <!-- All Questions Section -->
    <section class="section-padding bg-white">
        <div class="container-custom">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-secondary-800 mb-6">All <span class="text-gradient">Questions</span></h2>
                <div class="flex flex-wrap justify-center gap-2 mb-8">
                    <button class="px-4 py-2 rounded-full text-sm font-medium transition-colors bg-primary-600 text-white">All Categories (45)</button>
                    <button class="px-4 py-2 rounded-full text-sm font-medium transition-colors bg-gray-100 text-secondary-600 hover:bg-gray-200">IEPF Claims (12)</button>
                    <button class="px-4 py-2 rounded-full text-sm font-medium transition-colors bg-gray-100 text-secondary-600 hover:bg-gray-200">Share Transmission (8)</button>
                    <button class="px-4 py-2 rounded-full text-sm font-medium transition-colors bg-gray-100 text-secondary-600 hover:bg-gray-200">Demat Services (6)</button>
                    <button class="px-4 py-2 rounded-full text-sm font-medium transition-colors bg-gray-100 text-secondary-600 hover:bg-gray-200">Insurance Recovery (7)</button>
                    <button class="px-4 py-2 rounded-full text-sm font-medium transition-colors bg-gray-100 text-secondary-600 hover:bg-gray-200">NRI Services (5)</button>
                    <button class="px-4 py-2 rounded-full text-sm font-medium transition-colors bg-gray-100 text-secondary-600 hover:bg-gray-200">General (7)</button>
                </div>
            </div>
            <div class="max-w-4xl mx-auto space-y-4">
                <div class="bg-white border border-secondary-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex items-start gap-4">
                            <svg class="w-5 h-5 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary-800 mb-1">What is KMFSL and what services do you provide?</h3>
                                <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 ml-4">
                            <svg class="w-5 h-5 text-secondary-400 faq-icon" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer px-6 py-0 max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pb-6">
                            <p class="text-secondary-600">Kaimur Financial Services Pvt. Ltd. (KMFSL) is India's leading financial asset recovery company established in 2009. We specialize in recovering unclaimed investments, insurance benefits, dormant assets, and provide comprehensive wealth recovery solutions. Our services include IEPF claim recovery, share transmission, demat services, insurance recovery, NRI asset recovery, and more.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-secondary-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex items-start gap-4">
                            <svg class="w-5 h-5 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary-800 mb-1">What is IEPF and how can I claim my money from it?</h3>
                                <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 ml-4">
                            <svg class="w-5 h-5 text-secondary-400 faq-icon" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer px-6 py-0 max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pb-6">
                            <p class="text-secondary-600">IEPF (Investor Education and Protection Fund) is a fund established by the Government of India where unclaimed dividends, matured deposits, and shares are transferred after 7 years. To claim your money, you need to file Form IEPF-5 along with required documents. KMFSL can help you with the entire process, from documentation to final recovery.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-secondary-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex items-start gap-4">
                            <svg class="w-5 h-5 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary-800 mb-1">How long does the IEPF claim process take?</h3>
                            </div>
                        </div>
                        <div class="flex-shrink-0 ml-4">
                            <svg class="w-5 h-5 text-secondary-400 faq-icon" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer px-6 py-0 max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pb-6">
                            <p class="text-secondary-600">Our IEPF claim process typically takes 15-30 days from the date of complete documentation submission. This includes verification, application preparation, submission to IEPF authority, and final recovery. We maintain a 98% success rate with our proven methodology.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-secondary-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex items-start gap-4">
                            <svg class="w-5 h-5 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary-800 mb-1">What is share transmission and when is it required?</h3>
                                <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 ml-4">
                            <svg class="w-5 h-5 text-secondary-400 faq-icon" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer px-6 py-0 max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pb-6">
                            <p class="text-secondary-600">Share transmission is the process of transferring shares from a deceased shareholder to their legal heirs or nominees. It is required when the original shareholder passes away and the shares need to be transferred to the rightful heirs. This process involves legal documentation and compliance with regulatory requirements.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-secondary-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex items-start gap-4">
                            <svg class="w-5 h-5 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary-800 mb-1">What documents are required for share transmission?</h3>
                            </div>
                        </div>
                        <div class="flex-shrink-0 ml-4">
                            <svg class="w-5 h-5 text-secondary-400 faq-icon" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer px-6 py-0 max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pb-6">
                            <p class="text-secondary-600">Required documents include death certificate of the original shareholder, legal heir certificate or succession certificate, PAN cards of all legal heirs, Aadhaar cards, bank account details, original share certificates (if available), and notarized affidavits. Our team will guide you through the complete documentation process.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-secondary-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex items-start gap-4">
                            <svg class="w-5 h-5 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary-800 mb-1">Why should I convert my physical shares to demat form?</h3>
                                <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 ml-4">
                            <svg class="w-5 h-5 text-secondary-400 faq-icon" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer px-6 py-0 max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pb-6">
                            <p class="text-secondary-600">Converting physical shares to demat form offers several benefits: Easy and instant trading, No risk of loss or theft of certificates, Faster settlement of trades, Easy portfolio tracking, Automatic credit of corporate benefits, and Reduced paperwork. It's also mandatory for trading shares above ₹2 lakhs.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-secondary-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex items-start gap-4">
                            <svg class="w-5 h-5 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary-800 mb-1">How long does the dematerialization process take?</h3>
                            </div>
                        </div>
                        <div class="flex-shrink-0 ml-4">
                            <svg class="w-5 h-5 text-secondary-400 faq-icon" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer px-6 py-0 max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pb-6">
                            <p class="text-secondary-600">The dematerialization process typically takes 15-21 days from the date of submission of complete documents. This includes verification by the company registrar, processing by the depository, and final credit to your demat account. We ensure smooth processing with regular follow-ups.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-secondary-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                        <div class="flex items-start gap-4">
                            <svg class="w-5 h-5 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-secondary-800 mb-1">Can I recover unclaimed insurance benefits?</h3>
                                <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 ml-4">
                            <svg class="w-5 h-5 text-secondary-400 faq-icon" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer px-6 py-0 max-h-0 overflow-hidden transition-all duration-300">
                        <div class="pb-6">
                            <p class="text-secondary-600">Yes, you can recover unclaimed insurance benefits including matured life insurance policies, health insurance reimbursements, motor insurance claims, and other general insurance benefits. KMFSL helps you identify and recover these unclaimed benefits through proper legal procedures.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-secondary-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                     <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                         <div class="flex items-start gap-4">
                             <svg class="w-5 h-5 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                 <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                             </svg>
                             <div>
                                 <h3 class="text-lg font-semibold text-secondary-800 mb-1">What types of insurance claims can KMFSL help recover?</h3>
                             </div>
                         </div>
                         <div class="flex-shrink-0 ml-4">
                             <svg class="w-5 h-5 text-secondary-400 faq-icon" fill="currentColor" viewBox="0 0 448 512">
                                 <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                             </svg>
                         </div>
                     </button>
                     <div class="faq-answer px-6 py-0 max-h-0 overflow-hidden transition-all duration-300">
                         <div class="pb-6">
                             <p class="text-secondary-600">We help recover various types of insurance claims including matured life insurance policies, endowment policies, money-back policies, health insurance reimbursements, motor insurance claims, fire insurance claims, marine insurance claims, and other general insurance benefits that remain unclaimed.</p>
                         </div>
                     </div>
                 </div>
                 
                 <div class="bg-white border border-secondary-200 rounded-xl overflow-hidden hover:shadow-lg transition-all duration-300">
                     <button class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors" onclick="toggleFAQ(this)">
                         <div class="flex items-start gap-4">
                             <svg class="w-5 h-5 text-primary-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 512 512">
                                 <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                             </svg>
                             <div>
                                 <h3 class="text-lg font-semibold text-secondary-800 mb-1">Do you provide services for NRI clients?</h3>
                                 <span class="bg-primary-100 text-primary-600 text-xs font-semibold px-2 py-1 rounded-full">Popular</span>
                             </div>
                         </div>
                         <div class="flex-shrink-0 ml-4">
                             <svg class="w-5 h-5 text-secondary-400 faq-icon" fill="currentColor" viewBox="0 0 448 512">
                                 <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                             </svg>
                         </div>
                     </button>
                     <div class="faq-answer px-6 py-0 max-h-0 overflow-hidden transition-all duration-300">
                         <div class="pb-6">
                             <p class="text-secondary-600">Yes, we provide specialized NRI services including remote processing of claims, Power of Attorney assistance, FEMA compliance guidance, and support for clients in 50+ countries. Our NRI desk is available 24/7 to assist with your asset recovery needs.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

    <!-- Quick Links Section -->
    <section class="section-padding bg-gray-100">
        <div class="container-custom">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-secondary-800 mb-4">Quick Links</h2>
                <p class="text-secondary-600">Explore more resources and information</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <a class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all duration-300 group" href="/services">
                    <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-secondary-800 mb-2">Our Services</h3>
                    <p class="text-sm text-secondary-600">Explore all our asset recovery services</p>
                </a>
                <a class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all duration-300 group" href="/resources/downloads">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-600 transition-colors">
                        <svg class="w-6 h-6 text-green-600 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-secondary-800 mb-2">Downloads</h3>
                    <p class="text-sm text-secondary-600">Forms, guides, and templates</p>
                </a>
                <a class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all duration-300 group" href="/contact">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-600 transition-colors">
                        <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-secondary-800 mb-2">Contact Us</h3>
                    <p class="text-sm text-secondary-600">Get in touch with our experts</p>
                </a>
                <a class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition-all duration-300 group" href="/become-associate">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-600 transition-colors">
                        <svg class="w-6 h-6 text-purple-600 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 512 512">
                            <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-secondary-800 mb-2">Join Us</h3>
                    <p class="text-sm text-secondary-600">Become a KMFSL associate</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Still Have Questions Section -->
    <section class="section-padding bg-gradient-to-r from-primary-600 to-accent-600">
        <div class="container-custom text-center text-white">
            <h2 class="text-3xl font-bold mb-4">Still Have Questions?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Can't find the answer you're looking for? Our expert support team is here to help you with personalized assistance.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-blur-sm">
                    <svg class="w-8 h-8 mx-auto mb-4" fill="currentColor" viewBox="0 0 512 512">
                        <path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
                    </svg>
                    <h3 class="text-lg font-semibold mb-2">Call Us</h3>
                    <p class="text-sm mb-4">Speak directly with our experts</p>
                    <a href="tel:+919876543210" class="bg-white text-primary-600 py-2 px-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors inline-block">+91 98765 43210</a>
                </div>
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-blur-sm">
                    <svg class="w-8 h-8 mx-auto mb-4" fill="currentColor" viewBox="0 0 512 512">
                        <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                    </svg>
                    <h3 class="text-lg font-semibold mb-2">Email Us</h3>
                    <p class="text-sm mb-4">Get detailed written responses</p>
                    <a href="mailto:support@kmfsl.com" class="bg-white text-primary-600 py-2 px-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors inline-block">support@kmfsl.com</a>
                </div>
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-blur-sm">
                    <svg class="w-8 h-8 mx-auto mb-4" fill="currentColor" viewBox="0 0 576 512">
                        <path d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7S4.8 352 8 352c36.6 0 66.9-12.3 88.7-25 32.2 15.7 70.3 25 111.3 25 114.9 0 208-71.6 208-160zm122 220c23.9-26 38-57.7 38-92 0-66.9-53.5-124.2-129.3-148.1.9 6.6 1.3 13.3 1.3 20.1 0 105.9-107.7 192-240 192-10.8 0-21.3-.8-31.7-1.9C207.8 439.6 281.8 480 368 480c41 0 79.1-9.2 111.3-25 21.8 12.7 52.1 25 88.7 25 3.2 0 6.1-1.9 7.3-4.8 1.3-2.9.7-6.3-1.5-8.7-.3-.3-22.4-24.2-35.8-54.5z"></path>
                    </svg>
                    <h3 class="text-lg font-semibold mb-2">Live Chat</h3>
                    <p class="text-sm mb-4">Instant support available</p>
                    <a class="bg-white text-primary-600 py-2 px-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors inline-block" href="/contact">Start Chat</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Chatbot -->
    <?php include 'includes/chatbot.php'; ?>
    
    <script>
        function toggleFAQ(element) {
            const answer = element.nextElementSibling;
            const icon = element.querySelector('.faq-icon');
            
            // Close all other FAQs
            document.querySelectorAll('button[onclick="toggleFAQ(this)"]').forEach(q => {
                if (q !== element) {
                    q.classList.remove('active');
                    q.nextElementSibling.classList.remove('active');
                    q.querySelector('.faq-icon').classList.remove('active');
                }
            });
            
            // Toggle current FAQ
            element.classList.toggle('active');
            answer.classList.toggle('active');
            icon.classList.toggle('active');
            
            // Update max-height for smooth animation
            if (answer.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                answer.style.paddingTop = '1.5rem';
                answer.style.paddingBottom = '1.5rem';
            } else {
                answer.style.maxHeight = '0';
                answer.style.paddingTop = '0';
                answer.style.paddingBottom = '0';
            }
        }
        
        // Auto-expand first FAQ
        document.addEventListener('DOMContentLoaded', function() {
            const firstFAQ = document.querySelector('button[onclick="toggleFAQ(this)"]');
            if (firstFAQ) {
                toggleFAQ(firstFAQ);
            }
        });
    </script>
</body>
</html>