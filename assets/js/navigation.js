/**
 * Navigation JS
 * 
 * Handles the mobile menu toggle and accessibility features.
 */

document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const closeMenu = document.querySelector('.close-menu');
    const navWrapper = document.querySelector('.nav-menu-wrapper');
    const body = document.body;

    if (menuToggle && navWrapper) {
        // Toggle logic
        const toggleMenu = () => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.classList.toggle('is-active');
            navWrapper.classList.toggle('is-open');
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            body.style.overflow = !isExpanded ? 'hidden' : '';
        };

        const closeMenuDrawer = () => {
            menuToggle.classList.remove('is-active');
            navWrapper.classList.remove('is-open');
            menuToggle.setAttribute('aria-expanded', 'false');
            body.style.overflow = '';
        };

        menuToggle.addEventListener('click', toggleMenu);

        if (closeMenu) {
            closeMenu.addEventListener('click', closeMenuDrawer);
        }

        // Close menu when clicking on a standard link (but not on Services/Mega menu toggle links)
        const navLinks = navWrapper.querySelectorAll('.nav-menu a');
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const parent = link.parentElement;

                // If this is a Services toggle link on mobile, don't close the menu
                if (window.innerWidth <= 991 && parent.classList.contains('menu-item-has-mega-menu')) {
                    return;
                }

                menuToggle.classList.remove('is-active');
                navWrapper.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                body.style.overflow = '';
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function (event) {
            const isClickInsideMenu = navWrapper.contains(event.target);
            const isClickOnToggle = menuToggle.contains(event.target);

            if (!isClickInsideMenu && !isClickOnToggle && navWrapper.classList.contains('is-open')) {
                menuToggle.classList.remove('is-active');
                navWrapper.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                body.style.overflow = '';
            }
        });

        // Handle Escape key to close menu
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && navWrapper.classList.contains('is-open')) {
                menuToggle.classList.remove('is-active');
                navWrapper.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                body.style.overflow = '';
                menuToggle.focus();
            }
        });
    }

    // Mega Menu Services Integration
    const navMenu = document.querySelector('.nav-menu');
    const megaMenu = document.getElementById('services-mega-menu');

    if (navMenu && megaMenu) {
        // Find the "Services" link
        const servicesLink = Array.from(navMenu.querySelectorAll('a')).find(link =>
            link.textContent.trim().toLowerCase() === 'services'
        );

        if (servicesLink) {
            const parentLi = servicesLink.parentElement;
            parentLi.classList.add('menu-item-has-mega-menu');

            // Append the mega menu to the parent LI so hover works
            parentLi.appendChild(megaMenu);

            // Mobile Toggle Logic for Services
            servicesLink.addEventListener('click', function (e) {
                if (window.innerWidth <= 991) {
                    e.preventDefault();
                    e.stopPropagation();

                    const isMegaOpen = parentLi.classList.contains('is-mega-open');

                    // Close other potential open items if necessary (optional)

                    // Toggle current
                    parentLi.classList.toggle('is-mega-open');
                    megaMenu.classList.toggle('is-visible-mobile');
                }
            });
        }
    }

});
