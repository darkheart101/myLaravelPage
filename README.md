# myLaravelPage

### Installation ###

* `git clone https://github.com/darkheart101/myLaravelPage`
* `cd myLaravelPage`
* create a .env file that contains:
APP_ENV=local

APP_DEBUG=true

APP_KEY=SomeRandomString


DB_HOST=localhost

DB_DATABASE=laravel_base

DB_USERNAME=root

DB_PASSWORD=


CACHE_DRIVER=file

SESSION_DRIVER=file

* `php artisan key:generate`
* `php artisan serve`
* Now hit on your browser http;//localhost:8000 and you can view the page


