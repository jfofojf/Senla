start:
	php artisan serve

setup:
	composer install
	touch database/database.sqlite
	php artisan migrate
