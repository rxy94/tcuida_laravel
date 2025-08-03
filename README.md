# tcuida_laravel

**Adaptación del proyecto tcuida a Laravel**

## Descripción

Este proyecto es una adaptación de la aplicación **tcuida** al framework [Laravel](https://laravel.com/). Su objetivo es aprovechar las ventajas y buenas prácticas que ofrece Laravel para el desarrollo, mantenimiento y escalabilidad de aplicaciones web en PHP. En esta versión, solo se incluye la sección correspondiente al CRUD (Crear, Leer, Actualizar y Eliminar) de los usuarios, no médicos ni pacientes.

## Características principales

- Estructura moderna basada en Laravel.
- Separación clara entre lógica de negocio, vistas y rutas.
- Plantillas Blade para la interfaz de usuario.
- Integración con bases de datos relacionales.
- Facilidad para agregar autenticación, middleware y validaciones.
- Soporte para migraciones y seeders.

## Requisitos

- PHP >= 8.0  
- Composer
- Servidor web (Apache, Nginx, etc.)
- MySQL o cualquier base de datos compatible con Laravel

## Instalación

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/rxy94/tcuida_laravel.git
   cd tcuida_laravel
   ```

2. **Instala las dependencias:**
   ```bash
   composer install
   npm install
   ```

3. **Copia el archivo de entorno y configura tus variables:**
   ```bash
   cp .env.example .env
   ```
   Luego edita el archivo `.env` con tus credenciales de base de datos y otras configuraciones necesarias.

4. **Genera la clave de la aplicación:**
   ```bash
   php artisan key:generate
   ```

5. **Ejecuta las migraciones:**
   ```bash
   php artisan migrate
   ```

6. **¡Listo! Ejecuta el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```
   o si trabajas con Sail:
   ```bash
   ./vendor/bin/sail up -d
   ```
   
   Accede a la aplicación en [http://localhost:80](http://localhost:80).

## Secciones

- **app/** — Lógica principal de la aplicación
- **resources/views/** — Vistas Blade
- **routes/web.php** — Definición de rutas web
- **public/** — Acceso público y archivo de entrada (`index.php`)
- **database/** — Migraciones y seeders

## Galería

- **Login**
  <img width="1911" height="977" alt="Captura de pantalla 2025-08-03 222703" src="https://github.com/user-attachments/assets/b581048b-33ec-4a80-a881-914bae029a62" /> <br/>

- **Dashboard**
  <img width="1884" height="996" alt="Captura de pantalla 2025-08-03 224916" src="https://github.com/user-attachments/assets/8ee57aa3-5748-4551-8d6b-779871a2d40a" /> <br/>

- **Usuarios**
  <img width="1881" height="641" alt="Captura de pantalla 2025-08-03 225012" src="https://github.com/user-attachments/assets/e397c0d4-3e53-48b0-afc3-337d8681b710" />
  <img width="1882" height="982" alt="Captura de pantalla 2025-08-03 225047" src="https://github.com/user-attachments/assets/050a4a9c-8d12-48fe-9713-05cd84f83f3f" />
  <img width="1884" height="983" alt="Captura de pantalla 2025-08-03 225110" src="https://github.com/user-attachments/assets/90f46cce-e1d0-4201-93b3-bfd0b297ed30" />
 

## Autora

Este proyecto fue desarrollado y adaptado por [rxy94](https://github.com/rxy94).

## Licencia educativa

Este proyecto se distribuye con fines educativos y de aprendizaje. El código puede ser utilizado, modificado y compartido libremente siempre que se mantenga este propósito y se reconozca la autoría original.

---
