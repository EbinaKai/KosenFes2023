# KosenFes2023

![WordPress](https://img.shields.io/badge/engine-WordPress-blue)
![Uptime Robot status](https://img.shields.io/uptimerobot/status/m797951544-501d8f3265cf55078c8a8acd)

[高専祭2023の公式ホームページ](https://fest-snct.jp/2023/) です。今年の高専祭のテーマは「宴」。ホームページも宴をイメージしたデザインとなっています。

## ページ構成

| ページ | 説明 |
| -- | -- |
| / | トップページ |
| /greeting | 校長と高専祭実行委員長からの挨拶 |
| /shops | 出店一覧 |
| /events | 企画一覧 |
| /access | アクセス情報 |
| /qa | よくある質問とその回答集 |
| /news | ニュース記事一覧 |

## 説明

高専祭2023の公式ホームページです。今年の高専祭のテーマは「宴」。ホームページも宴をイメージしたデザインとなっています。

## 使い方

1. Dockerで環境を構築する  
  `docker-compose up -d`

2. WordPressの各種設定をする
3. 固定ページを上記のページ構成通りのスラッグを設定して追加する  
4. その他、好きなプラグインをインストールする

   - Auto Featured Image (Auto Post Thumbnail)
   - Imsanity
   - Advanced Custom Fields

5. 店舗情報をカスタム投稿タイプを作成して登録する。カスタム投稿タイプのフィールドは以下の通りとする
  
| ラベル | 名前 | タイプ | その他 |
| -- | -- | -- | -- |
| 店舗説明 | description | テキスト | |
| サムネイル | thumbnail | 画像 | |
| 出店場所 | location | テキスト | |
| 屋内・屋外 | venue_type | ラジオボタン | 選択肢：屋内, 屋外 |
| ジャンル | genre | チェックボックス | 選択肢：イベント, 飲食店, ゲーム, その他 |

店舗情報を投稿する際には、投稿のカテゴリーのスラッグを `shops` にする。  
また、ニュース記事を投稿する際には、投稿のカテゴリーのスラッグをを `news` にする。
