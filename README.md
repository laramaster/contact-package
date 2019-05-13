

# contact-package


### install

Using Composer

    composer require arafat/contact

### Laravel >= 5.5

That's it! The package is auto-discovered on 5.5 and up!

### Laravel <= 5.4

Add the service provider to `config/app.php`

```php
arafat\contact\ContactServiceProvider::class,
```




### Options

You can set custom options for Reminder. Run:

    php artisan vendor:publish

to publish the config file for toastr.





### MIT
