# Architetto di Progetti — Tema WordPress a medida

Tema PHP propio (sin page builders, sin Elementor) que replica la estructura
de tu web: header con menú desplegable, hero, marquee de logos, sección
"chi sono", servicios, testimonios en carrusel, blog nativo de WordPress,
CTA y footer con newsletter.

## 1. Instalación

1. Comprime la carpeta `architetto-progetti` en un `.zip` (el zip debe
   contener directamente `style.css`, `functions.php`, etc. — no una
   subcarpeta extra).
2. En WordPress: **Apariencia → Temas → Añadir nuevo → Subir tema** → sube
   el zip → **Activar**.

## 2. Primeros pasos tras activar

- **Logo**: Apariencia → Personalizar → Identidad del sitio → sube tu logo.
- **URL de "Prenota Chiamata" y LinkedIn**: Apariencia → Personalizar →
  Impostazioni Generali → pega tus URLs reales (Calendly, Lark Suite, etc.).
- **Menú**: Apariencia → Menús → crea un menú, añade las páginas (Home,
  Chi Sono, Blog, Contatti) y un enlace "Servizi" con 3 sub-enlaces
  (Aziende / No Profit / Privati). En cada sub-enlace, activa "Screen
  Options → Descripción" arriba a la derecha para poder escribir la
  frase descriptiva que aparece en el menú desplegable. Asigna el menú
  a la ubicación **Menu Principale**.
- **Imágenes**: coloca tus fotos en `/wp-content/themes/architetto-progetti/images/`
  con los nombres indicados en `images/README.txt` (o sube todo a la
  Biblioteca de medios y cambia las rutas en `front-page.php`).
- **Páginas**: crea las páginas Chi Sono, Aziende, No Profit, Privati,
  Contatti, Privacy Policy y Cookie Policy (usan `page.php` automáticamente).
- **Blog**:
  1. Crea una página llamada "Blog".
  2. Ve a Ajustes → Lectura → "La página de entradas muestra" → elige
     esa página como **página de entradas**.
  3. Escribe tus posts normalmente desde Entradas → Añadir nueva, asignando
     una categoría (se muestra como etiqueta de color en las tarjetas).
- **Testimonios**: en el menú lateral verás **Testimonianze** → Añadir
  nueva. Título = nombre de la persona, contenido/extracto = la cita,
  imagen destacada = su foto, y rellena Ruolo/Azienda, LinkedIn y estrellas
  en el cuadro de detalles debajo del editor.

## 3. Estructura de archivos

```
architetto-progetti/
├── style.css              ← cabecera obligatoria del tema
├── functions.php          ← setup, encolado de CSS/JS, includes
├── header.php / footer.php
├── front-page.php         ← portada (hero, servicios, testimonios, blog, CTA)
├── page.php                ← páginas internas (Chi Sono, Aziende, etc.)
├── single.php               ← artículo de blog individual
├── home.php / archive.php  ← listados de blog
├── inc/
│   ├── cpt-testimonial.php ← Custom Post Type "Testimonianze"
│   ├── newsletter-form.php ← procesa el formulario del footer sin plugins
│   └── customizer.php      ← opciones editables desde el panel WP
└── assets/
    ├── css/main.css        ← todos los estilos (variables de marca arriba del todo)
    └── js/main.js          ← menú móvil, submenú, carrusel de testimonios
```

## 4. Cambiar colores y tipografías

Abre `assets/css/main.css` y edita las variables al principio del archivo
(sección "1. VARIABLES DE MARCA"): `--color-brand`, `--color-primary`,
`--font-heading`, `--font-sans`, etc. Todo el tema usa esas variables, así
que cambiándolas ahí se actualiza en todo el sitio.

## 5. Conectar la newsletter a un proveedor real (Mailchimp, Brevo...)

Ahora mismo el formulario envía un email de aviso al administrador
(`inc/newsletter-form.php`). Si usas un proveedor de email marketing,
sustituye el `wp_mail()` de esa función por una llamada a la API de tu
proveedor (o instala un plugin como MailPoet/Mailchimp for WP y sustituye
el `action` del formulario en `footer.php`).

## 6. Idiomas

El sitio original usa un selector de idioma (desactivado en el diseño
original). Para traducciones reales de contenido, instala **Polylang** o
**WPML** en lugar de intentar replicar el widget de Google Translate.
