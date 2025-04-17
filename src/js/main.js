// Modal Functionality
document.addEventListener('DOMContentLoaded', function() {
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
                        <h3 class="text-3xl font-bold mb-0" id="modal-title"></h3>
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
                const content = this.querySelector('.group-hover-content p')?.textContent || '';
                
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

    // Load More Services
    const loadMoreButton = document.getElementById('load-more-services');
    if (loadMoreButton) {
        loadMoreButton.addEventListener('click', function() {
            const hiddenServices = document.querySelectorAll('.service-item.hidden');
            hiddenServices.forEach(service => {
                service.classList.remove('hidden');
                service.style.animation = 'fadeIn 0.5s ease-in-out';
            });
            
            // Hide the button if all services are shown
            if (document.querySelectorAll('.service-item.hidden').length === 0) {
                loadMoreButton.style.display = 'none';
            }
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            
            // Skip if it's just "#"
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (!targetElement) return;

            // Get header height for offset
            const header = document.getElementById('main-header');
            const headerHeight = header ? header.offsetHeight : 0;

            // Calculate the target position with offset
            const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        });
    });
});

