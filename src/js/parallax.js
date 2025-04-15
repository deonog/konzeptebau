document.addEventListener('DOMContentLoaded', function() {
    const heroSection = document.querySelector('.hero-section');
    const parallaxImage = document.querySelector('.parallax-image');
    
    if (!heroSection || !parallaxImage) return;

    function updateParallax() {
        const scrollPosition = window.pageYOffset;
        const heroHeight = heroSection.offsetHeight;
        const maxScroll = heroHeight;
        
        // Calculate the parallax effect (30% of scroll speed)
        const parallaxOffset = scrollPosition * 0.3;
        
        // Apply the transform with scale
        parallaxImage.style.transform = `translateY(${parallaxOffset}px) scale(1.1)`;
    }
    
    // Update on scroll with throttling
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateParallax();
                ticking = false;
            });
            ticking = true;
        }
    });
    
    // Initial update
    updateParallax();
}); 