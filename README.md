# Laravel Backend Developer Practical Test

---

## Features
- **Authentication**: Laravel Breeze.
- **Role and Permission Management**: Spatie Laravel Permission.
- **API Authentication**: Laravel Sanctum.
- **Image Processing**: Intervention/Image.

---

## To Set Up a Laravel Project Locally

Follow the steps below to set up the project on your local environment:

1. **Install Composer dependencies**:
    ```bash
    composer install
    ```

2. **Autoload the Composer files**:
    ```bash
    composer dump-autoload
    ```

3. **Generate the application key**:
    ```bash
    php artisan key:generate
    ```

4. **Copy the `.env.example` file to `.env`**:
    ```bash
    cp .env.example .env
    ```

5. **Install npm dependencies and compile the assets**:
    ```bash
    npm install && npm run dev
    ```

6. **Run the migrations to create the necessary database tables**:
    ```bash
    php artisan migrate
    ```

7. **Seed the database with the initial data**:
    ```bash
    php artisan db:seed --class="UserRolePermissionSeeder"
    ```

8. **Start the Laravel development server**:
    ```bash
    php artisan serve
    ```

---

## Using Postman to Test API Endpoints

1. **Launch Postman** to interact with your API.

2. **Set the Request Method**:
   - Choose the HTTP method: GET, POST, PUT, DELETE.

3. **Use Authentication (Laravel Sanctum)**:
   - In the **Authorization** tab, set `Bearer <token>`.

4. **Set the Request Body (for POST/PUT requests)**:
   - Choose **form-data** or **raw (with JSON)**.
   - Add **Accept** header with the value `application/json`.

---

## Migrations

1. **Create companies table**:
    ```bash
    php artisan make:migration create_companies_table --create=companies
    ```

2. **Create employees table**:
    ```bash
    php artisan make:migration create_employees_table --create=employees
    ```

3. **Run the migrations**:
    ```bash
    php artisan migrate
    ```

---

## Storage Link
```bash
php atisan storage:link
```
**Next, create two folders inside the storage/app/public/ directory for logos and profiles**:
```bash
mkdir storage/app/public/logos
```
```bash
mkdir storage/app/public/profiles
 ```

## Seeders

Run the following command to seed the database with user roles and permissions:

```bash
php artisan db:seed --class="UserRolePermissionSeeder"

