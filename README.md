




# IMDB clone

This is our attempt to recreating imdb page. this project is made with laravel, backpack and Tailwind CSS.

**IMDB clone** was developed based on IMDb (International Movie Database) website which is the world's most authoritative source for movie, TV and celebrity content.

**Goals**
Our goals was to create a completely dynamic website by using:
1. Backend
PHP

2. Front-end
JavaScript,
HTML
CSS (Tailwind)
Graphics and design FIGMA

3. The framework of PHP
Laravel

4. Development environment
Laravel Homestead

5. Database
MySQL database with tables and Laravel migration data.
Artisan to handle database migration

# Envirnoment and setup

**Installation**
1. Install Composer
https://dbwebb.se/kunskap/installera-composer
Run the "composer install" command to install the required php / laravel dependencies

Run the "npm install" command to install the necessary dependencies.

4. Rename the .env.example file to .env and configure it

5. Create a database named “moviedb” from localhost / phpMyAdmin

6. Start the app with php artisan serve
Run "php artisan db: seed"
8. Install Backpack
"Php artisan backpack: install"
9. To log in with admin in backpack:
email: "admin@admin.com"
password: "adminadmin"

---

**Access**
Our website has three different types of access:
1. Public audience
2. visited without logging in for
3. regular visitors

Logged in user - requires registration. Where you as a user can:

**Review movies**
Create a list of movies (Add) - Watchlist.
Modify a list of movies (save / delete) - Watchlist
Rate movies

3. Administrator - protected part
Manage reviews and comments (approve, delete)
CRUD operations for movies
CRUD operations for users

**Contributions**
Thanks to:
Filip Johansson
Mehrdad Amini
Thommie Wallin
Jorge Pereda
Tatjana Albairmani
Natalie Nillsson
Ellinor Scherberg

## Backlog
We used trello to track our progress
https://trello.com/b/Fi8FwiCD/u05-imdb-redesign

