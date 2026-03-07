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
  <section class="relative pt-32 pb-20 overflow-hidden">
    <div class="max-w-5xl mx-auto px-6 relative z-10">
      <div class="inline-block px-4 py-1 mb-6 rounded-full bg-primary/10 text-primary text-xs font-bold">
        AVAILABLE FOR NEW PROJECTS
      </div>
      <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-8 dark:text-white">
        コーディングからWordPress構築、<br />
        <span class="text-primary">サイトアップロードまで完遂します。</span>
      </h1>
      <div class="grid md:grid-cols-2 gap-12 text-slate-600 dark:text-slate-400 leading-relaxed">
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
  <section class="py-24 bg-slate-50 dark:bg-card-dark/50" id="skills">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-3xl font-bold mb-12 flex items-center gap-3">
        <span class="text-primary font-mono">01.</span> コーディングスキル
      </h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="p-8 rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-card-dark hover:border-primary/50 transition-colors group shadow-sm border-none bg-white">
          <span class="material-icons-round text-primary/80 mb-4 text-3xl">code</span>
          <h3 class="text-xl font-bold mb-4 dark:text-white">HTML/CSS</h3>
          <p class="text-sm text-slate-500 dark:text-slate-400 mb-4 leading-relaxed">
            BEM/FLOCSSを用いたCSS設計。納品後の運用や、貴社内のエンジニア様が触ることを前提としたコーディングを行います。
          </p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 bg-slate-100 dark:bg-white/5 text-[10px] rounded font-bold">BEM</span>
            <span class="px-2 py-1 bg-slate-100 dark:bg-white/5 text-[10px] rounded font-bold">FLOCSS</span>
            <span class="px-2 py-1 bg-slate-100 dark:bg-white/5 text-[10px] rounded font-bold">Bootstrap</span>
          </div>
        </div>
        <div class="p-8 rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-card-dark hover:border-primary/50 transition-colors shadow-sm border-none bg-white">
          <span class="material-icons-round text-primary/80 mb-4 text-3xl">javascript</span>
          <h3 class="text-xl font-bold mb-4 dark:text-white">JavaScript</h3>
          <p class="text-sm text-slate-500 dark:text-slate-400 mb-4 leading-relaxed">
            jQuery, GSAP, Swiper等を用いたアニメーション実装。リッチな演出から軽量なライブラリ選定まで幅広く対応可能です。
          </p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 bg-slate-100 dark:bg-white/5 text-[10px] rounded font-bold">jQuery</span>
            <span class="px-2 py-1 bg-slate-100 dark:bg-white/5 text-[10px] rounded font-bold">GSAP</span>
            <span class="px-2 py-1 bg-slate-100 dark:bg-white/5 text-[10px] rounded font-bold">Swiper</span>
          </div>
        </div>
        <div class="p-8 rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-card-dark hover:border-primary/50 transition-colors shadow-sm border-none bg-white">
          <span class="material-icons-round text-primary/80 mb-4 text-3xl">wordpress</span>
          <h3 class="text-xl font-bold mb-4 dark:text-white">WordPress</h3>
          <p class="text-sm text-slate-500 dark:text-slate-400 mb-4 leading-relaxed">
            オリジナルテーマ構築、カスタムフィールド、カスタム投稿タイプの設定。管理者が使いやすい管理画面構成を提案します。
          </p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 bg-slate-100 dark:bg-white/5 text-[10px] rounded font-bold">Theme Dev</span>
            <span class="px-2 py-1 bg-slate-100 dark:bg-white/5 text-[10px] rounded font-bold">Local</span>
          </div>
        </div>
      </div>
      <div class="mt-12 grid md:grid-cols-2 gap-8 items-center border border-primary/20 p-8 rounded-2xl bg-white shadow-sm border-none">
        <div>
          <h3 class="text-lg font-bold mb-4 flex items-center gap-2 dark:text-white">
            <span class="material-icons-round text-primary/80 mb-4 text-3xl">brush</span>
            対応デザインツール
          </h3>
          <div class="flex gap-6 grayscale opacity-70">
            <span class="font-bold">Photoshop</span>
            <span class="font-bold">Adobe XD</span>
            <span class="font-bold">Figma</span>
            <span class="font-bold">Canva</span>
          </div>
        </div>
        <div class="text-sm text-slate-500 dark:text-slate-400 border-l border-primary/20 pl-8 bg-white shadow-sm border-none">
          <p>デザインデータ・既存サイトのトレース、PDFデータからのコーディングなど、素材の形式を問わず対応させていただきます。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-24">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-3xl font-bold mb-12 flex items-center gap-3">
        <span class="text-primary font-mono">02.</span> 稼働体制・連絡手段
      </h2>
      <div class="grid md:grid-cols-4 gap-8">
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center rounded-full">
            <span class="material-icons-round text-primary">schedule</span>
          </div>
          <h4 class="font-bold dark:text-white">メイン稼働時間</h4>
          <p class="text-sm text-slate-500 dark:text-slate-400">5:00 ~ 11:00 / 13:00 ~ 17:00<br />土日祝も柔軟に対応します。</p>
        </div>
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center rounded-full">
            <span class="material-icons-round text-primary">bolt</span>
          </div>
          <h4 class="font-bold dark:text-white">レスポンス速度</h4>
          <p class="text-sm text-slate-500 dark:text-slate-400">基本3時間以内<br />(遅くとも12時間以内)</p>
        </div>
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center rounded-full">
            <span class="material-icons-round text-primary">work</span>
          </div>
          <h4 class="font-bold dark:text-white">週の稼働時間</h4>
          <p class="text-sm text-slate-500 dark:text-slate-400">50時間〜 (フルコミット可能)<br />急ぎの案件もご相談ください。</p>
        </div>
        <div class="space-y-4">
          <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center rounded-full">
            <span class="material-icons-round text-primary">chat</span>
          </div>
          <h4 class="font-bold dark:text-white">ツール</h4>
          <p class="text-sm text-slate-500 dark:text-slate-400">Slack, Chatwork, Zoom, Meet, LINE等、貴社のツールに合わせます。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-24 bg-slate-50 dark:bg-card-dark/50" id="pricing">
    <div class="max-w-5xl mx-auto px-6">
      <h2 class="text-3xl font-bold mb-12 text-center flex items-center justify-center gap-3">
        <span class="p-6 border-b border-slate-100 font-bold text-primary">03.</span> 項目参考価格
      </h2>
      <div class="overflow-hidden rounded-xl border border-slate-200 dark:border-white/10 shadow-sm">
        <table class="w-full text-left border-collapse">
          <thead class="bg-slate-100 dark:bg-white/5">
            <tr>
              <th class="p-6 font-bold dark:text-white border-b border-slate-200 dark:border-white/10">項目名</th>
              <th class="p-6 font-bold dark:text-white border-b border-slate-200 dark:border-white/10">参考価格 (税込)</th>
              <th class="p-6 font-bold dark:text-white border-b border-slate-200 dark:border-white/10">備考・詳細</th>
            </tr>
          </thead>
          <tbody class="bg-white dark:bg-background-dark">
            <tr class="hover:bg-slate-50 dark:hover:bg-white/5 transition-colors">
              <td class="p-6 border-b border-slate-100 dark:border-white/5 font-medium">トップページコーディング</td>
              <td class="p-6 border-b border-slate-100 font-bold text-primary">50,000円〜</td>
              <td class="p-6 border-b border-slate-100 dark:border-white/5 text-sm text-slate-500">レスポンシブ対応込 / 標準的なJS込</td>
            </tr>
            <tr class="hover:bg-slate-50 dark:hover:bg-white/5 transition-colors">
              <td class="p-6 border-b border-slate-100 dark:border-white/5 font-medium">下層ページコーディング</td>
              <td class="p-6 border-b border-slate-100 font-bold text-primary">20,000円〜 / 1P</td>
              <td class="p-6 border-b border-slate-100 dark:border-white/5 text-sm text-slate-500">ボリュームにより変動</td>
            </tr>
            <tr class="hover:bg-slate-50 dark:hover:bg-white/5 transition-colors">
              <td class="p-6 border-b border-slate-100 dark:border-white/5 font-medium">LPコーディング</td>
              <td class="p-6 border-b border-slate-100 font-bold text-primary">100,000円〜</td>
              <td class="p-6 border-b border-slate-100 dark:border-white/5 text-sm text-slate-500">長さ・アニメーション量により変動</td>
            </tr>
            <tr class="hover:bg-slate-50 dark:hover:bg-white/5 transition-colors">
              <td class="p-6 border-b border-slate-100 dark:border-white/5 font-medium">WordPress組み込み</td>
              <td class="p-6 border-b border-slate-100 font-bold text-primary">50,000円〜</td>
              <td class="p-6 border-b border-slate-100 dark:border-white/5 text-sm text-slate-500">カスタム投稿1つ・カスタムフィールド3つまで</td>
            </tr>
            <tr class="hover:bg-slate-50 dark:hover:bg-white/5 transition-colors">
              <td class="p-6 border-b border-slate-100 dark:border-white/5 font-medium">サーバーアップロード</td>
              <td class="p-6 border-b border-slate-100 font-bold text-primary">30,000円〜</td>
              <td class="p-6 border-b border-slate-100 dark:border-white/5 text-sm text-slate-500">本番環境への移行・初期設定・Basic認証など</td>
            </tr>
            <tr class="hover:bg-slate-50 dark:hover:bg-white/5 transition-colors">
              <td class="p-6 border-b border-slate-100 dark:border-white/5 font-medium">各種タグ・ツール設置</td>
              <td class="p-6 border-b border-slate-100 font-bold text-primary">5,000円〜</td>
              <td class="p-6 border-b border-slate-100 dark:border-white/5 text-sm text-slate-500">GA4, GTM, Clarityなど設置・計測タグ</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="mt-8 p-8 rounded-2xl bg-white shadow-sm border-none text-sm">
        <p class="font-bold mb-2 flex items-center gap-2">
          <span class="p-6 border-b border-slate-100 font-bold text-primary">verified</span>
          アフターフォロー（保証期間）について
        </p>
        <p class="text-slate-600 dark:text-slate-400">
          納品後1ヶ月間は表示崩れなどの不具合を無償で修正対応いたします。また、当方の瑕疵によるバグは期間を問わず無償で対応させていただきます。
        </p>
      </div>
    </div>
  </section>
  <section class="py-24" id="flow">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-3xl font-bold mb-16 text-center flex items-center justify-center gap-3">
        <span class="text-primary font-mono">04.</span> 制作フロー
      </h2>
      <div class="space-y-0 relative">
        <div class="absolute left-[7px] top-0 bottom-0 w-[2px] bg-slate-200 dark:bg-white/10"></div>
        <div class="relative pl-10 pb-12 group">
          <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-primary border-4 border-background-light dark:border-background-dark group-hover:scale-125 transition-transform z-10"></div>
          <h3 class="font-bold text-xl mb-2 dark:text-white">お問い合わせ</h3>
          <p class="text-slate-500 dark:text-slate-400 text-sm">まずは当サイトのコンタクトフォームよりお気軽にお問い合わせください。メールでのやり取りの後、ビデオツールにて打ち合わせを行います。</p>
        </div>
        <div class="relative pl-10 pb-12 group">
          <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-primary border-4 border-background-light dark:border-background-dark group-hover:scale-125 transition-transform z-10"></div>
          <h3 class="font-bold text-xl mb-2 dark:text-white">お打ち合わせ・ヒアリング</h3>
          <p class="text-slate-500 dark:text-slate-400 text-sm">ZoomやGoogle Meetなどで、ご依頼内容の詳細、作業範囲や条件などのすり合わせを行います。</p>
        </div>
        <div class="relative pl-10 pb-12 group">
          <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-primary border-4 border-background-light dark:border-background-dark group-hover:scale-125 transition-transform z-10"></div>
          <h3 class="font-bold text-xl mb-2 dark:text-white">お見積り・スケジュール提示</h3>
          <p class="text-slate-500 dark:text-slate-400 text-sm">打ち合わせ後、原則1-2営業日以内に正式なお見積書と納品までのスケジュールを提示させていただきます。</p>
        </div>
        <div class="relative pl-10 pb-12 group">
          <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-primary border-4 border-background-light dark:border-background-dark group-hover:scale-125 transition-transform z-10"></div>
          <h3 class="font-bold text-xl mb-2 dark:text-white">コーディング実装・WP構築</h3>
          <p class="text-slate-500 dark:text-slate-400 text-sm">デザインを元にSEOに配慮した実装を行います。中間報告としてテストサイトに制作過程をアップし、随時共有いたします。</p>
        </div>
        <div class="relative pl-10 pb-12 group">
          <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-primary border-4 border-background-light dark:border-background-dark group-hover:scale-125 transition-transform z-10"></div>
          <h3 class="font-bold text-xl mb-2 dark:text-white">修正・改修</h3>
          <p class="text-slate-500 dark:text-slate-400 text-sm">コーディング後、修正、報告を繰り返し、問題がなければ納品へと進みます。</p>
        </div>
        <div class="relative pl-10 group">
          <div class="absolute left-0 top-1 w-4 h-4 rounded-full bg-primary border-4 border-background-light dark:border-background-dark group-hover:scale-125 transition-transform z-10"></div>
          <h3 class="font-bold text-xl mb-2 dark:text-white">納品・本番公開</h3>
          <p class="text-slate-500 dark:text-slate-400 text-sm">本番公開、またはデータ引き渡しを持って納品とさせていただきます。</p>
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