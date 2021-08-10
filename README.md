# vue-splash

Like Unsplash app.

Web コンテナへ移動

```
docker comppose exec vuesplash_web bash
```

Database コンテナへ移動

```
docker compose exec vuesplash_database bash
```

Hosting \
**※Front-EndをBuildしてから行う**

```
php artisan serve --host 0.0.0.0 --port 8081
```

husky導入は最後でOK
