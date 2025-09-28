<?php
// Header file for KMFSL website
?>
<header class="fixed top-0 left-0 right-0 z-50 bg-white shadow-lg">
    <nav class="container-custom px-4 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <img src="kmfsl-logo.svg" alt="KMFSL - Kaimur Financial Services" class="h-12 w-auto">
                <div class="hidden sm:block">
                    <h1 class="text-xl font-bold text-secondary-800">KMFSL</h1>
                    <p class="text-xs text-secondary-600">Kaimur Financial Services</p>
                </div>
            </div>
            
            <!-- Mobile menu button -->
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-md hover:bg-gray-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a>
                <a href="about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a>
                <a href="services.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">Services</a>
                <a href="resources.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'resources.php' ? 'active' : ''; ?>">Resources</a>
                <a href="contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a>
                <a href="contact.php" class="btn-primary">Get Started</a>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="lg:hidden hidden mt-4 pb-4">
            <div class="flex flex-col space-y-3">
                <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a>
                <a href="about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a>
                <a href="services.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">Services</a>
                <a href="resources.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'resources.php' ? 'active' : ''; ?>">Resources</a>
                <a href="contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a>
                <a href="contact.php" class="btn-primary w-full text-center">Get Started</a>
            </div>
        </div>
    </nav>
</header>

<script>
// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
});
</script>