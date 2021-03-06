# LARACAST SANDBOX


### Docker commands

Speed/stop the containers
```
docker-compose up -d
		&
docker-compose down
```

In case you need to rebuilt the app 
```
docker-compose build app
```

WARNING! Give permissions just in case are required: 
```
docker-compose exec app php /var/www/artisan chown -R www-data:www-data /var/www
```

WARNING! Clean the images: 
```
docker system prune -a
```


### Instance running in: 

```
http://localhost:8080/
```

SSH on the app container and run the following artisan commands: 
```
php artisan key:generate

php artisan config:cache
```

Give permissions just in case: 
```
docker-compose exec app php /var/www/artisan chown -R www-data:www-data /var/www
```


### Run tinker

```
docker-compose exec app php /var/www/artisan tinker
		OR
php artisan tinker
```

This command will help you to know if the db connection has been done correctly:
```
Psy Shell v0.10.4 (PHP 7.4.13 — cli) by Justin Hileman
>>> DB::connection()->getPdo();
```
