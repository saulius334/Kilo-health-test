## Quickstart

```{
composer i
composer init
```
In ```vendor/composer.json``` change line 5

from

```"Saulius\\KiloHealthTest\\": "src/"```

to

```"": ""```
```
composer dumpautoload
```
## 🎯 Features

### - Terminal Commands:
``` php run.php count_by_price_range ```
- accepts 2 variables(float), returns number of matches inbetween given variables

``` php run.php count_by_vendor_id ```
- accepts 1 variable(int), returns number of matches for given vendor_id

