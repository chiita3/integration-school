/**
 * 多次元統合療法 - 全体共通JS
 * ヘッダー追従、ハンバーガーメニュー、Q&Aタブ、スクロールアニメーション
 */
(function () {
  'use strict';

  // --- ヘッダー追従制御 ---
  function initHeaderScroll() {
    const header = document.querySelector('header');
    if (!header) return;

    // header-light の場合は初期表示時も scrolled 風に
    if (header.classList.contains('header-light')) {
      header.classList.add('scrolled');
    }

    window.addEventListener('scroll', function () {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else if (!header.classList.contains('header-light')) {
        header.classList.remove('scrolled');
      }
    });
  }

  // --- 受講コース ドロップダウントグル ---
  function initDropdownToggle() {
    const hasDropdowns = document.querySelectorAll('.has-dropdown');
    hasDropdowns.forEach(function (item) {
      const trigger = item.querySelector(':scope > a');
      if (!trigger || !item.querySelector('.dropdown-menu')) return;

      trigger.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        const isOpen = item.classList.contains('is-open');
        hasDropdowns.forEach(function (d) { d.classList.remove('is-open'); });
        if (!isOpen) item.classList.add('is-open');
      });
    });

    document.addEventListener('click', function (e) {
      if (!e.target.closest('.has-dropdown')) {
        hasDropdowns.forEach(function (d) { d.classList.remove('is-open'); });
      }
    });
  }

  // --- ハンバーガーメニュー制御 ---
  function initHamburgerMenu() {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    const header = document.querySelector('header');

    if (!hamburger || !navMenu || !header) return;

    hamburger.addEventListener('click', function () {
      hamburger.classList.toggle('active');
      navMenu.classList.toggle('active');
      header.classList.toggle('active');
    });

    navMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function (e) {
        /* 受講コースのトグル時はメニューを閉じない */
        if (link.closest('.has-dropdown') && link.parentElement.classList.contains('has-dropdown')) {
          return;
        }
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        header.classList.remove('active');
      });
    });
  }

  // --- Q&Aタブ切り替え ---
  function initQATabs() {
    const tabs = document.querySelectorAll('.qa-tab-btn');
    const panels = document.querySelectorAll('.qa-panel');

    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        tabs.forEach(function (t) { t.classList.remove('active'); });
        tab.classList.add('active');

        panels.forEach(function (panel) { panel.classList.remove('active'); });

        const targetId = tab.getAttribute('data-target');
        const targetPanel = document.getElementById(targetId);
        if (targetPanel) {
          targetPanel.classList.add('active');
        }
      });
    });
  }

  // --- スクロールアニメーション (Instructor, Program) ---
  function initScrollAnimations() {
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.15
    };

    const observer = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    const animSections = document.querySelectorAll('.js-anim-section');
    const programSection = document.querySelector('.js-program-section');

    animSections.forEach(function (section) { observer.observe(section); });
    if (programSection) observer.observe(programSection);
  }

  // --- News 横スクロール (グローバル関数) ---
  window.scrollNews = function (direction) {
    const wrapper = document.getElementById('newsWrapper');
    if (!wrapper) return;
    const scrollAmount = 330;
    wrapper.scrollBy({
      left: direction === 'left' ? -scrollAmount : scrollAmount,
      behavior: 'smooth'
    });
  };

  // --- Voice 横スクロール (グローバル関数) ---
  window.scrollVoice = function (direction) {
    const wrapper = document.getElementById('voiceWrapper');
    if (!wrapper) return;
    const scrollAmount = 480;
    wrapper.scrollBy({
      left: direction === 'left' ? -scrollAmount : scrollAmount,
      behavior: 'smooth'
    });
  };

  // --- スクロールボタン（data属性で制御、保守性のためonclickを廃止） ---
  function initScrollButtons() {
    const scrollTargets = { newsWrapper: 330 };
    document.querySelectorAll('[data-scroll-target][data-scroll-direction]').forEach(function (btn) {
      btn.addEventListener('click', function () {
        const targetId = this.getAttribute('data-scroll-target');
        const direction = this.getAttribute('data-scroll-direction');
        const wrapper = document.getElementById(targetId);
        if (!wrapper) return;

        if (targetId === 'voiceWrapper') {
          // 受講者の声: 1枚ずつ移動
          var cards = wrapper.querySelectorAll('.voice-card');
          if (cards.length === 0) return;
          var scrollLeft = wrapper.scrollLeft;
          var targetScrollLeft = null;
          if (direction === 'right') {
            // 右へ: 現在より右にある次のカードの位置へ
            for (var i = 0; i < cards.length; i++) {
              if (cards[i].offsetLeft > scrollLeft + 5) {
                targetScrollLeft = cards[i].offsetLeft;
                break;
              }
            }
          } else {
            // 左へ: 現在より左にある前のカードの位置へ
            for (var i = cards.length - 1; i >= 0; i--) {
              if (cards[i].offsetLeft < scrollLeft - 5) {
                targetScrollLeft = cards[i].offsetLeft;
                break;
              }
            }
            if (targetScrollLeft === null && scrollLeft > 0) {
              targetScrollLeft = 0;
            }
          }
          if (targetScrollLeft !== null) {
            wrapper.scrollTo({ left: targetScrollLeft, behavior: 'smooth' });
          }
        } else {
          var amount = scrollTargets[targetId] || 400;
          wrapper.scrollBy({
            left: direction === 'left' ? -amount : amount,
            behavior: 'smooth'
          });
        }
      });
    });
  }

  // --- Facebook Page Plugin: Newsセクション表示時に再描画（PC版で非表示になる対策） ---
  function initFacebookParse() {
    const newsSection = document.getElementById('news');
    if (!newsSection || !newsSection.querySelector('.fb-page')) return;

    var parsed = false;

    function tryParse() {
      if (parsed) return true;
      if (typeof window.FB !== 'undefined') {
        try {
          window.FB.XFBML.parse(newsSection);
          parsed = true;
        } catch (e) { /* ignore */ }
        return parsed;
      }
      return false;
    }

    var retryCount = 0;
    var retryMax = 25; /* 約5秒間リトライ */

    function checkAndParse() {
      if (tryParse()) return true;
      retryCount++;
      if (retryCount < retryMax) {
        setTimeout(checkAndParse, 200);
      }
      return false;
    }

    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting && !parsed) {
          if (checkAndParse()) observer.disconnect();
        }
      });
    }, { rootMargin: '50px', threshold: 0 });

    observer.observe(newsSection);
    checkAndParse();
  }

  // --- 初期化 ---
  function init() {
    initHeaderScroll();
    initDropdownToggle();
    initHamburgerMenu();
    initQATabs();
    initScrollAnimations();
    initScrollButtons();
    initFacebookParse();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
