<?php
// Simple config
$SITE_TITLE = 'Francisco Javier Gallardo García — Especialista en Desarrollo Web y Tecnología Educativa';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($SITE_TITLE) ?></title>
    <meta name="description" content="Combino el desarrollo web con la innovación educativa para optimizar procesos y aprendizaje. Ayudo a centros y profesionales a digitalizar su trabajo mediante herramientas inteligentes y automatización." />
    <meta property="og:title" content="<?= htmlspecialchars($SITE_TITLE) ?>" />
    <meta property="og:description" content="Especialista en Desarrollo Web y Tecnología Educativa" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/assets/img/og-image.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/styles.css" />
</head>

<body>
    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="#home">FJ Gallardo</a>
            <nav class="nav" id="nav">
                <a href="#home" data-i18n="nav.home">Inicio</a>
                <a href="#about" data-i18n="nav.about">Sobre mí</a>
                <a href="#services" data-i18n="nav.services">Servicios</a>
                <a href="#projects" data-i18n="nav.projects">Proyectos</a>
                <a href="#skills" data-i18n="nav.skills">Habilidades</a>
                <a href="#impact" data-i18n="nav.impact">Impacto</a>
                <a href="#contact" class="btn btn-sm" data-i18n="nav.contact">Contacto</a>
            </nav>
            <button class="hamburger" id="hamburger" aria-label="Abrir menú" aria-expanded="false">☰</button>
            <div class="lang-switch" aria-label="Selector de idioma">
                <button class="lang-btn" data-lang="es">ES</button>
                <button class="lang-btn" data-lang="en">EN</button>
                <button class="lang-btn" data-lang="fr">FR</button>
            </div>
        </div>
    </header>


    <main>
        <!-- HERO -->
        <section id="home" class="section hero">
            <div class="container grid-2">
                <div class="hero-copy fade-in">
                    <h1>Francisco Javier <span class="highlight">Gallardo García</span></h1>
                    <p class="subtitle" data-i18n="hero.title">Especialista en Desarrollo Web y Tecnología Educativa</p>
                    <p class="lead" data-i18n="hero.value1">Combino el desarrollo web con la innovación educativa para optimizar procesos y aprendizaje.</p>
                    <p class="lead" data-i18n="hero.value2">Ayudo a centros y profesionales a digitalizar su trabajo mediante herramientas inteligentes y automatización.</p>
                    <div class="cta-group">
                        <a href="#projects" class="btn" data-i18n="cta.explore">Explora mi trabajo</a>
                        <a href="#contact" class="btn outline" data-i18n="cta.contact">Hablemos</a>
                    </div>
                </div>
                <div class="hero-visual fade-in delay-1" aria-hidden="true">
                    <div class="ai-orbit">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <img src="/assets/img/hero-illustration.svg" alt="Ilustración de educación y tecnología" />
                </div>
            </div>
        </section>


        <!-- SOBRE MÍ -->
        <section id="about" class="section">
            <div class="container grid-2">
                <div class="fade-in">
                    <h2 data-i18n="about.title">Sobre mí</h2>
                    <p data-i18n="about.body1">Graduado en Educación Primaria (mención Inglés/Francés), Máster en Educación Bilingüe y certificado en Desarrollo de Aplicaciones Web.</p>
                    <p data-i18n="about.body2">Desde 2023 desarrollo aplicaciones y automatizaciones con PHP, MySQL, Laravel, React, n8n e IA (ChatGPT, Gemini, Claude), integrando la tecnología con la educación.</p>

</html>