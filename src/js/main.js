document.addEventListener('DOMContentLoaded', function() {
    const parallaxContainer = document.querySelector('.parallax-container');
    const parallaxImage = parallaxContainer.querySelector('img');
    
    function updateParallax() {
        const scrollPosition = window.pageYOffset;
        const containerHeight = parallaxContainer.offsetHeight;
        const imageHeight = parallaxImage.offsetHeight;
        
        // Calculate the maximum scroll distance
        const maxScroll = imageHeight - containerHeight;
        
        // Calculate the parallax effect
        const parallaxOffset = (scrollPosition * 0.3);
        
        // Apply the transform
        parallaxImage.style.transform = `translateY(${parallaxOffset}px) scale(1.1)`;
    }
    
    // Update on scroll
    window.addEventListener('scroll', updateParallax);
    
    // Initial update
    updateParallax();
});

