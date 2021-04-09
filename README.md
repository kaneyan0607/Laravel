# Laravel

チュートリアル
https://www.youtube.com/watch?v=yaitzPzBzuI&list=PLCyDm9NTxdhLnA4tH5ToQR1K1LcWIAdOa&index=2

- 環境構築ターミナルコマンド
  $ cd /Applications/MAMP/htdocs/
  $ curl -sS https://getcomposer.org/installer​ | php
  $ sudo mv composer.phar /usr/local/bin/composer
  $ composer -V
  ※composer 入ってるなら下記からスタート※
  $ composer create-project laravel/laravel --prefer-dist blog
  ※5 系なら右記にする　 composer create-project laravel/laravel=5.8.x --prefer-dist blog
  $ cd blog/
  $ chmod -R 777 storage
  $ chmod -R 777 bootstrap/cache

- トップページ
  http://localhost/Laravel/blog/public/

- DB 接続
  　.env を編集する。
  socket 情報も入力しておく(mamp のトップ画面にパスの記載あり)
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=8889
  DB_DATABASE=fuku-blog
  DB_USERNAME=root
  DB_PASSWORD=root
  DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock

- 文字化け防止
  　 app/Providers/AppServiceProvider.php

  一番上に下記を記載
  use Illuminate\Support\Facades\Schema;

  一番下に下記を記載
  public function boot()
  {
  //
  Schema::defaultStringLength(191);
  }

- ローケーション
  config/app.php

  'timezone' => 'Asia/Tokyo',

  'locale' => 'ja',

- コマンド

  テーブル生成
  php artisan make:migration create_blogs_table

  マイグレーション実行
  php artisan migrate

  コントローラー作成
  php artisan make:controller BlogController

- エラーメッセージ日本語化
  https://readouble.com/laravel/5.6/ja/validation-php.html

- laravelバージョン確認コマンド（使用バージョン:Laravel Framework 5.8.38)
　php artisan --version
　