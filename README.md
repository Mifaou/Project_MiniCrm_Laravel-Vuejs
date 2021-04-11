# Mini Crm Using Laravel and Vuejs

Creation of an admin panel to manage companies .

* Laravel version : 8

* Vuejs version : 4

# Requirements

Basic Laravel Auth: possibility to connect as administrator .

Use database seeds to create the first user with the email test@test.com and the password "password".

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
## DEMO

![login](https://user-images.githubusercontent.com/34101451/114315067-c26fd380-9aec-11eb-9fbc-f5aa9e5cc9ac.jpg)

![login1](https://user-images.githubusercontent.com/34101451/114315069-c4d22d80-9aec-11eb-8c56-ef25f0c8ce43.jpg)
![dashboard](https://user-images.githubusercontent.com/34101451/114315071-c69bf100-9aec-11eb-9d41-6ccc81d12d01.jpg)
![company_list](https://user-images.githubusercontent.com/34101451/114315072-c7cd1e00-9aec-11eb-8a6b-60a7d6cf6abc.jpg)
![add_company](https://user-images.githubusercontent.com/34101451/114315076-c8fe4b00-9aec-11eb-999f-978ee49b8fb9.jpg)
![add_company1](https://user-images.githubusercontent.com/34101451/114315079-ca2f7800-9aec-11eb-872b-75df2014ffe0.jpg)
![company_list1](https://user-images.githubusercontent.com/34101451/114315081-cbf93b80-9aec-11eb-8adc-c14e41910259.jpg)
![update company](https://user-images.githubusercontent.com/34101451/114315084-cdc2ff00-9aec-11eb-81a2-fc08dcf7f49d.jpg)
![employeelist](https://user-images.githubusercontent.com/34101451/114315085-cef42c00-9aec-11eb-980e-4912d28c6e97.jpg)
![employee_added](https://user-images.githubusercontent.com/34101451/114315087-d0bdef80-9aec-11eb-8152-afa4505522bf.jpg)
![dash_updated](https://user-images.githubusercontent.com/34101451/114315090-d1ef1c80-9aec-11eb-9c2a-f584ae2bc631.jpg)
