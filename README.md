<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

This project was created using Laravel 7.x.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## About this Project
This project was created using Laravel 7, PostgreSQL, PHP 7.4 and Blade Templatating. 

Option 1 of the Challenge was chosen and the 3 main requirements were fulfilled:

    1. A View accepting a CSV file, parsing it, and saving the Zipcode data into the PostgreSQL database.
    2. A View allowing for queries/ searches on the local Postgres database, ONLY when stricter parameters (Any of the following: STATE, ZIPCODE, CITY) are set to prevent data overload.
    3. A View that queries the Zipcode API for the distance between 2 zipcodes ONLY if the distance was within the distance provided in miles.
    

