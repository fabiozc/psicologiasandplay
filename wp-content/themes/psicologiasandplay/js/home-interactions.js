// Home Page Interactions
document.addEventListener('DOMContentLoaded', function() {
    
    // FAQ Accordion Functionality
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all other FAQ items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            if (isActive) {
                item.classList.remove('active');
            } else {
                item.classList.add('active');
            }
        });
        
        // Add keyboard support
        question.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                question.click();
            }
        });
        
        // Make question focusable
        question.setAttribute('tabindex', '0');
    });
    
    // Header Navigation Behavior on Home Page
    const siteHeader = document.querySelector('.site-header');
    const heroNavigation = document.querySelector('.hero-navigation');
    
    if (siteHeader && heroNavigation) {
        let lastScrollY = window.scrollY;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    // Hero navigation is out of view, show main header
                    siteHeader.classList.add('show-nav');
                } else {
                    // Hero navigation is in view, hide main header
                    siteHeader.classList.remove('show-nav');
                }
            });
        }, {
            threshold: 0,
            rootMargin: '0px 0px -50px 0px' // Trigger when hero nav is 50px from bottom of viewport
        });
        
        observer.observe(heroNavigation);
    }
    
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('.hero-navigation a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            
            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 20; // Small offset for better positioning
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Add loading animation for images
    const images = document.querySelectorAll('img');
    
    images.forEach(img => {
        img.addEventListener('load', () => {
            img.style.opacity = '1';
        });
        
        // Set initial opacity for fade-in effect
        img.style.opacity = '0';
        img.style.transition = 'opacity 0.3s ease';
        
        // If image is already loaded
        if (img.complete) {
            img.style.opacity = '1';
        }
    });
    
}); 