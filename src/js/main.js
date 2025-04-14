document.addEventListener('DOMContentLoaded', function() {
    const burgerBtn = document.getElementById('burger-btn');
    const menuContent = document.getElementById('burger-menu-content');
    const burgerBars = burgerBtn.querySelectorAll('span');
    
    burgerBtn.addEventListener('click', function() {
        // Toggle menu visibility
        menuContent.classList.toggle('hidden');
        
        // Animate burger icon to X
        if (!menuContent.classList.contains('hidden')) {
            burgerBars[0].classList.add('rotate-45', 'translate-y-2');
            burgerBars[1].classList.add('opacity-0');
            burgerBars[2].classList.add('-rotate-45', '-translate-y-2');
        } else {
            burgerBars[0].classList.remove('rotate-45', 'translate-y-2');
            burgerBars[1].classList.remove('opacity-0');
            burgerBars[2].classList.remove('-rotate-45', '-translate-y-2');
        }
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!burgerBtn.contains(event.target) && !menuContent.contains(event.target)) {
            menuContent.classList.add('hidden');
            burgerBars[0].classList.remove('rotate-45', 'translate-y-2');
            burgerBars[1].classList.remove('opacity-0');
            burgerBars[2].classList.remove('-rotate-45', '-translate-y-2');
        }
    });
});

