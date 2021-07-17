### Comandos de uso comun

## Para desplegar con docker
``bash
    docker-compose build
    docker-compose up -d
``
## Para desplegar con xampp importante que se respete la estructura y se guarde todo en htdocs

## Para crear un proyecto de cero:
``bash
    composer create-project laravel/laravel nombreApp
``

## Para instalar (recien se descarga de github, cuando el proyecto ya exsite):
``bash
    composer instal
``

### Para Laravel:

## Para crear controladores (dentro del contenedor):

``bash
    php artisan make:controller NombreController
``
## En los controladores metemos la logica de la palicacion (el acceso a base de datos, etc.)

### Base de datos

## Para actualizar la Base de Datos
``bash
    php artisan migrate
``

## Para crear una migracion de una tabla
``bash
    php artisan make:migration nombre_de_asdasd --create=nombre_tabla_siempre_en_plural
``

## Para crear un modelo (un modelo es un archivo que permite efectuar operaciones con la bd)
``bash
    php artisan make:model Nombre
``
## Importante, siempre el nombre en Singular y con la primera letra Mayuscula