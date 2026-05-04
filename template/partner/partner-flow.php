<!-- ============================
    Section 9: FLOW（制作フロー）
============================ -->
<section class="p-partner-flow" id="flow">
    <div class="p-partner-flow__inner">

        <!-- 見出し -->
        <div class="p-partner-flow__heading">
            <span class="p-partner-flow__heading-en" aria-hidden="true">FLOW</span>
            <h2 class="p-partner-flow__heading-ja">ご依頼から納品までの流れ</h2>
            <p class="p-partner-flow__lead">テストサイトでの随時共有を行い、進行状況を常に可視化します。</p>
        </div>

        <!-- ステップカード列 -->
        <ol class="p-partner-flow__steps">

            <!-- Step 01 -->
            <li class="p-partner-flow__step">
                <div class="p-partner-flow__step-illust">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/partner/flow-step-1.svg')); ?>" alt="">
                </div>
                <div class="p-partner-flow__step-body">
                    <span class="p-partner-flow__step-num">Step 01</span>
                    <h3 class="p-partner-flow__step-title">お問い合わせ</h3>
                    <p class="p-partner-flow__step-text">
                        まずは当サイトのコンタクトフォームよりお気軽にお問い合わせください。メールでのやり取りの後、ビデオツールにて打ち合わせを行います。
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-partner-flow__step-btn">
                        Contact
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/partner/flow-send-icon.svg')); ?>" alt="" class="p-partner-flow__step-btn-icon">
                    </a>
                </div>
            </li>

            <!-- Step 02 -->
            <li class="p-partner-flow__step">
                <div class="p-partner-flow__step-illust">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/partner/flow-step-2.svg')); ?>" alt="">
                </div>
                <div class="p-partner-flow__step-body">
                    <span class="p-partner-flow__step-num">Step 02</span>
                    <h3 class="p-partner-flow__step-title">Webセッション（ヒアリング）</h3>
                    <p class="p-partner-flow__step-text">
                        ZoomやGoogle Meet等で30〜60分程度お話しします。ご依頼内容の詳細、作業範囲、今後の進め方などのすり合わせを行います。
                    </p>
                </div>
            </li>

            <!-- Step 03 -->
            <li class="p-partner-flow__step">
                <div class="p-partner-flow__step-illust">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/partner/flow-step-3.svg')); ?>" alt="">
                </div>
                <div class="p-partner-flow__step-body">
                    <span class="p-partner-flow__step-num">Step 03</span>
                    <h3 class="p-partner-flow__step-title">お見積り・スケジュールのご提示</h3>
                    <p class="p-partner-flow__step-text">
                        打ち合わせ後、原則1〜2営業日以内に正式なお見積書と、納品までの明確なスケジュールをご提示いたします。
                    </p>
                </div>
            </li>

            <!-- Step 04（装飾アイコン付き） -->
            <li class="p-partner-flow__step p-partner-flow__step--deco">
                <span class="p-partner-flow__step-deco" aria-hidden="true">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/partner/flow-arrow-deco.svg')); ?>" alt="">
                </span>
                <div class="p-partner-flow__step-illust">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/partner/flow-step-4.svg')); ?>" alt="">
                </div>
                <div class="p-partner-flow__step-body">
                    <span class="p-partner-flow__step-num">Step 04</span>
                    <h3 class="p-partner-flow__step-title">実装・WP構築（随時共有）</h3>
                    <p class="p-partner-flow__step-text">
                        SEOに配慮した実装を行います。中間報告としてテストサイトに制作過程をアップし、随時共有。修正を繰り返しながら完成に近づけます。
                    </p>
                </div>
            </li>

            <!-- Step 05 -->
            <li class="p-partner-flow__step">
                <div class="p-partner-flow__step-illust">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/partner/flow-step-5.svg')); ?>" alt="">
                </div>
                <div class="p-partner-flow__step-body">
                    <span class="p-partner-flow__step-num">Step 05</span>
                    <h3 class="p-partner-flow__step-title">納品・公開・無償サポート</h3>
                    <p class="p-partner-flow__step-text">
                        本番公開、またはデータ引き渡しを持って納品とさせていただきます。納品後1ヶ月間は無償で表示崩れなどの不具合に対応いたします。
                    </p>
                </div>
            </li>

        </ol>

    </div>
</section>
