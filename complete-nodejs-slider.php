<!-- Complete Node.js Style Slider JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Slider functionality - Node.js Style with 8 slides
        let currentSlide = 0;
        const totalSlides = 8;
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