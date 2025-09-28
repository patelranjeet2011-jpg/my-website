<?php
session_start();

$success_message = '';
$error_message = '';

// Handle form submission
if ($_POST) {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $service = htmlspecialchars(trim($_POST['service'] ?? ''));
    $preferred_contact = htmlspecialchars(trim($_POST['preferred_contact'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    
    // Validation
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!$email) {
        $error_message = 'Please enter a valid email address.';
    } else {
        // Send email notification
        $to = 'help@kmfsl.in';
        $subject = 'New Contact Enquiry from KMFSL Website - ' . $name;
        $email_message = "
        New contact enquiry received from KMFSL website:
        
        Name: $name
        Email: $email
        Phone: $phone
        Service Interest: $service
        Preferred Contact: $preferred_contact
        Message: $message
        
        Submitted on: " . date('Y-m-d H:i:s') . "
        ";
        
        $headers = "From: noreply@kmfsl.in\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Send email
        if (mail($to, $subject, $email_message, $headers)) {
            $success_message = 'Thank you for contacting us! We will get back to you within 24 hours.';
        } else {
            $success_message = 'Your enquiry has been submitted successfully!';
        }
        
        // Clear form data
        $_POST = array();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - KMFSL | Get Professional Financial Recovery Services</title>
    <meta name="description" content="Contact Kaimur Financial Services for expert assistance in IEPF claims, share transmission, and financial asset recovery. Get free consultation today.">
    
    <!-- Common Styles -->
    <?php include 'includes/styles.php'; ?>
</head>
<body class="bg-gray-50" style="overflow-x: hidden; overflow-y: auto; height: auto; min-height: 100vh;">
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
    
    <!-- Contact Hero Section -->
    <section class="section-padding bg-gradient-to-br from-primary-50 to-accent-50">
        <div class="container-custom">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="space-y-4">
                        <h1 class="text-4xl lg:text-6xl font-bold leading-tight text-secondary-800">Contact Us</h1>
                        <h2 class="text-xl lg:text-2xl font-medium text-secondary-600">Get In Touch With Our Experts</h2>
                        <p class="text-lg text-secondary-600 max-w-2xl leading-relaxed">Ready to recover your unclaimed assets? Our experienced team is here to help you every step of the way. Contact us today for a free consultation.</p>
                    </div>
                    
                    <div class="flex items-center space-x-8 pt-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary-600">24/7</div>
                            <div class="text-sm text-secondary-600">Support Available</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary-600">25+</div>
                            <div class="text-sm text-secondary-600">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary-600">10K+</div>
                            <div class="text-sm text-secondary-600">Happy Clients</div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="w-full h-96 bg-gradient-to-br from-primary-100 to-accent-100 rounded-2xl flex items-center justify-center">
                        <div class="text-center space-y-4">
                            <div class="text-6xl">📞</div>
                            <h3 class="text-2xl font-bold text-secondary-800">Ready to Help</h3>
                            <p class="text-secondary-600">Contact us for expert assistance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                </div>
            </div>
            
            <!-- Slide 2: Free Consultation -->
            <div class="slide" data-slide="2">
                <div class="min-h-[80vh] bg-gradient-to-r from-green-600 to-teal-600 flex items-center">
                    <div class="absolute inset-0 bg-black/30"></div>
                    
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.1\'%3E%3Ccircle cx=\'30\' cy=\'30\' r=\'2\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"></div>
                    </div>
                    
                    <div class="container-custom relative z-10">
                        <div class="grid lg:grid-cols-2 gap-12 items-center px-4">
                            <div class="text-white space-y-6">
                                <div class="space-y-4">
                                    <h1 class="text-4xl lg:text-6xl font-bold leading-tight">Free Consultation</h1>
                                    <h2 class="text-xl lg:text-2xl font-medium text-white/90">Expert Guidance at No Cost</h2>
                                    <p class="text-lg text-white/80 max-w-2xl leading-relaxed">Get professional advice from our financial recovery experts. We offer free consultation to understand your requirements and provide the best solutions.</p>
                                </div>
                                
                                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                                    <a href="#contact-form" class="inline-flex items-center justify-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-lg hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                        Book Consultation
                                        <i class="fas fa-calendar ml-2 w-4 h-4"></i>
                                    </a>
                                    <a href="mailto:help@kmfsl.in" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                                        <i class="fas fa-envelope mr-2 w-4 h-4"></i>
                                        Email Us
                                    </a>
                                </div>
                                
                                <div class="flex items-center space-x-8 pt-8 text-white/70">
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-white">FREE</div>
                                        <div class="text-sm">Consultation</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-white">Expert</div>
                                        <div class="text-sm">Guidance</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-white">Quick</div>
                                        <div class="text-sm">Response</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="hidden lg:block">
                                <div class="relative">
                                    <div class="w-96 h-96 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                        <div class="w-80 h-80 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                            <div class="w-64 h-64 bg-white/10 rounded-full backdrop-blur-sm border border-white/20 flex items-center justify-center">
                                                <div class="text-6xl text-white/80">💬</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-white/20 rounded-full backdrop-blur-sm border border-white/30 flex items-center justify-center animate-bounce">
                                        <i class="fas fa-user-tie text-white text-xl"></i>
                                    </div>
                                    <div class="absolute -bottom-4 -left-4 w-12 h-12 bg-white/20 rounded-full backdrop-blur-sm border border-white/30 flex items-center justify-center animate-bounce" style="animation-delay: 0.5s;">
                                        <i class="fas fa-handshake text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slider Controls -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex items-center space-x-4">
            <div class="flex space-x-2">
                <button class="slider-dot active" data-slide="0" onclick="goToSlide(0)"></button>
                <button class="slider-dot" data-slide="1" onclick="goToSlide(1)"></button>
            </div>
        </div>
        
        <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/10 hover:bg-white/20 text-white p-2 rounded-full backdrop-blur-sm transition-all duration-300 opacity-70 hover:opacity-100" onclick="prevSlide()">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/10 hover:bg-white/20 text-white p-2 rounded-full backdrop-blur-sm transition-all duration-300 opacity-70 hover:opacity-100" onclick="nextSlide()">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/60 animate-bounce">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>
    

    
    <!-- Contact Information Cards -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="text-center mb-16">
                <h1 class="text-4xl lg:text-6xl font-bold text-secondary-800 mb-6">
                    Get in <span class="text-gradient">Touch</span>
                </h1>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto leading-relaxed mb-6">
                    Connect with India's leading financial asset recovery specialists. Our expert team of certified professionals is available 24/7 to provide personalized consultation and guidance for your asset recovery needs. With offices across major cities and dedicated NRI support, we ensure seamless service delivery worldwide.
                </p>
                <p class="text-lg text-secondary-600 max-w-3xl mx-auto leading-relaxed">
                    Whether you need assistance with IEPF claims, insurance recovery, share transmission, or any other financial asset recovery service, our experienced consultants will provide you with a comprehensive assessment and customized recovery strategy. Contact us today for a free consultation worth ₹5,000.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                <!-- Phone Numbers Card -->
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-phone w-8 h-8 text-blue-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3">Phone Numbers</h3>
                    <div class="space-y-2">
                        <div class="text-sm">
                            <span class="text-secondary-500">Main Office:</span><br>
                            <span class="text-secondary-700 font-medium">+91 7070972333</span>
                        </div>
                        <div class="text-sm">
                            <span class="text-secondary-500">Customer Support:</span><br>
                            <span class="text-secondary-700 font-medium">+91 87654 32109</span>
                        </div>
                        <div class="text-sm">
                            <span class="text-secondary-500">Toll Free:</span><br>
                            <span class="text-secondary-700 font-medium">1800-123-4567</span>
                        </div>
                    </div>
                </div>
                
                <!-- Email Addresses Card -->
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-envelope w-8 h-8 text-green-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3">Email Addresses</h3>
                    <div class="space-y-2">
                        <div class="text-sm">
                            <span class="text-secondary-500">General Enquiry:</span><br>
                            <span class="text-secondary-700 font-medium">help@kmfsl.in</span>
                        </div>
                        <div class="text-sm">
                            <span class="text-secondary-500">Customer Support:</span><br>
                            <span class="text-secondary-700 font-medium">help@kmfsl.in</span>
                        </div>
                        <div class="text-sm">
                            <span class="text-secondary-500">Business Enquiry:</span><br>
                            <span class="text-secondary-700 font-medium">help@kmfsl.in</span>
                        </div>
                    </div>
                </div>
                
                <!-- Office Address Card -->
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-map-marker-alt w-8 h-8 text-purple-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3">Office Address</h3>
                    <div class="space-y-2">
                        <div class="text-sm">
                            <span class="text-secondary-500">Head Office:</span><br>
                            <span class="text-secondary-700 font-medium">Kaimur Financial Services Pvt. Ltd.</span>
                        </div>
                        <div class="text-sm">
                            <span class="text-secondary-500">Address:</span><br>
                            <span class="text-secondary-700 font-medium">101, Shanti Villa Nandlal Chhapra, New Chaman Chak Near, Ramdev Fakira Path</span>
                        </div>
                        <div class="text-sm">
                            <span class="text-secondary-500">Location:</span><br>
                            <span class="text-secondary-700 font-medium">East Lakshmi Nagar, Ramkrishan Nagar, Patna, Bihar - 800027, India</span>
                        </div>
                    </div>
                </div>
                
                <!-- Business Hours Card -->
                <div class="card text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-clock w-8 h-8 text-orange-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mb-3">Business Hours</h3>
                    <div class="space-y-2">
                        <div class="text-sm">
                            <span class="text-secondary-500">Monday - Friday:</span><br>
                            <span class="text-secondary-700 font-medium">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="text-sm">
                            <span class="text-secondary-500">Saturday:</span><br>
                            <span class="text-secondary-700 font-medium">9:00 AM - 2:00 PM</span>
                        </div>
                        <div class="text-sm">
                            <span class="text-secondary-500">Sunday:</span><br>
                            <span class="text-secondary-700 font-medium">Closed</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="tel:+917070972333" class="btn-primary flex items-center justify-center">
                    <i class="fas fa-phone mr-2 w-4 h-4"></i>
                    Call Now
                </a>
                <a href="https://wa.me/917070972333" target="_blank" rel="noopener noreferrer" class="btn-secondary flex items-center justify-center bg-green-600 text-white hover:bg-green-700 border-green-600">
                    <i class="fab fa-whatsapp mr-2 w-4 h-4"></i>
                    WhatsApp
                </a>
                <a href="mailto:help@kmfsl.in" class="btn-secondary flex items-center justify-center">
                    <i class="fas fa-envelope mr-2 w-4 h-4"></i>
                    Email Us
                </a>
            </div>
            
            <!-- Social Media Section -->
            <div class="text-center">
                <h3 class="text-2xl font-bold text-secondary-800 mb-6">Follow Us on Social Media</h3>
                <div class="flex justify-center space-x-4">
                    <a href="https://www.facebook.com/profile.php?id=100083758053843" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 text-blue-600">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-6 h-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                        </svg>
                    </a>
                    <a href="https://x.com/HelpKmfsl?t=zcZQQv742Ss--Fae19bvDA&s=09" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 text-blue-400">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-6 h-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                        </svg>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 text-blue-700">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="w-6 h-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/kmfsl.pvt.ltd?igsh=MTE4NHlrazZxbDB3ZA==" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 text-pink-600">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="w-6 h-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                        </svg>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 text-green-600">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="w-6 h-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Enhanced Enquiry Form Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="flex items-center px-6 py-3 rounded-full font-medium transition-all duration-300 bg-primary-600 text-white shadow-lg">
                    <i class="fas fa-envelope mr-2 w-4 h-4"></i>
                    Send Enquiry
                </button>
                <button class="flex items-center px-6 py-3 rounded-full font-medium transition-all duration-300 bg-white text-secondary-700 hover:bg-primary-50 border border-secondary-200">
                    <i class="fas fa-map-marker-alt mr-2 w-4 h-4"></i>
                    Our Offices
                </button>
                <button class="flex items-center px-6 py-3 rounded-full font-medium transition-all duration-300 bg-white text-secondary-700 hover:bg-primary-50 border border-secondary-200">
                    <i class="fas fa-clock mr-2 w-4 h-4"></i>
                    Quick FAQ
                </button>
            </div>
            
            <div class="max-w-6xl mx-auto">
                <div class="animate-fade-in">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-secondary-800 mb-4">Send us your <span class="text-gradient">Enquiry</span></h2>
                        <p class="text-lg text-secondary-600">Fill out the form below and our experts will get back to you within 24 hours with a personalized solution.</p>
                    </div>
                    
                    <div class="card max-w-4xl mx-auto">
                        <div class="text-center mb-8">
                            <div class="flex justify-center mb-6">
                                <img src="/kmfsl-logo.svg" alt="KMFSL - Kaimur Financial Services" class="h-24 w-auto">
                            </div>
                            <h3 class="text-2xl font-bold text-secondary-800 mb-2">Send us your enquiry</h3>
                            <p class="text-secondary-600">We'll get back to you within 24 hours</p>
                        </div>
                        
                        <form method="POST" action="contact.php" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-secondary-700 mb-2">Full Name *</label>
                                    <div class="relative">
                                        <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-secondary-400 w-4 h-4"></i>
                                        <input type="text" name="name" class="input-field pl-10" placeholder="Enter your full name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-secondary-700 mb-2">Email Address *</label>
                                    <div class="relative">
                                        <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-secondary-400 w-4 h-4"></i>
                                        <input type="email" name="email" class="input-field pl-10" placeholder="Enter your email address" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-secondary-700 mb-2">Phone Number *</label>
                                    <div class="relative">
                                        <i class="fas fa-phone absolute left-3 top-1/2 transform -translate-y-1/2 text-secondary-400 w-4 h-4"></i>
                                        <input type="tel" name="phone" class="input-field pl-10" placeholder="Enter your phone number" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" required>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-secondary-700 mb-2">Service Required *</label>
                                    <select name="service" class="input-field" required>
                                        <option value="">Select a service</option>
                                        <option value="IEPF Claim" <?php echo (($_POST['service'] ?? '') == 'IEPF Claim') ? 'selected' : ''; ?>>IEPF Claim</option>
                                        <option value="Transmission of Shares" <?php echo (($_POST['service'] ?? '') == 'Transmission of Shares') ? 'selected' : ''; ?>>Transmission of Shares</option>
                                        <option value="Demat of Physical Shares" <?php echo (($_POST['service'] ?? '') == 'Demat of Physical Shares') ? 'selected' : ''; ?>>Demat of Physical Shares</option>
                                        <option value="Unclaimed Dividends" <?php echo (($_POST['service'] ?? '') == 'Unclaimed Dividends') ? 'selected' : ''; ?>>Unclaimed Dividends</option>
                                        <option value="Conversion of Shares/Debentures" <?php echo (($_POST['service'] ?? '') == 'Conversion of Shares/Debentures') ? 'selected' : ''; ?>>Conversion of Shares/Debentures</option>
                                        <option value="Property Claim Samadhan" <?php echo (($_POST['service'] ?? '') == 'Property Claim Samadhan') ? 'selected' : ''; ?>>Property Claim Samadhan</option>
                                        <option value="Debtor Recovery" <?php echo (($_POST['service'] ?? '') == 'Debtor Recovery') ? 'selected' : ''; ?>>Debtor Recovery</option>
                                        <option value="Recovery of Unclaimed Mutual Funds" <?php echo (($_POST['service'] ?? '') == 'Recovery of Unclaimed Mutual Funds') ? 'selected' : ''; ?>>Recovery of Unclaimed Mutual Funds</option>
                                        <option value="Recovery of Inoperative Bank Accounts" <?php echo (($_POST['service'] ?? '') == 'Recovery of Inoperative Bank Accounts') ? 'selected' : ''; ?>>Recovery of Inoperative Bank Accounts</option>
                                        <option value="Provident Funds Claim" <?php echo (($_POST['service'] ?? '') == 'Provident Funds Claim') ? 'selected' : ''; ?>>Provident Funds Claim</option>
                                        <option value="Recovery of Unclaimed Matured Insurance" <?php echo (($_POST['service'] ?? '') == 'Recovery of Unclaimed Matured Insurance') ? 'selected' : ''; ?>>Recovery of Unclaimed Matured Insurance</option>
                                        <option value="Wealth Samadhan" <?php echo (($_POST['service'] ?? '') == 'Wealth Samadhan') ? 'selected' : ''; ?>>Wealth Samadhan</option>
                                        <option value="NRI Samadhan" <?php echo (($_POST['service'] ?? '') == 'NRI Samadhan') ? 'selected' : ''; ?>>NRI Samadhan</option>
                                        <option value="Other" <?php echo (($_POST['service'] ?? '') == 'Other') ? 'selected' : ''; ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-secondary-700 mb-2">Preferred Contact Method</label>
                                <div class="flex space-x-4">
                                    <label class="flex items-center">
                                        <input type="radio" name="preferredContact" class="mr-2" value="email" <?php echo (($_POST['preferredContact'] ?? 'email') == 'email') ? 'checked' : ''; ?>>
                                        Email
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="preferredContact" class="mr-2" value="phone" <?php echo (($_POST['preferredContact'] ?? '') == 'phone') ? 'checked' : ''; ?>>
                                        Phone
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="preferredContact" class="mr-2" value="whatsapp" <?php echo (($_POST['preferredContact'] ?? '') == 'whatsapp') ? 'checked' : ''; ?>>
                                        WhatsApp
                                    </label>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-secondary-700 mb-2">Message *</label>
                                <textarea name="message" rows="4" class="input-field resize-none" placeholder="Please describe your requirements or any specific questions you have..." required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn-primary inline-flex items-center justify-center min-w-[200px]">
                                    <i class="fas fa-paper-plane w-4 h-4 mr-2"></i>
                                    Send Enquiry
                                </button>
                            </div>
                            
                            <div class="text-center text-sm text-secondary-500">
                                <p>By submitting this form, you agree to our <a href="/privacy-policy" class="text-primary-600 hover:underline">Privacy Policy</a> and <a href="/resources/terms-conditions" class="text-primary-600 hover:underline">Terms & Conditions</a>.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Map Section -->
    <section class="section-padding bg-gray-50">
        <div class="container-custom">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-secondary-800 mb-4">Find Us on <span class="text-gradient">Map</span></h2>
                <p class="text-lg text-secondary-600">Our head office location in Patna, Bihar.</p>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="h-96 rounded-lg overflow-hidden bg-gray-100 relative">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.5!2d85.1376!3d25.5941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f29937c52d4f05%3A0x831a0e05f3c2b4a5!2sEast%20Lakshmi%20Nagar%2C%20Ramkrishan%20Nagar%2C%20Patna%2C%20Bihar%20800027!5e0!3m2!1sen!2sin!4v1640995200000!5m2!1sen!2sin" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="KMFSL Office Location" class="rounded-lg" style="border: 0px;"></iframe>
                    <div class="absolute inset-0 flex items-center justify-center bg-gray-100" style="z-index: -1;">
                        <div class="text-center">
                            <i class="fas fa-map-marker-alt w-16 h-16 text-primary-600 mx-auto mb-4"></i>
                            <h4 class="text-lg font-semibold text-secondary-800 mb-2">Office Location</h4>
                            <p class="text-secondary-600">East Lakshmi Nagar, Patna, Bihar</p>
                        </div>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-start">
                        <i class="fas fa-map-marker-alt w-5 h-5 text-primary-600 mt-1 mr-3 flex-shrink-0"></i>
                        <div>
                            <h4 class="font-semibold text-secondary-800 mb-1">Head Office</h4>
                            <p class="text-secondary-600 text-sm mb-2">
                                101, Shanti Villa Nandlal Chhapra, New Chaman Chak Near,<br>
                                Ramdev Fakira Path, East Lakshmi Nagar, Ramkrishan Nagar,<br>
                                Patna, Bihar - 800027, India
                            </p>
                            <div class="flex flex-wrap gap-4 text-sm">
                                <span class="text-primary-600 font-medium">📍 Landmark: Near Ramdev Fakira Path</span>
                                <span class="text-green-600 font-medium">🚇 Metro: Bhoothnath Metro Station (5 min walk) | Khemnichak Metro Station (10 min walk)</span>
                                <span class="text-blue-600 font-medium">🅿️ Parking: Available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Social Media & Newsletter Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl font-bold text-secondary-800 mb-4">Follow Us on <span class="text-gradient">Social Media</span></h2>
                    <p class="text-lg text-secondary-600 mb-8">Stay updated with the latest news, tips, and success stories from KMFSL.</p>
                    
                    <div class="flex justify-center lg:justify-start space-x-4">
                        <a href="https://www.facebook.com/profile.php?id=100083758053843" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 text-blue-600">
                            <i class="fab fa-facebook-f w-6 h-6"></i>
                        </a>
                        <a href="https://x.com/HelpKmfsl?t=zcZQQv742Ss--Fae19bvDA&s=09" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 text-blue-400">
                            <i class="fab fa-twitter w-6 h-6"></i>
                        </a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 text-blue-700">
                            <i class="fab fa-linkedin-in w-6 h-6"></i>
                        </a>
                        <a href="https://www.instagram.com/kmfsl.pvt.ltd?igsh=MTE4NHlrazZxbDB3ZA==" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 text-pink-600">
                            <i class="fab fa-instagram w-6 h-6"></i>
                        </a>
                        <a href="https://wa.me/917070972333" target="_blank" rel="noopener noreferrer" class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 text-green-600">
                            <i class="fab fa-whatsapp w-6 h-6"></i>
                        </a>
                    </div>
                </div>
                
                <div class="card">
                    <h3 class="text-2xl font-bold text-secondary-800 mb-4">Subscribe to Our Newsletter</h3>
                    <p class="text-secondary-600 mb-6">Get the latest updates on financial regulations, recovery tips, and success stories delivered to your inbox.</p>
                    
                    <form class="space-y-4" method="POST" action="subscribe.php">
                        <div>
                            <input type="email" name="newsletter_email" placeholder="Enter your email address" class="input-field" required>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="newsletter-consent" name="newsletter_consent" class="mr-2" required>
                            <label for="newsletter-consent" class="text-sm text-secondary-600">I agree to receive newsletters and promotional emails from KMFSL</label>
                        </div>
                        <button type="submit" class="btn-primary w-full">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Emergency Contact Section -->
    <section class="section-padding bg-gradient-to-r from-primary-600 to-accent-500">
        <div class="container-custom text-center text-white">
            <h2 class="text-3xl font-bold mb-4">Need Immediate Assistance?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Our customer support team is available to help you with urgent queries and provide immediate guidance.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+917070972333" class="btn-primary bg-white text-primary-600 hover:bg-gray-100 flex items-center justify-center">
                    <i class="fas fa-phone mr-2 w-4 h-4"></i>
                    Call Emergency Helpline
                </a>
                <a href="https://wa.me/917070972333" target="_blank" rel="noopener noreferrer" class="btn-secondary border-white text-white hover:bg-white hover:text-primary-600 flex items-center justify-center">
                    <i class="fab fa-whatsapp mr-2 w-4 h-4"></i>
                    WhatsApp Support
                </a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- ChatBot -->
    <?php include 'includes/chatbot.php'; ?>
    
    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }
        
        // Slider JavaScript
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
    </script>
</body>
</html>