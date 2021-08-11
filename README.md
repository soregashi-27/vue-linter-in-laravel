# vue-splash

Like Unsplash app. \

※databaseは最後にpushする（最初にpushしていないこともあり、差分が多いため）

Web コンテナへ移動

```
docker comppose exec vuesplash_web bash
```

Database コンテナへ移動

```
docker compose exec vuesplash_database bash
```

対象ファイルを全てコンパイル
```
npm run dev
```

アセットを自動的に再コンパイル：対象ファイルを監視し、変更があった場合、そのファイルをコンパイル
```
npm run watch 
```


Hosting \
**※Front-EndをBuildしてから行う**

```
php artisan serve --host 0.0.0.0 --port 8081
```

husky入れなくてもいいかも

php-cs-fixer
```
./vendor/bin/php-cs-fixer fix ./dirName
```
