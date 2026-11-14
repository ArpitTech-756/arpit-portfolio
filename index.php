<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arpit | Creative Full-Stack Developer & Designer</title>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <!-- Main Style Sheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Radial Glow Studio Lights -->
    <div class="bg-glow-container">
        <div class="bg-glow-1"></div>
        <div class="bg-glow-2"></div>
    </div>

    <!-- Side Ambient Light Leaks -->
    <div class="bg-light-leak-left"></div>
    <div class="bg-light-leak-right"></div>

    <!-- HTML5 Canvas Background -->
    <canvas id="bg-canvas"></canvas>

    <!-- Scroll Transition Anime Boy Overlay -->
    <div class="scroll-transition-boy" id="scroll-boy-container">
        <img src="./images/scroll-boy.png" alt="Transition Character" id="scroll-boy-img">
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#home" class="nav-logo">ARPI<span style="color: var(--accent-color); transition: color 0.4s ease;">T</span></a>
            <ul class="nav-links">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Work</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="nav-controls">
                <button class="theme-toggle" id="theme-btn" aria-label="Toggle Color Theme">
                    <i class="fa-solid fa-palette"></i>
                </button>
                <a href="#contact" class="capsule-btn">
                    <span class="pulse-dot"></span>START
                </a>
                <button class="menu-toggle" id="menu-btn" aria-label="Toggle Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="section hero">
        <div class="hero-grid">
            <div class="hero-content">
                <span class="hero-subtitle">CREATIVE DEVELOPER & DESIGNER</span>
                
                <!-- Axiom Styled Typographic Stack -->
                <div class="hero-title-stack">
                    <div class="word-solid">CODE</div>
                    <div class="word-outline">WITH</div>
                    <div class="word-accent">ARPIT</div>
                </div>

                <div class="typing-container">
                    I build&nbsp;<span class="typed-text" id="typed-text"></span>
                </div>
                
                <p class="hero-description">
                    Full-stack software developer and UI designer crafting high-performance code architecture with pixel-perfect visual styling.
                </p>
                
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Let's Connect <i class="fa-solid fa-arrow-right-long"></i></a>
                    <a href="#projects" class="btn btn-secondary">Explore Work</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="character-wrapper">
                    <div class="character-glow"></div>
                    <img src="./images/profile.png" alt="Arpit Profile Character" class="character-img" id="profile-pic">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <h2 class="section-title">ABOUT ME</h2>
        <div class="about-grid">
            <div class="about-details">
                <p class="about-text">
                    I’m a Full-Stack Developer and Freelance Web Developer at Znole Technology, passionate about building modern, responsive, and interactive web applications.


                </p>
                <p class="about-text">
                    I work across the frontend and backend, creating clean user interfaces with HTML, CSS, JavaScript, Tailwind CSS, and Bootstrap, while building backend applications with Python and Django and managing data with MySQL.
                
                <div class="about-stats">
                    <div class="stat-card glass-panel">
                        <div class="stat-number">2+</div>
                        <div class="stat-label">Years of Exp</div>
                    </div>
                    <div class="stat-card glass-panel">
                        <div class="stat-number">10+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-card glass-panel">
                        <div class="stat-number">5+</div>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                </div>

                <!-- Orbiting Tech Sphere Animation -->
                <div class="orbit-container">
                    <!-- Central Orbiting Core (React) -->
                    <div class="orbit-center" title="React.js Core">
                        <i class="fa-brands fa-react"></i>
                    </div>

                    <!-- Inner Orbit dashed Ring -->
                    <div class="orbit-ring-inner"></div>
                    <!-- Outer Orbit dashed Ring -->
                    <div class="orbit-ring-outer"></div>

                    <!-- Inner Orbiting Items (Radius = 95px) -->
                    <div class="orbit-item item-js" title="JavaScript"><i class="fa-brands fa-js" style="color: #f7df1e;"></i></div>
                    <div class="orbit-item item-node" title="Node.js"><i class="fa-brands fa-node-js" style="color: #3c873a;"></i></div>
                    <div class="orbit-item item-python" title="Python"><i class="fa-brands fa-python" style="color: #306998;"></i></div>

                    <!-- Outer Orbiting Items (Radius = 145px) -->
                    <div class="orbit-item item-html" title="HTML5"><i class="fa-brands fa-html5" style="color: #e34c26;"></i></div>
                    <div class="orbit-item item-css" title="CSS3"><i class="fa-brands fa-css3-alt" style="color: #264de4;"></i></div>
                    <div class="orbit-item item-git" title="Git"><i class="fa-brands fa-git-alt" style="color: #f1502f;"></i></div>
                </div>
            </div>
            <div>
                <h3 class="timeline-title">THE JOURNEY</h3>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">2026 - PRESENT</div>
                        <div class="timeline-card glass-panel">
                            <h3>Freelance Web Developer</h3>
                            <h4>Znole Technology</h4>
                            <p>Building modern, responsive, and user-friendly websites for clients across the globe. Specialized in full-stack development using the MERN stack, Tailwind CSS, and MySQL. Delivering high-quality solutions that help businesses grow their online presence.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">2025 - 2026</div>
                        <div class="timeline-card glass-panel">
                            <h3>Programming & Web Development</h3>
                            <h4>C, C++, HTML, CSS & JavaScript</h4>
                            <p>
Learned the fundamentals of C and C++, along with HTML, CSS, and JavaScript. Built beginner-level programs and responsive web projects while developing a strong foundation in programming and web development.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-date">2024 - 2025</div>
                        <div class="timeline-card glass-panel">
                            <h3>Computer & Web Fundamentals</h3>
                            <h4>Computer Basics & Web Development</h4>
                            <p>Learned computer fundamentals, how programs work and run, basic programming concepts, and how websites are created. Studied how websites work online through browsers, servers, domains, and the internet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <h2 class="section-title">TECHNICAL EXPERTISE</h2>
        <div class="skills-categories">
            <!-- Frontend Card -->
            <div class="skill-category glass-panel">
                <img src="./images/peeking-pikachu.png" alt="Pikachu Peeking Left" class="peeking-left" id="peeking-1">
                <div class="category-icon"><i class="fa-solid fa-code"></i></div>
                <h3>FRONTEND DESIGN</h3>
                <div class="skills-list">
                    <span class="skill-tag"><i class="fa-brands fa-html5" style="color: #3b82f6;"></i> HTML5</span>
                    <span class="skill-tag"><i class="fa-brands fa-css3-alt" style="color: #3b82f6;"></i> CSS3</span>
                    <span class="skill-tag"><i class="fa-brands fa-js" style="color: #3b82f6;"></i> JavaScript</span>
                    <span class="skill-tag"><i class="fa-brands fa-react" style="color: #3b82f6;"></i> React.js</span>
                    <span class="skill-tag"><i class="fa-solid fa-wind" style="color: #3b82f6;"></i> Tailwind CSS</span>
                </div>
            </div>

            <!-- Backend Card -->
            <div class="skill-category glass-panel">
                <img src="./images/peeking-cat.png" alt="Cat Peeking Bottom" class="peeking-bottom" id="peeking-2">
                <div class="category-icon"><i class="fa-solid fa-server"></i></div>
                <h3>BACKEND SCHEMAS</h3>
                <div class="skills-list">
                    <span class="skill-tag"><i class="fa-brands fa-node-js" style="color: #3b82f6;"></i> Node.js</span>

                    <span class="skill-tag"><i class="fa-brands fa-python" style="color: #3b82f6;"></i> Python</span>
                    <span class="skill-tag"><i class="fa-solid fa-leaf" style="color: #3b82f6;"></i> MongoDB</span>
                    <span class="skill-tag"><i class="fa-solid fa-database" style="color: #3b82f6;"></i> PostgreSQL</span>
                </div>
            </div>

            <!-- DevOps & Tools Card -->
            <div class="skill-category glass-panel">
                <img src="./images/peeking-fox.png" alt="Fox Peeking Right" class="peeking-right" id="peeking-3">
                <div class="category-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <h3>SYSTEMS & DEV TOOLS</h3>
                <div class="skills-list">
                    <span class="skill-tag"><i class="fa-brands fa-git-alt" style="color: #3b82f6;"></i> Git</span>
                    <span class="skill-tag"><i class="fa-brands fa-github" style="color: #3b82f6;"></i> GitHub</span>

                    <span class="skill-tag"><i class="fa-solid fa-terminal" style="color: #3b82f6;"></i> Terminal</span>
                </div>
            </div>

            <div class="skill-category glass-panel">
                <img src="./images/peeking-fox.png" alt="Fox Peeking Right" class="peeking-right" id="peeking-3">
                <div class="category-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <h3>OTHER SKILLS</h3>
                <div class="skills-list">
                    <span class="skill-tag"><i class="devicon-premierepro-plain" style=" color: rgb(177, 0, 183);"></i>Adobe Premiere Pro</span>
                    <span class="skill-tag"><i class="fa-brands fa-github" style="color: #3b82f6;"></i> CapCut</span>

                    <span class="skill-tag"><i class="fa-solid fa-desktop" style="color:#3b82f6;"></i> DaVinci Resolve</span>
                    <span class="skill-tag"><i class="fa-solid fa-video" style="color:#3b82f6;"></i> Video Editing</span>
                    <span class="skill-tag"><i class="fa-solid fa-terminal" style="color: #3b82f6;"></i>Motion Graphics</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <h2 class="section-title">MY WORKS</h2>
        
        <div class="portfolio-filters">
            <button class="filter-btn active" data-filter="all">ALL WORK</button>
            <button class="filter-btn" data-filter="fullstack">FULLSTACK</button>
            <button class="filter-btn" data-filter="frontend">FRONTEND</button> 
            <button class="filter-btn" data-filter="GAMES">GAMES</button>
        </div>

        <div class="projects-grid">
            <!-- Project 1 -->
            <div class="project-card glass-panel" data-category="fullstack">
                <div class="project-img-wrapper">
                    <img src="./images/Weather01.png" alt="Weather Report – Real-Time Weather App" class="project-img">
                    <div class="project-overlay">
                        <a href="https://github.com/ArpitTech-756/weather-report" class="btn-icon" aria-label="Github Repo"><i class="fa-brands fa-github"></i></a>
                        <a href="https://weather-report-theta-beige.vercel.app/" class="btn-icon" aria-label="Live Demo"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="project-info">
                    
                    <h3 class="project-title">Weather Report – Real-Time Weather App</h3>
                    <p class="project-desc">A modern and fully responsive weather website built using HTML, CSS, and JavaScript. Powered by the OpenWeather API, it provides real-time weather information for any location. Users can easily check current temperature, weather conditions, humidity, wind speed, rainfall, and forecasts. Featuring a clean user interface, live weather updates, and location-based search, it delivers a smooth and user-friendly weather experience.</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card glass-panel" data-category="frontend">
                <div class="project-img-wrapper">
                    <img src="./images/horror.png" alt="Horror Story Website – The Dark Tales" class="project-img">
                    <div class="project-overlay">
                        <a href="https://github.com/ArpitTech-756/horror-story" class="btn-icon" aria-label="Github Repo"><i class="fa-brands fa-github"></i></a>
                        <a href="https://horror-story-iota.vercel.app/" class="btn-icon" aria-label="Live Demo"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="project-info">
                  
                    <h3 class="project-title">Horror Story Website – The Dark Tales</h3>
                    <p class="project-desc">An immersive horror storytelling website designed to bring terrifying stories to life. Featuring a dark and mysterious interface, creepy typography, atmospheric visuals, and suspense-filled storytelling, it creates an unforgettable horror experience. Explore chilling tales, uncover hidden mysteries, and enter a world where every story hides a nightmare.</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card glass-panel" data-category="fullstack">
                <div class="project-img-wrapper">
                    <img src="./images/my image.png" alt="Cryptoverse Dashboard" class="project-img">
                    <div class="project-overlay">
                        <a href="https://github.com/ArpitTech-756/arpit-portfolio" class="btn-icon" aria-label="Github Repo"><i class="fa-brands fa-github"></i></a>
                        <a href="https://arpit-portfolio-gold.vercel.app/" class="btn-icon" aria-label="Live Demo"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="project-info">
                   
                    <h3 class="project-title">Portfolio</h3>
                    <p class="project-desc">Hi, I'm Arpit, a passionate Web Developer who loves turning creative ideas into interactive and user-friendly digital experiences.</p>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card glass-panel" data-category="frontend">
                <div class="project-img-wrapper">
                    <img src="./images/login.png" alt="Responsive Login & Register Page" class="project-img">
                    <div class="project-overlay">
                        <a href="https://github.com/ArpitTech-756/Login-page" class="btn-icon" aria-label="Github Repo"><i class="fa-brands fa-github"></i></a>
                        <a href="https://login-page-bice-tau.vercel.app/" class="btn-icon" aria-label="Live Demo"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="project-info">
                   
                    <h3 class="project-title">Responsive Login & Register Page</h3>
                    <p class="project-desc">A modern and fully responsive Login & Register website designed with a clean user interface and beautiful nature-inspired visuals. It features a smooth authentication layout with an interactive login and registration form, password input, remember me option, and forgot password functionality. The design provides a simple, attractive, and user-friendly experience across desktop and mobile devices.</p>
                </div>
            </div>

              <div class="project-card glass-panel" data-category="GAMES">
                <div class="project-img-wrapper">
                    <img src="./images/snake ladder.png" alt="Snake Ladder" class="project-img">
                    <div class="project-overlay">
                        <a href="https://github.com/ArpitTech-756/Snake-Ladder" class="btn-icon" aria-label="Github Repo"><i class="fa-brands fa-github"></i></a>
                        <a href="https://404error-eight.vercel.app/" class="btn-icon" aria-label="Live Demo"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="project-info">
                
                    <h3 class="project-title">Snake Ladder</h3>
                    <p class="project-desc">A classic snake and ladder game built with HTML, CSS, and JavaScript, featuring smooth animations, intuitive controls, and a fun gameplay experience.</p>
                </div> 
            </div>

              <div class="project-card glass-panel" data-category="GAMES">
                <div class="project-img-wrapper">
                    <img src="./images/tic.png" alt="Tic Tac Toe" class="project-img">
                    <div class="project-overlay">
                        <a href="https://github.com/ArpitTech-756/tic-tac-toi-game-" class="btn-icon" aria-label="Github Repo"><i class="fa-brands fa-github"></i></a>
                        <a href="https://tic-tac-toi-game-one.vercel.app/" class="btn-icon" aria-label="Live Demo"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="project-info">
                    
                    <h3 class="project-title">Tic Tac Toe</h3>
                    <p class="project-desc">A responsive and interactive Tic Tac Toe game built with HTML, CSS, and JavaScript, featuring turn-based gameplay, winner and draw detection, reset functionality, and an engaging user interface.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <h2 class="section-title">GET IN TOUCH</h2>
        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-card glass-panel">
                    <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="contact-details">
                        <h4>EMAIL</h4>
                        <p>kerigaya7@gmail.com</p>
                    </div>
                </div>
                <div class="contact-card glass-panel">
                    <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="contact-details">
                        <h4>LOCATION</h4>
                        <p>Lucknow, India</p>
                    </div>
                </div>
                <div class="contact-card glass-panel">
                    <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="contact-details">
                        <h4>PHONE</h4>
                        <p>+91 91401 92127</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
           <form action="https://formspree.io/f/xeagjjlv"
      method="POST"
      class="contact-form glass-panel"
      id="contact-form">

    <div class="form-row">

        <div class="form-group">
            <label for="name">Your Name</label>
            <input
                type="text"
                id="name"
                name="name"
                required
                placeholder="John Doe">
        </div>

        <div class="form-group">
            <label for="email">Your Email</label>
            <input
                type="email"
                id="email"
                name="email"
                required
                placeholder="john@example.com">
        </div>

    </div>

    <div class="form-group full-width">
        <label for="subject">Subject</label>
        <input
            type="text"
            id="subject"
            name="subject"
            required
            placeholder="Project Proposal">
    </div>

    <div class="form-group full-width">
        <label for="message">Message</label>
        <textarea
            id="message"
            name="message"
            required
            placeholder="How can I help you?"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        Send Message
        <i class="fa-solid fa-arrow-right-long"></i>
    </button>

</form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <a href="#home" class="footer-logo">ARPI<span style="color: var(--accent-color); transition: color 0.4s ease;">T</span></a>
            <p class="footer-copy">&copy; 2026 Arpit. All rights reserved.</p>
            <div class="footer-socials">
                <a href="https://github.com/ArpitTech-756" class="social-icon" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/arpit-tech03/" class="social-icon" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" class="social-icon" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </footer>

    <!-- Toast Notification Container -->
    <div class="toast-container" id="toast-container"></div>

    <!-- JavaScript Logic -->
    <script src="app.js"></script>
</body>
</html>
