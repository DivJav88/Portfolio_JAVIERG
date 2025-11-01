(function(){
    const $ = (s, root=document)=>root.querySelector(s);
    const $$ = (s, root=document)=>[...root.querySelectorAll(s)];
  
    // Mobile nav
    const nav = $('#nav');
    const burger = $('#hamburger');
    burger?.addEventListener('click', ()=>{
      const open = nav.style.display === 'flex';
      nav.style.display = open ? 'none' : 'flex';
      burger.setAttribute('aria-expanded', String(!open));
    });
  
    // Scroll animations
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){ e.target.classList.add('appear'); io.unobserve(e.target); }
      });
    },{threshold:.14});
    $$('.fade-in').forEach(el=>io.observe(el));
  
    // Skill bars
    const skillsIO = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){
          e.target.classList.add('visible');
          const level = e.target.querySelector('.bar')?.dataset.level||'80';
          e.target.style.setProperty('--level', (parseInt(level,10)/100));
          skillsIO.unobserve(e.target);
        }
      });
    },{threshold:.3});
    $$('.skill').forEach(el=>skillsIO.observe(el));
  
    // i18n basic
    const dict = {
      es:{
        'nav.home':'Inicio','nav.about':'Sobre mí','nav.services':'Servicios','nav.projects':'Proyectos','nav.skills':'Habilidades','nav.impact':'Impacto','nav.contact':'Contacto',
        'hero.title':'Especialista en Desarrollo Web y Tecnología Educativa',
        'hero.value1':'Combino el desarrollo web con la innovación educativa para optimizar procesos y aprendizaje.',
        'hero.value2':'Ayudo a centros y profesionales a digitalizar su trabajo mediante herramientas inteligentes y automatización.',
        'cta.explore':'Explora mi trabajo','cta.contact':'Hablemos',
        'about.title':'Sobre mí',
        'about.body1':'Graduado en Educación Primaria (mención Inglés/Francés), Máster en Educación Bilingüe y certificado en Desarrollo de Aplicaciones Web.',
        'about.body2':'Desde 2023 desarrollo aplicaciones y automatizaciones con PHP, MySQL, Laravel, React, n8n e IA (ChatGPT, Gemini, Claude), integrando la tecnología con la educación.'
      },
      en:{
        'nav.home':'Home','nav.about':'About','nav.services':'Services','nav.projects':'Projects','nav.skills':'Skills','nav.impact':'Impact','nav.contact':'Contact',
        'hero.title':'Web Development & EdTech Specialist',
        'hero.value1':'I combine web development with educational innovation to optimize processes and learning.',
        'hero.value2':'I help schools and professionals go digital with smart tools and automation.',
        'cta.explore':'See my work','cta.contact':'Let’s talk',
        'about.title':'About me',
        'about.body1':'Primary Education graduate (English/French), Master in Bilingual Education and Web App Development certification.',
        'about.body2':'Since 2023 I build apps and automations with PHP, MySQL, Laravel, React, n8n and AI (ChatGPT, Gemini, Claude), bridging tech and education.'
      },
      fr:{
        'nav.home':'Accueil','nav.about':'À propos','nav.services':'Services','nav.projects':'Projets','nav.skills':'Compétences','nav.impact':'Impact','nav.contact':'Contact',
        'hero.title':'Spécialiste en Développement Web et Technologie Éducative',
        'hero.value1':'Je combine le développement web et l’innovation éducative pour optimiser les processus et l’apprentissage.',
        'hero.value2':'J’aide les centres et les professionnels à se digitaliser grâce à des outils intelligents et à l’automatisation.',
        'cta.explore':'Voir mes projets','cta.contact':'On en parle',
        'about.title':'À propos de moi',
        'about.body1':'Licence en Éducation Primaire (Anglais/Français), Master en Éducation Bilingue et certification en Développement d’Applications Web.',
        'about.body2':'Depuis 2023 je développe des applications et des automatisations avec PHP, MySQL, Laravel, React, n8n et l’IA, reliant technologie et éducation.'
      }
    };
    const switchLang = (lang)=>{
      const t = dict[lang]||dict.es;
      $$('[data-i18n]').forEach(el=>{ const key = el.dataset.i18n; if(t[key]) el.textContent = t[key]; });
      document.documentElement.lang = lang;
      localStorage.setItem('lang', lang);
    };
    $$('.lang-btn').forEach(btn=>btn.addEventListener('click',()=>switchLang(btn.dataset.lang)));
    switchLang(localStorage.getItem('lang')||'es');
  
    // Contact form AJAX
    const form = $('#contactForm');
    const status = $('#formStatus');
    form?.addEventListener('submit', async (e)=>{
      e.preventDefault();
      status.textContent = 'Enviando…';
      const fd = new FormData(form);
      try{
        const res = await fetch('/contact.php',{method:'POST', body:fd});
        const json = await res.json();
        if(json.ok){
          status.textContent = '¡Gracias! Tu mensaje ha sido enviado.';
          form.reset();
        } else {
          status.textContent = json.error||'No se pudo enviar. Inténtalo de nuevo.';
        }
      }catch(err){
        status.textContent = 'Error de red. Vuelve a intentarlo.';
      }
    });
  })();