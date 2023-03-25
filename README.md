<h1><b>Steps for integrating AerDatabox Flight API in Laravel. </b></h1><br><br><br>


##About<br><br><br><br>

"laravel": "^9.0"<br>
"php": "^8.0.25"<br>
"guzzlehttp/guzzle": "^7.5"<br>

##Steps<br><br><br><br>

1- Create new laravel project<br>
&nbsp;&nbsp;composer create-project laravel/laravel:^9.0 example-app<br><br>
2- Download guzzelhttp<br>
&nbsp;&nbsp;composer require guzzlehttp/guzzle<br><br>
3- Now create your account in https://rapidapi.com/<br><br>
4- Select Flight API (AeroDataBox)<br><br>
5- For free trail period book the pricing<br><br>
6- Now put your rapid-api-key from here<br><br>
7- Set RAPID_API_KEY and RAPID_API_HOST in .env file<br><br>
8- Create a Service Class set the headers and use guzzelhttp as<br>
&nbsp;&nbsp;use GuzzleHttp\Client;<br><br>
9- Create a provider class by this command as:<br>
&nbsp;&nbsp;php artisan make:provider AeroDataBoxServiceProvider<br><br>
10- In your Service provider class register the Service class<br><br>
11- Register Service Provider class in Config\app.php file<br><br>
12- You can now inject the Service class into your controllers or other classes that need to use it.<br><br>


