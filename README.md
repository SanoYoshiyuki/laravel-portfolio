# laravel protfolio web site

## 開発環境構築手順
以下のコマンドでvendorをインストール

```
# コンテナを起動
docker-compose -f docker-compose.yml up -d
# appコンテナにアクセス
docker-compose exec app bash
# ディレクトリをsrcに移動しcomposerをアップデート
cd src
composer update
```

sassを利用するためpublicディレクトにcssディレクトリを作成
```
cd src/public
mkdir css
```

DBとlaravelの接続
```
# .envを作成し、mysql接続情報を記述
cd src
cp .envexample .env
vim .env

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=user
DB_PASSWORD=asdqwe123

# コンテナを起動
docker-compose -f docker-compose.yml up -d
# appコンテナにアクセス
docker-compose exec app bash
# ディレクトリをsrcに移動しmigrate
cd src
php artisan migrate
```

## エラー対応
appコンテナアクセス時
```
docker-compose exec app bash

OCI runtime exec failed: exec failed: container_linux.go:349: starting container process caused "exec: \"bash\": executable file not found in $PATH": unknown

#対処法
docker-compose exec app sh
```

Dockerfileビルド時
```
docker-compose -f docker-compose.yml up

Error response from daemon: Dockerfile parse error line 7: unknown instruction: &&

#対処法
現状は,&&を使っている箇所を全て1行にすればエラーは対処できた。

RUN apt-get update && apt-get install -y git zip unzip vim
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo_mysql pdo_pgsql
```

'src/resource/js/'内のapp.jsがcompileされない

```
laravelのversionが7.x以降は yarn run devでvue-template-compilerというライブラリに依存している

#対処法
docker-compose exec app bash
cd src
yarn add vue-template-compiler --dev --production=false
```