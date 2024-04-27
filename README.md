<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## About The Project

Laravel Test by AAG Group as part of Hiring Process. Below are the
instructions given for the test and information about the Cognitive
Examination / Technical Exam:

- create a new Laravel project using the latest stable version of Laravel.
- Within the Laravel project, implement a sample CRUD (Create, Read, Update, Delete) functionality.
- In the same Laravel project, integrate the Authentication (Auth) system. The Auth system should encompass essential features such as user registration, login, logout, and password reset.
- Once you've successfully completed the CRUD and Auth implementation, upload the entire Laravel project to a Git or Bitbucket repository of your preference.
- In your submission, provide clear instructions on how to run the Laravel project locally. Additionally, include detailed steps on how to access the Git/Bitbucket repository that houses your Laravel project.

I have used Laravel 11 in the Exam. Laravel Jetstream as Starter Kit for implementing login, registration and password reset.

## Prerequisite

PHP: Laravel applications require PHP. Laravel 11.x requires a minimum PHP version of 8.2.

Database: Laravel supports various database systems, including MySQL, PostgreSQL, SQLite, and SQL Server. You'll need to have your chosen database system installed and running.

Composer: Laravel utilizes Composer for dependency management. Composer is a PHP package manager that manages the dependencies required by your Laravel application and installs them into your project's vendor directory.

Node.js & NPM

## Step by step Set Up from Scratch

- composer create-project laravel/laravel project-name
- cd project-name
- Set up .env file app name and database 
- Create sqlite file in main directory of project
- Run php artisan migrate 
- composer require laravel/jetstream
- php artisan jetstream:install livewire
- Set up .env Laravel Mail
- Create model for products and migrate
- Create controller for products
- Setup routes 

### Step by Step Intallation of Repository to Local Machine

- **[Install PHP in your Local Machine](https://www.php.net/downloads.php)**
- **[Install Composer in your Local Machine](https://getcomposer.org/download/)**
- **[Install Node.js if Necessary(Optional)](https://nodejs.org/en/download/)**
- **[Install Git on your local machine(Optional)](https://git-scm.com/downloads)**
- Open terminal in the project directory
- Clone the Repository using git clone <repository_url> command
- Run cd <project_directory> in terminal
- Run composer install
- Run npm install command
- create new .env file using .env.example as reference
- Run php artisan migrate command to create tables
- Finally, Run php artisan serve

