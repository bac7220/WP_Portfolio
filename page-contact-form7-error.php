<?php get_header();?>
<style>
  :root {
    --primary: #2271b1;
    --primary-dark: #135e96;
    --bg: #f0f0f1;
    --text: #3c434a;
    --white: #ffffff;
    --red: #d63638;
    --orange: #f56e28;
    --yellow: #dba617;
    --gray: #646970;
    --green: #00a32a;
  }
  * { box-sizing: border-box; }
  body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
    background-color: var(--bg);
    color: var(--text);
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
  }
  .app-container {
    background: var(--white);
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    max-width: 560px;
    width: 100%;
    margin: 20px auto;
  }
  h1 {
    font-size: 1.3rem;
    text-align: center;
    margin-top: 0;
    color: var(--primary);
    border-bottom: 2px solid var(--bg);
    padding-bottom: 15px;
  }

  /* パンくず */
  .breadcrumb {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-bottom: 20px;
    font-size: 0.75rem;
    color: var(--gray);
  }
  .breadcrumb span { display: flex; align-items: center; gap: 4px; }
  .breadcrumb span::after { content: "›"; }
  .breadcrumb span:last-child::after { content: ""; color: var(--text); font-weight: bold; }
  .breadcrumb span:last-child { color: var(--text); }

  .question-box { margin-bottom: 20px; }
  .question-text {
    font-size: 1.05rem;
    font-weight: bold;
    margin-bottom: 15px;
    line-height: 1.5;
  }
  .sub-text {
    font-size: 0.88rem;
    color: var(--gray);
    margin-bottom: 14px;
    background: #f6f7f7;
    padding: 10px 12px;
    border-radius: 4px;
    line-height: 1.6;
  }
  .btn {
    display: block;
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 10px;
    border: 2px solid #ddd;
    background: var(--white);
    border-radius: 6px;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.2s;
    text-align: left;
    line-height: 1.4;
  }
  .btn:hover { border-color: var(--primary); background: #f6f7f7; }
  .btn.red    { border-left: 6px solid var(--red); }
  .btn.orange { border-left: 6px solid var(--orange); }
  .btn.yellow { border-left: 6px solid var(--yellow); }
  .btn.gray   { border-left: 6px solid var(--gray); }
  .btn.yes    { border-left: 6px solid var(--green); }
  .btn.no     { border-left: 6px solid var(--red); }
  .btn.maybe  { border-left: 6px solid var(--yellow); }

  /* 結果 */
  .result-box {
    display: none;
    background: #e6f0f9;
    padding: 22px;
    border-radius: 6px;
    border-left: 4px solid var(--primary);
  }
  .result-title {
    font-weight: bold;
    color: var(--primary);
    margin-top: 0;
    font-size: 1.05rem;
  }
  .result-box ul { padding-left: 20px; margin: 10px 0 0; }
  .result-box li { margin-bottom: 10px; line-height: 1.6; }
  .result-box code {
    background: #d0e4f5;
    padding: 2px 6px;
    border-radius: 3px;
    font-size: 0.88em;
    font-family: "SFMono-Regular", Consolas, monospace;
  }
  .result-box .step-block {
    background: #fff;
    border: 1px solid #c5d9ed;
    border-radius: 5px;
    padding: 12px 14px;
    margin-top: 10px;
  }
  .result-box .step-block h4 {
    margin: 0 0 8px;
    font-size: 0.9rem;
    color: var(--primary-dark);
  }

  .reset-btn {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    background: var(--primary);
    color: var(--white);
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    font-size: 0.95rem;
  }
  .reset-btn:hover { background: var(--primary-dark); }

  .back-btn {
    display: inline-block;
    margin-bottom: 14px;
    background: none;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px 12px;
    font-size: 0.85rem;
    cursor: pointer;
    color: var(--gray);
  }
  .back-btn:hover { background: #f6f7f7; }
</style>
</head>
<body>

<div class="app-container">
  <h1>CF7 エラー診断アプリ 🚑</h1>
  <div id="breadcrumb" class="breadcrumb"></div>

  <div id="step-container" class="question-box"></div>

  <div id="result-container" class="result-box">
    <h3 class="result-title" id="result-title"></h3>
    <div id="result-content"></div>
    <button class="reset-btn" onclick="initApp()">最初からやり直す</button>
  </div>
</div>

<script>
const flowData = {

  /* ── スタート ── */
  start: {
    question: "テスト送信時、どんなエラーが出ますか？",
    choices: [
      { text: "🟥 赤色の枠「送信に失敗しました」", next: "red_q1", cls: "red" },
      { text: "🟧 オレンジ色の枠「送信に失敗しました」", next: "orange_q1", cls: "orange" },
      { text: "🟨 黄色の枠「入力内容に問題があります」", next: "yellow_q1", cls: "yellow" },
      { text: "🌀 矢印がくるくる回って終わらない", next: "spin_q1", cls: "gray" }
    ]
  },

  /* ══════════════════════════════════
     🟥 赤枠ルート
  ══════════════════════════════════ */
  red_q1: {
    question: "CF7の「メール」タブにある「送信元」のメールアドレスを確認してください。",
    sub: "例：wordpress@example.com や info@example.com など",
    choices: [
      { text: "✅ サイトと同じドメイン（例: info@example.com）", next: "red_q2", cls: "yes" },
      { text: "❌ Gmailや別ドメイン（例: xxx@gmail.com）", next: "red_domain_ng", cls: "no" }
    ]
  },
  red_domain_ng: {
    isResult: true,
    title: "💡 送信元のドメインを合わせてください",
    content: `
      <p>サーバーのスパム対策に弾かれています。「なりすまし」と判定されるためです。</p>
      <div class="step-block">
        <h4>✏️ 修正箇所</h4>
        <ul>
          <li>CF7の「メール」タブを開く</li>
          <li>「送信元」欄を <code>[your-name] &lt;info@あなたのドメイン.com&gt;</code> に変更</li>
          <li>変更後、テスト送信して赤枠が消えるか確認</li>
        </ul>
      </div>
      <div class="step-block">
        <h4>📌 まだ赤枠が出る場合</h4>
        <ul>
          <li>「最初からやり直す」で戻り、送信元を直した上で再度「同じドメイン」を選んでください</li>
        </ul>
      </div>
    `
  },

  red_q2: {
    question: "WP Mail SMTP などの「SMTPプラグイン」はすでに入っていますか？",
    choices: [
      { text: "✅ 入っている・設定済み", next: "red_smtp_configured", cls: "yes" },
      { text: "❌ 入っていない・よくわからない", next: "red_smtp_setup", cls: "no" }
    ]
  },

  /* SMTPなし → 設定フロー */
  red_smtp_setup: {
    question: "SMTP設定を行います。どの方法で送信しますか？",
    sub: "サーバーのメールアカウントかGmailか選んでください。\nどちらでも送信できますが、サーバーメールの方が設定は簡単です。",
    choices: [
      { text: "🖥 サーバーのメールアカウント（ConoHa・さくら等）を使う", next: "red_smtp_server", cls: "maybe" },
      { text: "📨 Gmailを使う", next: "red_smtp_gmail", cls: "maybe" }
    ]
  },

  red_smtp_server: {
    isResult: true,
    title: "💡 WP Mail SMTP ＋ サーバーSMTPの設定手順",
    content: `
      <div class="step-block">
        <h4>① プラグインをインストール</h4>
        <ul>
          <li>WordPress管理画面 →「プラグイン」→「新規追加」</li>
          <li>「WP Mail SMTP」を検索してインストール・有効化</li>
        </ul>
      </div>
      <div class="step-block">
        <h4>② SMTPの情報を確認する（サーバー管理画面で調べる）</h4>
        <ul>
          <li>SMTPホスト：例） <code>mail.example.com</code></li>
          <li>ポート番号：<code>587</code>（TLS）または <code>465</code>（SSL）</li>
          <li>ユーザー名：メールアドレス全体 例） <code>info@example.com</code></li>
          <li>パスワード：そのメールアカウントのパスワード</li>
        </ul>
      </div>
      <div class="step-block">
        <h4>③ WP Mail SMTPに入力</h4>
        <ul>
          <li>管理画面 →「WP Mail SMTP」→「設定」</li>
          <li>「送信方法」→「その他のSMTP」を選択</li>
          <li>②で確認した情報を各欄に入力して保存</li>
        </ul>
      </div>
      <div class="step-block">
        <h4>④ テスト送信</h4>
        <ul>
          <li>WP Mail SMTPの「メールテスト」タブからテスト送信</li>
          <li>「メールが正常に送信されました」と出ればOK</li>
          <li>次にCF7でもテスト送信して確認</li>
        </ul>
      </div>
    `
  },

  red_smtp_gmail: {
    isResult: true,
    title: "💡 WP Mail SMTP ＋ Gmail（Googleアプリパスワード）の設定手順",
    content: `
      <div class="step-block">
        <h4>① Googleアカウントの「2段階認証」をONにする</h4>
        <ul>
          <li>myaccount.google.com → セキュリティ →「2段階認証プロセス」を有効化</li>
          <li>※これをしないとアプリパスワードが発行できません</li>
        </ul>
      </div>
      <div class="step-block">
        <h4>② アプリパスワードを発行する</h4>
        <ul>
          <li>myaccount.google.com → セキュリティ →「アプリパスワード」</li>
          <li>アプリ名に「WordPress」などと入力して「生成」</li>
          <li>表示される16桁のパスワードをコピーしておく</li>
        </ul>
      </div>
      <div class="step-block">
        <h4>③ WP Mail SMTP に入力</h4>
        <ul>
          <li>送信方法：「その他のSMTP」を選択</li>
          <li>SMTPホスト：<code>smtp.gmail.com</code></li>
          <li>暗号化：TLS　ポート：<code>587</code></li>
          <li>ユーザー名：Gmailアドレス全体 例） <code>xxx@gmail.com</code></li>
          <li>パスワード：②で発行した16桁のアプリパスワード</li>
        </ul>
      </div>
      <div class="step-block">
        <h4>④ テスト送信</h4>
        <ul>
          <li>WP Mail SMTPの「メールテスト」→「テスト送信」</li>
          <li>Gmailの送信済みに届いていればOK</li>
          <li>CF7でも送信テストして確認</li>
        </ul>
      </div>
    `
  },

  /* SMTPあり → 設定確認フロー */
  red_smtp_configured: {
    question: "WP Mail SMTP の「メールテスト」から送信すると成功しますか？",
    sub: "管理画面 → WP Mail SMTP → 「メールテスト」タブで確認できます",
    choices: [
      { text: "✅ 成功する（メールが届く）", next: "red_smtp_ok_but_cf7", cls: "yes" },
      { text: "❌ 失敗する（エラーが出る）", next: "red_smtp_fail", cls: "no" }
    ]
  },

  red_smtp_ok_but_cf7: {
    question: "SMTPは通るのにCF7だけ失敗する場合、CF7の「送信元」メールを確認してください。",
    sub: "「送信元」が info@example.com のようにサイトのドメインと一致していますか？",
    choices: [
      { text: "✅ 一致している", next: "red_smtp_ok_conflict", cls: "yes" },
      { text: "❌ 一致していない", next: "red_domain_ng", cls: "no" }
    ]
  },

  red_smtp_ok_conflict: {
    isResult: true,
    title: "💡 他プラグインや設定との干渉を確認してください",
    content: `
      <div class="step-block">
        <h4>確認ポイント</h4>
        <ul>
          <li>WP Mail SMTPの「強制送信元メール」が有効な場合、CF7の送信元が上書きされます。CF7の「送信元」と一致させてください。</li>
          <li>Flamingo（CF7の保存プラグイン）を使っている場合、設定が干渉することがあります。一度無効化してテスト。</li>
          <li>セキュリティプラグイン（SiteGuard等）がメール送信をブロックしていないか確認。</li>
        </ul>
      </div>
    `
  },

  red_smtp_fail: {
    question: "WP Mail SMTPのエラー内容はどれに近いですか？",
    choices: [
      { text: "認証失敗・パスワードが違う", next: "red_smtp_auth", cls: "no" },
      { text: "接続できない・タイムアウト", next: "red_smtp_connect", cls: "no" },
      { text: "Gmailで「安全性の低いアプリ」エラー", next: "red_smtp_gmail_app", cls: "maybe" }
    ]
  },

  red_smtp_auth: {
    isResult: true,
    title: "💡 SMTP認証エラーの対処法",
    content: `
      <div class="step-block">
        <h4>確認・対処</h4>
        <ul>
          <li>パスワードをコピペではなく手打ちで再入力してみる（スペースが混入しやすい）</li>
          <li>Gmailの場合：通常のパスワードではなく「アプリパスワード（16桁）」が必要です</li>
          <li>サーバーメールの場合：メールアカウントのパスワードをサーバー管理画面で確認・再設定</li>
        </ul>
      </div>
    `
  },

  red_smtp_connect: {
    isResult: true,
    title: "💡 SMTP接続エラーの対処法",
    content: `
      <div class="step-block">
        <h4>確認・対処</h4>
        <ul>
          <li>ポート番号を変えてみる：<code>587</code>（TLS）または <code>465</code>（SSL）</li>
          <li>SMTPホスト名が正しいか再確認（サーバー管理画面で調べる）</li>
          <li>レンタルサーバーによっては外部SMTPへの接続を制限している場合があります。その場合はサーバー自身のSMTPを使用してください。</li>
        </ul>
      </div>
    `
  },

  red_smtp_gmail_app: {
    isResult: true,
    title: "💡 Gmailのアプリパスワード設定が必要です",
    content: `
      <div class="step-block">
        <h4>対処</h4>
        <ul>
          <li>Googleの「安全性の低いアプリ」設定は廃止されています</li>
          <li>必ず「アプリパスワード」を使う必要があります</li>
          <li>手順：myaccount.google.com → セキュリティ → 2段階認証をON → アプリパスワードを発行</li>
          <li>発行した16桁のパスワードをWP Mail SMTPのパスワード欄に入力</li>
        </ul>
      </div>
    `
  },

  /* ══════════════════════════════════
     🟧 オレンジ枠ルート
  ══════════════════════════════════ */
  orange_q1: {
    question: "reCAPTCHAは設定していますか？",
    choices: [
      { text: "✅ している（reCAPTCHA v3 または v2）", next: "orange_recaptcha_yes", cls: "yes" },
      { text: "❌ していない・わからない", next: "orange_recaptcha_no", cls: "no" }
    ]
  },

  orange_recaptcha_yes: {
    question: "reCAPTCHAのサイトキー・シークレットキーはGoogle Cloud Consoleで発行したものですか？",
    choices: [
      { text: "✅ 正しく発行・入力している", next: "orange_recaptcha_domain", cls: "yes" },
      { text: "❌ よくわからない・コピペミスかも", next: "orange_recaptcha_key", cls: "no" }
    ]
  },

  orange_recaptcha_key: {
    isResult: true,
    title: "💡 reCAPTCHAのキーを再確認してください",
    content: `
      <div class="step-block">
        <h4>手順</h4>
        <ul>
          <li><a href="https://www.google.com/recaptcha/admin" target="_blank">Google reCAPTCHA管理画面</a>にアクセス</li>
          <li>該当サイトの「サイトキー」と「シークレットキー」を再コピー</li>
          <li>CF7の設定 →「インテグレーション」→ reCAPTCHAに貼り付け</li>
          <li>スペースが入らないように注意</li>
        </ul>
      </div>
    `
  },

  orange_recaptcha_domain: {
    isResult: true,
    title: "💡 reCAPTCHAのドメイン設定を確認してください",
    content: `
      <div class="step-block">
        <h4>確認ポイント</h4>
        <ul>
          <li>Google reCAPTCHA管理画面でサイトのドメインが登録されているか確認</li>
          <li>例：<code>example.com</code> と <code>www.example.com</code> を両方登録する</li>
          <li>ローカル環境（localhost）でテストしている場合は <code>localhost</code> も追加</li>
          <li>それでも解決しない場合は、別のスパム対策（honeypotなど）に切り替えることも選択肢です</li>
        </ul>
      </div>
    `
  },

  orange_recaptcha_no: {
    isResult: true,
    title: "💡 スパム判定の原因を確認してください",
    content: `
      <div class="step-block">
        <h4>考えられる原因</h4>
        <ul>
          <li>CF7に内蔵のスパムフィルターが誤検知している可能性があります</li>
          <li>Akismetプラグインが有効な場合、設定を確認してください</li>
          <li>フォームのフィールド名（<code>your-name</code>等）が標準のまま使われていると誤検知されやすいです</li>
          <li>対策：reCAPTCHA v3を導入するか、Honeypot for Contact Form 7プラグインを追加してください</li>
        </ul>
      </div>
    `
  },

  /* ══════════════════════════════════
     🟨 黄色枠ルート
  ══════════════════════════════════ */
  yellow_q1: {
    question: "フォームのどの項目でエラーが出ていますか？",
    choices: [
      { text: "特定の入力欄（名前・メール等）が赤くなる", next: "yellow_field", cls: "maybe" },
      { text: "送信ボタンを押しても全体に黄色枠が出る", next: "yellow_tag", cls: "maybe" }
    ]
  },

  yellow_field: {
    isResult: true,
    title: "💡 入力内容のバリデーションエラーです",
    content: `
      <div class="step-block">
        <h4>確認ポイント</h4>
        <ul>
          <li>「必須（*付き）」の項目が空欄になっていないか確認</li>
          <li>メールアドレス欄に正しい形式（例: <code>test@example.com</code>）を入力しているか確認</li>
          <li>数値欄に文字が入っていないか、文字数制限を超えていないか確認</li>
          <li>これはユーザーの入力ミスによるもので、CF7の設定自体は問題ありません</li>
        </ul>
      </div>
    `
  },

  yellow_tag: {
    isResult: true,
    title: "💡 CF7フォームタグの記述ミスを確認してください",
    content: `
      <div class="step-block">
        <h4>確認ポイント</h4>
        <ul>
          <li>フォームタグのスペルミス例：<code>[text your-name]</code> ← OK、<code>[txet your-name]</code> ← NG</li>
          <li>メールタブの <code>[your-name]</code> がフォームタブのフィールド名と一致しているか確認</li>
          <li>全角スペースが混入していないか（特にコピペ時に入りやすい）</li>
          <li>タグ生成ツールを使うと記述ミスを防ぎやすいです</li>
        </ul>
      </div>
    `
  },

  /* ══════════════════════════════════
     🌀 くるくるルート
  ══════════════════════════════════ */
  spin_q1: {
    question: "キャッシュ系・高速化系・JS圧縮系のプラグインは入っていますか？",
    sub: "例：WP Super Cache, W3 Total Cache, Autoptimize, EWWW Image Optimizer など",
    choices: [
      { text: "✅ 入っている", next: "spin_plugin", cls: "maybe" },
      { text: "❌ 入っていない・わからない", next: "spin_rest", cls: "no" }
    ]
  },

  spin_plugin: {
    question: "それらのプラグインを一時的に「すべて無効化」してテスト送信してみてください。",
    sub: "プラグイン一覧で一括選択→「無効化」→送信テスト→結果を確認",
    choices: [
      { text: "✅ 無効化したら送信できた", next: "spin_plugin_found", cls: "yes" },
      { text: "❌ 無効化しても変わらない", next: "spin_rest", cls: "no" }
    ]
  },

  spin_plugin_found: {
    isResult: true,
    title: "💡 プラグインの干渉が原因です",
    content: `
      <div class="step-block">
        <h4>犯人特定の手順</h4>
        <ul>
          <li>無効化したプラグインを1つずつ有効に戻してテスト送信</li>
          <li>失敗したタイミングで有効にしたプラグインが原因です</li>
          <li>そのプラグインの「JS最適化」や「遅延読み込み」設定を個別にOFFにする</li>
          <li>特にAutoptimizeの「JavaScriptの最適化」は要注意です</li>
        </ul>
      </div>
    `
  },

  spin_rest: {
    question: "セキュリティプラグイン（SiteGuard, Wordfence等）は入っていますか？",
    choices: [
      { text: "✅ 入っている", next: "spin_security", cls: "maybe" },
      { text: "❌ 入っていない", next: "spin_theme", cls: "no" }
    ]
  },

  spin_security: {
    isResult: true,
    title: "💡 REST APIのブロックが原因の可能性があります",
    content: `
      <div class="step-block">
        <h4>確認・対処</h4>
        <ul>
          <li>CF7はフォーム送信にWordPressの「REST API」を使っています</li>
          <li>SiteGuard の「REST API無効化」設定をOFFにする</li>
          <li>Wordfenceの場合：ファイアウォール設定でREST APIが許可されているか確認</li>
          <li>確認URL：<code>https://あなたのサイト.com/wp-json/</code> にアクセスしてJSONが表示されればOK</li>
        </ul>
      </div>
    `
  },

  spin_theme: {
    isResult: true,
    title: "💡 テーマのJSとの干渉を確認してください",
    content: `
      <div class="step-block">
        <h4>確認・対処</h4>
        <ul>
          <li>テーマを一時的に「Twenty Twenty-Four」等の公式テーマに切り替えてテスト送信</li>
          <li>公式テーマで送信できた場合はテーマのJSが原因です</li>
          <li>子テーマのfunctions.phpやカスタムJSでjQueryが重複読み込みされていないか確認</li>
          <li>ブラウザの開発者ツール（F12）→「コンソール」タブでJSエラーが出ていないか確認</li>
        </ul>
      </div>
    `
  }
};

/* ── 履歴管理 ── */
let history = [];

function initApp() {
  history = [];
  document.getElementById('result-container').style.display = 'none';
  document.getElementById('step-container').style.display = 'block';
  renderStep('start');
}

function renderBreadcrumb() {
  const bc = document.getElementById('breadcrumb');
  if (history.length === 0) { bc.innerHTML = ''; return; }
  const labels = history.map((h, i) => {
    const short = h.question.length > 20 ? h.question.slice(0, 20) + '…' : h.question;
    return `<span>${short}</span>`;
  });
  bc.innerHTML = labels.join('');
}

function renderStep(stepKey) {
  const step = flowData[stepKey];
  const container = document.getElementById('step-container');

  if (step.isResult) {
    container.style.display = 'none';
    document.getElementById('result-title').innerHTML = step.title;
    document.getElementById('result-content').innerHTML = step.content;
    document.getElementById('result-container').style.display = 'block';
    return;
  }

  history.push({ key: stepKey, question: step.question });
  renderBreadcrumb();

  let html = '';
  if (history.length > 1) {
    html += `<button class="back-btn" onclick="goBack()">← 戻る</button>`;
  }
  html += `<div class="question-text">${step.question}</div>`;
  if (step.sub) {
    html += `<div class="sub-text">${step.sub.replace(/\n/g, '<br>')}</div>`;
  }
  step.choices.forEach(choice => {
    html += `<button class="btn ${choice.cls || ''}" onclick="renderStep('${choice.next}')">${choice.text}</button>`;
  });
  container.innerHTML = html;
}

function goBack() {
  history.pop(); // 現在のステップを除去
  const prev = history.pop(); // 一つ前を取得（再pushされる）
  if (!prev) { initApp(); return; }
  document.getElementById('result-container').style.display = 'none';
  document.getElementById('step-container').style.display = 'block';
  renderStep(prev.key);
}

initApp();
</script>
<?php get_footer(); ?>