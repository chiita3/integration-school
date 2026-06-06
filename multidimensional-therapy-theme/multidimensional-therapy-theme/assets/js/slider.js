/**
 * スライダー用
 * FV背景スライドショー（5秒ごとに切り替え）
 */
(function () {
  'use strict';

  function initFvSlider() {
    const slideItems = document.querySelectorAll('.slide-item');
    const totalSlides = slideItems.length;

    if (totalSlides === 0) return;

    let currentIndex = 0;

    function changeSlide() {
      slideItems[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % totalSlides;
      slideItems[currentIndex].classList.add('active');
    }

    setInterval(changeSlide, 5000);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initFvSlider);
  } else {
    initFvSlider();
  }
})();
