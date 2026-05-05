(function () {
    document.body.classList.add('is-loaded');

    const header = document.querySelector('[data-header]');
    const menuToggle = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');

    function updateHeader() {
        if (!header) return;
        header.classList.toggle('is-scrolled', window.scrollY > 8);
    }

    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });

    if (menuToggle && mobileMenu) {
        const openLabel = menuToggle.getAttribute('aria-label') || 'Menu';
        const closeLabel = document.documentElement.lang === 'sq' ? 'Mbyll menunë' : 'Menü schließen';

        function setMenu(open) {
            menuToggle.setAttribute('aria-expanded', String(open));
            menuToggle.setAttribute('aria-label', open ? closeLabel : openLabel);
            mobileMenu.hidden = !open;
            document.body.classList.toggle('menu-open', open);
        }

        menuToggle.addEventListener('click', function () {
            setMenu(menuToggle.getAttribute('aria-expanded') !== 'true');
        });

        mobileMenu.addEventListener('click', function (event) {
            if (event.target.closest('a')) {
                setMenu(false);
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                setMenu(false);
            }
        });
    }

    const reveals = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08 });

        reveals.forEach(function (element) {
            observer.observe(element);
        });
    } else {
        reveals.forEach(function (element) {
            element.classList.add('is-visible');
        });
    }

    document.querySelectorAll('.faq details').forEach(function (item) {
        item.addEventListener('toggle', function () {
            if (!item.open) return;
            document.querySelectorAll('.faq details').forEach(function (other) {
                if (other !== item) {
                    other.open = false;
                }
            });
        });
    });
})();
