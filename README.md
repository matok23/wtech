## Start the app
<p>
To start the app run the following:
</p>
<code>
git clone https://github.com/matok23/wtech
cd wtech
cp .env.example .env
composer install
php artisan key:generate
psql -U postgres -c "CREATE DATABASE wtech;"
</code>
<p>
Set your postgres password in .env a then run:
</p>
<code>
php artisan storage:link
php artisan migrate:fresh --seed #might take a few minutes to download images
php artisan serve
</code>
<p>
Finally open localhost:8000. To access admin interface use email admin@voguepoint.com with password admin123.
</p>