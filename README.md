# Laralight Metadata
laralight-metadata package created for those projects need to have metadata.
i named this to laralight because this package is so light and also created for 'lara'vel. 

i created a lot light package for laravel and i'll add them to my git soon.

## Installing

1. `composer require seyedmr/laralight-metadata`
2. `php artisan migrate`

Congrat , you done it.

## Usage
as i said before , this package is too light and easy to use.

### Prepare your model
Add this trait to the model that you want that to have metadata.

`SeyedMR\LaraliteMetadata\Traits\HasMeta`

For example (User):

```php
namespace App;

...
use Illuminate\Database\Eloquent\Model;
use SeyedMR\LaraliteMetadata\Traits\HasMeta;

class User extends Model
{
    use HasMeta;
    
    ...
}
```

And now your model is ready to have metadata.

### Adding metadata
for adding metadata you just need to use this method.
`$model->setMeta('meta-key','meta-value');`

For example :
```php
$user = User::find(1);
$user->setMeta('meta-key','meta-value');
```
 ### Getting metadata

Getting metadata is easy too.

For example :
```php
$user = User::find(1);
$user->getMeta('meta-key');
```
