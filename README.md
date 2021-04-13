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
　

※アクセスするルートでpublicを消すには下記.htaccessファイルをララベルを扱うディレクトリ直下に配置
https://gfonius.net/blog/laravel-url-public/
https://gist.github.com/liaotzukai/8e61a3f6dd82c267e05270b505eb6d5a
<!-- <IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews
    </IfModule>
    
    RewriteEngine On
    
    RewriteCond %{REQUEST_FILENAME} -d [OR]
    RewriteCond %{REQUEST_FILENAME} -f
    RewriteRule ^ ^$1 [N]

    RewriteCond %{REQUEST_URI} (\.\w+$) [NC]
    RewriteRule ^(.*)$ public/$1 

    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ server.php

</IfModule> -->

- LaravelでMySQLへのデータ挿入時にエラーが出た場合の対処法

  doesn't have a default value

  config/database.phpのstrictの値をfalseに設定する。
  https://qiita.com/tewi_r/items/58af980c258a484cec65

- updated_atカラムがないテーブルをEloquentモデルを用いて更新するとき
  https://qiita.com/msht0511/items/744013d528bca7322d24

  modelで下記を指定する
  public $timestamps = false;