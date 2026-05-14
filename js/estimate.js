// ============================================================
// 料金見積りウィザード（page-price.php に組み込まれている）
// ============================================================
(function () {
  'use strict';

  var root = document.querySelector('.p-estimate');
  if (!root) return;

  // 価格定義（円）
  var PRICES = {
    site_lp: 100000,
    site_top: 50000,
    site_sub: 20000,   // 1ページあたり
    wp: 50000,
    custom_post_extra: 10000, // 1個目以降
    custom_field_extra: 5000, // 3個目以降
    form: 20000,
    anim_standard: 10000,  // 1箇所
    anim_gsap: 30000,      // 1箇所
    tag: 5000,
    upload: 30000,
    fix_ai: 30000,        // 1箇所
    fix_existing: 5000,   // 1箇所（参考）
    fix_minor: 5000,      // 1箇所（参考）
    add_page_lp: 100000,
    add_page_sub: 10000,  // 既存デザイン流用
    add_custom_post: 10000,
    add_custom_field: 5000,
    add_form: 20000,
    add_anim: 10000,
    add_anim_gsap: 30000
  };

  // ステップ一覧
  var stepEls = Array.from(root.querySelectorAll('.p-estimate__step'));
  var nextBtn = root.querySelector('#js-estimate-next');
  var backBtn = root.querySelector('#js-estimate-back');
  var stepCountEl = root.querySelector('#js-estimate-step-count');
  var progressBar = root.querySelector('#js-estimate-progress');
  var totalEl = root.querySelector('#js-estimate-total');
  var monthlyEl = root.querySelector('#js-estimate-monthly');
  var breakdownList = root.querySelector('#js-estimate-breakdown-list');
  var breakdownToggle = root.querySelector('#js-estimate-breakdown-toggle');
  var breakdownEl = root.querySelector('#js-estimate-breakdown');
  var resultNote = root.querySelector('#js-estimate-result-note');
  var restartBtn = root.querySelector('#js-estimate-restart');

  var runningEl = root.querySelector('#js-estimate-running');
  var runningAmountEl = root.querySelector('#js-estimate-running-amount');

  var currentIndex = 0;
  var state = {};

  // 表示すべきステップを取得（カテゴリ選択に応じて）
  function getVisibleSteps() {
    var categories = state.category || [];
    return stepEls.filter(function (step) {
      var showIf = step.dataset.showIf;
      if (!showIf) return true; // category と result は常に表示
      return categories.indexOf(showIf) !== -1;
    });
  }

  function showStep(index) {
    var visible = getVisibleSteps();
    if (index < 0) index = 0;
    if (index >= visible.length) index = visible.length - 1;
    currentIndex = index;

    stepEls.forEach(function (s) { s.classList.remove('is-active'); });
    visible[index].classList.add('is-active');

    // result ステップなら計算
    if (visible[index].dataset.step === 'result') {
      renderResult();
    }

    // 現在合計を更新
    updateRunning();

    // counts ステップなら、選択された項目のみ表示
    if (visible[index].dataset.type === 'counts') {
      updateCountsVisibility(visible[index]);
    }

    // ナビゲーション更新
    backBtn.disabled = index === 0;
    if (visible[index].dataset.step === 'result') {
      nextBtn.style.display = 'none';
    } else {
      nextBtn.style.display = '';
      // 最後の質問ステップでだけ「見積りを見る →」、ただし最初のステップ（category）では常に「次へ →」
      var isLastQuestion = index === visible.length - 2;
      var isFirstStep = index === 0;
      nextBtn.textContent = (isLastQuestion && !isFirstStep) ? '見積りを見る →' : '次へ →';
    }

    stepCountEl.textContent = (index + 1) + ' / ' + visible.length;
    progressBar.style.width = ((index + 1) / visible.length * 100) + '%';

    // スクロール
    root.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  // counts ステップで、選択された項目のみ表示
  function updateCountsVisibility(stepEl) {
    var fixTypes = state.fix_type || [];
    var addTypes = state.add_type || [];
    stepEl.querySelectorAll('[data-show-if-fix]').forEach(function (el) {
      el.style.display = fixTypes.indexOf(el.dataset.showIfFix) !== -1 ? '' : 'none';
    });
    stepEl.querySelectorAll('[data-show-if-add]').forEach(function (el) {
      el.style.display = addTypes.indexOf(el.dataset.showIfAdd) !== -1 ? '' : 'none';
    });
  }

  // 現在のステップから state を更新
  function captureCurrentStep() {
    var visible = getVisibleSteps();
    var step = visible[currentIndex];
    var type = step.dataset.type;
    var key = step.dataset.step;

    if (type === 'checkbox') {
      var values = Array.from(step.querySelectorAll('input[type="checkbox"]:checked')).map(function (i) { return i.value; });
      state[key] = values;
    } else if (type === 'radio') {
      var checked = step.querySelector('input[type="radio"]:checked');
      state[key] = checked ? checked.value : null;
    } else if (type === 'number') {
      var num = step.querySelector('input[type="number"]');
      state[key] = num ? parseInt(num.value, 10) || 0 : 0;
      var unsureCheck = step.querySelector('input[type="checkbox"]');
      if (unsureCheck) state[key + '_unsure'] = unsureCheck.checked;
    } else if (type === 'counts') {
      step.querySelectorAll('input[type="number"]').forEach(function (n) {
        state[n.name] = parseInt(n.value, 10) || 0;
      });
    }
  }

  // 見積り計算（state から { total, items, hasUnsure, hasMonthly } を返す）
  function compute() {
    var items = [];
    var total = 0;
    var hasUnsure = false;
    var hasMonthly = false;

    var categories = state.category || [];

    // --- 新規制作 ---
    if (categories.indexOf('new') !== -1) {
      var siteType = state.site_type;
      if (siteType === 'lp') {
        items.push({ label: 'LP制作', price: PRICES.site_lp });
        total += PRICES.site_lp;
      } else if (siteType === 'corp_3' || siteType === 'corp_5' || siteType === 'corp_8') {
        items.push({ label: 'トップページ制作', price: PRICES.site_top });
        total += PRICES.site_top;
        var subCount = siteType === 'corp_3' ? 2 : siteType === 'corp_5' ? 4 : 7; // top 含むので -1
        var subPrice = PRICES.site_sub * subCount;
        items.push({ label: '下層ページ × ' + subCount, price: subPrice });
        total += subPrice;
      } else if (siteType === 'unsure' || !siteType) {
        hasUnsure = true;
      }

      if (state.has_wp === 'yes') {
        items.push({ label: 'WordPress組み込み', price: PRICES.wp });
        total += PRICES.wp;
      } else if (state.has_wp === 'unsure') {
        hasUnsure = true;
      }

      if (state.form_count === 'one') {
        items.push({ label: 'フォーム × 1', price: PRICES.form });
        total += PRICES.form;
      } else if (state.form_count === 'many') {
        items.push({ label: 'フォーム × 複数（参考）', price: PRICES.form * 2 });
        total += PRICES.form * 2;
      } else if (state.form_count === 'unsure') {
        hasUnsure = true;
      }

      if (state.animation === 'standard') {
        items.push({ label: 'アニメーション実装（標準・参考）', price: PRICES.anim_standard });
        total += PRICES.anim_standard;
      } else if (state.animation === 'gsap') {
        items.push({ label: 'GSAPアニメーション（参考）', price: PRICES.anim_gsap });
        total += PRICES.anim_gsap;
      } else if (state.animation === 'unsure') {
        hasUnsure = true;
      }

      if (state.has_tag === 'yes') {
        items.push({ label: 'タグ・ツール設置', price: PRICES.tag });
        total += PRICES.tag;
      } else if (state.has_tag === 'unsure') {
        hasUnsure = true;
      }

      if (state.has_upload === 'yes') {
        items.push({ label: 'サーバーアップロード', price: PRICES.upload });
        total += PRICES.upload;
      } else if (state.has_upload === 'unsure') {
        hasUnsure = true;
      }
    }

    // --- 修正・変更 ---
    if (categories.indexOf('fix') !== -1) {
      var fixTypes = state.fix_type || [];
      if (fixTypes.indexOf('unsure') !== -1) hasUnsure = true;

      if (fixTypes.indexOf('ai_code') !== -1) {
        var c = state.fix_count_ai || 0;
        if (c > 0) {
          var p = PRICES.fix_ai * c;
          items.push({ label: 'AIコード整理 × ' + c, price: p });
          total += p;
        }
      }
      if (fixTypes.indexOf('existing') !== -1) {
        var c2 = state.fix_count_existing || 0;
        if (c2 > 0) {
          var p2 = PRICES.fix_existing * c2;
          items.push({ label: '既存変更 × ' + c2 + '（参考）', price: p2 });
          total += p2;
        }
      }
      if (fixTypes.indexOf('minor') !== -1) {
        var c3 = state.fix_count_minor || 0;
        if (c3 > 0) {
          var p3 = PRICES.fix_minor * c3;
          items.push({ label: '微修正 × ' + c3, price: p3 });
          total += p3;
        }
      }
    }

    // --- 追加 ---
    if (categories.indexOf('add') !== -1) {
      var addTypes = state.add_type || [];
      if (addTypes.indexOf('unsure') !== -1) hasUnsure = true;

      var addMap = [
        { type: 'page_lp', label: 'LP追加', count: 'add_count_lp', price: PRICES.add_page_lp },
        { type: 'page_sub', label: '下層ページ追加', count: 'add_count_sub', price: PRICES.add_page_sub },
        { type: 'custom_post', label: 'カスタム投稿', count: 'add_count_custom_post', price: PRICES.add_custom_post },
        { type: 'custom_field', label: 'カスタムフィールド', count: 'add_count_custom_field', price: PRICES.add_custom_field },
        { type: 'form', label: 'フォーム', count: 'add_count_form', price: PRICES.add_form },
        { type: 'anim', label: 'アニメーション（標準）', count: 'add_count_anim', price: PRICES.add_anim },
        { type: 'anim_gsap', label: 'アニメーション（GSAP）', count: 'add_count_anim_gsap', price: PRICES.add_anim_gsap }
      ];
      addMap.forEach(function (m) {
        if (addTypes.indexOf(m.type) === -1) return;
        var c = state[m.count] || 0;
        if (c > 0) {
          var p = m.price * c;
          items.push({ label: m.label + ' × ' + c, price: p });
          total += p;
        }
      });
    }

    // --- 月額保守 ---
    if (categories.indexOf('maintain') !== -1) {
      hasMonthly = true;
    }

    // category 自体に unsure があれば
    if (categories.indexOf('unsure') !== -1) hasUnsure = true;

    return { total: total, items: items, hasUnsure: hasUnsure, hasMonthly: hasMonthly };
  }

  // 結果画面の描画
  function renderResult() {
    var r = compute();
    totalEl.textContent = '¥' + r.total.toLocaleString();
    monthlyEl.hidden = !r.hasMonthly;

    breakdownList.innerHTML = '';
    if (r.items.length === 0) {
      var li = document.createElement('li');
      li.className = 'p-estimate__breakdown-item p-estimate__breakdown-item--empty';
      li.textContent = '（該当する項目なし）';
      breakdownList.appendChild(li);
    } else {
      r.items.forEach(function (it) {
        var li2 = document.createElement('li');
        li2.className = 'p-estimate__breakdown-item';
        li2.innerHTML = '<span>' + it.label + '</span><span>¥' + it.price.toLocaleString() + '</span>';
        breakdownList.appendChild(li2);
      });
    }

    if (r.hasUnsure) {
      resultNote.innerHTML = '※「わからない」を選んだ項目があります。<br>'
        + 'メール・ビデオチャットでのご相談で正確なお見積りが出せます。<strong>見積もり無料</strong>です。';
    } else {
      resultNote.innerHTML = '※あくまで参考価格です。デザインデータ・仕様により変動します。<br>'
        + '<strong>正式なお見積りは無料</strong>（メールベース・必要があればビデオチャット）。';
    }
  }

  // ヘッダー部の「現在の合計」をライブ更新
  function updateRunning() {
    captureCurrentStep();
    var r = compute();
    runningAmountEl.textContent = '¥' + r.total.toLocaleString();

    // 1問目（カテゴリ選択時）と結果ステップは隠す
    var visible = getVisibleSteps();
    var step = visible[currentIndex];
    var isFirstStep = step && step.dataset.step === 'category';
    var isResultStep = step && step.dataset.step === 'result';
    runningEl.hidden = isFirstStep || isResultStep;
  }

  // 入力変更時にライブ更新
  root.addEventListener('change', updateRunning);
  root.addEventListener('input', updateRunning);

  // Next ボタン
  nextBtn.addEventListener('click', function () {
    captureCurrentStep();
    showStep(currentIndex + 1);
  });

  // Back ボタン
  backBtn.addEventListener('click', function () {
    showStep(currentIndex - 1);
  });

  // 内訳トグル
  breakdownToggle.addEventListener('click', function () {
    var isOpen = breakdownToggle.getAttribute('aria-expanded') === 'true';
    breakdownToggle.setAttribute('aria-expanded', !isOpen);
    breakdownEl.hidden = isOpen;
    breakdownToggle.firstChild.textContent = isOpen ? '内訳を見る' : '内訳を閉じる';
  });

  // 「この内容で問い合わせる」→ メッセージ欄に内容コピペ + フォームへスクロール
  var toFormBtn = root.querySelector('#js-estimate-to-form');
  if (toFormBtn) {
    toFormBtn.addEventListener('click', function () {
      var r = compute();
      var lines = [];
      lines.push('【お見積り内容】');
      lines.push('');

      if (r.items.length > 0) {
        r.items.forEach(function (it) {
          lines.push('・' + it.label + '：¥' + it.price.toLocaleString());
        });
      } else {
        lines.push('（具体的な内容は未選択）');
      }

      lines.push('');
      lines.push('合計（目安）：¥' + r.total.toLocaleString() + '（税別・参考価格）');
      if (r.hasMonthly) {
        lines.push('月額保守：¥10,000〜 / 月');
      }
      if (r.hasUnsure) {
        lines.push('');
        lines.push('※「わからない」を選択した項目があります。');
      }
      lines.push('');
      lines.push('━━━━━━━━━━━━━━━━━━━━');
      lines.push('▼ ご相談したい内容（自由記載）');
      lines.push('');

      var messageTextarea = document.querySelector('#price-contact textarea[name="message"]');
      if (messageTextarea) {
        messageTextarea.value = lines.join('\n');
      }

      // お問い合わせ種別ラジオを自動選択
      var categories = state.category || [];
      var radioMap = {
        'new': '新規Webサイト制作の依頼',
        'fix': '既存サイトの改修・修正',
        'add': '既存サイトの改修・修正',
        'maintain': 'その他'
      };
      var pickedRadio = null;
      // 優先順位：new > fix/add > maintain > unsure
      if (categories.indexOf('new') !== -1) pickedRadio = radioMap.new;
      else if (categories.indexOf('fix') !== -1 || categories.indexOf('add') !== -1) pickedRadio = radioMap.fix;
      else if (categories.indexOf('maintain') !== -1) pickedRadio = radioMap.maintain;
      else pickedRadio = 'その他';

      var radios = document.querySelectorAll('#price-contact input[type="radio"][name="radio-buttons"]');
      radios.forEach(function (rd) {
        if (rd.value === pickedRadio) {
          rd.checked = true;
          rd.dispatchEvent(new Event('change', { bubbles: true }));
        }
      });

      // フォームへスクロール
      var contactSection = document.querySelector('#price-contact');
      if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        if (messageTextarea) {
          setTimeout(function () { messageTextarea.focus(); }, 600);
        }
      }
    });
  }

  // やり直し
  restartBtn.addEventListener('click', function () {
    state = {};
    // すべての入力リセット
    root.querySelectorAll('input').forEach(function (i) {
      if (i.type === 'checkbox' || i.type === 'radio') i.checked = false;
      else if (i.type === 'number') i.value = '0';
    });
    showStep(0);
  });

  // 初期表示
  showStep(0);
})();
