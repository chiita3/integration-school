/**
 * コース詳細ページ用 JS
 * ヘッダー追従、ハンバーガーメニュー、スクロールアニメーション
 */
(function () {
  'use strict';

  function init() {
    const hamburger = document.getElementById('hamburger');
    const mobileNav = document.getElementById('mobile-nav');
    const header = document.getElementById('site-header');

    if (hamburger && mobileNav) {
      hamburger.addEventListener('click', function () {
        hamburger.classList.toggle('active');
        mobileNav.classList.toggle('active');
      });

      mobileNav.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
          hamburger.classList.remove('active');
          mobileNav.classList.remove('active');
        });
      });
    }

    if (header) {
      window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      });
    }

    var sections = document.querySelectorAll('.js-anim-section');
    if (sections.length && 'IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries, obs) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1 });

      sections.forEach(function (section) { observer.observe(section); });
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
