# MiLocalWeb — Sitio Oficial

Sitio web oficial de **milocalweb.com.ar**, desarrollado en PHP para hosting compartido (Donweb).

## Estructura del proyecto

```
milocalweb.com.ar/
├── index.php              # Landing page principal
├── assets/
│   ├── css/
│   │   └── styles.css     # Hoja de estilos del sitio
│   ├── js/
│   │   └── main.js        # Scripts del sitio
│   └── img/               # Imagenes y recursos visuales
├── includes/
│   ├── header.php         # Cabecera compartida (navbar)
│   └── footer.php         # Pie de pagina compartido
├── config/
│   └── config.php         # Configuracion general del sitio
├── .gitignore
└── README.md
```

## Rutas planificadas

| Ruta          | Descripcion                              | Estado |
|---------------|------------------------------------------|--------|
| `/`           | Landing page publica                     | Activo |
| `/descargas`  | Acceso por password a archivos privados | Plan   |
| `/pagos`      | Portal de pagos                          | Plan   |
| `/tutoriales` | Tutoriales para clientes                 | Plan   |

## Requisitos

- PHP 7.4+ (recomendado 8.x)
- Hosting compartido con soporte PHP (Donweb)

## Convenciones

- Documentacion y comentarios en espanol, tono formal y conciso.
- Assets con rutas absolutas desde `public` (`/assets`, `/css`, `/js`).
- Navbar agrupa accesos internos bajo "Portal interno".