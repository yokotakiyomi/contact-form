# お問合わせフォーム

## 環境構築

### Dockerビルド

1. git clone リンク
2. docker-compose up -d -build

* MySQLは、OSによって起動しない場合があるのでそれぞれそれぞれのPCに合わせて docker-compose.ymlファイルを編集してください。
  
### laravel環境構築

1. docker-compose exec pho bash
2. composer install
3. .env.example ファイルから .envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

## 使用技術

 ・ php 8.0</br>
 ・ Laravel 8.0</br>
 ・ MySQL ８.０

## URL

 ・ 開発環境 ： http://localhost/ </br>
 ・ phpMyAdm : in:http://localhost:8080/
