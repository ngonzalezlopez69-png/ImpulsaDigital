# Base de Datos - ImpulsaDigital

## 📊 Información General

Este directorio contiene el esquema de la base de datos MySQL para el proyecto ImpulsaDigital.

- **Archivo**: `bdmyweb3.0.sql`
- **Motor de Base de Datos**: MySQL/MariaDB
- **Versión**: 5.7 o superior
- **Charset**: UTF8MB4

## 🗃️ Estructura de la Base de Datos

La base de datos contiene las siguientes tablas principales:

### Tablas de Usuario y Autenticación
- `usuario` - Información de usuarios del sistema
- `rol` - Roles de usuario (Administrador, Asesor, Cliente)
- `login` - Credenciales de login para administradores
- `login_asesor` - Credenciales de login para asesores

### Tablas de Negocio
- `categoria` - Categorías de servicios
- `servicio` - Servicios ofrecidos por la empresa
- `portafolio` - Proyectos del portafolio
- `cliente` - Información de clientes

### Tablas de Transacciones
- `venta` - Registro de ventas
- `detalle_venta` - Detalles de ventas
- `pago` - Información de pagos
- `detalle_pago` - Detalles específicos de pagos

## ⚙️ Instalación

### Método 1: Usando phpMyAdmin
1. Abre phpMyAdmin en tu servidor
2. Crea una nueva base de datos llamada `u806172345_bdtest` (o el nombre que prefieras)
3. Selecciona la base de datos creada
4. Ve a la pestaña "Importar"
5. Selecciona el archivo `bdmyweb3.0.sql`
6. Haz clic en "Continuar"

### Método 2: Usando línea de comandos MySQL
```bash
# Crear la base de datos
mysql -u tu_usuario -p -e "CREATE DATABASE impulsa_digital CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;"

# Importar el esquema
mysql -u tu_usuario -p impulsa_digital < database/bdmyweb3.0.sql
```

### Método 3: Usando XAMPP/WAMP
1. Inicia Apache y MySQL en XAMPP/WAMP
2. Ve a `http://localhost/phpmyadmin`
3. Sigue los pasos del Método 1

## 🔧 Configuración

Después de importar la base de datos, actualiza los archivos de conexión:

### admin/bd.php
```php
$server = "localhost";
$dbname = "impulsa_digital";  // Nombre de tu base de datos
$user = "tu_usuario";         // Tu usuario MySQL
$password = "tu_contraseña";  // Tu contraseña MySQL
```

### asesor/bd.php
```php
$server = "localhost";
$dbname = "impulsa_digital";  // Mismo nombre que arriba
$user = "tu_usuario";         // Tu usuario MySQL
$password = "tu_contraseña";  // Tu contraseña MySQL
```

## 👤 Usuarios de Prueba

La base de datos incluye algunos usuarios de prueba:

### Administrador
- **Usuario**: `Nelson`
- **Contraseña**: `123456`

### Asesor
- **Usuario**: `Gonzalez`
- **Contraseña**: `123456`

## 📈 Datos de Ejemplo

La base de datos incluye datos de ejemplo para:
- 3 categorías de servicios predefinidas
- Algunos clientes de prueba
- Proyectos del portafolio
- Usuarios con diferentes roles

## 🔄 Actualizaciones

Para actualizar la base de datos:
1. Haz backup de tu base de datos actual
2. Ejecuta los scripts de migración (si los hay)
3. O reemplaza completamente con la nueva versión

## ⚠️ Notas Importantes

1. **Backup**: Siempre haz respaldo antes de importar
2. **Permisos**: Asegúrate de que el usuario MySQL tenga permisos completos
3. **Charset**: La base usa UTF8MB4 para soporte completo de caracteres
4. **Contraseñas**: Cambia las contraseñas de prueba en producción

## 🤝 Soporte

Si tienes problemas con la base de datos:
1. Verifica que MySQL esté ejecutándose
2. Revisa los logs de error de MySQL
3. Confirma las credenciales de conexión
4. Verifica que el puerto 3306 esté disponible