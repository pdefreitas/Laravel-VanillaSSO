Laravel-VanillaSSO
==================
This package allows you to use jsConnect of Vanilla Forums in your Laravel 4 application.

SSO (Single Sign-on) will save your time if you want to implement a forum on your Laravel 4 application.
 

Routes
==================

Here is an example of a route that you may use (app/routes.php):
```
Route::group(array('before' => 'auth'), function()
{
    Route::get('/jsonp', 'VanillaSSOController@jsonResponse');
});
```

License
==================
Check LICENSE for more information.
