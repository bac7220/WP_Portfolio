<!-- ============================
    Section 8: PRICE（料金表）
============================ -->
<section class="p-partner-price" id="price">
    <div class="p-partner-price__inner">

        <!-- 見出し -->
        <div class="p-partner-price__heading">
            <h2 class="p-partner-price__heading-en">PRICE</h2>
            <p class="p-partner-price__lead">予算計画が立てやすい、シンプルな価格設定です。</p>
        </div>

        <!-- 料金テーブル -->
        <div class="p-partner-price__table" role="table" aria-label="料金表">

            <!-- ヘッダー行（PCのみ表示） -->
            <div class="p-partner-price__row p-partner-price__row--head" role="row">
                <div class="p-partner-price__cell p-partner-price__cell--name" role="columnheader">サービス名</div>
                <div class="p-partner-price__cell p-partner-price__cell--price" role="columnheader">参考価格 (税別)</div>
                <div class="p-partner-price__cell p-partner-price__cell--note" role="columnheader">備考・詳細</div>
            </div>

            <!-- 行 1 -->
            <div class="p-partner-price__row" role="row">
                <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">トップページコーディング</div>
                <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                    <span class="p-partner-price__num">50,000</span><span class="p-partner-price__unit">円〜</span>
                </div>
                <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">レスポンシブ対応込 / 標準的なJS込</div>
            </div>

            <!-- 行 2 -->
            <div class="p-partner-price__row" role="row">
                <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">下層ページコーディング</div>
                <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                    <span class="p-partner-price__num">20,000</span><span class="p-partner-price__unit">円〜</span><span class="p-partner-price__per">/1P</span>
                </div>
                <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">ボリュームにより変動</div>
            </div>

            <!-- 行 3 -->
            <div class="p-partner-price__row" role="row">
                <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">LPコーディング</div>
                <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                    <span class="p-partner-price__num">100,000</span><span class="p-partner-price__unit">円〜</span>
                </div>
                <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">長さ・アニメーション量により変動</div>
            </div>

            <!-- 行 4 -->
            <div class="p-partner-price__row" role="row">
                <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">WordPress組み込み</div>
                <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                    <span class="p-partner-price__num">50,000</span><span class="p-partner-price__unit">円〜</span>
                </div>
                <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">カスタム投稿1つ・カスタムフィールド3つまで</div>
            </div>

            <!-- 行 5 -->
            <div class="p-partner-price__row" role="row">
                <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">サーバーアップロード</div>
                <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                    <span class="p-partner-price__num">30,000</span><span class="p-partner-price__unit">円〜</span>
                </div>
                <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">本番環境への移行・初期設定・Basic認証など</div>
            </div>

            <!-- 行 6 -->
            <div class="p-partner-price__row" role="row">
                <div class="p-partner-price__cell p-partner-price__cell--name" role="cell">各種タグ・ツール設置</div>
                <div class="p-partner-price__cell p-partner-price__cell--price" role="cell">
                    <span class="p-partner-price__num">5,000</span><span class="p-partner-price__unit">円〜</span>
                </div>
                <div class="p-partner-price__cell p-partner-price__cell--note" role="cell">GA4, GTM, Clarityなど設置・計測タグ</div>
            </div>

        </div>

        <!-- もっと見るリンク -->
        <a href="price" class="p-partner-price__more">
            <span class="p-partner-price__more-text">もっと見る</span>
            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/partner/price-arrow-up.svg')); ?>" alt="" class="p-partner-price__more-icon">
        </a>

    </div>
</section>