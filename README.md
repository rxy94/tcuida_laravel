<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# T-Cuida+

## Descripción del Proyecto
Este proyecto es la adaptación de la aplicación **T-Cuida** al framework Laravel. Se trata de una aplicación web desarrollada como parte de la práctica del segundo trimestre de DWES (Desarrollo Web con Entornos Servidor). La aplicación incluye funcionalidades clave como la gestión de usuarios, autenticación, control de sesiones y un panel principal (`home`) para los usuarios autenticados.
Autora: Ruyi Xia Ye

---

## Características Principales

### 1. **Creación y Población de la Base de Datos**
- La base de datos se creó utilizando **migraciones**, permitiendo una estructura modular y fácilmente escalable.
- Los datos iniciales se poblaron mediante el uso de **factorías** y **seeders**, asegurando una base de datos inicial consistente para desarrollo y pruebas.

### 2. **Uso de modelos y Controladores**
- Se implementaron **modelos Eloquent** para interactuar con las tablas de la base de datos, encapsulando la lógica de negocio.
- Los controladores gestionan las solicitudes HTTP y delegan la lógica a los modelos correspondientes, siguiendo el **patrón MVC**.

### 3. **Crud para la tabla usuario**
- Se desarrolló un completo **CRUD** (Create, Read, Update, Delete) para la tabla usuario.
- Funcionalidades incluidas:
    - Listado de Usuarios : Muestra todos los usuarios registrados.
    - Creación de Usuarios : Permite registrar nuevos usuarios en la base de datos.
    - Edición de Usuarios : Permite actualizar los datos de un usuario existente.
    - Eliminación de Usuarios : Permite eliminar usuarios de la base de datos.
- El CRUD está protegido para que solo los administradores puedan acceder a estas funciones.

### 4. **Login y Home de la Aplicación**
- Se implementó un sistema de inicio de sesión (login) que verifica las credenciales del usuario contra la base de datos.
- Una vez autenticado, el usuario es redirigido al home de la aplicación, donde puede acceder a las funcionalidades disponibles según su rol.

### 5. **Autenticación y Control de Sesiones**
- La autenticación se maneja mediante **middlewares**, asegurando que solo los usuarios autenticados puedan acceder a ciertas rutas.
- Se implementó un middleware personalizado (admin) para restringir el acceso a funcionalidades administrativas.

### 6. **Creación de componentes**
- Creación de los componentes:
    - **x-botonera-listar**: sustituye a los botones **Editar** y **Borrar** dentro del campo Acciones de la tabla de Usuarios.
    - **x-botonera-form**: sustituye a los botones **Guardar** y **Volver** dentro de los formularios Crear y Editar.
    - **x-boton-registrar**: sustituye al botón **Registar nuevo usuario** dentro de la vistar usuario.listar.

### Historial de Desarrollo

A continuación, se detalla el progreso del desarrollo del proyecto:

#### 1. **Creación y Población de la Base de Datos**
- **Fecha:** 31/01/2025
- Se diseñó y creó la estructura de la base de datos utilizando migraciones de Laravel. Además, se poblaron los datos iniciales mediante factorías (`factories`) y seeders para facilitar las pruebas.

#### 2. **Modificación de la Tabla Usuario**
- **Fecha:** 07/02/2025
- Se añadió un campo booleano `admin` a la tabla `usuario` para distinguir entre usuarios normales y administradores.

#### 3. **Implementación del CRUD para Usuarios**
- **Fechas:** 07/02/2025 - 25/02/2025
  - **Listado, Creación y Eliminación:** El 07/02/2025 se implementaron las funcionalidades básicas del CRUD (listado, creación y eliminación de usuarios).
  - **Actualización:** El 16/02/2025 se completó la función de actualización del CRUD, permitiendo modificar los datos de los usuarios existentes.
  - **Actualización:** El 25/02/2025 se modificó la función de borrado del CRUD, cambiando el enlace con protocolo GET por un formulario con método POST para prevenir ataques crsf.

#### 4. **Autenticación y Pantalla de Inicio**
- **Fecha:** 16/02/2025
- Se desarrolló el sistema de inicio de sesión (`login`) que permite a los usuarios acceder al panel principal (`home`) de la aplicación. Este sistema incluye autenticación segura y control de sesiones.

#### 5. **Creación e Implementación de Componentes**
- **Fecha:** 27/02/2025
- Se crearon los componentes (`x-botonera-listar`), (`x-botonera-form`), y (`x-boton-registrar`).