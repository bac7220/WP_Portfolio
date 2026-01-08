//375px以下の表示の固定
(function () {
  const viewport = document.querySelector('meta[name="viewport"]');

  function setViewport() {
    const value = window.outerWidth >= 390 ? "width=device-width, initial-scale=1" : "width=390, user-scalable=no";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }

  window.addEventListener("DOMContentLoaded", setViewport);
  window.addEventListener("resize", setViewport);
})();


// ドロワーメニューの開閉// ドロワーメニューの開閉
jQuery(document).ready(function($) {
    // ドロワーアイコンのクリックイベントを設定
    $("#js-drawer-icon").on("click", function (e) {
        e.preventDefault();
        $("#js-drawer-icon").toggleClass("is-checked");
        $("#js-drawer-content").toggleClass("is-checked");
        console.log("Drawer icon clicked");
    });

    // ドロワーコンテンツ内のリンクがクリックされたときの処理を設定
    $("#js-drawer-content").on("click", "a", function (e) {
        e.preventDefault(); // デフォルトのクリックイベントを無効化
        console.log("Drawer link clicked");
        var targetHref = $(this).attr("href"); // クリックされたリンクの href 属性を取得

        // スクロールアニメーション
        setTimeout(function () {
            var targetOffset = $(targetHref).offset().top - 64; // 対象要素の位置を取得し、ヘッダーの高さ分だけ上にオフセットする
            $("html, body").animate({ scrollTop: targetOffset }, 500, function() {
                // アニメーションが終了した後にドロワーメニューのクラスを削除して閉じる
                $("#js-drawer-icon").removeClass("is-checked"); // メニューアイコンから is-checked クラスを削除
                $("#js-drawer-content").removeClass("is-checked"); // ドロワーコンテンツから is-checked クラスを削除
                console.log("Animation complete and drawer closed");

               
            });
        }, 300); // クリックから0.3秒後に実行
    });
});
//スムーススクロールの実装

jQuery('a[href^="#"]').on("click", function (e) {
  const speed = 1000;
  const id = jQuery(this).attr("href");
  const target = jQuery("#" == id ? "html" : id);
  const position = jQuery(target).offset().top;
  jQuery("html,body").animate(
    {
      scrollTop: position,
    },
    speed,
    "swing" // swing or linear
  );
});

const room__swiper = new Swiper(".room__swiper", {
  speed: 500,
  loop: true,
  slidesPerView: 1.3,
  centeredSlides: true,
  spaceBetween: 20,
   autoplay: {
    delay: 5000,
    disableOnInteraction: false, // ユーザーの操作で自動スライドを停止しないように設定
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
   1200: {
      slidesPerView: 2.7,
      spaceBetween: 10,

    },
  },
});

const use__swiper = new Swiper(".use__swiper", {
  // Optional parameters
  // direction: "vertical",/* 縦並びになってしまう */
  slidesPerView: 1,
  loop: true,
  centeredSlides: true,
  spaceBetween: 62,
  breakpoints: {
    1200: {
      slidesPerView: 4,
      spaceBetween: 16,
      centeredSlides: false,

    },
  },
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".use__swiper-button-next",
    prevEl: ".use__swiper-button-prev",
  },


});

// osusumeセクションカード番号

document.addEventListener('DOMContentLoaded', function() {
  const cards = document.querySelectorAll('.osusume__card');
  cards.forEach((card, index) => {
    card.setAttribute('data-number', index + 1); // data-number属性を設定
  });
});

// スクロールヒント
 window.addEventListener('DOMContentLoaded', function () {
   new ScrollHint('.js-scrollable',{
     scrollHintIconAppendClass: 'scroll-hint-icon-white',
     i18n: {
    scrollable: 'スクロールできます'
  }

    });
  });


// Swiperの初期化
const voice_swiper = new Swiper(".voice__swiper", {
  slidesPerView: 1.35,
  loop: true,
  centeredSlides: true,
  spaceBetween: 124,

  breakpoints: {
    1200: {
      slidesPerView: 3,
      spaceBetween: 16,
      centeredSlides: false,

    },
  },

  pagination: {
    el: ".voice__swiper-pagination",
  },

  navigation: {
    nextEl: ".voice__swiper-button-next",
    prevEl: ".voice__swiper-button-prev",
  },



  // Swiperの高さを再計算するためのコールバック
  on: {
    init: function () {
      updateSwiperHeight();
    },
    slideChangeTransitionEnd: function () {
      updateSwiperHeight();
    }
  }
});

// Swiperの高さを再計算する関数
function updateSwiperHeight() {
  setTimeout(function() {
    let activeSlide = document.querySelector('.swiper-slide-active');
    let newHeight = activeSlide.offsetHeight;
    document.querySelector('.swiper').style.height = `${newHeight}px`;
  }, 300); // アニメーション完了後に高さを更新するために遅延を追加
}

// アコーディオンのトグル処理
jQuery(document).ready(function($) {
  $(".js-accordion").on("click", function (e) {
    e.preventDefault();

    var parentWrapper = $(this).closest(".voice-card__wrapper");
    var headElement = parentWrapper.find(".voice-card__head");

    if (parentWrapper.hasClass("is-up")) {
      parentWrapper.removeClass("is-up");
      headElement.slideUp();
    } else {
      parentWrapper.addClass("is-up");
      headElement.slideDown();
    }

    // Swiperの高さを更新
    updateSwiperHeight();
  });
});


jQuery(".js-accordion-faq").on("click", function (e) {
  e.preventDefault();

  if (jQuery(this).parent().hasClass("faq__is-open")) {
    jQuery(this).parent().removeClass("faq__is-open");
    jQuery(this).next().slideUp();
  } else {
    jQuery(this).parent().addClass("faq__is-open");
    jQuery(this).next().slideDown();
  }
});