1) clonar repositorio

2)Realizar: composer install

5)configurar archivo .env con los valores que correspondan a la base de datos que tenga el entorno(tanto nombre de base usuario y password) y las rutas correspondientes

	DB_PORT = puerto de la base de datos
	DB_HOST = host de la base de datos 
	DB_DATABASE = nombre de la base de datos
	DB_USERNAME = usuario de acceso a base datos
	DB_PASSWORD = contraseña de acceso a la base de datos
	
6) realizar: 
php artisan migrate
php artisan key:generate