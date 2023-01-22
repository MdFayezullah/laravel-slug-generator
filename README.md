# Laravel Slug Generator

## Installation This packege

```sh
composer requere fayez/unique-slug-generator 
```
## Use from controller
#### import first unique slug facades
``` php
use Fayez\UniqueSlugGenerator\UniqueSlug;
```
Then impliment in controller
```php 
$slug = UniqueSlug::generate(User::class,'sohel','name');
// after generate slug resust is 
"sohel-1"
//further generate slug in same name
$slug = UniqueSlug::generate(User::class,'sohel','name');
// Result is 
"sohel-2"
```
