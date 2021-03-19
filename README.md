<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

1. En caso de no tener el gestor de dependencias composer instalar(tener previamente instalado php 7.4)

2. Clonar el repositorio: Usando el comando git clone https://github.com/OscarGranadosG/cheilApi.git 

3. Ingresar al proyecto con el comando: cd cheilApi

4. Instalar depedencias: Usando el comando composer install

5. Instalar llaves proyecto laravel: Usando el comando php artisan key:generate

6. Agreagar archivo .env al proyecto

7. Verificar que el .env tenga la variable APP_URL=http://cheilapi.test o el dominio local del cual consumira el front

8. ejecutar las migraciones y seeders: Usando el comando php artisan migrate --seed

9. Para realizar prueba en local host: Usando el comando php artisan serve