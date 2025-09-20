# ImpulsaDigital - Soluciones Innovadoras

## 📋 Descripción del Proyecto

ImpulsaDigital es una plataforma web desarrollada para ofrecer soluciones tecnológicas personalizadas a pymes. La empresa se dedica a brindar servicios como desarrollo de software a medida, mejora de procesos, capacitación organizacional, gestión de proyectos y otros servicios relacionados con las TI.

## 🚀 Características Principales

- **Desarrollo de Software**: Soluciones personalizadas para necesidades específicas
- **Diseño UX/UI**: Implementación basada en Design Thinking
- **Gestión Estratégica**: Servicios de alta calidad para mejora operativa
- **Capacitación**: Herramientas tecnológicas y conocimientos en TI
- **Mejora de Procesos**: Optimización de flujos de trabajo
- **Seguridad Web**: Protección contra amenazas digitales

## 🛠️ Tecnologías Utilizadas

- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap
- **Backend**: PHP
- **Base de Datos**: MySQL
- **Icons**: Font Awesome
- **Fonts**: Google Fonts (Montserrat, Roboto Slab)

## 📁 Estructura del Proyecto

```
myweb3.0/
├── index.php                 # Página principal
├── database/                 # Base de datos
│   ├── bdmyweb3.0.sql       # Schema y datos de la BD
│   └── README.md            # Documentación de BD
├── admin/                    # Panel administrativo
│   ├── bd.php               # Configuración de base de datos
│   ├── bd.example.php       # Ejemplo de configuración
│   ├── login.php            # Login de administrador
│   └── secciones/           # Módulos administrativos
├── asesor/                  # Panel de asesor
│   ├── bd.php               # Configuración de base de datos
│   ├── bd.example.php       # Ejemplo de configuración
│   └── secciones/           # Módulos de asesor
├── assets/                  # Recursos estáticos
│   ├── img/                 # Imágenes del proyecto
│   ├── favicon.ico          # Favicon
│   └── favicon.png          # Favicon PNG
├── css/
│   └── styles.css           # Estilos principales
└── js/
    └── scripts.js           # Scripts JavaScript
```

## ⚙️ Instalación

### Prerrequisitos
- Servidor web (Apache/Nginx)
- PHP 7.4 o superior
- MySQL 5.7 o superior
- Composer (opcional)

### Pasos de instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/ngonzalezlopez69-png/ImpulsaDigital.git
   cd ImpulsaDigital
   ```

2. **Configurar la base de datos**
   - Crear una base de datos MySQL
   - Importar el archivo SQL: `database/bdmyweb3.0.sql`
   - Configurar las credenciales en `admin/bd.php` y `asesor/bd.php`

3. **Configurar el servidor web**
   - Apuntar el document root a la carpeta del proyecto
   - Asegurar que PHP esté habilitado
   - Configurar permisos de escritura si es necesario

4. **Acceder a la aplicación**
   - Página principal: `http://tu-dominio/`
   - Panel administrativo: `http://tu-dominio/admin/`
   - Panel de asesor: `http://tu-dominio/asesor/`

## 🔧 Configuración

### Base de Datos
Los archivos de configuración de la base de datos están en `.gitignore` por seguridad. Usa los archivos ejemplo:

**Para admin/bd.php:**
```php
$server = "localhost";
$dbname = "tu_base_de_datos";
$user = "tu_usuario";
$password = "tu_contraseña";
```

**Para asesor/bd.php:**
```php
// Misma configuración que admin/bd.php
$server = "localhost";
$dbname = "tu_base_de_datos";  // Misma BD
$user = "tu_usuario";
$password = "tu_contraseña";
```

**Importar la base de datos:**
```bash
# Usando MySQL command line
mysql -u tu_usuario -p tu_base_de_datos < database/bdmyweb3.0.sql

# O usando phpMyAdmin: Importar el archivo database/bdmyweb3.0.sql
```

## 📱 Funcionalidades

### Para Visitantes
- Visualización de servicios ofrecidos
- Portafolio de proyectos
- Información sobre el equipo
- Formulario de contacto
- Registro de clientes potenciales

### Panel Administrativo
- Gestión de usuarios y roles
- Administración de categorías
- Gestión de servicios
- Control de portafolio
- Administración de clientes
- Gestión de ventas

### Panel de Asesor
- Vista limitada del panel administrativo
- Gestión de clientes asignados
- Servicios específicos
- Reportes básicos

## 🎨 Personalización

### Base de Datos
Ver la documentación completa en `database/README.md` para:
- Estructura detallada de tablas
- Usuarios de prueba incluidos
- Instrucciones de instalación paso a paso
- Configuración de conexiones

### Colores y Estilos
Los estilos principales se encuentran en `css/styles.css`. El proyecto utiliza Bootstrap como framework CSS base.

### Imágenes
Las imágenes se organizan en la carpeta `assets/img/` con subcarpetas temáticas:
- `about/`: Imágenes de la sección "Sobre nosotros"
- `portfolio/`: Imágenes de proyectos
- `services/`: Imágenes de servicios
- `team/`: Fotos del equipo
- `logos/`: Logotipos de clientes

## 🤝 Contribución

1. Fork el proyecto
2. Crear una rama para tu feature (`git checkout -b feature/NuevaFuncionalidad`)
3. Commit tus cambios (`git commit -m 'Agregar nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/NuevaFuncionalidad`)
5. Abrir un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## 📞 Contacto

- **Empresa**: ImpulsaDigital
- **Desarrollador**: Nelson González
- **Email**: n.gonzalez.lopez69@gmail.com
- **Website**: [ImpulsaDigital](#)

## 🙏 Agradecimientos

- Bootstrap por el framework CSS
- Font Awesome por los iconos
- Google Fonts por las tipografías
- Todos los colaboradores del proyecto

---

⭐ **¿Te gusta el proyecto? ¡Dale una estrella en GitHub!**