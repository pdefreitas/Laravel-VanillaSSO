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

Hints
==================
If you use Vanilla 2.1 there is an annoying bug that you have to alter a table in order to jsConnect 1.4.1 be supported:
```
ALTER TABLE GDN_UserAuthenticationProvider ADD IsDefault BOOLEAN NOT NULL DEFAULT FALSE;
```
