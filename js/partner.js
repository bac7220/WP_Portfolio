// ============================================================
// page-partner.php 専用スクリプト
// - Swiper 初期化（WORKS）
// - Skills toggle（旧）
// - Capabilities WordPress 詳細トグル
// - Heroボトム半円のパララックス
// - フローティングCTA（PCのみ）
// ============================================================

document.addEventListener('DOMContentLoaded', function () {
  // ----- Swiper（WORKS スライダー） -----
  if (typeof Swiper !== 'undefined') {
    new Swiper('.p-partner-works__swiper', {
      slidesPerView: 'auto',
      spaceBetween: 16,
      centeredSlides: true,
      loop: true,
      navigation: {
        prevEl: '.p-partner-works__nav--prev',
        nextEl: '.p-partner-works__nav--next',
      },
      breakpoints: {
        768: {
          spaceBetween: 24,
        },
      },
    });
  }

  // ----- Skills toggle（旧） -----
  var toggleBtn = document.getElementById('js-skills-toggle');
  if (toggleBtn) {
    var detailInner = document.querySelector('.p-skills__wp-detail-inner');
    var toggleText = toggleBtn.querySelector('.p-skills__toggle-text');
    toggleBtn.addEventListener('click', function () {
      var isOpen = toggleBtn.getAttribute('aria-expanded') === 'true';
      toggleBtn.setAttribute('aria-expanded', !isOpen);
      if (!isOpen) {
        detailInner.classList.add('is-open');
        toggleText.textContent = '閉じる';
      } else {
        detailInner.classList.remove('is-open');
        toggleText.textContent = '詳細をみる';
      }
    });
  }

  // ----- Capabilities WordPress 詳細トグル（高さはJSで動的制御） -----
  var capToggle = document.getElementById('js-cap-toggle');
  if (capToggle) {
    var capWrap = capToggle.closest('.p-partner-cap__wp');
    var capDetail = document.getElementById('js-cap-detail');
    var capLabel = capToggle.querySelector('.p-partner-cap__wp-toggle-text');
    var DURATION = 600; // ms（CSSと合わせる）

    // 閉じた状態の見える高さ（PCは240、SPは280）
    function getClosedHeight() {
      return window.matchMedia('(min-width: 768px)').matches ? 240 : 280;
    }

    // 初期値セット
    if (capDetail) {
      capDetail.style.maxHeight = getClosedHeight() + 'px';
      capDetail.style.transition = 'max-height ' + DURATION + 'ms ease';
      capDetail.style.overflow = 'hidden';
    }

    capToggle.addEventListener('click', function () {
      if (!capDetail) return;
      var isOpen = capWrap.getAttribute('data-state') === 'open';

      if (isOpen) {
        // 開→閉：いったん現在の実高さを固定 → 次フレームで closed 高さへ
        capDetail.style.maxHeight = capDetail.scrollHeight + 'px';
        requestAnimationFrame(function () {
          capDetail.style.maxHeight = getClosedHeight() + 'px';
        });
        capWrap.setAttribute('data-state', 'closed');
        capToggle.setAttribute('aria-expanded', 'false');
        if (capLabel) capLabel.textContent = '詳細をみる';
      } else {
        // 閉→開：実コンテンツ高さへトランジション
        capDetail.style.maxHeight = capDetail.scrollHeight + 'px';
        capWrap.setAttribute('data-state', 'open');
        capToggle.setAttribute('aria-expanded', 'true');
        if (capLabel) capLabel.textContent = '閉じる';
        // トランジション完了後に none にして可変対応（リサイズ等）
        setTimeout(function () {
          if (capWrap.getAttribute('data-state') === 'open') {
            capDetail.style.maxHeight = 'none';
          }
        }, DURATION + 50);
      }
    });

    // リサイズ時、閉じてる場合は再計算
    window.addEventListener('resize', function () {
      if (capWrap.getAttribute('data-state') !== 'open') {
        capDetail.style.maxHeight = getClosedHeight() + 'px';
      }
    });
  }

  // ----- Heroボトム半円のパララックス（XY ＋ 角度変化） -----
  var heroBottomShadow = document.querySelector('.p-partner-hero__bottom-shadow');
  if (heroBottomShadow) {
    var MAX_OFFSET = 12; // 最大ズレ量(px)
    var PARALLAX_RATIO = 0.05; // スクロール量への係数
    var INITIAL_Y = -1; // 初期Y位置（少し上に持ち上げる）
    var MAX_ROTATE = 0.3; // 最大回転角(deg)

    function updateHeroBottomParallax() {
      var offset = Math.min(window.scrollY * PARALLAX_RATIO, MAX_OFFSET);
      var progress = offset / MAX_OFFSET; // 0〜1
      var rotate = progress * MAX_ROTATE;
      heroBottomShadow.style.transform =
        'translate(' + offset + 'px, ' + (offset + INITIAL_Y) + 'px) rotate(' + rotate + 'deg)';
    }
    window.addEventListener('scroll', updateHeroBottomParallax, { passive: true });
    updateHeroBottomParallax();
  }

  // ----- data-fade スクロールフェードイン -----
  var fadeEls = document.querySelectorAll('[data-fade]');
  if (fadeEls.length && 'IntersectionObserver' in window) {
    var fadeObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          var delay = el.dataset.fadeDelay;
          var duration = el.dataset.fadeDuration;
          if (delay) el.style.transitionDelay = delay + 'ms';
          if (duration) el.style.transitionDuration = duration + 'ms';
          el.classList.add('is-visible');
          fadeObserver.unobserve(el);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -10% 0px'
    });
    fadeEls.forEach(function (el) { fadeObserver.observe(el); });
  }

  // ----- フローティングCTA（PC専用）：.p-partner-cta__buttons を clone -----
  var pcMatchMedia = window.matchMedia('(min-width: 768px)');
  if (pcMatchMedia.matches) {
    var ctaSections = document.querySelectorAll('.p-partner-cta');
    var firstCta = ctaSections[0];
    var ctaButtons = firstCta ? firstCta.querySelector('.p-partner-cta__buttons') : null;

    if (ctaSections.length && ctaButtons) {
      // clone を作って body に追加
      var floatingCta = ctaButtons.cloneNode(true);
      floatingCta.classList.add('p-partner-floating-cta');
      floatingCta.setAttribute('aria-hidden', 'true');
      document.body.appendChild(floatingCta);

      var SHOW_THRESHOLD = 600;
      // 各セクションの可視状態を Map で管理（どれか1つでも可視なら隠す）
      var ctaVisibilityMap = new Map();
      ctaSections.forEach(function (sec) { ctaVisibilityMap.set(sec, false); });

      function anyCtaInView() {
        var inView = false;
        ctaVisibilityMap.forEach(function (v) { if (v) inView = true; });
        return inView;
      }

      function updateFloatingCta() {
        var scrolled = window.scrollY > SHOW_THRESHOLD;
        if (scrolled && !anyCtaInView()) {
          floatingCta.classList.add('is-visible');
        } else {
          floatingCta.classList.remove('is-visible');
        }
      }

      // 各CTAセクションを監視（どれか可視 → 隠す）
      var ctaObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          ctaVisibilityMap.set(entry.target, entry.isIntersecting);
        });
        updateFloatingCta();
      }, {
        threshold: 0,
        rootMargin: '0px 0px -10% 0px'
      });
      ctaSections.forEach(function (sec) { ctaObserver.observe(sec); });

      window.addEventListener('scroll', updateFloatingCta, { passive: true });
      updateFloatingCta();
    }
  }
});
