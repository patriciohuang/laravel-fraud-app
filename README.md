# Laravel Fraud Detection Application

Welcome to the Laravel Fraud Detection Application! This application is built with Laravel, PHP 8.2.14, and SQLite to showcase skills with Laravel and PHP.

## Setup Instructions

### Prerequisites

- PHP 8.2.14
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (for Vite)

### Installation Steps

1. Clone the repository:

    ```bash
    git clone https://github.com/patriciohuang/laravel-fraud-app.git
    cd laravel-fraud-app
    ```

2. Install PHP dependencies:

    ```bash
    composer install
    ```

3. Install Node.js dependencies:

    ```bash
    npm install
    ```

4. Copy the `.env.example` file and configure your environment variables:

    ```bash
    cp .env.example .env
    ```

    Update the `DB_CONNECTION`, `DB_DATABASE`, and other relevant variables.
    Recommended usage:
    Run:
    ```
    touch database.sqlite
    ```
    And then in .env use:
    ```
    DB_CONNECTION=sqlite
    DB_DATABASE=/full/path/to/database.sqlite
    ```

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```

6. Migrate the database:

    ```bash
    php artisan migrate
    ```

7. Build frontend assets:

    ```bash
    npm run dev
    ```

8. Serve the application:

    ```bash
    php artisan serve
    ```

10. Visit [http://localhost:8000](http://localhost:8000) in your browser or if using Herd [http://laravel-fraud-app.test/](http://laravel-fraud-app.test/).
