# HOAP Admin

Administrative application for HOAP Inc, built by a team of developers during [Code For Good West Michigan's](https://codeforgoodwm.org/) weekend for good, 2019.

## Requirements

This project requires that you have access to [**composer**](https://getcomposer.org/) on your machine as well as a [**MySQL database instance**](https://www.mysql.com/) so that you can migrate the schema and seed the data required.

## Installing

**Notice:** I am almost positive that these installation docs are not complete. Please update this list with relevant information if you can.

1. Clone the repo
2. Navigate your terminal to the just cloned repo's directory and run `composer install` in order to download your `vendor` folder.
3. Once that is done, you should have a `.env` file. If you do not, then copy `.env.example` to `.env` in your directory
4. Fill out your `.env` file's `DB` information with whatever needs to be filled out in order to make a connection.
5. Run the command `php artisan migrate` in order to create your needed database schema
6. Run the command `php artisan db:seed` to seed the database.
6. Run `php artisan serve` in order to serve the application locally.

## Database Install

The general method that I use to create the database and user for the database are the following commands below. You will either want to use the root user or a super administrator user for this:

#### Schema creation

```sql
CREATE SCHEMA `hoap_admin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ;
```

#### User Creation

```sql
CREATE USER 'hoap_admin_user'@'localhost' IDENTIFIED BY 'password_here'
```

where 'password_here' is whatever password you want your application's user to have.

#### User Grant Creation

```sql
GRANT ALL ON hoap_admin.* TO 'hoap_admin_user'@'localhost'
```

## Authors and Acknowledgement

To the people listed below, thank you for helping to make this project become a reality for HOAP Inc.

1. Keenan Barber - keenan.c.barber@gmail.com
2. Kyle Blanker - kyle@blanker.us
3. Dan Drust - dandrust@gmail.com
4. Dillon Walls - wallsdil@gmail.com
5. Kellan Martin - kellan.martin@gmail.com

This project was made with [Laravel 6.x](https://laravel.com/)