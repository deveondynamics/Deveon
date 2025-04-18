// Modern Navbar JavaScript - Handles mobile menu and sticky navbar

document.addEventListener('DOMContentLoaded', function() {
    // Sticky navbar functionality is already handled in main.js
    // This script handles the mobile menu specific to our new navbar design
    
    // Mobile menu toggle
    const hamburger = document.querySelector('.sidebar__toggle');
    const mobileMenuWrapper = document.querySelector('.mobile-menu-wrapper');
    const mobileMenuClose = document.querySelector('.mobile-menu-close');
    const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
    
    if (hamburger && mobileMenuWrapper && mobileMenuClose && mobileMenuOverlay) {
        hamburger.addEventListener('click', function() {
            mobileMenuWrapper.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        mobileMenuClose.addEventListener('click', function() {
            mobileMenuWrapper.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        mobileMenuOverlay.addEventListener('click', function() {
            mobileMenuWrapper.classList.remove('active');
            document.body.style.overflow = '';
        });
    }
    
    // Mobile dropdown toggles
    const mobileDropdownToggles = document.querySelectorAll('#mobile-menu .has-dropdown > a');
    
    mobileDropdownToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            
            const submenu = this.nextElementSibling;
            
            // Toggle dropdown
            if (submenu.classList.contains('open')) {
                submenu.classList.remove('open');
                submenu.style.maxHeight = '0px';
                this.querySelector('i').style.transform = 'translateY(-50%) rotate(0deg)';
            } else {
                submenu.classList.add('open');
                submenu.style.maxHeight = submenu.scrollHeight + 'px';
                this.querySelector('i').style.transform = 'translateY(-50%) rotate(180deg)';
            }
        });
    });
}); 