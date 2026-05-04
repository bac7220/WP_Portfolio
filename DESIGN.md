# デザインガイドライン — bac-portfolio テーマ

## 1. カラー

### メインカラー
| 用途 | HEX | SCSS変数 | 使い所 |
|------|-----|----------|--------|
| メイン（深緑） | `#2E4E2D` | `$color-main-new` | 見出し、ヘッダー/フッター背景、円形カード背景 |
| ベース（淡緑） | `#7D987C` | `$color-base` | セクション背景（Promise, Price, Philosophy） |
| アクセント（オレンジ） | `#DF5B38` | `$color-accent-new` | CTAボタン、価格テキスト、リンク、強調、カード枠線 |

### テキスト
| 用途 | HEX | 備考 |
|------|-----|------|
| 本文 | `#4F4F4F` | 通常テキスト |
| 見出し | `#2E4E2D` | メインカラーと同色 |
| 白テキスト | `#FFFFFF` | 緑背景セクション上 |
| 補足・備考 | `#808080` | テーブル備考等 |

### 背景
| 用途 | HEX | 備考 |
|------|-----|------|
| ページ全体 | `#DFE8F1` | 最外周の背景 |
| セクション（ライト） | `#F8FAFC` | FV、Works等 |
| セクション（白） | `#FFFFFF` | Capabilities、Flow等 |
| 英字見出し装飾 | `#EAF0EA` (35%透過) | PHILOSOPHY等の背景文字 |

### その他
| 用途 | HEX | 備考 |
|------|-----|------|
| FVマーカー（黄） | `#F8F540` | キャッチコピーの下線 |
| アイコン背景 | `rgba(46,78,45,0.1)` | 丸アイコンの背景 |
| Promiseカード | `rgba(255,255,255,0.75)` | 半透明白カード |

---

## 2. フォント

### フォントファミリー
| 用途 | フォント | Google Fonts |
|------|---------|-------------|
| 和文メイン | `Noto Sans JP` | ○ |
| 英字見出し | `Montserrat` | ○ |
| 英字サブ | `Nunito Sans` | ○ |

### フォントサイズ・ウェイト

#### PC版
| 用途 | サイズ | ウェイト | フォント | 行間 | letter-spacing |
|------|--------|---------|---------|------|----------------|
| FVキャッチ（大） | 48px | Bold (700) | Noto Sans JP | 1.4 | 1.92px |
| FVキャッチ（小） | 40px | Bold (700) | Noto Sans JP | 1.4 | 1.6px |
| セクション英字見出し | 64px | Bold (700) | Montserrat | 1.0 | 0 |
| セクションH2 | 24px | Black (900) | Noto Sans JP | 36px | 1.2px |
| CTA大見出し | 32px | Black (900) | Noto Sans JP | auto | 3.2px |
| カードH3 | 24px | Bold (700) | Noto Sans JP | 32px | 0 |
| サブ見出しH4 | 20px | Bold (700) | Noto Sans JP | 28px | 0 |
| 本文 | 16px | Medium (500) | Noto Sans JP | 1.5 | 0 |
| テーブル価格 | 18px | Bold (700) | Noto Sans JP | 20px | 0 |
| 小テキスト | 14px | Medium (500) | Noto Sans JP | 20px | 0 |
| テーブルヘッダ | 14px | Bold (700) | Noto Sans JP | 20px | 0 |
| 極小テキスト | 12px | Bold (700) | Noto Sans JP | 16px | 0 |

#### SP版（差分のみ）
| 用途 | サイズ | 備考 |
|------|--------|------|
| FVキャッチ（大） | 28px | PC: 48px |
| FVキャッチ（小） | 22px | PC: 40px |
| セクション英字見出し | 48px | PC: 64px |
| CTA見出し | 20px | PC: 32px |

---

## 3. スペーシング

### セクション padding（上下）
| セクション種別 | SP | PC |
|---------------|----|----|
| 通常セクション | 48px〜80px | 80px〜96px |
| CTA | 40px | 40px〜96px |
| フッター | 24px | 32px |

### セクション padding（左右）
| SP | PC |
|----|----|
| 16px | 144px〜272px（セクションによる） |

### コンテンツ幅
| 用途 | 値 |
|------|------|
| 最大幅（標準） | 1024px |
| 最大幅（CTA） | 896px |
| 最大幅（ヘッダー） | 1152px |

### Gap（要素間）
| 用途 | 値 |
|------|------|
| セクション内メインブロック間 | 48px〜64px |
| カード間 | 16px〜24px |
| テキスト間（小） | 4px〜8px |
| テキスト間（中） | 12px〜16px |
| カード内パディング | 24px〜42px |

---

## 4. ブレークポイント

| 名前 | 値 | SCSS Mixin | 用途 |
|------|------|-----------|------|
| SP | 〜767px | `@include mq(sp)` | モバイル |
| PC | 768px〜 | `@include mq(pc)` | タブレット以上 |
| LG | 1000px〜 | `@include mq(lg)` | デスクトップ |
| XL | 1200px〜 | `@include mq(xl)` | ワイドデスクトップ |

**設計方針**: モバイルファースト（SP基準で書いて `@include mq(pc)` で上書き）

---

## 5. コンポーネント

### ボタン
| 種類 | 背景 | テキスト | 角丸 | shadow |
|------|------|---------|------|--------|
| CTA Primary | `#DF5B38` | 白 16px Bold | 9999px (pill) | `0 10px 15px rgba(0,0,0,0.1), 0 4px 6px rgba(0,0,0,0.1)` |
| CTA Secondary | `#2E4E2D` | 白 18px Bold | 9999px (pill) | 同上 |

### カード
| 種類 | 角丸 | 背景 | 枠線 | shadow |
|------|------|------|------|--------|
| 通常カード | 16px | `#F8FAFC` | なし | なし |
| WORKSカード | 16px | 白 | `1px solid #DF5B38` | `-8px -8px 20px rgba(223,91,56,0.15), 8px 8px 20px rgba(229,143,121,0.15)` |
| Promiseカード | 24px | `rgba(255,255,255,0.75)` | なし | `0 1px 2px rgba(0,0,0,0.05)` |
| Philosophyサークル | 216px | `#2E4E2D` | `1px solid white` | `inset 4px 4px 10px rgba(0,0,0,0.25)` |

### テーブル（Price）
| 部位 | 背景 | テキスト | 角丸 |
|------|------|---------|------|
| ヘッダー行 | `#2E4E2D` | 白 14px Bold | 12px（上部のみ） |
| 偶数行 | `#F8FAFC` | - | - |
| 奇数行 | 白 | - | - |
| テーブル外枠 | - | - | 12px |

### タグ・バッジ
| 種類 | 背景 | テキスト | 角丸 |
|------|------|---------|------|
| FVバッジ | `rgba(46,78,45,0.1)` | `#2E4E2D` 12px Bold | 9999px |
| WPスキルバッジ | `rgba(46,78,45,0.1)` | `#2E4E2D` | 21px |
| Philosophyタグ | 白 | `#2E4E2D` 16px Bold Montserrat | 32px |

---

## 6. アイコン

- **Material Symbols Rounded** を使用（link: Google Fonts）
- 使用アイコン例: `security`, `forum`, `devices`, `mouse`, `schedule`, `bolt`, `work`, `chat`, `build`, `tune`, `palette`, `star`, `cloud_upload`, `menu_book`, `lock`, `verified`, `fact_check`

---

## 7. 画像ルール

| 項目 | ルール |
|------|--------|
| 形式 | WebP推奨（写真）/ SVG（アイコン・装飾） |
| 品質 | WebP quality 85 |
| 命名 | kebab-case（例: `hero-portrait.webp`） |
| 配置先 | `img/partner/`（パートナーページ用） |
| alt属性 | 必ず設定、装飾画像は `alt=""` |
| loading | FV画像は `eager`、それ以外は `lazy` |
| サイズ指定 | width / height 属性を必ず付与（CLS防止） |

---

## 8. CSS設計

| 項目 | ルール |
|------|--------|
| 設計手法 | FLOCSS + BEM |
| 命名規則 | `.p-[page]__[element]--[modifier]` |
| インデント | 4スペース |
| プリプロセッサ | SCSS |
| エントリポイント | `assets/sass/style.scss` |
| コンパイル先 | `assets/css/style.css` |
| コンパイルコマンド | `npx sass assets/sass/style.scss assets/css/style.css --no-source-map` |
