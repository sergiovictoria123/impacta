# Nombre del Proyecto
Impacta

## Descripción
Este proyecto es una Landing para una prueba de técnica, desarrollada con Laravel y Bootstrap . Incluye funcionalidades como registro de mensajes de usuarios y CRUD de los envios del formulario.

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
