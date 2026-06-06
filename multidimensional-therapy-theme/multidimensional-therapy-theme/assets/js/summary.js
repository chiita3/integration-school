/**
 * 多次元統合療法 - スケジュール・料金・募集要項ページ専用
 * スクロールアニメーション、スケジュールフィルター
 */
(function () {
  'use strict';

  function init() {
    // Scroll Animation
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    const sections = document.querySelectorAll('.js-anim-section');
    sections.forEach(section => observer.observe(section));

    // Schedule Filtering
    const filterBtns = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('.filter-item');
    const monthBlocks = document.querySelectorAll('.month-block');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const target = btn.getAttribute('data-filter');

        items.forEach(item => {
          if (target === 'all' || item.classList.contains(target)) {
            item.classList.remove('hide');
          } else {
            item.classList.add('hide');
          }
        });

        setTimeout(() => {
          monthBlocks.forEach(block => {
            const visibleItems = block.querySelectorAll('.filter-item:not(.hide)');
            if (visibleItems.length === 0) {
              block.classList.add('hidden');
            } else {
              block.classList.remove('hidden');
            }
          });
        }, 400);
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
