# Multilingual WordPress Landing Page

A lightweight, custom WordPress theme for multilingual landing pages in **Spanish, English, and French**. The project uses WordPress templates, PHP, CSS, and vanilla JavaScript instead of a page builder.

**Live demo:** [multilinguallanding.webcarlos.dev](https://multilinguallanding.webcarlos.dev)

## Features

- Language switcher for Spanish, English, and French.
- Responsive landing-page layout with a hero section, calls to action, feature content, and footer.
- Custom WordPress theme templates and localization helpers.
- Semantic HTML and mobile-first styling.
- Lead-capture form interface. Connect and verify a form endpoint before using it to collect submissions.

## Technology

- WordPress
- PHP
- HTML5 and CSS3
- Vanilla JavaScript (ES6+)

## Theme structure

```text
multilingual-wp-landing/
├── assets/          # Stylesheets and scripts
├── images/          # Static theme assets
├── inc/             # Theme helpers and localization logic
├── front-page.php   # Landing-page template
├── functions.php    # Theme setup, assets, and Customizer options
├── header.php       # Navigation and language switcher
├── footer.php       # Footer and contact or newsletter form
└── style.css        # Theme metadata and base styles
```

## Install locally

1. Set up a local WordPress site using a local development environment.
2. Copy this repository into `wp-content/themes/`.
3. In the WordPress dashboard, open **Appearance → Themes** and activate the theme.
4. Set the site homepage to a static page if required by the local WordPress configuration.
5. Review the language switcher and form behavior in the browser. Configure a form endpoint or plugin before collecting real submissions.

## Deployment

Deploy the theme files to a WordPress installation and activate the theme. The live demo is a visual preview; this repository contains theme source code, not a complete WordPress installation or database.

## License

No license file is currently included. Contact the author before reusing or distributing this project.