console.log('ここまでご覧に頂きましてありがとうございます！')


// ドロワーメニューの動きの実装

jQuery("#js-drawer-icon").on("click", function (e) {
  e.preventDefault();
  jQuery("#js-drawer-icon").toggleClass("is-checked");
  jQuery("#js-drawer-contents").toggleClass("is-checked");
});

jQuery("#js-drawer-content").on("click", "a.drawer-content__link", function (e) {
  e.preventDefault();
  var targetHref = jQuery(this).attr("href");
  jQuery("#js-drawer-icon").removeClass("is-checked");
  jQuery("#js-drawer-content").removeClass("is-checked");
  setTimeout(function () {
    var targetOffset = jQuery(targetHref).offset().top - 64; //ヘッダー分、上に配置
    jQuery("html, body").animate({ scrollTop: targetOffset }, 500);
  }, 300);
});

// ヘッダーナビゲーションのリンクがクリックされたときの処理を設定

jQuery(".header__nav").on("click", ".header__link", function (e) {
  e.preventDefault(); // デフォルトのクリックイベントを無効化
  var targetHref = jQuery(this).attr("href"); // クリックされたリンクの href 属性を取得
  var targetOffset = jQuery(targetHref).offset().top - 64; // 対象要素の位置を取得
  jQuery("html, body").animate({ scrollTop: targetOffset }, 500); // ページをアニメーションでスクロール
});


// ヘッダーのスクロールイベント
document.addEventListener('DOMContentLoaded', function() {
  const header = document.getElementById('js-header');

  window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > 100) { // 100から0に変更
      header.classList.add('is-fixed');
    } else {
      header.classList.remove('is-fixed');
    }
  });
});

// クリップボードにコピーする関数
function copyToClipboard(text) {
    var tempInput = document.createElement("textarea");
    tempInput.value = text;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    alert("テキストがコピーされました: " + text);
}


document.querySelectorAll(".copyText").forEach(function(element) {
    element.addEventListener("click", function() {
        copyToClipboard(this.innerText); // クリックされたテキストをコピー
    });
});



var swiperThumbnail = new Swiper(".p-swiperThumbnail", {
  slidesPerView: 'auto',
  spaceBetween: 10,
  loop: true,
  loopedSlides: 9,
  watchSlidesProgress: true,
  slideToClickedSlide: true,
  navigation: {
    nextEl: ".p-thumbnail-swiper-button-next",
    prevEl: ".p-thumbnail-swiper-button-prev",
  },
});

var swiperMain = new Swiper(".p-swiperMain", {
  effect: "fade",
  loop: true,
  loopedSlides: 9,
  fadeEffect: {
    crossFade: true
  },
  thumbs: {
    swiper: swiperThumbnail,
  },
});

// サムネイルのボタンでメインスライダーも連動
swiperThumbnail.on('slideChange', function () {
  swiperMain.slideToLoop(swiperThumbnail.realIndex);
});

// メインスライダーの変更でサムネイルも連動（thumbsオプションで自動）
// ただし、詳細情報とスクリーンショットの更新も必要

// スライドに連動した詳細情報とスクリーンショットの表示
function updateSlideContent(index) {
  // 詳細情報の更新
  document.querySelectorAll('.p-slide-info__item').forEach(function (el) {
    el.classList.remove('is-active');
  });
  var targetInfo = document.querySelector('.p-slide-info__item[data-slide-index="' + index + '"]');
  if (targetInfo) {
    targetInfo.classList.add('is-active');
  }

  // スクリーンショットの更新
  document.querySelectorAll('.p-slide-screenshot__item').forEach(function (el) {
    el.classList.remove('is-active');
  });
  var targetScreenshot = document.querySelector('.p-slide-screenshot__item[data-slide-index="' + index + '"]');
  if (targetScreenshot) {
    targetScreenshot.classList.add('is-active');
  }
}

updateSlideContent(swiperMain.realIndex);
swiperMain.on('slideChange', function () {
  updateSlideContent(swiperMain.realIndex);
});

