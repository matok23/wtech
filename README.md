## Start the app

Run the following:
<code>
git clone https://github.com/matok23/wtech
cd wtech
cp .env.example .env
composer install
php artisan key:generate
psql -U postgres -c "CREATE DATABASE wtech;"
</code>
Set you postgres password in .env a then run:
<code>
php artisan storage:link
php artisan migrate:fresh --seed #might take a few minutes to download images
php artisan serve
</code>
Finally open localhost:8000. To access admin interface use email admin@voguepoint.com with password admin123.