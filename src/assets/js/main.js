/**
 * 助ズ コーポレートサイト JavaScript
 */
document.addEventListener('DOMContentLoaded', function () {

    // ========== ハンバーガーメニュー ==========
    var hamburger = document.getElementById('hamburger');
    var nav = document.getElementById('site-nav');
    var overlay = document.querySelector('.nav-overlay');

    if (!overlay) {
        overlay = document.createElement('div');
        overlay.className = 'nav-overlay';
        document.body.appendChild(overlay);
    }

    function openMenu() {
        hamburger.classList.add('is-active');
        hamburger.setAttribute('aria-expanded', 'true');
        nav.classList.add('is-open');
        overlay.classList.add('is-visible');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        hamburger.classList.remove('is-active');
        hamburger.setAttribute('aria-expanded', 'false');
        nav.classList.remove('is-open');
        overlay.classList.remove('is-visible');
        document.body.style.overflow = '';
    }

    if (hamburger && nav) {
        hamburger.addEventListener('click', function () {
            if (nav.classList.contains('is-open')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        overlay.addEventListener('click', closeMenu);

        nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeMenu);
        });
    }

    // ========== ヘッダースクロール効果 ==========
    var header = document.querySelector('.site-header');
    var lastScrollY = 0;

    function handleScroll() {
        var scrollY = window.pageYOffset;
        if (scrollY > 10) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
        lastScrollY = scrollY;
    }

    window.addEventListener('scroll', handleScroll, { passive: true });

    // ========== スクロールアニメーション ==========
    var animateElements = document.querySelectorAll('.animate-on-scroll');

    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -40px 0px'
        });

        animateElements.forEach(function (el) {
            observer.observe(el);
        });
    } else {
        // fallback: show all
        animateElements.forEach(function (el) {
            el.classList.add('is-visible');
        });
    }

    // ========== スムーススクロール ==========
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var targetId = this.getAttribute('href');
            if (targetId === '#') return;
            var target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                var headerHeight = document.querySelector('.site-header').offsetHeight;
                var targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
