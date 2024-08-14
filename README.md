# Nombre del Proyecto
Impacta

## Usuario y contraseña backpack
admin@gmail.com
12345678

## Descripción del proyecto
Este proyecto consiste en una Landing Page desarrollada como parte de una prueba técnica, utilizando Laravel, Bootstrap y Backpack. La base de datos se gestiona con MySQL.

- Funcionalidades Clave
Formulario de Contacto: Permite el registro y gestión de mensajes de usuarios.
CRUD: Implementación completa para la gestión de los envíos del formulario.

- Arquitectura
Patrón MVC: Se ha aplicado el patrón de diseño MVC de Laravel para una estructura de proyecto más organizada y mantenible.
Bootstrap: Las vistas se han desarrollado con Bootstrap, utilizando tanto sus clases nativas como clases personalizadas para cumplir con los requisitos específicos de la Landing Page.
Plantillas: Se han creado vistas individuales para cada enlace del menú horizontal, estructuradas en un layout que incluye la cabecera, el contenido principal y el pie de página, facilitando así la modificación y mantenimiento del contenido.

## Estructura del proyecto
- Controladores y modelos generados por Backpack para el CRUD de contactos y usuarios.
📦app
 ┣ 📂Http
 ┃ ┣ 📂Controllers
 ┃ ┃ ┣ 📂Admin
 ┃ ┃ ┃ ┣ 📜ContactCrudController.php
 ┃ ┃ ┃ ┗ 📜UserCrudController.php
 ┃ ┃ ┣ 📜ContactsController.php
 ┃ ┃ ┗ 📜Controller.php
 ┃ ┣ 📂Middleware
 ┃ ┃ ┗ 📜CheckIfAdmin.php
 ┃ ┗ 📂Requests
 ┃ ┃ ┣ 📜ContactRequest.php
 ┃ ┃ ┗ 📜UserRequest.php
 ┣ 📂Models
 ┃ ┣ 📜Contact.php
 ┃ ┗ 📜User.php
 ┗ 📂Providers
 ┃ ┗ 📜AppServiceProvider.php

- Migraciones y seeders para los datos de prueba
 📦database
 ┣ 📂factories
 ┃ ┗ 📜UserFactory.php
 ┣ 📂migrations
 ┃ ┣ 📜0001_01_01_000000_create_users_table.php
 ┃ ┣ 📜0001_01_01_000001_create_cache_table.php
 ┃ ┣ 📜0001_01_01_000002_create_jobs_table.php
 ┃ ┗ 📜2024_08_14_110147_create_contacts_table.php
 ┣ 📂seeders
 ┃ ┣ 📜ContactsTableSeeder.php
 ┃ ┗ 📜DatabaseSeeder.php
 ┣ 📜.gitignore
 ┗ 📜database.sqlite

- Carpeta public con las imágenes usadas para crear la landing y generadas por backpack
 📦public
 ┣ 📂storage
 ┃ ┣ 📂basset
 ┃ ┃ ┣ 📂vendor
 ┃ ┃ ┃ ┗ 📂backpack
 ┃ ┃ ┃ ┃ ┣ 📂basset
 ┃ ┃ ┃ ┃ ┃ ┗ 📂tests
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂Helpers
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜basset-test.js
 ┃ ┃ ┃ ┃ ┣ 📂crud
 ┃ ┃ ┃ ┃ ┃ ┗ 📂src
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂resources
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂assets
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜common.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂img
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜spinner.svg
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂js
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜common.js
 ┃ ┃ ┃ ┃ ┗ 📂theme-tabler
 ┃ ┃ ┃ ┃ ┃ ┗ 📂resources
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂assets
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜color-adjustments.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜colors.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜style.css
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂js
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜tabler.js
 ┃ ┃ ┗ 📜.basset
 ┃ ┣ 📂fonts
 ┃ ┃ ┣ 📂outfit
 ┃ ┃ ┃ ┣ 📂static
 ┃ ┃ ┃ ┃ ┣ 📜Outfit-Black.ttf
 ┃ ┃ ┃ ┃ ┣ 📜Outfit-Bold.ttf
 ┃ ┃ ┃ ┃ ┣ 📜Outfit-ExtraBold.ttf
 ┃ ┃ ┃ ┃ ┣ 📜Outfit-ExtraLight.ttf
 ┃ ┃ ┃ ┃ ┣ 📜Outfit-Light.ttf
 ┃ ┃ ┃ ┃ ┣ 📜Outfit-Medium.ttf
 ┃ ┃ ┃ ┃ ┣ 📜Outfit-Regular.ttf
 ┃ ┃ ┃ ┃ ┣ 📜Outfit-SemiBold.ttf
 ┃ ┃ ┃ ┃ ┗ 📜Outfit-Thin.ttf
 ┃ ┃ ┃ ┣ 📜.DS_Store
 ┃ ┃ ┃ ┣ 📜OFL.txt
 ┃ ┃ ┃ ┣ 📜Outfit-VariableFont_wght.ttf
 ┃ ┃ ┃ ┗ 📜README.txt
 ┃ ┃ ┗ 📜.DS_Store
 ┃ ┣ 📂images
 ┃ ┃ ┣ 📂iconos
 ┃ ┃ ┃ ┗ 📜favicon.ico
 ┃ ┃ ┣ 📂logos
 ┃ ┃ ┃ ┣ 📜.DS_Store
 ┃ ┃ ┃ ┣ 📜alcampo.svg
 ┃ ┃ ┃ ┣ 📜americanexp.svg
 ┃ ┃ ┃ ┣ 📜basf.svg
 ┃ ┃ ┃ ┣ 📜bmi.svg
 ┃ ┃ ┃ ┣ 📜brita.svg
 ┃ ┃ ┃ ┣ 📜broseta.svg
 ┃ ┃ ┃ ┣ 📜cajamar.svg
 ┃ ┃ ┃ ┣ 📜cepsa.svg
 ┃ ┃ ┃ ┣ 📜corporateexcellence.svg
 ┃ ┃ ┃ ┣ 📜facebook.svg
 ┃ ┃ ┃ ┣ 📜facebook_nav.svg
 ┃ ┃ ┃ ┣ 📜ferrovial.svg
 ┃ ┃ ┃ ┣ 📜hill.svg
 ┃ ┃ ┃ ┣ 📜impacta1.svg
 ┃ ┃ ┃ ┣ 📜impacta2.svg
 ┃ ┃ ┃ ┣ 📜instagram.svg
 ┃ ┃ ┃ ┣ 📜instagram_nav.svg
 ┃ ┃ ┃ ┣ 📜kpmg.svg
 ┃ ┃ ┃ ┣ 📜mastercard.svg
 ┃ ┃ ┃ ┣ 📜paypal.svg
 ┃ ┃ ┃ ┣ 📜schneider.svg
 ┃ ┃ ┃ ┗ 📜visa.svg
 ┃ ┃ ┣ 📂portada
 ┃ ┃ ┃ ┣ 📜.DS_Store
 ┃ ┃ ┃ ┣ 📜portada1.webp
 ┃ ┃ ┃ ┣ 📜portada2.webp
 ┃ ┃ ┃ ┣ 📜portada3.webp
 ┃ ┃ ┃ ┗ 📜portada4.webp
 ┃ ┃ ┣ 📜.DS_Store
 ┃ ┃ ┣ 📜chincheta.svg
 ┃ ┃ ┣ 📜cyber-woman.jpg
 ┃ ┃ ┣ 📜dartboard.jpg
 ┃ ┃ ┣ 📜digital-brain.jpg
 ┃ ┃ ┣ 📜esperma.svg
 ┃ ┃ ┣ 📜impacta_waiter.png
 ┃ ┃ ┣ 📜jarro-de-cerveza.svg
 ┃ ┃ ┣ 📜powerful-partnership.jpg
 ┃ ┃ ┗ 📜salud-mental.svg
 ┃ ┣ 📜.DS_Store
 ┃ ┗ 📜.gitignore
 ┣ 📜.htaccess
 ┣ 📜android-chrome-192x192.png
 ┣ 📜android-chrome-512x512.png
 ┣ 📜apple-touch-icon.png
 ┣ 📜favicon-16x16.png
 ┣ 📜favicon-32x32.png
 ┣ 📜favicon.ico
 ┣ 📜index.php
 ┣ 📜mstile-144x144.png
 ┣ 📜mstile-150x150.png
 ┣ 📜mstile-310x150.png
 ┣ 📜mstile-310x310.png
 ┣ 📜mstile-70x70.png
 ┣ 📜robots.txt
 ┗ 📜safari-pinned-tab.svg

- Vistas creadas para el proyecto y generadas por backpack
 📦resources
 ┣ 📂css
 ┃ ┗ 📜app.css
 ┣ 📂js
 ┃ ┣ 📜app.js
 ┃ ┗ 📜bootstrap.js
 ┣ 📂sass
 ┃ ┗ 📜app.scss
 ┣ 📂views
 ┃ ┣ 📂layouts
 ┃ ┃ ┗ 📜app.blade.php
 ┃ ┣ 📂partials
 ┃ ┃ ┣ 📜footer.blade.php
 ┃ ┃ ┗ 📜nav.blade.php
 ┃ ┣ 📂vendor
 ┃ ┃ ┗ 📂backpack
 ┃ ┃ ┃ ┗ 📂ui
 ┃ ┃ ┃ ┃ ┗ 📂inc
 ┃ ┃ ┃ ┃ ┃ ┗ 📜menu_items.blade.php
 ┃ ┣ 📜about.blade.php
 ┃ ┣ 📜contact.blade.php
 ┃ ┣ 📜projects.blade.php
 ┃ ┣ 📜services.blade.php
 ┃ ┗ 📜welcome.blade.php
 ┗ 📜.DS_Store

- Rutas web hacía las vistas y para almacenar los datos del formulario
 📦routes
 ┣ 📂backpack
 ┃ ┗ 📜custom.php
 ┣ 📜console.php
 ┗ 📜web.php

## Requisitos Previos
- PHP >= 8.0
- Composer >= 2.0
- Node.js >= 14.x
- npm >= 6.x

## Instalación
1. Clona el repositorio:
   ```bash
   git clone https://github.com/sergiovictoria123/impacta.git

2. Navega al directorio del proyecto:
   ```bash
   cd impacta
   ```

3. Instala las dependencias de PHP con Composer:
   ```bash
   composer install
   ```

4. Instala las dependencias de Node.js:
   ```bash
   npm install
   ```

5. Configura el archivo `.env`:
   - Copia el archivo `.env.example` y renómbralo a `.env`.
   - Configura los detalles de la base de datos y otras variables de entorno.
   ```bash
   cp .env.example .env
   ```

6. Genera la clave de la aplicación:
   ```bash
   php artisan key:generate
   ```

### 5. **Migraciones y Seeders**
- Instrucciones para ejecutar las migraciones y seeders para preparar la base de datos.

```markdown
## Migraciones y Seeders
Ejecuta las migraciones para crear las tablas en la base de datos:
```bash
php artisan migrate
php artisan db:seed

## Compilación de Assets
Para compilar los archivos CSS y JS con Laravel Mix:
```bash
npm run dev

## Ejecutar la Aplicación
Para iniciar el servidor de desarrollo:
```bash
php artisan serve

## Autores
- **Sergio Victoria M** - [GitHub](https://github.com/sergiovictoria123)
