# Superheros Database (PHP Engineer Test)

## Objetive
We want to create a superhero database. For that, we want a web application that allows us to do CRUD operations of the superhero model

## Functional requirements
We want to be able to:
 * Create, edit and remove a superhero
 * When creating / editing we want to be able to assign and remove images from a superhero
 * List all the superheros, seeing only one image for each and it’s nickname, with pagination, showing 5 items at once
 * See the details of one particular superhero with all it’s information and images

### Functional requirements Status
La aplicación esta organizada en 4 secciones: Home, List, Create y About.

Las rutas están configuradas. Los templates están creados pero pendientes de ajustes.

Las pantallas requeridas (List y Create) están sin terminar.

En la sección *List* esta definido el paginado pero la carga de las imágenes aun no esta implementada.
Esta pendiente el borrado desde la misma lista

En la sección *Create* esta definido formulario pero esta generando un error que no logro identificar.
Luego de corregir este error, se procedería a adaptar el template para poder usarlo como la pantalla de edición.

## Technical requirements
The webapp should be implemented having this technical requirements:
 * Use Laravel (any version you feel comfortable with)
 * Write down unit tests, at least for the main logic.
 * A README with the steps to run the solution, and a list of all the assumptions that you made (if any)

### Technical requirements Status
La aplicación usa laravel _5.0_. Si bien no tengo experiencia con Laravel, intente aprovechar esta oportunidad para conocerlo y experimentar un poco. Está ,muy bueno! :D

Los cree el testcase del controller pero surgieron unos problemas con Mockery y deje el desarrollo del los test para cuando termine con al funcionalidad.

## Assumptions
No se implementa un registro de superpoderes. Los superpoderes se cargan como un campo de texto.

## Run
Primero debemos configurar las variables de entorno. Para esto copiamos el archivo ".env.example" como ".env" configurando la conexión a la base de datos.

Luego iniciamos la aplicacion. Para esto usamos comando artisan que se encuentra en el root del proyecto.
 1. Creamos alas tablas necesatias en DB con:
    ``` ./artisan migrate ```

 2. Iniciamos la aplicacion con:
    ``` ./artisan up ```

 3. Iniciamos un servidor con artisan (por defecto en el puerto 8000):
    ``` ./artisan serve ```

Para ejecutar los UnitTest necesitamos que la aplicacion este iniciada con ```artisan up```
y ejecutamos:
    ```composer exec phpunit```




--------------------------------------------------------------------------

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
