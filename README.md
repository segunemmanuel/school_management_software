# Setting up
- Clone the repo
- cd to the newly cloned folder
- Open cli and run `composer install` to install all dependencies
- rename .env-example file to .env
- run `composer dump-autoload`
- run `php artisan serve`

# Setting up Database
- click "database" and open a new instance
- create new database, let it match the DB_DATABASE variable in .env
- run `php artisan migrate`
- run `php artisan passport:install`
- run `php artisan db:seed`

