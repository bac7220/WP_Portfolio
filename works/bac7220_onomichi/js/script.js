//375px以下の表示の固定
(function () {
  const viewport = document.querySelector('meta[name="viewport"]');

  function setViewport() {
    const value = window.outerWidth >= 375 ? "width=device-width, initial-scale=1" : "width=375, user-scalable=no";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }

  window.addEventListener("DOMContentLoaded", setViewport);
  window.addEventListener("resize", setViewport);
})();


// ドロワーメニューの動きの実装

jQuery("#js-drawer-icon").on("click", function (e) {
  e.preventDefault();
  jQuery("#js-drawer-icon").toggleClass("is-checked");
  jQuery("#js-drawer-content").toggleClass("is-checked");
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

// topへ戻るボタンの実装

jQuery(function () {
  var topBtn = jQuery("#page-top");
  topBtn.hide();

  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 300 && jQuery(window).width() > 900) {
      topBtn.fadeIn(300);
    } else {
      topBtn.fadeOut(300);
    }
  });

  topBtn.on("click", function () {
    jQuery("html,body").animate({ scrollTop: 0 }, 500);
    return false;
  });
});

// topに戻るスマホの実装
jQuery(function () {
  // ページトップへ移動するボタンをjQueryで取得します
  var spTop = jQuery("#js-pagetop");

  // ページトップへ移動するボタンがクリックされたときのイベントリスナーを設定します
  spTop.on("click", function () {
    // アニメーションを使ってページをトップにスクロールさせます
    jQuery("html,body").animate({ scrollTop: 0 }, 1000);
    // デフォルトのイベントをキャンセルしてページのリロードを防ぎます
    return false;
  });
});

// how-to-enterに移動
$(".scroll-enter").on("click", function (e) {
  e.preventDefault(); // デフォルトの動作をキャンセル
  var target = $(this).find("a").attr("href"); // クリックされたリンクのhref属性値を取得
  var targetOffset = $(target).offset().top; // ターゲット要素の上端の位置を取得
  $("html, body").animate({ scrollTop: targetOffset }, 500); // スムーズにスクロール
});

// aboutセクションのスワイパーの設定

const aboutswiper = new Swiper(".about__swiper", {
  loop: true,
  loopedSlides: 9,
  simulateTouch: false,
  slidesPerView: "auto",
  spaceBetween: 10,
  centeredSlides: true,
  speed: 2800,
  autoplay: {
    delay: 0,
  },
});

// prizesセクションのモーダル設定

jQuery(".js-modal-open-1").on("click", function (e) {
  e.preventDefault();
  jQuery("#js-prizes-modal-1")[0].showModal();
  jQuery("html,body").css("overflow", "hidden"); // モーダルを開いた時にスクロールを禁止
});

jQuery(".js-modal-open-2").on("click", function (e) {
  e.preventDefault();
  jQuery("#js-prizes-modal-2")[0].showModal();
  jQuery("html,body").css("overflow", "hidden");
});

jQuery(".js-modal-open-3").on("click", function (e) {
  e.preventDefault();
  jQuery("#js-prizes-modal-3")[0].showModal();
  jQuery("html,body").css("overflow", "hidden");
});

jQuery(".js-modal-open-4").on("click", function (e) {
  e.preventDefault();
  jQuery("#js-prizes-modal-4")[0].showModal();
  jQuery("html,body").css("overflow", "hidden");
});

jQuery(".js-modal-open-5").on("click", function (e) {
  e.preventDefault();
  jQuery("#js-prizes-modal-5")[0].showModal();
  jQuery("html,body").css("overflow", "hidden");
});

// 各モーダルの閉じるボタンに対するイベントハンドラー
jQuery(".js-modal-close").on("click", function (e) {
  e.preventDefault();
  jQuery(this).closest("dialog")[0].close();
  jQuery("html,body").css("overflow", ""); // モーダルを閉じた時にスクロールを許可
});

// スポットセクションのスワイパーの設定

const spotsswiper = new Swiper(".spots__swiper", {
  // Optional parameters
  loop: true,
  slidesPerView: 1.53,
  spaceBetween: 16,
  centeredSlides: true,
  initialSlide: 3, // スライドの開始位置

  breakpoints: {
    900: {
      slidesPerView: 2.5,
      centeredSlides: false,
      loopedSlides: 7,
      spaceBetween: 32,
      initialSlide: 0, // スライドの開始位置
      mousewheel: true,
    },
    1200: {
      slidesPerView: 4.1,
      centeredSlides: false,
      loopedSlides: 7,
      spaceBetween: 32,
      initialSlide: 0, // スライドの開始位置
      mousewheel: true,
    },
  },

  // Navigation arrows
  navigation: {
    nextEl: ".spots__swiper-button-next",
    prevEl: ".spots__swiper-button-prev",
  },
});

// FAQセクションのアコーディオンの設定

jQuery(".js-accordion").on("click", function (e) {
  e.preventDefault();

  if (jQuery(this).parent().hasClass("is-open")) {
    jQuery(this).parent().removeClass("is-open");
    jQuery(this).next().slideUp();
  } else {
    jQuery(this).parent().addClass("is-open");
    jQuery(this).next().slideDown();
  }
});

// コンタクトフォームのエラー時表示

document.getElementById("js-form").addEventListener("submit", function (event) {
  const form = event.target;
  // デフォルトの送信動作をキャンセルします
  event.preventDefault();

  // 未入力のフィールドがあるかどうかを示すフラグ
  let hasEmptyFields = false;

  // 入力必須の各要素をチェックします
  form
    .querySelectorAll(
      "input[type='text'], input[type='email'], select, textarea, input[type='checkbox']"
    )
    .forEach(function (input) {
      // チェックボックスが未チェックであるか、テキスト、メール、セレクト、テキストエリアが空である場合
      if (
        (input.type === "checkbox" && !input.checked) ||
        (input.value.trim() === "" &&
          (input.tagName !== "SELECT" || (input.tagName === "SELECT" && input.value === "")))
      ) {
        // 未入力のフィールドにエラークラスを追加します
        input.classList.add("error");
        input.setAttribute("required", ""); // required属性を追加します
        hasEmptyFields = true; // フラグを立てます
      } else {
        // 未入力でない場合はエラークラスを削除します
        input.classList.remove("error");
        input.removeAttribute("required"); // required属性を削除します
      }
    });

  // 未入力のフィールドがある場合は、送信を中止してエラーメッセージを表示します
  if (hasEmptyFields) {
    return;
  } else {
    // 未入力のフィールドがない場合はフォームを送信します
    form.submit();
    alert("送信成功");
  }
});

document.addEventListener(
  "blur",
  function (event) {
    const target = event.target;
    const errorClass = "error";

    // フォーカスを失った要素がフォーム要素であるかを確認
    if (target.closest("#js-form")) {
      // フォーカスを失った要素が入力必須であるかつ、入力がない場合
      if (target.hasAttribute("required") && !target.value.trim()) {
        target.classList.add(errorClass); // エラーを表示
      } else {
        target.classList.remove(errorClass); // エラーを非表示
      }
    }
  },
  true
); // キャプチャーフェーズでイベントをキャッチ
