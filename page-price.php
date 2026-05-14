<?php

/**
 * 料金一覧ページ（スラッグ "price" 用）
 *
 * partner ページの Price セクションを流用した詳細料金表ページ。
 * WP管理画面で固定ページのスラッグを "price" にすると自動でこのテンプレートが当たる。
 */
?>
<?php get_header('partner'); ?>

<main class="p-partner">

    <section class="p-partner-price" id="price">
        <div class="p-partner-price__inner">

            <!-- 見出し -->
            <div class="p-partner-price__heading">
                <h2 class="p-partner-price__heading-en">PRICE</h2>
                <p class="p-partner-price__lead">サービス別の参考価格一覧です。</p>
            </div>

            <!-- 料金テーブル -->
            <div class="p-partner-price__table" role="table" aria-label="料金一覧表">

                <!-- ヘッダー行（PCのみ表示） -->
                <div class="p-partner-price__row p-partner-price__row--head" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="columnheader">項目名</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="columnheader">参考価格 (税込)</div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="columnheader">備考・詳細</div>
                </div>

                <!-- 1 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">トップページコーディング</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">50,000</span><span class="p-partner-price__unit">円〜</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">レスポンシブ対応込 / 標準的なJS込</div>
                </div>

                <!-- 2 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">下層ページコーディング</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">20,000</span><span class="p-partner-price__unit">円〜</span><span class="p-partner-price__per">/1P</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">ボリュームにより変動</div>
                </div>

                <!-- 3 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">LPコーディング</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">100,000</span><span class="p-partner-price__unit">円〜</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">長さ・アニメーション量により変動</div>
                </div>

                <!-- 4 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">WordPress構築・組み込み</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">50,000</span><span class="p-partner-price__unit">円〜</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">カスタム投稿1つ・カスタムフィールド3つまで</div>
                </div>

                <!-- 5 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">カスタム投稿追加</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">10,000</span><span class="p-partner-price__unit">円〜</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">—</div>
                </div>

                <!-- 6 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">カスタムフィールド追加</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">5,000</span><span class="p-partner-price__unit">円〜</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">—</div>
                </div>

                <!-- 7 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">サーバーアップロード</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">30,000</span><span class="p-partner-price__unit">円〜</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">本番環境への移行・初期設定・Basic認証など</div>
                </div>

                <!-- 8 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">フォーム追加</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">20,000</span><span class="p-partner-price__unit">円〜</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">—</div>
                </div>

                <!-- 9 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">各種タグ・ツール設置</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">5,000</span><span class="p-partner-price__unit">円〜</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">GA4, GTM, Clarity など設置・計測タグ</div>
                </div>

                <!-- 10 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">コード整理</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">30,000</span><span class="p-partner-price__unit">円〜</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">AIが実装したコードを読み取り、整理、保守</div>
                </div>

                <!-- 11 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">アニメーション実装</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">10,000</span><span class="p-partner-price__unit">円〜</span><span class="p-partner-price__per">/1箇所</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">—</div>
                </div>

                <!-- 12 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">GSAPアニメーション</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">30,000</span><span class="p-partner-price__unit">円〜</span><span class="p-partner-price__per">/1箇所</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">—</div>
                </div>

                <!-- 13 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">WEBサイト保守</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">10,000</span><span class="p-partner-price__unit">円〜</span><span class="p-partner-price__per">/月</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">WordPressバージョン・プラグインの管理、サイト改修など</div>
                </div>

                <!-- 14 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">ページ追加</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">10,000</span><span class="p-partner-price__unit">円〜</span><span class="p-partner-price__per">/1ページ</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">既存ページデザイン流用</div>
                </div>

                <!-- 15 -->
                <div class="p-partner-price__row" role="row">
                    <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">微修正</div>
                    <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                        <span class="p-partner-price__num">5,000</span><span class="p-partner-price__unit">円〜</span>
                    </div>
                    <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">テキスト・画像差替など</div>
                </div>

            </div>

            <!-- 注意書き -->
            <p class="p-partner-price__note">
                ※デザインデータ・仕様により料金は変動します。<br>
                ※大幅な仕様変更は追加費用となります。
            </p>

        </div>
    </section>

    <!-- ============================
        Section: かんたん料金見積りウィザード
    ============================ -->
    <section class="p-estimate" id="estimate">
        <div class="p-estimate__inner">

            <header class="p-estimate__header">
                <h2 class="p-estimate__title">かんたん料金見積り</h2>
                <p class="p-estimate__lead">
                    質問に答えるだけで、おおよその制作費用がわかります。<br>
                    迷ったら「わからない・話して決めたい」を選んでください。<br><strong>お見積もり無料</strong>（メール・必要に応じてビデオチャット対応させていただきます）。
                </p>
            </header>

            <!-- 進捗バー -->
            <div class="p-estimate__progress" role="progressbar" aria-label="進捗">
                <div class="p-estimate__progress-bar" id="js-estimate-progress"></div>
            </div>

            <!-- 現在の合計（リアルタイム表示） -->
            <div class="p-estimate__running" id="js-estimate-running" hidden>
                <span class="p-estimate__running-label">現在の合計（目安）</span>
                <span class="p-estimate__running-amount" id="js-estimate-running-amount">¥0</span>
            </div>

            <!-- ステップコンテナ -->
            <div class="p-estimate__steps" id="js-estimate-steps">

                <!-- Step 1: 依頼内容 -->
                <section class="p-estimate__step is-active" data-step="category" data-type="checkbox">
                    <h3 class="p-estimate__q">どんなご依頼？（複数選択OK）</h3>
                    <div class="p-estimate__options">
                        <label class="p-estimate__option"><input type="checkbox" name="category" value="new"><span>新規サイト制作</span></label>
                        <label class="p-estimate__option"><input type="checkbox" name="category" value="fix"><span>既存サイトの修正・変更</span></label>
                        <label class="p-estimate__option"><input type="checkbox" name="category" value="add"><span>機能・ページの追加</span></label>
                        <label class="p-estimate__option"><input type="checkbox" name="category" value="maintain"><span>月額保守</span></label>
                        <label class="p-estimate__option p-estimate__option--unsure"><input type="checkbox" name="category" value="unsure"><span>わからない・話して決めたい</span></label>
                    </div>
                </section>

                <!-- ===== 新規制作系 ===== -->

                <section class="p-estimate__step" data-step="site_type" data-type="radio" data-show-if="new">
                    <h3 class="p-estimate__q">どんなサイト？</h3>
                    <div class="p-estimate__options">
                        <label class="p-estimate__option"><input type="radio" name="site_type" value="lp"><span>LP（1ページもの）</span></label>
                        <label class="p-estimate__option"><input type="radio" name="site_type" value="corp_3"><span>企業サイト・コーポレート（3ページ）</span></label>
                        <label class="p-estimate__option"><input type="radio" name="site_type" value="corp_5"><span>企業サイト・コーポレート(5ページ)</span></label>
                        <label class="p-estimate__option"><input type="radio" name="site_type" value="corp_8"><span>企業サイト・コーポレート（8ページ以上）</span></label>
                        <label class="p-estimate__option p-estimate__option--unsure"><input type="radio" name="site_type" value="unsure"><span>わからない・話して決めたい</span></label>
                    </div>
                </section>

                <section class="p-estimate__step" data-step="has_wp" data-type="radio" data-show-if="new">
                    <h3 class="p-estimate__q">WordPress化（管理画面で更新できるように）はしますか？</h3>
                    <div class="p-estimate__options">
                        <label class="p-estimate__option"><input type="radio" name="has_wp" value="yes"><span>する</span></label>
                        <label class="p-estimate__option"><input type="radio" name="has_wp" value="no"><span>しない</span></label>
                        <label class="p-estimate__option p-estimate__option--unsure"><input type="radio" name="has_wp" value="unsure"><span>わからない・話して決めたい</span></label>
                    </div>
                </section>

                <section class="p-estimate__step" data-step="form_count" data-type="radio" data-show-if="new">
                    <h3 class="p-estimate__q">問い合わせフォームの数は？</h3>
                    <div class="p-estimate__options">
                        <label class="p-estimate__option"><input type="radio" name="form_count" value="none"><span>なし</span></label>
                        <label class="p-estimate__option"><input type="radio" name="form_count" value="one"><span>1個</span></label>
                        <label class="p-estimate__option"><input type="radio" name="form_count" value="many"><span>1個以上</span></label>
                        <label class="p-estimate__option p-estimate__option--unsure"><input type="radio" name="form_count" value="unsure"><span>わからない・話して決めたい</span></label>
                    </div>
                </section>

                <section class="p-estimate__step" data-step="animation" data-type="radio" data-show-if="new">
                    <h3 class="p-estimate__q">アニメーション実装は予定してる?</h3>
                    <div class="p-estimate__options">
                        <label class="p-estimate__option"><input type="radio" name="animation" value="none"><span>なし</span></label>
                        <label class="p-estimate__option"><input type="radio" name="animation" value="standard"><span>標準（数カ所のシンプルなフェード等）</span></label>
                        <label class="p-estimate__option"><input type="radio" name="animation" value="gsap"><span>GSAP・リッチなアニメーション</span></label>
                        <label class="p-estimate__option p-estimate__option--unsure"><input type="radio" name="animation" value="unsure"><span>わからない・話して決めたい</span></label>
                    </div>
                </section>

                <section class="p-estimate__step" data-step="has_tag" data-type="radio" data-show-if="new">
                    <h3 class="p-estimate__q">GA4・GTM・Clarity等のタグ設置は？</h3>
                    <div class="p-estimate__options">
                        <label class="p-estimate__option"><input type="radio" name="has_tag" value="yes"><span>設置をお願いする</span></label>
                        <label class="p-estimate__option"><input type="radio" name="has_tag" value="no"><span>自分でやる・不要</span></label>
                        <label class="p-estimate__option p-estimate__option--unsure"><input type="radio" name="has_tag" value="unsure"><span>わからない・話して決めたい</span></label>
                    </div>
                </section>

                <section class="p-estimate__step" data-step="has_upload" data-type="radio" data-show-if="new">
                    <h3 class="p-estimate__q">サーバーへのアップロード作業は？</h3>
                    <p class="p-estimate__sub">本番環境への移行・初期設定・Basic認証など</p>
                    <div class="p-estimate__options">
                        <label class="p-estimate__option"><input type="radio" name="has_upload" value="yes"><span>お願いする</span></label>
                        <label class="p-estimate__option"><input type="radio" name="has_upload" value="no"><span>自分でやる</span></label>
                        <label class="p-estimate__option p-estimate__option--unsure"><input type="radio" name="has_upload" value="unsure"><span>わからない・話して決めたい</span></label>
                    </div>
                </section>

                <!-- ===== 修正・変更系 ===== -->

                <section class="p-estimate__step" data-step="fix_type" data-type="checkbox" data-show-if="fix">
                    <h3 class="p-estimate__q">どんな修正？（複数選択OK）</h3>
                    <div class="p-estimate__options">
                        <label class="p-estimate__option"><input type="checkbox" name="fix_type" value="ai_code"><span>AIで実装されたコードの整理（読みやすく / 保守しやすく）</span></label>
                        <label class="p-estimate__option"><input type="checkbox" name="fix_type" value="existing"><span>既存箇所の変更</span></label>
                        <label class="p-estimate__option"><input type="checkbox" name="fix_type" value="minor"><span>テキスト・画像の差替（微修正）</span></label>
                        <label class="p-estimate__option p-estimate__option--unsure"><input type="checkbox" name="fix_type" value="unsure"><span>わからない・話して決めたい</span></label>
                    </div>
                </section>

                <section class="p-estimate__step" data-step="fix_counts" data-type="counts" data-show-if="fix">
                    <h3 class="p-estimate__q">それぞれ何箇所くらい？</h3>
                    <div class="p-estimate__counts">
                        <label class="p-estimate__count" data-show-if-fix="ai_code">
                            <span>AIコード整理</span>
                            <input type="number" name="fix_count_ai" min="0" max="50" value="0">
                            <span class="p-estimate__count-unit">箇所</span>
                        </label>
                        <label class="p-estimate__count" data-show-if-fix="existing">
                            <span>既存変更</span>
                            <input type="number" name="fix_count_existing" min="0" max="50" value="0">
                            <span class="p-estimate__count-unit">箇所</span>
                        </label>
                        <label class="p-estimate__count" data-show-if-fix="minor">
                            <span>微修正</span>
                            <input type="number" name="fix_count_minor" min="0" max="50" value="0">
                            <span class="p-estimate__count-unit">箇所</span>
                        </label>
                    </div>
                </section>

                <!-- ===== 追加系 ===== -->

                <section class="p-estimate__step" data-step="add_type" data-type="checkbox" data-show-if="add">
                    <h3 class="p-estimate__q">何を追加する？（複数選択OK）</h3>
                    <div class="p-estimate__options">
                        <label class="p-estimate__option"><input type="checkbox" name="add_type" value="page_lp"><span>LP（ランディングページ）</span></label>
                        <label class="p-estimate__option"><input type="checkbox" name="add_type" value="page_sub"><span>下層ページ</span></label>
                        <label class="p-estimate__option"><input type="checkbox" name="add_type" value="custom_post"><span>カスタム投稿</span></label>
                        <label class="p-estimate__option"><input type="checkbox" name="add_type" value="custom_field"><span>カスタムフィールド</span></label>
                        <label class="p-estimate__option"><input type="checkbox" name="add_type" value="form"><span>フォーム</span></label>
                        <label class="p-estimate__option"><input type="checkbox" name="add_type" value="anim"><span>アニメーション（標準）</span></label>
                        <label class="p-estimate__option"><input type="checkbox" name="add_type" value="anim_gsap"><span>アニメーション（GSAP）</span></label>
                        <label class="p-estimate__option p-estimate__option--unsure"><input type="checkbox" name="add_type" value="unsure"><span>わからない・話して決めたい</span></label>
                    </div>
                </section>

                <section class="p-estimate__step" data-step="add_counts" data-type="counts" data-show-if="add">
                    <h3 class="p-estimate__q">それぞれ何個くらい？</h3>
                    <div class="p-estimate__counts">
                        <label class="p-estimate__count" data-show-if-add="page_lp">
                            <span>LP追加</span>
                            <input type="number" name="add_count_lp" min="0" max="20" value="0">
                            <span class="p-estimate__count-unit">ページ</span>
                        </label>
                        <label class="p-estimate__count" data-show-if-add="page_sub">
                            <span>下層ページ追加</span>
                            <input type="number" name="add_count_sub" min="0" max="20" value="0">
                            <span class="p-estimate__count-unit">ページ</span>
                        </label>
                        <label class="p-estimate__count" data-show-if-add="custom_post">
                            <span>カスタム投稿</span>
                            <input type="number" name="add_count_custom_post" min="0" max="20" value="0">
                            <span class="p-estimate__count-unit">個</span>
                        </label>
                        <label class="p-estimate__count" data-show-if-add="custom_field">
                            <span>カスタムフィールド</span>
                            <input type="number" name="add_count_custom_field" min="0" max="20" value="0">
                            <span class="p-estimate__count-unit">個</span>
                        </label>
                        <label class="p-estimate__count" data-show-if-add="form">
                            <span>フォーム</span>
                            <input type="number" name="add_count_form" min="0" max="10" value="0">
                            <span class="p-estimate__count-unit">個</span>
                        </label>
                        <label class="p-estimate__count" data-show-if-add="anim">
                            <span>アニメーション（標準）</span>
                            <input type="number" name="add_count_anim" min="0" max="30" value="0">
                            <span class="p-estimate__count-unit">箇所</span>
                        </label>
                        <label class="p-estimate__count" data-show-if-add="anim_gsap">
                            <span>アニメーション（GSAP）</span>
                            <input type="number" name="add_count_anim_gsap" min="0" max="30" value="0">
                            <span class="p-estimate__count-unit">箇所</span>
                        </label>
                    </div>
                </section>

                <!-- ===== 月額保守 ===== -->

                <section class="p-estimate__step" data-step="maintain" data-type="info" data-show-if="maintain">
                    <h3 class="p-estimate__q">月額保守の参考料金</h3>
                    <p class="p-estimate__sub">WordPressバージョン・プラグインの管理、サイト改修など</p>
                    <div class="p-estimate__info-block">
                        <strong class="p-estimate__info-price">10,000円〜 / 月</strong>
                        <p class="p-estimate__info-note">作業量に応じて変動。詳細はお問い合わせください。</p>
                    </div>
                </section>

                <!-- ===== 結果 ===== -->

                <section class="p-estimate__step p-estimate__step--result" data-step="result">
                    <h3 class="p-estimate__q">概算見積り</h3>
                    <div class="p-estimate__total">
                        <span class="p-estimate__total-label">合計</span>
                        <span class="p-estimate__total-amount" id="js-estimate-total">¥0</span>
                        <span class="p-estimate__total-suffix">（税別・参考価格）</span>
                    </div>

                    <div class="p-estimate__monthly" id="js-estimate-monthly" hidden>
                        <span class="p-estimate__total-label">月額保守</span>
                        <span class="p-estimate__total-amount">¥10,000〜 / 月</span>
                    </div>

                    <button type="button" class="p-estimate__breakdown-toggle" id="js-estimate-breakdown-toggle" aria-expanded="false" aria-controls="js-estimate-breakdown">
                        内訳を見る
                        <span class="p-estimate__breakdown-arrow" aria-hidden="true">▼</span>
                    </button>
                    <div class="p-estimate__breakdown" id="js-estimate-breakdown" hidden>
                        <ul class="p-estimate__breakdown-list" id="js-estimate-breakdown-list"></ul>
                    </div>

                    <p class="p-estimate__result-note" id="js-estimate-result-note">
                        ※あくまで参考価格です。デザインデータ・仕様により変動します。<br>
                        <strong>正式なお見積りは無料</strong>（メールベース・必要があればビデオチャット）。
                    </p>

                    <div class="p-estimate__result-actions">
                        <button type="button" class="p-estimate__cta" id="js-estimate-to-form">この内容で問い合わせる →</button>
                        <button type="button" class="p-estimate__restart" id="js-estimate-restart">最初からやり直す</button>
                    </div>
                </section>

            </div>

            <!-- ナビゲーション -->
            <div class="p-estimate__nav">
                <button type="button" class="p-estimate__nav-btn p-estimate__nav-btn--back" id="js-estimate-back">← 前に戻る</button>
                <span class="p-estimate__step-count" id="js-estimate-step-count"></span>
                <button type="button" class="p-estimate__nav-btn p-estimate__nav-btn--next" id="js-estimate-next">次へ →</button>
            </div>

            <!-- 無料相談バナー（常時表示） -->
            <aside class="p-estimate__consult">
                <div class="p-estimate__consult-text">
                    <strong class="p-estimate__consult-title">迷ったらまずご相談を。</strong>
                    <p class="p-estimate__consult-body">
                        正式なお見積りは<strong>完全無料</strong>。<br class="u-hidden-pc">
                        メール・ビデオチャットで丁寧に対応します。<br>
                        要件次第で<strong>大幅にコストダウンできるケースも</strong>あります。
                    </p>
                </div>
                <a href="#price-contact" class="p-estimate__consult-cta">フォームへ移動 →</a>
            </aside>

        </div>
    </section>

    <!-- ============================
        Section: お問い合わせフォーム
    ============================ -->
    <section class="p-price-contact" id="price-contact">
        <div class="p-price-contact__inner">
            <header class="p-price-contact__header">
                <h2 class="p-price-contact__title">お問い合わせ</h2>
                <p class="p-price-contact__lead">
                    上の見積り結果を確認したら「この内容で問い合わせる」ボタンを押すと、<br class="u-hidden-sp">
                    下のメッセージ欄に内容が自動でコピーされます。<br>
                    必要に応じて編集して送信してください。<strong>2営業日以内</strong>にお返事します。
                </p>
            </header>

            <?php
            // WP固定ページ「price」の本文（Snow Monkey Formsブロック）をレンダリング
            // → WP管理画面 → 固定ページ → 「price」 を編集して、フォームブロックを本文にペーストしてください
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </section>

</main>

<?php get_footer('partner'); ?>