In order to set up the project Simple Blog Application in Laravel follow these steps (It presumes that you have WAMP or LAMP environment ready with MySQL database server installed, NodeJS, Composer and Git):

1a. Set up Laravel project and authentication:

First, install Laravel globally with composer

composer global require laravel/installer

then,

create a new Laravel project and set up authentication:

laravel new blog-app
cd blog-app
composer require laravel/ui
php artisan ui bootstrap --auth
npm install && npm run dev
php artisan migrate

1b. clone GitHub repository with git

git clone https://github.com/nik-coder/ominimo.git

2. Create database migrations:

Create migrations for posts and comments:

php artisan make:migration create_posts_table
php artisan make:migration create_comments_table

then,

Run the migrations:

php artisan migrate

3. Start Laravel project

php artisan serve

Browse http://localhost:8000

Note: this is just a skeleton of the Simple Blog Application with Laravel, for more complex solution we need frontend development so we have UI and we could browse the app.

