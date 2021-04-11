# Mini Crm Using Laravel and Vuejs

Creation of an admin panel to manage companies .

* Laravel version : 8

* Vuejs version : 4

# Requirements

Basic Laravel Auth: possibility to connect as administrator .

Use database seeds to create the first user with the email admin@admin.com and the password "password".

CRUD functionality for Companies and Employees : 
* Create / Read / Update / Delete

The company database table includes the following fields:
* Name (required).
* Email.
* Logo (minimum 100 × 100).
* Website.

The employee database table includes the following fields: 
* First name (required).
* last name (required).
* Company (foreign key to Companies).
* Email.
* Phone.

Use database migrations to create these diagrams above.

Store company logos in the storage / app / public folder and make them accessible to the public.

Use basic Laravel resource controllers with default methods - index, create, store, etc.

Use Laravel pagination to display the list of companies / employees, N entries per page

Use Laravel make: auth as the default Bootstrap-based design theme, but remove the ability to subscribe.

Make the project multilingual (using the resources / lang folder).

Use Vuejs / Nuxtjs technology to create a front-end application by integrating the functionalities described below.

Basic tests with phpunit.

## Installation

1. Clone the repo with cmd : 
```bash
git clone https://github.com/Mifaou/Project_MiniCrm_Laravel-Vuejs.git
```
2. Change directory : 
```bash
 cd Project_MiniCrm_Laravel_Vuejs
```
3. Run this cms and set db credentials into .env file : 
```bash
cp .env.example .env
```
4. Install Composer : 
```bash
composer install
```
5. Generate new application key with : 
 ```bash
php artisan key:generate
```
6. Create DB on Mysql

7. Seeders
 ```bash
php artisan migrate --seed
```
8. The Public Disk
 ```bash
php artisan storage:link
```
9. Run Server : 
 ```bash
php artisan serve
```

