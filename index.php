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
        </div>
        <ul class="badges fade-in delay-1">
          <li>PHP • Laravel</li>
          <li>JavaScript • React</li>
          <li>MySQL • Firebase</li>
          <li>n8n • IA generativa</li>
        </ul>
      </div>
    </section>

    <!-- SERVICIOS -->
    <section id="services" class="section alt">
      <div class="container">
        <h2 data-i18n="services.title">Servicios</h2>
        <div class="cards">
          <article class="card fade-in">
            <h3>Desarrollo Web</h3>
            <p>Webs modernas, rápidas y adaptadas. Integración con bases de datos y panel de administración.</p>
          </article>
          <article class="card fade-in delay-1">
            <h3>Automatización de Procesos</h3>
            <p>Flujos inteligentes con n8n e IA para reducir tareas repetitivas y conectar servicios.</p>
          </article>
          <article class="card fade-in delay-2">
            <h3>Tecnología Educativa</h3>
            <p>Entornos de aprendizaje, LMS y herramientas colaborativas para aulas y centros.</p>
          </article>
          <article class="card fade-in delay-3">
            <h3>Formación Digital</h3>
            <p>Talleres y cursos en herramientas web, IA educativa y automatización.</p>
          </article>
          <article class="card fade-in delay-4">
            <h3>Proyectos a Medida</h3>
            <p>Soluciones llave en mano: desarrollo + automatización + formación.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- PROYECTOS -->
    <section id="projects" class="section">
      <div class="container">
        <h2>Proyectos</h2>
        <div class="projects-grid">
          <article class="project-card fade-in">
            <h3>EduConnect — Gestión Escolar</h3>
            <p>Aplicación para paneles, usuarios, comunicación docente-familias.</p>
            <p class="stack">PHP · MySQL · Laravel</p>
          </article>
          <article class="project-card fade-in delay-1">
            <h3>SmartFlow — Automatización</h3>
            <p>Conexión de formularios, hojas de cálculo y correo con n8n + IA.</p>
            <p class="stack">n8n · APIs · ChatGPT</p>
          </article>
          <article class="project-card fade-in delay-2">
            <h3>LearnHub — Aprendizaje Bilingüe</h3>
            <p>Ejercicios autocorregibles, perfiles y recursos multimedia.</p>
            <p class="stack">PHP · MySQL · Firebase · IA</p>
          </article>
          <article class="project-card fade-in delay-3">
            <h3>ProLink — Portal Profesional</h3>
            <p>Presencia digital con panel autogestionable y automatizaciones.</p>
            <p class="stack">PHP · React · Firebase · n8n</p>
          </article>
        </div>
      </div>
    </section>

    <!-- HABILIDADES -->
    <section id="skills" class="section alt">
      <div class="container">
        <h2>Habilidades</h2>
        <div class="skills">
          <div class="skill"><span>PHP (POO)</span><div class="bar" data-level="85"></div></div>
          <div class="skill"><span>Laravel</span><div class="bar" data-level="70"></div></div>
          <div class="skill"><span>JavaScript</span><div class="bar" data-level="80"></div></div>
          <div class="skill"><span>React</span><div class="bar" data-level="65"></div></div>
          <div class="skill"><span>HTML/CSS</span><div class="bar" data-level="95"></div></div>
          <div class="skill"><span>MySQL</span><div class="bar" data-level="80"></div></div>
          <div class="skill"><span>Firebase</span><div class="bar" data-level="65"></div></div>
          <div class="skill"><span>n8n / IA</span><div class="bar" data-level="80"></div></div>
        </div>
      </div>
    </section>

    <!-- IMPACTO -->
    <section id="impact" class="section">
      <div class="container">
        <h2>Logros e Impacto</h2>
        <ul class="impact">
          <li>Automatizaciones que reducen hasta un <strong>70%</strong> el tiempo administrativo.</li>
          <li>Plataformas educativas multilingües (ES/EN/FR) orientadas al aprendizaje personalizado.</li>
          <li>Integración de IA generativa (ChatGPT, Gemini, Claude) en proyectos web.</li>
        </ul>
      </div>
    </section>

    <!-- CONTACTO -->
    <section id="contact" class="section alt">
      <div class="container grid-2">
        <div>
          <h2>Contacto</h2>
          <p>¿Tienes un proyecto educativo o tecnológico? Estoy listo para ayudarte a hacerlo realidad.</p>
          <ul class="contact-links">
            <li>📧 <a href="mailto:contacto@franciscojaviergallardo.com">contacto@franciscojaviergallardo.com</a></li>
            <li>💼 <a href="https://www.linkedin.com/" target="_blank" rel="noopener">LinkedIn</a></li>
            <li>💬 <a href="https://wa.me/" target="_blank" rel="noopener">WhatsApp</a></li>
          </ul>
        </div>
        <form id="contactForm" class="card" novalidate>
          <label>Nombre
            <input type="text" name="name" required minlength="2" />
          </label>
          <label>Email
            <input type="email" name="email" required />
          </label>
          <label>Mensaje
            <textarea name="message" rows="5" required minlength="10"></textarea>
          </label>
          <button class="btn" type="submit">Enviar</button>
          <p id="formStatus" role="status" aria-live="polite"></p>
        </form>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>© <?= date('Y') ?> Francisco Javier Gallardo García — Todos los derechos reservados.</p>
    </div>
  </footer>

  <script src="/assets/js/main.js" defer></script>
</body>
</html>