# Laravel Backend Developer Practical Test
--------------------------------------------------------------------------------------------------------
## Features
- **Authentication**: Laravel Breeze.
- **Role and Permission Management**: Spatie Laravel Permission.
- **API Authentication**: Laravel Sanctum.
- **Image Processing**: Intervention/Image.
--------------------------------------------------------------------------------------------------------

--------------------------------------------------------------------------------------------------------
##To set up a Laravel project locally,
composer install
composer dump-autoload
php artisan key:generate
cp .env.example .env
npm install && npm run dev
php artisan migrate
php artisan db:seed --class="UserRolePermissionSeeder"
php artisan serve
--------------------------------------------------------------------------------------------------------

--------------------------------------------------------------------------------------------------------
Using Postman to Test API Endpoints
    -Launch Postman to interact with your API.
    
Set the Request Method
    -HTTP method (GET, POST, PUT, DELETE)

using authentication (Laravel Sanctum ),
    -Authorization: Bearer <token>

Set the Request Body (for POST/PUT requests)
    form-data, or raw (with JSON) 
    Headers key:Accept, value:application/json

--------------------------------------------------------------------------------------------------------

--------------------------------------------------------------------------------------------------------
##migrations
Create companies table:
php artisan make:migration create_companies_table --create=companies

Create employees table:
php artisan make:migration create_employees_table --create=employees

php artisan migrate
--------------------------------------------------------------------------------------------------------

--------------------------------------------------------------------------------------------------------
#seeders
php artisan db:seed --class="UserRolePermissionSeeder"

##Storage Links
php artisan storage:link

Next, create two folders inside the storage/app/public/ directory for logos and profiles:
mkdir storage/app/public/logos
mkdir storage/app/public/profiles
--------------------------------------------------------------------------------------------------------


--------------------------------------------------------------------------------------------------------
## Prerequisites
Ensure you have the following installed on your system:
- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL or any preferred database
--------------------------------------------------------------------------------------------------------
