# Online Library Management System

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

The Online Library Management System is a web application developed using the Laravel framework. This platform simplifies library management by offering students the ability to borrow and return books while allowing administrators to oversee library operations efficiently.

## Table of Contents

- [Features](#features)
- [Project Structure](#project-structure)
- [Getting Started](#getting-started)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [Contributors](#contributors)
- [License](#license)

## Features

### Admin Module

- *Admin Dashboard:*
  - Monitor Borrowed Books, All Books, and All Users
  - Manage Books: Add, Update, and Delete
  - Search Students by Student ID
  - View Student Details
  - Update Admin Profile

### Student Module

- *Student Dashboard:*
  - User Registration
  - Browse All Available Books with Details
  - Borrow Books
  - Track Borrowed Books and Return Functionality
  - Edit Student Profile
  - View Borrowed Book Information (including return date-time)

## Project Structure

/OnlineLibraryManagementSystem
├── app/ # Laravel application files

├── bootstrap/ # Bootstrap and configuration files

├── config/ # Configuration files

├── database/ # Database migrations and seeds

├── public/ # Publicly accessible files

├── resources/ # Views and assets

├── routes/ # Route definitions

├── storage/ # Application storage

├── tests/ # Automated tests

├── vendor/ # Composer packages

├── .env # Environment configuration

├── .gitignore # Gitignore file

├── composer.json # Composer dependencies

├── README.md # Project README (you are here)

## Getting Started

To quickly set up and run the Online Library Management System project, follow these steps:

1. *Clone the Repository:*

    bash
    git clone https://github.com/Mennatullah-Elsahy/Online-Library-Management-System
    

2. *Change Current Directory:*

    bash
    cd Laravel-libraray-management-system
    

3. *Install Dependencies:*

    bash
    composer install
    

4. *Install JavaScript Dependencies:*

    bash
    npm install && npm run dev
    

5. *Create .env File:*

    Copy the .env.example file to create a new .env file (Use copy on Windows or cp on Unix-like systems):

    bash
    cp .env.example .env
    

6. *Generate .env Key:*

    bash
    php artisan key:generate
    

7. *Migrate the Database:*

    bash
    php artisan migrate:fresh --seed
    

8. *Start the Server:*

    bash
    php artisan serve
    

## Usage

- Administrators can log in and access the admin dashboard to manage library resources.
- Students can register, log in, and use the student dashboard to borrow and return books.


## Contributors

- Mayada Soliman
- Mennatullah Elsahy
