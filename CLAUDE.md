# CLAUDE.md

This file provides guidance to Claude Code when working with this WordPress theme.

## Project Overview

Portfolio WordPress theme built with custom post types and SCSS styling.

## Figma Dev Mode MCP Rules

- Figma Dev Mode MCPサーバーは、画像やSVGアセットを提供するアセットエンドポイントを提供します
- **重要**: Figma Dev Mode MCP サーバーが画像またはSVGのローカルホストソースを返す場合、その画像またはSVGソースを直接使用してください
- **重要**: 新しいアイコンパッケージをインポート/追加しないでください。すべてのアセットはFigmaペイロードに含まれている必要があります
- **重要**: ローカルホストソースが提供されている場合、プレースホルダーを使用または作成しないでください

## Coding Standards

##　resetcss
- destyle.cssのCDNを利用する

### SCSS Rules

- SASSを使用してスタイルを記述
- FLOCSSベースのCSS設計を採用
- メディアクエリはセレクタ内でネストする（`@include mixin.mq()` を使用）
- 同じセレクタのスタイルは一箇所にまとめる
- BEM記法などの派生セレクタは`&`で繋げず、フルネームで記述する
- 擬似要素（`::before`, `::after`）や擬似クラス（`:hover`, `:focus`など）は`&`で繋げる

**良い例**:
```scss
// BEM記法の派生は&を使わない
.section {
  display: block;
}
.section--reverse {
  flex-direction: row-reverse;
}

// 擬似要素・擬似クラスは&を使う
.button {
  color: blue;

  &:hover {
    color: red;
  }

  &::before {
    content: '';
  }
}
```

**悪い例**:
```scss
// これはNG
.section {
  display: block;

  &--reverse {
    flex-direction: row-reverse;
  }
}
```

### File Organization

- セクション名に合わせてファイルを分割する
- `style.scss`に集約する
- FLOCSSのディレクトリ構成に従う:
  - `Foundation/`: 変数、ミックスイン
  - `Layout/`: レイアウト用クラス
  - `Object/Component/`: 再利用可能なコンポーネント
  - `Object/Project/`: プロジェクト固有のスタイル
  - `Object/Utility/`: ユーティリティクラス

### WordPress

- WordPress標準関数を使用（`the_title()`, `the_content()`, `the_post_thumbnail()`など）
- カスタム投稿タイプ: `post`
- 全投稿取得時は `'posts_per_page' => -1` を使用

## Design System

- デザインを正確に一致させるために、Figmaの忠実度を優先
- ハードコードされた値を避け、Figmaのデザイントークンが利用可能な場合はそれを使用
- インラインスタイルは本当に必要な場合を除き使用しない
- アクセシビリティに関するWCAG要件に従う

