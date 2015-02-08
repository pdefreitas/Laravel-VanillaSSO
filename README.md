Laravel-VanillaSSO
==================
This package allows you to use jsConnect of Vanilla Forums in your Laravel 4 application.

SSO (Single Sign-on) will save your time if you want to implement a forum on your Laravel 4 application.

The package is availabe on Packagist https://packagist.org/packages/pdefreitas/vanillasso

If you want to implement it into your Laravel installation:

1) Edit the composer.json file

```
"require": {
 ...
 "pdefreitas/vanillasso": "dev-master",
 ...
},
```
2) Update the composer

```$ composer update```

3) Edit the providers Array() in app.php (app/config.app.php)

```
'providers' => array(
...
'Pdefreitas\VanillaSSO\VanillaSSOServiceProvider',
...
),
```
4) Publish the vanillasso.php config file to make it accessible in app/config/packages/pdefreitas/vanillasso

```
 php artisan config:publish pdefreitas/vanillasso
```

Routes
==================

Here is an example of a route that you may use (app/routes.php):
```
Route::group(array('before' => 'auth'), function()
{
    Route::get('/jsonp', 'VanillaSSOController@jsonResponse');
});
```

Configuration
==================
You can directly edit config\vanillasso.php or add it to your application.

The configuration file looks like this:
```
return array(
    //The string client ID that you set up in the jsConnect settings page.
    "client_id" => "",
    //The string secred that you set up in the jsConnect settings page.
    "secret" => ""
);
```

Please note that this plugin supports MD5 and SHA1 hashes from JSconnect.

License
==================
Check LICENSE for more information.

Credits
==================
I want to thank Todd Burry from Vanilla Forums. This file helped producing this package:
https://github.com/vanilla/jsConnectPHP/blob/master/functions.jsconnect.php

Hints
==================
If you use Vanilla 2.1 there is an annoying bug that you have to alter a table in order to jsConnect 1.4.1 be supported:
```
ALTER TABLE GDN_UserAuthenticationProvider ADD IsDefault BOOLEAN NOT NULL DEFAULT FALSE;
```
