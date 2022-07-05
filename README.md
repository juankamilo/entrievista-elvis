- Este proyecto fue hecho con Laravel y MYSQL, usando Docker. Version de PHP: 8.1
- Pasos para ejecutar el proyecto:
1) `mv .env.example .env` para renombrar el archivo .env.example.
2) `composer install` para instalar las dependencias.
3) `docker-compose up -d --build` para ejecutar los containers.
4) `php artisan migrate` para ejecutar las migrations.

- Podrá ver el front del proyecto accediendo a 127.0.0.1:8000 o localhost:8000
