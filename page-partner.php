<?php get_header(); ?>

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Freelance Web Developer Portfolio</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;family=Noto+Sans+JP:wght@400;500;700&amp;family=JetBrains+Mono&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#5b7052", // Muted Dark Green
            secondary: "#a8c3a8", // Soft Mint Green
            "background-light": "#f7fbf7",
            "background-dark": "#0d0d0d",
            "card-dark": "#161616",
          },
          fontFamily: {
            display: ["Noto Sans JP", "sans-serif"],
            body: ["Noto Sans JP", "sans-serif"],
          },
          borderRadius: {
            DEFAULT: "1rem",
            'xl': "1.5rem",
          },
        },
      },
    };
  </script>
  <style>
    body {
      font-family: 'Noto Sans JP', sans-serif;
    }

    .section-airy {
      padding-top: 6rem;
      padding-bottom: 6rem;
    }
  </style>
</head>

<body class="bg-background-light text-slate-700 transition-colors duration-300">
  <header class="fixed top-0 w-full z-50 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-slate-200 dark:border-white/10">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
      <div class="text-xl font-bold tracking-tighter flex items-center gap-2"><span class="text-primary">WEB制作 おくだ屋</span></div>
      <nav class="hidden md:flex gap-8 text-sm font-medium">
        <a class="hover:text-primary transition-colors" href="#skills">SKILLS</a>
        <a class="hover:text-primary transition-colors" href="#pricing">PRICING</a>
        <a class="hover:text-primary transition-colors" href="#flow">FLOW</a>
        <a class="px-4 py-2 bg-primary text-black rounded font-bold hover:brightness-110 transition-all rounded-full" href="#contact">CONTACT</a>
      </nav>
    </div>
  </header>
  <section class="p-partner-hero">
    <div class="p-partner-hero__container">
      <div class="p-partner-hero__badge">
        AVAILABLE FOR NEW PROJECTS
      </div>
      <h1 class="p-partner-hero__title">
        コーディングからWordPress構築、<br />
        <span>サイトアップロードまで完遂します。</span>
      </h1>
      <div class="p-partner-hero__description">
        <p>
          AIコーディングが世を席巻する現在ですが、細かなデザインの反映ができない、一部の修正をしようとして全体が崩れる、AIのトラブルにより思わぬ手戻り…。そんな経験はございませんか？<br />
          そんな中、AIにはできない汲み取り力、頂いたデザインをトレースしてサイトへ表現、SEOに対するご提案、WordPressの構築から設定、サイトのアップロードまで、デザイン以降の作業をお任せください！
        </p>
        <p>
          ディレクター様の手取り、ストレスが少なくなるようご対応させていただきます。しっかりとコードを理解し、説明できる状態でのお渡しを前提に、コーディングの対応をさせていただきます。
        </p>
      </div>
    </div>
  </section>
  <section class="p-skills" id="skills">
    <div class="p-skills__container">
      <h2 class="p-skills__title">
        <span>01.</span> コーディングスキル
      </h2>
      <div class="p-skills__grid">
        <div class="p-skills__card">
          <span class="material-icons-round p-skills__icon">code</span>
          <h3 class="p-skills__card-title">HTML/CSS</h3>
          <p class="p-skills__description">
            BEM/FLOCSSを用いたCSS設計。納品後の運用や、貴社内のエンジニア様が触ることを前提としたコーディングを行います。
          </p>
          <div class="p-skills__tags">
            <span>BEM</span>
            <span>FLOCSS</span>
            <span>Bootstrap</span>
          </div>
        </div>
        <div class="p-skills__card">
          <span class="material-icons-round p-skills__icon">javascript</span>
          <h3 class="p-skills__card-title">JavaScript</h3>
          <p class="p-skills__description">
            jQuery, GSAP, Swiper等を用いたアニメーション実装。リッチな演出から軽量なライブラリ選定まで幅広く対応可能です。
          </p>
          <div class="p-skills__tags">
            <span>jQuery</span>
            <span>GSAP</span>
            <span>Swiper</span>
          </div>
        </div>
        <div class="p-skills__card">
          <span class="material-icons-round p-skills__icon">wordpress</span>
          <h3 class="p-skills__card-title">WordPress</h3>
          <p class="p-skills__description">
            オリジナルテーマ構築、カスタムフィールド、カスタム投稿タイプの設定。管理者が使いやすい管理画面構成を提案します。
          </p>
          <div class="p-skills__tags">
            <span>Theme Dev</span>
            <span>Local</span>
          </div>
        </div>
      </div>
      <div class="p-skills__additional">
        <div>
          <h3 class="p-skills__additional-title">
            <span class="material-icons-round p-skills__icon">brush</span>
            対応デザインツール
          </h3>
          <div class="p-skills__tools">
            <span>Photoshop</span>
            <span>Adobe XD</span>
            <span>Figma</span>
            <span>Canva</span>
          </div>
        </div>
        <div class="p-skills__additional-description">
          <p>デザインデータ・既存サイトのトレース、PDFデータからのコーディングなど、素材の形式を問わず対応させていただきます。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="p-operation" id="operation">
    <div class="p-operation__container">
      <h2 class="p-operation__title">
        <span>02.</span> 稼働体制・連絡手段
      </h2>
      <div class="p-operation__grid">
        <div class="p-operation__item">
          <div class="p-operation__icon">
            <span class="material-icons-round">schedule</span>
          </div>
          <h4 class="p-operation__heading">メイン稼働時間</h4>
          <p class="p-operation__description">5:00 ~ 11:00 / 13:00 ~ 17:00<br />土日祝も柔軟に対応します。</p>
        </div>
        <div class="p-operation__item">
          <div class="p-operation__icon">
            <span class="material-icons-round">bolt</span>
          </div>
          <h4 class="p-operation__heading">レスポンス速度</h4>
          <p class="p-operation__description">基本3時間以内<br />(遅くとも12時間以内)</p>
        </div>
        <div class="p-operation__item">
          <div class="p-operation__icon">
            <span class="material-icons-round">work</span>
          </div>
          <h4 class="p-operation__heading">週の稼働時間</h4>
          <p class="p-operation__description">50時間〜 (フルコミット可能)<br />急ぎの案件もご相談ください。</p>
        </div>
        <div class="p-operation__item">
          <div class="p-operation__icon">
            <span class="material-icons-round">chat</span>
          </div>
          <h4 class="p-operation__heading">ツール</h4>
          <p class="p-operation__description">Slack, Chatwork, Zoom, Meet, LINE等、貴社のツールに合わせます。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="p-pricing" id="pricing">
    <div class="p-pricing__container">
      <h2 class="p-pricing__title">
        <span>03.</span> 項目参考価格
      </h2>
      <div class="p-pricing__table">
        <table class="w-full text-left border-collapse">
          <thead class="p-pricing__table-header">
            <tr>
              <th>項目名</th>
              <th>参考価格 (税込)</th>
              <th>備考・詳細</th>
            </tr>
          </thead>
          <tbody class="p-pricing__table-body">
            <tr>
              <td>トップページコーディング</td>
              <td class="price">50,000円〜</td>
              <td class="note">レスポンシブ対応込 / 標準的なJS込</td>
            </tr>
            <tr>
              <td>下層ページコーディング</td>
              <td class="price">20,000円〜 / 1P</td>
              <td class="note">ボリュームにより変動</td>
            </tr>
            <tr>
              <td>LPコーディング</td>
              <td class="price">100,000円〜</td>
              <td class="note">長さ・アニメーション量により変動</td>
            </tr>
            <tr>
              <td>WordPress組み込み</td>
              <td class="price">50,000円〜</td>
              <td class="note">カスタム投稿1つ・カスタムフィールド3つまで</td>
            </tr>
            <tr>
              <td>サーバーアップロード</td>
              <td class="price">30,000円〜</td>
              <td class="note">本番環境への移行・初期設定・Basic認証など</td>
            </tr>
            <tr>
              <td>各種タグ・ツール設置</td>
              <td class="price">5,000円〜</td>
              <td class="note">GA4, GTM, Clarityなど設置・計測タグ</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="p-pricing__additional">
        <p class="p-pricing__additional-title">
          <span>verified</span>
          アフターフォロー（保証期間）について
        </p>
        <p class="p-pricing__additional-description">
          納品後1ヶ月間は表示崩れなどの不具合を無償で修正対応いたします。また、当方の瑕疵によるバグは期間を問わず無償で対応させていただきます。
        </p>
      </div>
    </div>
  </section>
  <section class="p-flow" id="flow">
    <div class="p-flow__container">
      <h2 class="p-flow__title">
        <span>04.</span> 制作フロー
      </h2>
      <div class="p-flow__timeline">
        <div class="p-flow__timeline-line"></div>
        <div class="p-flow__step">
          <div class="p-flow__step-dot"></div>
          <h3 class="p-flow__step-title">お問い合わせ</h3>
          <p class="p-flow__step-description">まずは当サイトのコンタクトフォームよりお気軽にお問い合わせください。メールでのやり取りの後、ビデオツールにて打ち合わせを行います。</p>
        </div>
        <div class="p-flow__step">
          <div class="p-flow__step-dot"></div>
          <h3 class="p-flow__step-title">お打ち合わせ・ヒアリング</h3>
          <p class="p-flow__step-description">ZoomやGoogle Meetなどで、ご依頼内容の詳細、作業範囲や条件などのすり合わせを行います。</p>
        </div>
        <div class="p-flow__step">
          <div class="p-flow__step-dot"></div>
          <h3 class="p-flow__step-title">お見積り・スケジュール提示</h3>
          <p class="p-flow__step-description">打ち合わせ後、原則1-2営業日以内に正式なお見積書と納品までのスケジュールを提示させていただきます。</p>
        </div>
        <div class="p-flow__step">
          <div class="p-flow__step-dot"></div>
          <h3 class="p-flow__step-title">コーディング実装・WP構築</h3>
          <p class="p-flow__step-description">デザインを元にSEOに配慮した実装を行います。中間報告としてテストサイトに制作過程をアップし、随時共有いたします。</p>
        </div>
        <div class="p-flow__step">
          <div class="p-flow__step-dot"></div>
          <h3 class="p-flow__step-title">修正・改修</h3>
          <p class="p-flow__step-description">コーディング後、修正、報告を繰り返し、問題がなければ納品へと進みます。</p>
        </div>
        <div class="p-flow__step">
          <div class="p-flow__step-dot"></div>
          <h3 class="p-flow__step-title">納品・本番公開</h3>
          <p class="p-flow__step-description">本番公開、またはデータ引き渡しを持って納品とさせていただきます。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-24 bg-primary text-white overflow-hidden relative">
    <div class="absolute top-0 right-0 w-1/3 h-full bg-primary/10 blur-[120px] rounded-full"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
      <h2 class="text-3xl font-bold mb-16 flex items-center gap-3">
        <span class="material-icons-round text-white">05.</span> 大切にしていること
      </h2>
      <div class="grid md:grid-cols-2 gap-12">
        <div class="space-y-8">
          <div>
            <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
              <span class="material-icons-round text-white">security</span>
              保守性を意識した設計
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed">text-white/80 text-sm leading-relaxed</p>
          </div>
          <div>
            <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
              <span class="material-icons-round text-white">devices</span>
              レスポンシブへのこだわり
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed">text-white/80 text-sm leading-relaxed</p>
          </div>
        </div>
        <div class="space-y-8">
          <div>
            <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
              <span class="material-icons-round text-white">forum</span>
              コミュニケーションコスト最小化
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed">text-white/80 text-sm leading-relaxed</p>
          </div>
          <div>
            <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
              <span class="material-icons-round text-white">mouse</span>
              ユーザビリティへの配慮
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed">text-white/80 text-sm leading-relaxed</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-32" id="contact">
    <div class="max-w-3xl mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold mb-8 dark:text-white">プロジェクトのご相談はこちら</h2>
      <p class="text-slate-500 dark:text-slate-400 mb-12">
        コーディングのみ、WordPress構築、既存サイトの修正など、<br />
        規模の大小を問わずまずはお気軽にご相談ください。
      </p>
      <a class="inline-flex items-center gap-4 px-10 py-5 bg-primary text-black text-xl font-bold rounded hover:shadow-[0_0_30px_rgba(0,240,255,0.4)] transition-all transform hover:-translate-y-1 rounded-full" href="mailto:example@domain.com">
        CONTACT ME
        <span class="material-icons-round">arrow_forward</span>
      </a>
    </div>
  </section>


  <?php get_template_part('template/footer-item'); ?>


  <?php get_template_part('template/svg'); ?>


  <?php get_footer(); ?>