Comandos para ejecución:
php artisan migrate
npm install
npm run dev
php artisan serve

Comando para test:
php artisan test

Consideraciones:
La pestaña de vehículos sólo funciona cuando hay al menos un vehículo en la base de datos
Cada vehículo debe tener asignado un usuario
El botón de eliminar no hace nada
El registro histórico guarda la hora en la cual se realiza la operación, pero la zona horaria no es la de chile

Funcionalidad:
El botón de "ver autos" muestra los autos que tienen como dueño el usuario correspondiente al botón

Testing:
Se realizó un test de feature que crea un usuario y crea un vehículo que le pertenece a ese usuario. Para posteriormente testear que la página de "ver autos" de la persona muestra el auto recién creado. (no lo revisa en la base de datos, sino que directamente en la página por lo cual también sirve para comprobar que la vista funciona)


