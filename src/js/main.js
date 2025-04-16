// Parallax and Modal Functionality
document.addEventListener('DOMContentLoaded', function() {
    // Parallax functionality
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

    // Reference Modal Functionality
    const modal = document.createElement('div');
    modal.id = 'reference-modal';
    modal.className = 'fixed inset-0 z-50 hidden';
    modal.innerHTML = `
        <div class="fixed inset-0"></div>
        <div class="fixed inset-0 flex items-center justify-center p-4" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="container mx-auto px-4  max-w-3xl">    
                <div class="bg-white rounded-lg shadow-xl" style="padding: 1rem;">
                    <div class="flex justify-between items-start mb-6">
                        <h3 class="text-3xl font-bold" id="modal-title"></h3>
                        <button id="close-modal" class="text-gray-500 hover:text-gray-700">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div id="modal-content" class="prose max-w-none text-lg"></div>
                </div>
            </div>
        </div>
    `;
    document.body.appendChild(modal);

    // Add click handlers to reference items
    const referenceItems = document.querySelectorAll('#references .group');
    referenceItems.forEach(item => {
        item.addEventListener('click', function(e) {
            if (e.target.closest('.group')) {
                const title = this.querySelector('h4').textContent;
                const content = this.querySelector('.group-hover-content')?.textContent || '';
                
                document.getElementById('modal-title').textContent = title;
                document.getElementById('modal-content').innerHTML = content;
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    // Close modal handlers
    const closeModal = document.getElementById('close-modal');
    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
    });

    modal.addEventListener('click', function(e) {
        // Get the white content div
        const modalContent = e.target.closest('.bg-white');
        // If click is not on or inside the white content div, close the modal
        if (!modalContent) {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }
    });

    // Close modal on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }
    });
});

