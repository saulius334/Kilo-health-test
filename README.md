## Quickstart

```{
composer install
composer init
```
In ```vendor/composer.json``` change line 5 to 
```"": ""```
```
composer dumpautoload
```
## 🎯 Features

### - Terminal Commands:
``` php run.php count_by_price_range```
- accepts 2 variables(float) seperated by space, returns number of matches inbetween given variables
- Example: 
```php run.php count_by_price_range 10.00 500.00```

``` php run.php count_by_vendor_id```
- accepts 1 variable(int), returns number of matches for given vendor_id
- Example:
```php run.php count_by_vendor_id 35```

### For unit testing type in terminal:
```./vendor/bin/phpunit```
