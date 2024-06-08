## About Project

This is an example of simple API that implement submit data using POST method.

## Requirements

-   PHP >= 8.2
-   Composer >= 2.7.6
-   MySQL >= 8.0

## Installation

1. Clone the repository

````shell
git clone git@github.com:andripurnama/simple-api.git
````

2. Navigate to the project directory
````shell
cd simple-api
````

3. Install dependencies
````shell
composer install
````

4. Copy the `.env.example` file to `.env` and configure your environment variables:
````shell
cp .env.example .env
````


5. Generate an application key:
````shell
php artisan key:generate
````

5. Generate an application key:
````shell
php artisan key:generate
````

6. Setup your database credentials in your .env file:
````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
````

7. Migrate table :
````
php artisan migrate

````

8. Run job :
````
php artisan queue:listen
````
## Testing

To run tests for the API, execute the following command:

````
vendor/bin/phpunit-watcher watch
````

or you can try to use HTTP Client Application testing like postman or insomnia