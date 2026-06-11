# ShopEasy - Laravel E-Commerce Case Study

A basic sample e-commerce web application built with Laravel 10 and Smarty Template Engine.

## Features

- Product listing and detail pages
- Session-based shopping cart
- Checkout and order placement
- User registration and login
- Admin dashboard to manage and update orders
- Mobile-responsive design using Bootstrap 5
- Smarty template engine integration (product listing page)

---

## Requirements

- PHP 8.x
- Composer
- MySQL
- Node.js and NPM

---

## Installation

1. Clone the repository:
   ```bash
   git clone <GITHUB_REPOSITORY_URL>
   cd <PROJECT_FOLDER>
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install frontend dependencies:
   ```bash
   npm install && npm run build
   ```

4. Copy the environment file and configure it:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Update `.env` with your database credentials:
   ```
   DB_DATABASE=ecommerce
   DB_USERNAME=your_db_username
   DB_PASSWORD=your_db_password
   ```

6. Run migrations and seed the database:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

8. Visit `http://localhost:8000` in your browser.

---

## Admin Access

An admin user can be created via Laravel Tinker:

```bash
php artisan tinker
```

```php
App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@admin.com',
    'password' => bcrypt('password'),
    'is_admin' => true
]);
```

Then log in with:
- **Email:** admin@admin.com
- **Password:** password

---

## Smarty Integration

The product listing page (`/products`) is rendered using the Smarty template engine as a bonus feature. All other pages use Laravel's Blade templating engine. Both engines coexist in the same project.

---

## GitHub Repository

[https://github.com/ibe-uche/laravel-ecommerce-sample-site](https://github.com/ibe-uche/laravel-ecommerce-sample-site)
