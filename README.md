
# 概要
Laravelのアップロードdemoです。

# 使い方
app/Http/Controllers/UploadController.phpのindex、storeを変更してご利用ください。
resources/views/index.blade.phpを変更してご利用ください。

# 備考
プレーンなlaravelのインストールからやったこと。
## install laravel
curl -s "https://laravel.build/laravel-upload-demo" | bash

## install breeze
php artisan breeze:install

## link storage
php artisan storage:link
