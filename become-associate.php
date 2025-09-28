<?php
session_start();

$success_message = '';
$error_message = '';

// Handle enquiry form submission
if ($_POST) {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $city = htmlspecialchars(trim($_POST['city'] ?? ''));
    $experience = htmlspecialchars(trim($_POST['experience'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!$email) {
        $error_message = 'Please enter a valid email address.';
    } else {
        // Send email notification
        $to = 'help@kmfsl.in';
        $subject = 'New Associate Program Application - ' . $name;
        $email_message = "New Associate Program Application:\n\nName: $name\nEmail: $email\nPhone: $phone\nCity: $city\nExperience: $experience\nMessage: $message";
        $headers = "From: noreply@kmfsl.in\r\nReply-To: $email";
        
        if (mail($to, $subject, $email_message, $headers)) {
            $success_message = 'Thank you for your interest in our Associate Program! We will contact you soon.';
        } else {
            $success_message = 'Your application has been submitted successfully!';
        }
        $_POST = array();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become Associate - KMFSL | Join Our Partner Network</title>
    <meta name="description" content="Join KMFSL's Associate Program and build a rewarding career in wealth recovery. Earn attractive commissions while helping clients recover their assets.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a'
                        },
                        secondary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a'
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Include Styles -->
    <?php include 'includes/styles.php'; ?>
    
    <!-- Custom Styles -->
    <style>
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        /* Slider Styles */
        .hero-slider {
            position: relative;
            overflow: hidden;
        }
        
        .slide {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        
        .slide.active {
            display: block;
            opacity: 1;
        }
        
        .slide h1, .slide h2, .slide p {
            animation: slideInUp 0.8s ease-out;
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    
    <!-- Hero Slider Section -->
    <section class="hero-slider relative overflow-hidden">
        <!-- Slide 1: IEPF Claim Services -->
        <div class="slide active" data-slide="0">
            <div class="min-h-[70vh] bg-gradient-to-r from-blue-600 to-purple-600 flex items-center">
                <div class="container-custom relative z-10">
                    <div class="grid lg:grid-cols-2 gap-12 items-center px-4">
                        <div class="text-white space-y-6">
                            <div class="space-y-4">
                                <h1 class="text-4xl lg:text-6xl font-bold leading-tight">IEPF Claim Services</h1>
                                <h2 class="text-xl lg:text-2xl font-medium text-white/90">Recover Your Unclaimed Shares & Dividends</h2>
                                <p class="text-lg text-white/80 max-w-2xl leading-relaxed">Professional assistance in claiming your shares and dividends transferred to IEPF. Our expert team ensures maximum recovery with minimal hassle.</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                                <a href="services/iepf-claim.php" class="inline-flex items-center justify-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-lg hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    Start Claim Process
                                    <i class="fas fa-arrow-right ml-2 w-4 h-4"></i>
                                </a>
                                <a href="client/login.php" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                                    <i class="fas fa-sign-in-alt mr-2 w-4 h-4"></i>
                                    Client Login
                                </a>
                            </div>
                        </div>
                        <div class="hidden lg:block">
                            <div class="relative">
                                <div class="w-96 h-96 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                    <div class="w-80 h-80 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                        <div class="w-64 h-64 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                            <div class="text-6xl text-white/80">📊</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2: Wealth Recovery Solutions -->
        <div class="slide" data-slide="1">
            <div class="min-h-[70vh] bg-gradient-to-r from-green-600 to-blue-600 flex items-center">
                <div class="container-custom relative z-10">
                    <div class="grid lg:grid-cols-2 gap-12 items-center px-4">
                        <div class="text-white space-y-6">
                            <div class="space-y-4">
                                <h1 class="text-4xl lg:text-6xl font-bold leading-tight">Wealth Recovery Solutions</h1>
                                <h2 class="text-xl lg:text-2xl font-medium text-white/90">Comprehensive Financial Asset Recovery</h2>
                                <p class="text-lg text-white/80 max-w-2xl leading-relaxed">Specialized services for recovering unclaimed mutual funds, insurance policies, bank accounts, and provident funds. Your wealth, recovered professionally.</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                                <a href="services/wealth-samadhan.php" class="inline-flex items-center justify-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-lg hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    Explore Services
                                    <i class="fas fa-arrow-right ml-2 w-4 h-4"></i>
                                </a>
                                <a href="client/login.php" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                                    <i class="fas fa-sign-in-alt mr-2 w-4 h-4"></i>
                                    Get Started
                                </a>
                            </div>
                        </div>
                        <div class="hidden lg:block">
                            <div class="relative">
                                <div class="w-96 h-96 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                    <div class="w-80 h-80 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                        <div class="w-64 h-64 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                            <div class="text-6xl text-white/80">💰</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 3: NRI Financial Services -->
        <div class="slide" data-slide="2">
            <div class="min-h-[70vh] bg-gradient-to-r from-orange-600 to-red-600 flex items-center">
                <div class="container-custom relative z-10">
                    <div class="grid lg:grid-cols-2 gap-12 items-center px-4">
                        <div class="text-white space-y-6">
                            <div class="space-y-4">
                                <h1 class="text-4xl lg:text-6xl font-bold leading-tight">NRI Financial Services</h1>
                                <h2 class="text-xl lg:text-2xl font-medium text-white/90">Specialized Solutions for Non-Resident Indians</h2>
                                <p class="text-lg text-white/80 max-w-2xl leading-relaxed">Comprehensive financial services for NRIs including asset recovery, investment management, and legal compliance. Your trusted partner for Indian financial matters.</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                                <a href="services/nri-samadhan.php" class="inline-flex items-center justify-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-lg hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    NRI Services
                                    <i class="fas fa-arrow-right ml-2 w-4 h-4"></i>
                                </a>
                                <a href="contact.php" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                                    <i class="fas fa-globe mr-2 w-4 h-4"></i>
                                    Global Support
                                </a>
                            </div>
                        </div>
                        <div class="hidden lg:block">
                            <div class="relative">
                                <div class="w-96 h-96 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                    <div class="w-80 h-80 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                        <div class="w-64 h-64 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                            <div class="text-6xl text-white/80">🌍</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Hero Section -->
    <section class="section-padding bg-gradient-to-br from-primary-50 via-white to-accent-50">
        <div class="container-custom">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl lg:text-6xl font-bold text-secondary-800 mb-6">
                        Become Our <span class="text-gradient">Associate</span>
                    </h1>
                    <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                        Join India's most prestigious financial asset recovery network and build a lucrative career in the fastest-growing fintech sector. As a KMFSL Certified Associate, you'll be part of an elite team that has recovered ₹500+ Crores for clients while earning substantial commissions and building long-term wealth.
                    </p>
                    <p class="text-lg text-secondary-600 mb-8 leading-relaxed">
                        Our comprehensive associate program offers industry-leading commission structures (up to 25%), extensive training by certified professionals, cutting-edge technology platform, marketing support, and ongoing mentorship. With over 1,000+ successful associates across India earning ₹50K to ₹5L+ monthly, this is your opportunity to join a proven business model.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a class="btn-primary" href="#apply">Apply Now</a>
                        <a class="btn-secondary" href="#benefits">Learn More</a>
                    </div>
                </div>
                <div class="relative">
                    <div class="w-full h-96 bg-gradient-to-br from-primary-100 to-accent-100 rounded-2xl flex items-center justify-center">
                        <div class="text-center">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-24 h-24 text-primary-600 mx-auto mb-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M434.7 64h-85.9c-8 0-15.7 3-21.6 8.4l-98.3 90c-.1.1-.2.3-.3.4-16.6 15.6-16.3 40.5-2.1 56 12.7 13.9 39.4 17.6 56.1 2.7.1-.1.3-.1.4-.2l79.9-73.2c6.5-5.9 16.7-5.5 22.6 1 6 6.5 5.5 16.6-1 22.6l-26.1 23.9L504 313.8c2.9 2.4 5.5 5 7.9 7.7V128l-54.6-54.6c-5.9-6-14.1-9.4-22.6-9.4zM544 128.2v223.9c0 17.7 14.3 32 32 32h64V128.2h-96zm48 223.9c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM0 384h64c17.7 0 32-14.3 32-32V128.2H0V384zm48-63.9c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16c0-8.9 7.2-16 16-16zm435.9 18.6L334.6 217.5l-30 27.5c-29.7 27.1-75.2 24.5-101.7-4.4-26.9-29.4-24.8-74.9 4.4-101.7L289.1 64h-83.8c-8.5 0-16.6 3.4-22.6 9.4L128 128v223.9h18.3l90.5 81.9c27.4 22.3 67.7 18.1 90-9.3l.2-.2 17.9 15.5c15.9 13 39.4 10.5 52.3-5.4l31.4-38.6 5.4 4.4c13.7 11.1 33.9 9.1 45-4.7l9.5-11.7c11.2-13.8 9.1-33.9-4.6-45.1z"></path>
                            </svg>
                            <h3 class="text-2xl font-bold text-secondary-800 mb-2">Join Our Network</h3>
                            <p class="text-secondary-600">500+ Associates Nationwide</p>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-accent-500 rounded-full flex items-center justify-center animate-bounce">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" class="w-8 h-8 text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M308 96c6.627 0 12-5.373 12-12V44c0-6.627-5.373-12-12-12H12C5.373 32 0 37.373 0 44v44.748c0 6.627 5.373 12 12 12h85.28c27.308 0 48.261 9.958 60.97 27.252H12c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h158.757c-6.217 36.086-32.961 58.632-74.757 58.632H12c-6.627 0-12 5.373-12 12v53.012c0 3.349 1.4 6.546 3.861 8.818l165.052 152.356a12.001 12.001 0 0 0 8.139 3.182h82.562c10.924 0 16.166-13.408 8.139-20.818L116.871 319.906c76.499-2.34 131.144-53.395 138.318-127.906H308c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12h-58.69c-3.486-11.541-8.28-22.246-14.252-32H308z"></path>
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
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-secondary-800 mb-2">500+</div>
                    <div class="text-secondary-600">Active Associates</div>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M308 96c6.627 0 12-5.373 12-12V44c0-6.627-5.373-12-12-12H12C5.373 32 0 37.373 0 44v44.748c0 6.627 5.373 12 12 12h85.28c27.308 0 48.261 9.958 60.97 27.252H12c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h158.757c-6.217 36.086-32.961 58.632-74.757 58.632H12c-6.627 0-12 5.373-12 12v53.012c0 3.349 1.4 6.546 3.861 8.818l165.052 152.356a12.001 12.001 0 0 0 8.139 3.182h82.562c10.924 0 16.166-13.408 8.139-20.818L116.871 319.906c76.499-2.34 131.144-53.395 138.318-127.906H308c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12h-58.69c-3.486-11.541-8.28-22.246-14.252-32H308z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-secondary-800 mb-2">₹2Cr+</div>
                    <div class="text-secondary-600">Commissions Paid</div>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-secondary-800 mb-2">25+</div>
                    <div class="text-secondary-600">Cities Covered</div>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-600 transition-colors duration-300">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="w-10 h-10 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M97.12 362.63c-8.69-8.69-4.16-6.24-25.12-11.85-9.51-2.55-17.87-7.45-25.43-13.32L1.2 448.7c-4.39 10.77 3.81 22.47 15.43 22.03l52.69-2.01L105.56 507c8 8.44 22.04 5.81 26.43-4.96l52.05-127.62c-10.84 6.04-22.87 9.58-35.31 9.58-19.5 0-37.82-7.59-51.61-21.37zM382.8 448.7l-45.37-111.24c-7.56 5.88-15.92 10.77-25.43 13.32-21.07 5.64-16.45 3.18-25.12 11.85-13.79 13.78-32.12 21.37-51.62 21.37-12.44 0-24.47-3.55-35.31-9.58L252 502.04c4.39 10.77 18.44 13.4 26.43 4.96l36.25-38.28 52.69 2.01c11.62.44 19.82-11.27 15.43-22.03zM263 340c15.28-15.55 17.03-14.21 38.79-20.14 13.89-3.79 24.75-14.84 28.47-28.98 7.48-28.4 5.54-24.97 25.95-45.75 10.17-10.35 14.14-25.44 10.42-39.58-7.47-28.38-7.48-24.42 0-52.83 3.72-14.14-.25-29.23-10.42-39.58-20.41-20.78-18.47-17.36-25.95-45.75-3.72-14.14-14.58-25.19-28.47-28.98-27.88-7.61-24.52-5.62-44.95-26.41-10.17-10.35-25-14.4-38.89-10.61-27.87 7.6-23.98 7.61-51.9 0-13.89-3.79-28.72.25-38.89 10.61-20.41 20.78-17.05 18.8-44.94 26.41-13.89 3.79-24.75 14.84-28.47 28.98-7.47 28.39-5.54 24.97-25.95 45.75-10.17 10.35-14.15 25.44-10.42 39.58 7.47 28.36 7.48 24.4 0 52.82-3.72 14.14.25 29.23 10.42 39.59 20.41 20.78 18.47 17.35 25.95 45.75 3.72 14.14 14.58 25.19 28.47 28.98C104.6 325.96 106.27 325 121 340c13.23 13.47 33.84 15.88 49.74 5.82a39.676 39.676 0 0 1 42.53 0c15.89 10.06 36.5 7.65 49.73-5.82zM97.66 175.96c0-53.03 42.24-96.02 94.34-96.02s94.34 42.99 94.34 96.02-42.24 96.02-94.34 96.02-94.34-42.99-94.34-96.02z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-secondary-800 mb-2">95%</div>
                    <div class="text-secondary-600">Satisfaction Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="section-padding">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">Why Choose <span class="text-gradient">KMFSL</span>?</h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">Discover the exclusive benefits and opportunities that make KMFSL the best choice for your career growth.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-300">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M308 96c6.627 0 12-5.373 12-12V44c0-6.627-5.373-12-12-12H12C5.373 32 0 37.373 0 44v44.748c0 6.627 5.373 12 12 12h85.28c27.308 0 48.261 9.958 60.97 27.252H12c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h158.757c-6.217 36.086-32.961 58.632-74.757 58.632H12c-6.627 0-12 5.373-12 12v53.012c0 3.349 1.4 6.546 3.861 8.818l165.052 152.356a12.001 12.001 0 0 0 8.139 3.182h82.562c10.924 0 16.166-13.408 8.139-20.818L116.871 319.906c76.499-2.34 131.144-53.395 138.318-127.906H308c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12h-58.69c-3.486-11.541-8.28-22.246-14.252-32H308z"></path>
                            </svg>
                        </div>
                        <span class="bg-accent-100 text-accent-600 text-xs font-semibold px-3 py-1 rounded-full">Up to 25%</span>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">High Commission Rates</h3>
                    <p class="text-secondary-600">Earn up to 25% commission on successful recoveries with transparent payout structure.</p>
                </div>
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-300">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                            </svg>
                        </div>
                        <span class="bg-accent-100 text-accent-600 text-xs font-semibold px-3 py-1 rounded-full">24/7 Support</span>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Dedicated Support Team</h3>
                    <p class="text-secondary-600">Get dedicated relationship manager and technical support for all your queries.</p>
                </div>
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-300">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
                            </svg>
                        </div>
                        <span class="bg-accent-100 text-accent-600 text-xs font-semibold px-3 py-1 rounded-full">Extra Bonuses</span>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Performance Incentives</h3>
                    <p class="text-secondary-600">Additional bonuses and incentives based on your monthly and quarterly performance.</p>
                </div>
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-300">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z"></path>
                            </svg>
                        </div>
                        <span class="bg-accent-100 text-accent-600 text-xs font-semibold px-3 py-1 rounded-full">Free Training</span>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Training & Certification</h3>
                    <p class="text-secondary-600">Comprehensive training programs and certifications to enhance your expertise.</p>
                </div>
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-300">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z"></path>
                            </svg>
                        </div>
                        <span class="bg-accent-100 text-accent-600 text-xs font-semibold px-3 py-1 rounded-full">Marketing Kit</span>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Marketing Support</h3>
                    <p class="text-secondary-600">Complete marketing materials, brochures, and digital assets for promotion.</p>
                </div>
                <div class="card group hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center group-hover:bg-primary-600 transition-colors duration-300">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors duration-300" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M97.12 362.63c-8.69-8.69-4.16-6.24-25.12-11.85-9.51-2.55-17.87-7.45-25.43-13.32L1.2 448.7c-4.39 10.77 3.81 22.47 15.43 22.03l52.69-2.01L105.56 507c8 8.44 22.04 5.81 26.43-4.96l52.05-127.62c-10.84 6.04-22.87 9.58-35.31 9.58-19.5 0-37.82-7.59-51.61-21.37zM382.8 448.7l-45.37-111.24c-7.56 5.88-15.92 10.77-25.43 13.32-21.07 5.64-16.45 3.18-25.12 11.85-13.79 13.78-32.12 21.37-51.62 21.37-12.44 0-24.47-3.55-35.31-9.58L252 502.04c4.39 10.77 18.44 13.4 26.43 4.96l36.25-38.28 52.69 2.01c11.62.44 19.82-11.27 15.43-22.03zM263 340c15.28-15.55 17.03-14.21 38.79-20.14 13.89-3.79 24.75-14.84 28.47-28.98 7.48-28.4 5.54-24.97 25.95-45.75 10.17-10.35 14.14-25.44 10.42-39.58-7.47-28.38-7.48-24.42 0-52.83 3.72-14.14-.25-29.23-10.42-39.58-20.41-20.78-18.47-17.36-25.95-45.75-3.72-14.14-14.58-25.19-28.47-28.98-27.88-7.61-24.52-5.62-44.95-26.41-10.17-10.35-25-14.4-38.89-10.61-27.87 7.6-23.98 7.61-51.9 0-13.89-3.79-28.72.25-38.89 10.61-20.41 20.78-17.05 18.8-44.94 26.41-13.89 3.79-24.75 14.84-28.47 28.98-7.47 28.39-5.54 24.97-25.95 45.75-10.17 10.35-14.15 25.44-10.42 39.58 7.47 28.36 7.48 24.4 0 52.82-3.72 14.14.25 29.23 10.42 39.59 20.41 20.78 18.47 17.35 25.95 45.75 3.72 14.14 14.58 25.19 28.47 28.98C104.6 325.96 106.27 325 121 340c13.23 13.47 33.84 15.88 49.74 5.82a39.676 39.676 0 0 1 42.53 0c15.89 10.06 36.5 7.65 49.73-5.82zM97.66 175.96c0-53.03 42.24-96.02 94.34-96.02s94.34 42.99 94.34 96.02-42.24 96.02-94.34 96.02-94.34-42.99-94.34-96.02z"></path>
                            </svg>
                        </div>
                        <span class="bg-accent-100 text-accent-600 text-xs font-semibold px-3 py-1 rounded-full">Awards & Recognition</span>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Recognition Programs</h3>
                    <p class="text-secondary-600">Regular recognition and awards for top-performing associates.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Requirements & Eligibility Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4"><span class="text-gradient">Requirements</span> & Eligibility</h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">Check if you meet our basic requirements to become a successful KMFSL associate.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="text-4xl mb-4">🎓</div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Educational Qualification</h3>
                    <p class="text-secondary-600">Minimum graduation in any discipline. Finance/Commerce background preferred.</p>
                </div>
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="text-4xl mb-4">💼</div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Experience</h3>
                    <p class="text-secondary-600">2+ years experience in sales, finance, or customer service preferred.</p>
                </div>
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="text-4xl mb-4">💬</div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Communication Skills</h3>
                    <p class="text-secondary-600">Excellent communication skills in Hindi and English.</p>
                </div>
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="text-4xl mb-4">💻</div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Technology Access</h3>
                    <p class="text-secondary-600">Computer/laptop with internet connection and smartphone.</p>
                </div>
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="text-4xl mb-4">📄</div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Documentation</h3>
                    <p class="text-secondary-600">Valid PAN card, Aadhaar card, and bank account details.</p>
                </div>
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="text-4xl mb-4">⏰</div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Commitment</h3>
                    <p class="text-secondary-600">Minimum 20 hours per week commitment to the business.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process Section -->
    <section class="section-padding bg-gray-50">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">Application <span class="text-gradient">Process</span></h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">Simple 6-step process to become a certified KMFSL associate and start earning.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold group-hover:bg-primary-700 transition-colors">01</div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Application</h3>
                    <p class="text-secondary-600">Fill out the associate application form with your details and submit required documents.</p>
                </div>
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold group-hover:bg-primary-700 transition-colors">02</div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Verification</h3>
                    <p class="text-secondary-600">Our team will verify your documents and conduct a background check.</p>
                </div>
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold group-hover:bg-primary-700 transition-colors">03</div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Interview</h3>
                    <p class="text-secondary-600">Telephonic/video interview to assess your suitability for the program.</p>
                </div>
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold group-hover:bg-primary-700 transition-colors">04</div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Training</h3>
                    <p class="text-secondary-600">Complete our comprehensive training program on services and processes.</p>
                </div>
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold group-hover:bg-primary-700 transition-colors">05</div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Certification</h3>
                    <p class="text-secondary-600">Receive your associate certification and access to our platform.</p>
                </div>
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold group-hover:bg-primary-700 transition-colors">06</div>
                    <h3 class="text-xl font-semibold text-secondary-800 mb-3 group-hover:text-primary-600 transition-colors">Start Earning</h3>
                    <p class="text-secondary-600">Begin referring clients and earning commissions on successful recoveries.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-secondary-800 mb-4">Success <span class="text-gradient">Stories</span></h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">Hear from our successful associates who have built thriving careers with KMFSL.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="card">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="font-semibold text-secondary-800">Rajesh Sharma</h4>
                            <p class="text-sm text-secondary-600">Mumbai</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-bold text-green-600">₹45,000/month</div>
                            <div class="text-xs text-secondary-500">2 Years</div>
                        </div>
                    </div>
                    <p class="text-secondary-700 italic mb-4">"KMFSL associate program has transformed my career. The support team is excellent and commissions are paid on time."</p>
                    <div class="flex text-yellow-400">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>
                <div class="card">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="font-semibold text-secondary-800">Priya Patel</h4>
                            <p class="text-sm text-secondary-600">Ahmedabad</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-bold text-green-600">₹32,000/month</div>
                            <div class="text-xs text-secondary-500">1.5 Years</div>
                        </div>
                    </div>
                    <p class="text-secondary-700 italic mb-4">"Great opportunity for financial independence. The training provided is comprehensive and very helpful."</p>
                    <div class="flex text-yellow-400">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>
                <div class="card">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h4 class="font-semibold text-secondary-800">Amit Kumar</h4>
                            <p class="text-sm text-secondary-600">Delhi</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-bold text-green-600">₹65,000/month</div>
                            <div class="text-xs text-secondary-500">3 Years</div>
                        </div>
                    </div>
                    <p class="text-secondary-700 italic mb-4">"Best decision I made was joining KMFSL. The earning potential is unlimited and support is outstanding."</p>
                    <div class="flex text-yellow-400">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section-padding bg-gradient-to-r from-primary-600 to-accent-500">
        <div class="container-custom text-center text-white">
            <h2 class="text-4xl font-bold mb-4">Ready to Start Your Journey?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join hundreds of successful associates who are earning attractive commissions while helping people recover their assets.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a class="btn-primary bg-white text-primary-600 hover:bg-gray-100" href="#apply">Apply Now</a>
                <a class="btn-secondary border-white text-white hover:bg-white hover:text-primary-600" href="contact.php">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Application Form -->
    <section id="apply" class="section-padding">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-secondary-800 mb-4">Apply to Become an <span class="text-gradient">Associate</span></h2>
                    <p class="text-xl text-secondary-600">Fill out the form below and our team will contact you within 24 hours to discuss the opportunity.</p>
                </div>
                <div class="card max-w-4xl mx-auto">
                    <div class="text-center mb-8">
                        <div class="flex justify-center mb-6">
                            <img src="kmfsl logo svg.svg" alt="KMFSL - Kaimur Financial Services" class="h-24 w-auto">
                        </div>
                        <h3 class="text-2xl font-bold text-secondary-800 mb-2">Associate Application Form</h3>
                        <p class="text-secondary-600">Start your journey towards financial independence with KMFSL</p>
                    </div>
                
                <!-- Application Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <?php if ($success_message): ?>
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            <?php echo $success_message; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($error_message): ?>
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <?php echo $error_message; ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" required 
                                       class="input-field" 
                                       placeholder="Enter your full name"
                                       value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required 
                                       class="input-field" 
                                       placeholder="Enter your email address"
                                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required 
                                       class="input-field" 
                                       placeholder="Enter your phone number"
                                       value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                            </div>
                            <div>
                                <label for="city" class="block text-sm font-medium text-gray-700 mb-2">City</label>
                                <input type="text" id="city" name="city" 
                                       class="input-field" 
                                       placeholder="Enter your city"
                                       value="<?php echo htmlspecialchars($_POST['city'] ?? ''); ?>">
                            </div>
                        </div>
                        
                        <div>
                            <label for="experience" class="block text-sm font-medium text-gray-700 mb-2">Relevant Experience</label>
                            <select id="experience" name="experience" class="input-field">
                                <option value="">Select your experience level</option>
                                <option value="0-1 years" <?php echo (($_POST['experience'] ?? '') == '0-1 years') ? 'selected' : ''; ?>>0-1 years</option>
                                <option value="1-3 years" <?php echo (($_POST['experience'] ?? '') == '1-3 years') ? 'selected' : ''; ?>>1-3 years</option>
                                <option value="3-5 years" <?php echo (($_POST['experience'] ?? '') == '3-5 years') ? 'selected' : ''; ?>>3-5 years</option>
                                <option value="5+ years" <?php echo (($_POST['experience'] ?? '') == '5+ years') ? 'selected' : ''; ?>>5+ years</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Why do you want to join? *</label>
                            <textarea id="message" name="message" rows="4" required 
                                      class="input-field" 
                                      placeholder="Tell us about your interest in joining our associate program..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn-primary px-8 py-4">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Submit Application
                            </button>
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
    
    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }
    </script>
    
    <!-- Node.js Style Slider JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Slider functionality - Node.js Style with 3 slides
            let currentSlide = 0;
            const totalSlides = 3;
            let slideInterval;
            
            function showSlide(index) {
                const slides = document.querySelectorAll('.slide');
                slides.forEach((slide, i) => {
                    slide.classList.remove('active');
                    if (i === index) {
                        slide.classList.add('active');
                    }
                });
            }
            
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            }
            
            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
            }
            
            function startAutoSlide() {
                slideInterval = setInterval(nextSlide, 5000);
            }
            
            function stopAutoSlide() {
                clearInterval(slideInterval);
            }
            
            // Initialize first slide
            showSlide(0);
            
            // Start auto-play
            startAutoSlide();
            
            // Pause on hover
            const heroSlider = document.querySelector('.hero-slider');
            if (heroSlider) {
                heroSlider.addEventListener('mouseenter', stopAutoSlide);
                heroSlider.addEventListener('mouseleave', startAutoSlide);
                
                // Touch/swipe support for mobile
                let startX = 0;
                let endX = 0;
                
                heroSlider.addEventListener('touchstart', function(e) {
                    startX = e.touches[0].clientX;
                });
                
                heroSlider.addEventListener('touchend', function(e) {
                    endX = e.changedTouches[0].clientX;
                    handleSwipe();
                });
                
                function handleSwipe() {
                    const swipeThreshold = 50;
                    const diff = startX - endX;
                    
                    if (Math.abs(diff) > swipeThreshold) {
                        if (diff > 0) {
                            nextSlide();
                        } else {
                            prevSlide();
                        }
                        stopAutoSlide();
                        setTimeout(startAutoSlide, 3000);
                    }
                }
            }
            
            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowLeft') {
                    prevSlide();
                    stopAutoSlide();
                    setTimeout(startAutoSlide, 3000);
                } else if (e.key === 'ArrowRight') {
                    nextSlide();
                    stopAutoSlide();
                    setTimeout(startAutoSlide, 3000);
                }
            });
        });
    </script>
</body>
</html>