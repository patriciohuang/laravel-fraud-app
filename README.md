# Laravel Fraud Detection Application

Welcome to the Laravel Fraud Detection Application! This application is built with Laravel, PHP 8.2.14, and SQLite to showcase skills with Laravel and PHP.

## Project design
[FigJam](https://www.figma.com/file/Z4f9Dkex9fvpd2uN1DlYNb/Laravel-fraud-app?type=whiteboard&t=NtkLMmvU2RIL2Htc-1)

## Setup Instructions

### Prerequisites

- PHP 8.2.14
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (for Vite)

This app uses a fake API:
- The customer API: this API allows the app to retrieve a list of customers.
- Use the dedicated Docker Image [vzdeveloper/customers-api](https://hub.docker.com/r/vzdeveloper/customers-api) to launch the API locally.

### Installation Steps

1. Clone the repository:

    ```bash
    git clone https://github.com/patriciohuang/laravel-fraud-app.git
    cd laravel-fraud-app
    ```

2. Install PHP dependencies:

    ```bash
    composer update
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

9. Visit [http://localhost:8000](http://localhost:8000) in your browser or if using Herd [http://laravel-fraud-app.test/](http://laravel-fraud-app.test/).
