# About Project

Latihan membuat bot telegram menggunakan laravel 8.Project ini dibuat untuk experiment terkait apa itu ***webhook*** serta implementasi ***ngrok***. Saat ini tidak sedikit website yang menggunakan third party berupa webhook untuk komunikasi 2 arah agar dapat menerima response balik dari aplikasi lain. Response yang diterima merupakan hasil dari ***callback*** atau ***event*** ketika request yang kita kirim selesai diproses oleh aplikasi lain. Maka dari itu, terbentuklah project latihan ini. Berikut juga tercantum sumber belajarnya :

- [Apa itu webhook](https://www.niagahoster.co.id/blog/webhook-adalah/).
- [Tutorial Webhook Telegram Pada Laravel Framework Menggunakan Ngrok](https://www.youtube.com/watch?v=PlAEuwjv9Hk&t).
- [Bot Telegram Documentation](https://irazasyed.github.io/telegram-bot-sdk/).

## Pre-requisite

1. `.env .example` *copy paste files to* `.env`
2. Key Generate
```
php artisan key:generate
```
3. Install Composer
```
composer install
```
***atau***

- Install telegram bot sdk
```
composer require irazasyed/telegram-bot-sdk
```

4. Run Project
```
php artisan serve
```

