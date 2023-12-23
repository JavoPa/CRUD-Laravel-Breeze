## Instalaciones y configuraciones iniciales:

Installar PHP y composer

Instalar XAMPP

Añadir a las variables de entorno Path la ruta C:/XAMPP/php


## Instalación de laravel: 

`cd /proyecto`

`composer global require laravel/installer`

starter kit: breeze

Breeze stack: blade with alphine

dark mode support: yes

testing framekork: Pest

git repository: yes


### Starter kits:

- Laravel Breeze: Es un kit de inicio minimalista que incluye autenticación, vistas, rutas y controladores. Breeze permite a los desarrolladores comenzar rápidamente con la autenticación en una nueva aplicación Laravel. Utiliza Blade como su plantilla y no incluye ninguna funcionalidad de JavaScript.

- Laravel Jetstream: Es un kit de inicio más robusto que incluye autenticación, registro de usuarios, restablecimiento de contraseñas, verificación de correo electrónico y soporte opcional para la autenticación de dos factores. Jetstream utiliza Tailwind CSS para el estilo y ofrece la opción de usar Livewire o Inertia.js para la funcionalidad de JavaScript.

Ambos kits son excelentes para comenzar rápidamente con Laravel, pero la elección entre los dos depende de tus necesidades. Si prefieres un enfoque más simple y minimalista, Breeze puede ser la mejor opción. Si necesitas más funcionalidad y prefieres usar Tailwind CSS y Livewire o Inertia.js, entonces Jetstream puede ser la mejor opción.


### Stacks:

- Blade with Alpine: Este stack utiliza Blade, el motor de plantillas de Laravel, para el renderizado del lado del servidor y Alpine.js para el comportamiento del lado del cliente. Es una opción ligera y fácil de entender, especialmente si ya estás familiarizado con Blade.

- Livewire (Volt Class API) with Alpine: Este stack utiliza Livewire, un framework de Laravel para crear componentes dinámicos en el lado del servidor, junto con Alpine.js para el comportamiento del lado del cliente. La API de clase Volt es la API original de Livewire.

- Livewire (Volt Functional API) with Alpine: Este stack también utiliza Livewire y Alpine.js, pero con la API funcional Volt de Livewire, que es una nueva API que proporciona una sintaxis más concisa.

- React with Inertia: Este stack utiliza React, un popular framework de JavaScript, para el comportamiento del lado del cliente y Inertia.js para permitir la renderización del lado del servidor con Laravel y React.

- Vue with Inertia: Este stack utiliza Vue.js, otro popular framework de JavaScript, para el comportamiento del lado del cliente y Inertia.js para la renderización del lado del servidor.

- API only: Este stack configura tu aplicación para ser una API sin ninguna interfaz de usuario.

La elección del stack depende de tus preferencias y de las necesidades de tu proyecto. Si prefieres trabajar con React o Vue, puedes elegir uno de los stacks con Inertia. Si prefieres un enfoque más PHP-centric, puedes elegir uno de los stacks con Blade o Livewire. Si estás construyendo una API sin interfaz de usuario, puedes elegir la opción "API only".


### Frameworks para pruebas:

- PHPUnit: Es el framework de pruebas unitarias más utilizado en PHP. Proporciona una estructura sólida y madura para escribir y ejecutar pruebas. PHPUnit sigue el enfoque tradicional de las pruebas unitarias, donde cada prueba se coloca dentro de una clase y se ejecuta como un método de esa clase.

- Pest: Es un framework de pruebas relativamente nuevo en PHP que se basa en PHPUnit. Pest introduce una sintaxis más sencilla y elegante para escribir pruebas, lo que puede hacer que las pruebas sean más legibles y fáciles de escribir. Aunque Pest es más nuevo y menos conocido que PHPUnit, ha ganado popularidad rápidamente debido a su simplicidad y elegancia.

La elección entre PHPUnit y Pest depende de tus preferencias personales y de las necesidades de tu proyecto. Si prefieres una sintaxis más tradicional y estás familiarizado con PHPUnit, puede que prefieras quedarte con PHPUnit. Si prefieres una sintaxis más moderna y elegante, puede que te guste Pest.


## Creación del proyecto

`laravel new nombre_del_proyecto`


#### Creación del modelo:

`php artisan make:model NombreDelModelo -m`

modificar database/migrations para definir columnas

Si ya habías ejecutado la migración antes de agregar las columnas nombre y descripcion, necesitarás revertir la migración y luego volver a ejecutarla. Puedes hacer esto con los siguientes comandos:

`php artisan migrate:rollback`

`php artisan migrate`

Si tienes datos en tu base de datos que no quieres perder, deberías hacer una copia de seguridad de tu base de datos antes de ejecutar el comando migrate:rollback.

Si estás en un entorno de desarrollo y no te importa perder los datos, puedes usar el comando migrate:fresh, que eliminará todas las tablas y ejecutará todas las migraciones desde el principio:

`php artisan migrate:fresh`

Si quieres mantener los datos y solo necesitas agregar nuevas columnas a una tabla existente, deberías crear una nueva migración para agregar las columnas en lugar de modificar una migración existente. Puedes hacer esto con el comando make:migration:

`php artisan make:migration add_nombre_and_descripcion_to_objetos_table --table=objetos`

Esto creará una nueva migración que puedes usar para agregar las columnas nombre y descripcion a la tabla objetos.

#### Creación del controlador:

`php artisan make:controller NombreDelControlador`


#### Definir rutas (routes/web.php):

`Route::resource('nombre_del_recurso', 'NombreDelControlador');`

## Iniciar base de datos

En el Panel XAMPP encender Apache y MySQL

Dejar los valores por defecto de la conexión a la BD en el .env

`php artisan migrate` (para crear las tablas en la BD)

`php artisan serve` (para encender el servidor en local)

[Sobre Laravel](./LARAVEL.md)
