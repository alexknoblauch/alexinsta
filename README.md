# Project Alexinsta

> Dieses Projekt ist von Instagram inspiriert. Die vielen Relationen un der Datanfluss eignet sich als umfangreicher Test für Laravel. Ich setze hier ein grösseres Tutorial um, wobei ich wärend dem schauen schon gecodedt habe. Das einbinden von React IN Laravel hat mir Mühe gemacht in einem anderen Projekt (inertia + routing / redirection). In diesem Fall soll eine klare trennung von Front und Backend gmacht werden wurde mir gesagt. 
Deshalb hier ein reines Blade Projekt alles schön in Laravel verpackt.

## 🚀 Features

- Laravel Standart login
- Dashboard mit allen Posts alles Nutzer
- Profil mit eigenen Angaben und eigenen Posts

## 🛠️ Tech Stack

- **Framework:** Laravel 12
- **Frontend:** Blade + Tailwind CSS
- **Database:** MySQL / PostgreSQL
- **Auth:** Laravel Breeze / Fortify / Sanctum


## 📦 Installation

git clone https://github.com/alexknoblauch/alexinsta.git
cd alexinsta
composer install
npm install
npm run dev
cp .env.example .env
php artisan key:generate
php artisan serve
php artisan storage:link



## 🕳 DOT ENV Einstellungen

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=alexinstagram
DB_USERNAME=root
DB_PASSWORD=


## 🕳 Steps

22.05 Dashboard and Profileview done. All Relations working with Conrollers, Routing and Views.
        next: individual Users view, Follower Button and Likes.
