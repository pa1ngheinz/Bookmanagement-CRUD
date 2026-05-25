# Book Management (CRUD) — Local Setup & Usage

Book management (CRUD) plus profile management and authentication with Laravel.

**Key routes**: books cards at `/`, books table at `/books` ,and authentication routes (`/login`, `/register`).

## Requirements

- PHP ^8.2
- Composer
- Node.js & npm (for frontend assets and Vite)
- MySQL

The project is configured to use Mysql by default (`DB_CONNECTION=mysql`).

## Quick Setup (development)

Windows (PowerShell / CMD):

```powershell
cd path\to\bookmanagement_crud
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install
npm run dev
php artisan serve
```

macOS / Linux:

```bash
cd /path/to/bookmanagement_crud
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install
npm run dev
php artisan serve
```

## Database

- To use MySQL update `.env` (`DB_CONNECTION`, `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) and run `php artisan migrate`.

## Usage

- Open the app: http://127.0.0.1:8000
- Use the top-right nav to register/login.
- Visit `/books` to manage books (create, edit, delete) in table.
