# Coodesh Challenge
This is a challenge by Coodesh

Coodesh Back-end Developer Challenge

## Introction Video

[https://www.loom.com/](https://www.loom.com/share/dab5c9d1775e4741a18c19a771b46ec8)

## Stack
**Back-end:** `PHP 8.1.1 (cli) (built: Dec 15 2021 10:31:43) (ZTS Visual C++ 2019 x64)`

**FramekWork:** `Laravel Framework 8.79.0`

**Database:** `10.4.22-MariaDB (local)`


## Locally run

First of all, if you don't have php and MySQL installed, do this:

Access and install XAMPP, to install php, MySQL and Apache dependencies

```bash
  https://www.apachefriends.org/index.html
```

Now let's set up the database, first you need to do is to include the "C:\xampp\mysql\bin" directory in you Path in Environment Variables.
Search for Environment variables in your Operation System and enter it.
- Click on "Environment variables...";
- Click on the row that has the variable value as "path" and click "Edit...";
- Click on the button "New" and then "Search...";
- Find where you installed XAMPP and access this directory: "\xampp\mysql\bin";

Let's do this for PHP too, so:
- Click on the button "New" and then "Search...";
- Find where you installed XAMPP and access this directory: "\xampp\php";

- Click the "OK" button

Go to `"xampp\php"` and edit the file `"php.ini"`, find the text `"extension=pdo_mysql"` and uncomment it.
Below that, insert:

```bash
  extension= php_fileinfo.dll
```

Okay, now that we set the environment variables up, we need to create the database, so open up a terminal and type:

```bash
  mysql -u root -e "create database coodesh"; 
```

Now that we created our database, let's proceed

Install composer at

```bash
  https://getcomposer.org/download/php ar
```

If you don't have GIT installed, please access the link below and follow the tutorial

```bash
  https://git-scm.com/book/en/v2/Getting-Started-Installing-Git
```

After this, we can clone the project and download its dependencies.
But first you need to open your command prompt, after this, go to your folder directory that you want to install the project and type this:

```bash
  git clone https://github.com/GustavoRosas/Coodesh_Challenge.git
```

Enter the project directory

```bash
  cd Coodesh_Challenge
```

Install its dependencies, typing this on the terminal:

```bash
  composer update
```
```bash
  composer install
```
```bash
  composer require guzzlehttp/guzzle
```
```bash
  copy .env.example .env
```
```bash
  php artisan key:generate
```

Go to your .env file in the root directory of the project, edit it and modify this fields:

```bash
  "APP_URL=http://localhost"  ====> "APP_URL=http://localhost:8000"
```
```bash
  "DB_DATABASE=laravel" ====> "DB_DATABASE=coodesh"
```
```bash
  "DB_PASSWORD="  ====> "DB_PASSWORD=""
```

Migrate your database

```bash
  php artisan migrate
```

Seed the database

```bash
  php artisan db:seed
```

Start the server

```bash
  php artisan serve
```

Done! From now once you can access the link: `localhost:8000/api`

## Examples on how to use the Endpoints

After the project is installed and running, do this:

Copy this `localhost:8000/api/` on your URL to access your first impression on the API.

It should apear: `Back-end Challenge 2021 🏅 - Space Flight News`

Now that we know that everything is working, time to check the endpoints of this API.

Here's the endpoints that this API has:

`[GET]/api/` - Introduction message;

`[GET]/api/articles` - List all the articles in database, paginating by 10;

`[GET]/api/articles/{id}` - Get the information of the article mentioned by de id;

`[POST]/api/articles` - Add new article;

`[PUT]/api/articles/{id}` - update a article by its id;

`[DELETE]/api/articles/{id}` - delete a article by its id.

## Author

- [@Gustavo Rosas](https://www.github.com/GustavoRosas)

