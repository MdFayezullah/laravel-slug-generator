# Laravel Slug Generator

## Installation This packege

```sh
composer requere fayez/unique-slug-generator 
```
## Use from controller
```php 
$slugs = new UnikeSlug();
$slugs->generate(User::class,'jone doe','name');
// after createing a slug
$slugs->generate(User::class,'jone doe','name');
// joen-deo-2
```
