# Project L.E.O
Online learning application to teach middle schoolers entry level programming that was written using [Laravel](https://laravel.com/) and [Vue.js](https://vuejs.org/).

<br>

# Table of Contents
- [Installation](#Installation)
- [Technologies](#Tech)
- [License](#License)

<br>

# Installation
1. Clone the repository
2. Install [PHP](https://www.php.net/downloads), [Composer](https://getcomposer.org/download/), and [Node.js](https://nodejs.org/en/) if needed
3. Make a copy of `.env.example` and rename it to `.env`
4. Fill out `.env` with correct information
  * Make sure that lines 10 - 15 in point to the correct database name and credentials
    * If you are using [XAMPP](https://www.apachefriends.org/download.html), you just need to create a new database named `laravel`
  * Fill in information for gmail (or the mailing client of your choosing) in lines 27-34
  * Fill in the lines starting with `NOCATPCHA_` with a valid google reCaptcha SITEKEY and SECRET from the reCAPTCHA V2 (checkbox version)
    * These can be obtained by following the detailed instructions [here](https://www.google.com/recaptcha/about/).
5. Start up your SQL server
   ```properties
   create a new database of your choosing (make sure the name matches the DB_DATABASE in your .env file)
   ```
6. Run Setup Commands:
    ```properties
    $ composer install
    $ npm install
    $ php artisan key:generate
    $ php artisan migrate
    ```
7. Compile the application:
    ```properties
    $ npm run watch
    ```
# Tech

<br>

#### List of Technologies Used in the Project
1. [CodeMirror](https://codemirror.net/)
2. [Vue.js](https://vuejs.org/)
3. [Bulma.io](https://bulma.io/)
4. [Laravel](https://laravel.com/docs/8.x/readme)

# License
This project is currently unlicensed, but check again soon for updates!

### Footnote
This is a Senior Capstone Project that portrays the culmination of the skills we learned and developed in our time at California State University, Northridge.