<?php
/**
 * 料金ページ：業務改善・AI活用の料金（page-price.php から読み込む）
 */
if (!defined('ABSPATH')) exit;
?>
<section class="p-dx-price" id="dx-price">
    <div class="p-dx-price__inner">

        <header class="p-dx-price__heading">
            <p class="p-dx-price__heading-en">AI / DX</p>
            <h2 class="p-dx-price__title">業務改善・AI活用の料金</h2>
            <p class="p-dx-price__lead">
                紙・口頭・LINEのやりとりで回している作業を、<br class="u-hidden-sp">
                今お使いの道具を活かして仕組みに置き換えます。
            </p>
        </header>

        <!-- 単発メニュー -->
        <div class="p-partner-price__table" role="table" aria-label="業務改善・AI活用の料金一覧表">
            <div class="p-partner-price__row p-partner-price__row--head" role="row">
                <div class="p-partner-price__cell p-partner-price__cell--name" role="columnheader">項目名</div>
                <div class="p-partner-price__cell p-partner-price__cell--price" role="columnheader">参考価格 (税込)</div>
                <div class="p-partner-price__cell p-partner-price__cell--note" role="columnheader">備考・詳細</div>
            </div>

            <div class="p-partner-price__row" role="row">
                <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">困りごと相談</div>
                <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                    <span class="p-partner-price__num">無料</span>
                </div>
                <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">「何から手をつければいいか分からない」段階でも大丈夫です。オンライン、または訪問（岐阜・各務原近郊）</div>
            </div>

            <div class="p-partner-price__row" role="row">
                <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">小さな仕組みづくり</div>
                <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                    <span class="p-partner-price__num">55,000</span><span class="p-partner-price__unit">円〜</span>
                </div>
                <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">1つの業務の自動化。例：毎日の集計の自動化、LINEへの自動通知、入力フォームの作成</div>
            </div>

            <div class="p-partner-price__row" role="row">
                <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">社内システム開発</div>
                <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                    <span class="p-partner-price__num">330,000</span><span class="p-partner-price__unit">円〜</span>
                </div>
                <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">複数の機能を組み合わせた仕組み。例：送迎・入退室・出勤の管理、連絡帳、申請・請求の管理</div>
            </div>
        </div>

        <!-- 月額サポート -->
        <div class="p-dx-price__block">
            <h3 class="p-dx-price__subtitle">月額サポート</h3>
            <p class="p-dx-price__text">作った仕組みを、使いながら育てていくためのプランです。</p>
            <ul class="p-dx-price__plans">
                <li class="p-dx-price__plan">
                    <div class="p-dx-price__plan-inner">
                        <div class="p-dx-price__plan-wrapper">
                            <div class="p-dx-price__plan-head">
                                <h4 class="p-dx-price__plan-name">ライト</h4>
                                <p class="p-dx-price__plan-desc">作った仕組みを、安心して使い続けたい方に</p>
                                <p class="p-dx-price__plan-price">
                                    <span class="p-dx-price__plan-yen">¥</span><span class="p-dx-price__plan-num">22,000</span><span class="p-dx-price__plan-per">/月（税込）</span>
                                </p>
                                <a href="#price-contact" class="p-dx-price__plan-button">このプランで相談する</a>
                            </div>
                            <div class="p-dx-price__plan-body">
                                <p class="p-dx-price__plan-label">含まれるもの</p>
                                <ul class="p-dx-price__plan-list">
                                <li>作った仕組みの保守・不具合対応</li>
                                <li>チャット・メールでのご相談</li>
                                <li>小さな修正 月2件まで（文言・項目の追加など）</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="p-dx-price__plan p-dx-price__plan--featured">
                    <p class="p-dx-price__plan-badge">おすすめ</p>
                    <div class="p-dx-price__plan-inner">
                        <div class="p-dx-price__plan-wrapper">
                            <div class="p-dx-price__plan-head">
                                <h4 class="p-dx-price__plan-name">スタンダード</h4>
                                <p class="p-dx-price__plan-desc">使いながら、少しずつ改善していきたい方に</p>
                                <p class="p-dx-price__plan-price">
                                    <span class="p-dx-price__plan-yen">¥</span><span class="p-dx-price__plan-num">44,000</span><span class="p-dx-price__plan-per">/月（税込）</span>
                                </p>
                                <a href="#price-contact" class="p-dx-price__plan-button p-dx-price__plan-button--primary">このプランで相談する</a>
                            </div>
                            <div class="p-dx-price__plan-body">
                                <p class="p-dx-price__plan-label">含まれるもの</p>
                                <ul class="p-dx-price__plan-list">
                                <li>ライトの内容すべて</li>
                                <li>改善・機能追加の作業 月5時間まで</li>
                                <li>月1回のオンライン打ち合わせ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="p-dx-price__plan">
                    <div class="p-dx-price__plan-inner">
                        <div class="p-dx-price__plan-wrapper">
                            <div class="p-dx-price__plan-head">
                                <h4 class="p-dx-price__plan-name">しっかり</h4>
                                <p class="p-dx-price__plan-desc">現場に合わせて、どんどん育てていきたい方に</p>
                                <p class="p-dx-price__plan-price">
                                    <span class="p-dx-price__plan-yen">¥</span><span class="p-dx-price__plan-num">88,000</span><span class="p-dx-price__plan-per">/月（税込）</span>
                                </p>
                                <a href="#price-contact" class="p-dx-price__plan-button">このプランで相談する</a>
                            </div>
                            <div class="p-dx-price__plan-body">
                                <p class="p-dx-price__plan-label">含まれるもの</p>
                                <ul class="p-dx-price__plan-list">
                                <li>スタンダードの内容すべて</li>
                                <li>改善・機能追加の作業 月12時間まで</li>
                                <li>月1回の訪問（岐阜・各務原近郊）</li>
                                <li>優先対応</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <p class="p-dx-price__note">
                ※ライトは、作った仕組みの保守と小さな修正のためのプランです。新しい機能の開発を含めて継続的に伴走する場合は、スタンダード以上、または別途お見積りとなります。<br>
                ※上限を超える作業は、事前にお見積りをお伝えしてから進めます。
            </p>
        </div>

        <!-- 開発費の考え方 -->
        <div class="p-dx-price__block">
            <h3 class="p-dx-price__subtitle">開発費の考え方</h3>
            <p class="p-dx-price__text">
                仕組みづくりの費用は「毎月どれだけ作業時間が減るか」を目安に考えます。<br class="u-hidden-sp">
                たとえば次のような場合です。
            </p>

            <dl class="p-dx-price__basis">
                <div class="p-dx-price__basis-row">
                    <dt>前提（例）</dt>
                    <dd>スタッフ10人が、記録・連絡・転記に1人1日15分かけている／時給1,200円／月22日稼働</dd>
                </div>
                <div class="p-dx-price__basis-row">
                    <dt>減る作業時間</dt>
                    <dd>10人 × 15分 × 22日 ＝ <strong>月55時間</strong></dd>
                </div>
                <div class="p-dx-price__basis-row">
                    <dt>人件費に換算</dt>
                    <dd>55時間 × 1,200円 ＝ <strong>月66,000円</strong>（年間 約79万円）</dd>
                </div>
                <div class="p-dx-price__basis-row">
                    <dt>開発費との比較</dt>
                    <dd>開発費330,000円 ÷ 月66,000円 ＝ <strong>約5か月で元が取れる</strong>計算です</dd>
                </div>
            </dl>

            <!-- 試算ツール -->
            <div class="p-dx-price__calc js-dx-calc">
                <p class="p-dx-price__calc-title">御社の場合で試算する</p>
                <div class="p-dx-price__calc-fields">
                    <label class="p-dx-price__field">
                        <span class="p-dx-price__field-label">対象のスタッフ数（人）</span>
                        <input class="p-dx-price__input js-dx-calc-input" type="number" name="staff" value="10" min="1" step="1" inputmode="numeric">
                    </label>
                    <label class="p-dx-price__field">
                        <span class="p-dx-price__field-label">1人1日に減らせる時間（分）</span>
                        <input class="p-dx-price__input js-dx-calc-input" type="number" name="minutes" value="15" min="1" step="1" inputmode="numeric">
                    </label>
                    <label class="p-dx-price__field">
                        <span class="p-dx-price__field-label">時給（円）</span>
                        <input class="p-dx-price__input js-dx-calc-input" type="number" name="wage" value="1200" min="1" step="10" inputmode="numeric">
                    </label>
                    <label class="p-dx-price__field">
                        <span class="p-dx-price__field-label">月の稼働日数（日）</span>
                        <input class="p-dx-price__input js-dx-calc-input" type="number" name="days" value="22" min="1" max="31" step="1" inputmode="numeric">
                    </label>
                    <label class="p-dx-price__field">
                        <span class="p-dx-price__field-label">開発費（円）</span>
                        <input class="p-dx-price__input js-dx-calc-input" type="number" name="cost" value="330000" min="0" step="1000" inputmode="numeric">
                    </label>
                </div>
                <dl class="p-dx-price__result" aria-live="polite">
                    <div class="p-dx-price__result-item">
                        <dt>減る作業時間</dt>
                        <dd>月 <span class="js-dx-calc-hours">55</span> 時間</dd>
                    </div>
                    <div class="p-dx-price__result-item">
                        <dt>人件費に換算</dt>
                        <dd>月 <span class="js-dx-calc-monthly">66,000</span> 円</dd>
                    </div>
                    <div class="p-dx-price__result-item">
                        <dt>年間</dt>
                        <dd><span class="js-dx-calc-yearly">792,000</span> 円</dd>
                    </div>
                    <div class="p-dx-price__result-item">
                        <dt>元が取れるまで</dt>
                        <dd>約 <span class="js-dx-calc-payback">5.0</span> か月</dd>
                    </div>
                </dl>
            </div>
            <p class="p-dx-price__note">※あくまで目安です。実際にどれだけ時間が減るかは、無料相談で一緒に確かめてからお見積りします。</p>
        </div>

    </div>
</section>
