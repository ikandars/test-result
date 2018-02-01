## Installation

After clone this project, go to project folder and run

```
composer install
```

Then, run this project in development mode:

```
php artisan serve
```

Make json request. Example via curl:

```
curl \
-H "Content-Type: application/json" \
-X POST \
-d '{"numbers":[1,2,6,10,8]}' \
http://localhost:8000/api/v1/test-result
```

## Testing

To run unit testing:

```
vendor/bin/phpunit --filter ApiTest ./tests/Unit/ApiTest.php
```

To run integration testing:

```
vendor/bin/phpunit --filter ApiTest ./tests/Feature/ApiTest.php
```

To test all:

```
vendor/bin/phpunit
```