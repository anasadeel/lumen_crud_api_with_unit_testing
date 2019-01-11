# lumen_crud_api_with_unit_testing


I recently developed an API with Laravel for a mini-project. I decided to build another API but with Lumen instead, since it’s a far lighter and faster framework than Laravel. Lumen is a micro-framework built on top of Laravel’s core components. Lumen utilizes a lot of familiar concepts from Laravel such as Eloquent, caching, routing, middleware and it’s service container. One major advantage of Lumen is it’s speed, as a result the framework is designed for building fast micro-services or APIs.

These are the following steps to setup the project: 
Take pull or clone.
Run composer update command(if composer.json file is in the relevant directory) i.e "composer update", this command is for vendor directory.
Create Database and configure it in .env file.
Run migration command i.e "php artisan migrate".
Add storage directory from any laravel or lumen project with relevant version after that empty its views and session folder.
Add -777 permissions to storage & bootstrap folders(if linux).