# Api with Lumen PHP Framework

Example of a structure to mount an api under the structure of a wordpress(The connection must be on a mysql base of a wordpress).

## Documentation of the Api

Documentation of the Api with [SwaggerLume website](https://github.com/DarkaOnLine/SwaggerLume).

I have applied the Repository pattern and can document it with swagger.
## Install and Run
```
composer install

php artisan migrate

php -S localhost:8000 -t public/

```

http://localhost:8000/api/documentation
## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
