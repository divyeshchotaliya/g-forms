1. Install composer

    ```composer install```

2. Install npm

    ```npm install```

3. Copy .env file

    ```cp .env.example .env```
    
4. Generate key

    ```php artisan key:generate```

5. Migration and seeder
    
    Create database in MySQL and run

    ```php artisan migrate --seed```   

6. Start the server

    ```php artisan serve```

7. To create an Admin, run this command

    ```php artisan db:seed --class=CreateAdminSeeder```
