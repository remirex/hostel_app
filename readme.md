Example Laravel Hostel-App Template
===================================

An example Laravel App with booking system for reservation.

Mailtrap setup: https://mailtrap.io/

Instalation
------------

This is just local installation using something like MAMP/WAMP/LAMP or xampp. Of course you are free to use homestead if you like.

1. clone the repo
2. composer install
3. If you have no .env file you can use the example one. Just rename .env.example to .env. Enter your db credentials here.
4. php artisan key:generate
5. make sure db is running and credentials are setup in config/database.php or in your .env file
6. make php artisan migrate
7. make your database room-related information and room gallery
8. For the ability to send email in the development environment, we use mailtrap.For the startup we use the following command: php artisan make: mail
9. php artisan serve
10. visit localhost:8000 in your browser

