console.log(
  "ここまでご覧に頂きましてありがとうございます！フロントのデザインはもちろん、コードもしっかり保守、運用を考えて制作してまいります。どうぞよろしくお願いいたします。",
);

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
document.addEventListener("DOMContentLoaded", function () {
  const header = document.getElementById("js-header");

  window.addEventListener("scroll", function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > 100) {
      // 100から0に変更
      header.classList.add("is-fixed");
    } else {
      header.classList.remove("is-fixed");
    }
  });
});

// snow monkey forms、プライバシーポリシーのリンク有効化
const labels = document.querySelectorAll(".smf-checkbox-control__label");

window.addEventListener("DOMContentLoaded", () => {
  labels.forEach((label) => {
    if (label.textContent.includes("プライバシーポリシー")) {
      label.innerHTML = '<a href="/privacy">プライバシーポリシー</a>に同意する';
    }
  });
});
