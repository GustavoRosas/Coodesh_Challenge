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

Clone the project

```bash
  git clone https://github.com/GustavoRosas/Coodesh_Challenge.git
```

Enter the project directory

```bash
  cd Coodesh_Challenge
```

Install the dependencies

```bash
  npm install
```

Start the server

```bash
  npm run start
```


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

