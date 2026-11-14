document.addEventListener('DOMContentLoaded', () => {
    // ----------------------------------------------------
    // 1. Theme Color Switcher Logic (Blue / Purple Cycle)
    // ----------------------------------------------------
    const themeBtn = document.getElementById('theme-btn');
    
    // Check saved theme or default to blue
    const savedTheme = localStorage.getItem('axiom-theme') || 'blue';
    document.body.setAttribute('data-theme', savedTheme);

    themeBtn.addEventListener('click', () => {
        const currentTheme = document.body.getAttribute('data-theme');
        const newTheme = currentTheme === 'purple' ? 'blue' : 'purple';
        document.body.setAttribute('data-theme', newTheme);
        localStorage.setItem('axiom-theme', newTheme);
    });

    // ----------------------------------------------------
    // 2. Mobile Menu Toggler
    // ----------------------------------------------------
    const menuBtn = document.getElementById('menu-btn');
    const navLinks = document.querySelector('.nav-links');
    const links = document.querySelectorAll('.nav-links a');

    menuBtn.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        menuBtn.classList.toggle('open');
    });

    // Close menu when clicking a link
    links.forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            menuBtn.classList.remove('open');
        });
    });

    // ----------------------------------------------------
    // 3. Typing Animation Logic ("I build [phrase]")
    // ----------------------------------------------------
    const typedTextSpan = document.getElementById('typed-text');
    const textArray = ["scalable backend APIs.", "responsive UI layouts.", "interactive experiences.", "modern cloud architectures."];
    const typingSpeed = 80;
    const erasingSpeed = 40;
    const newTextDelay = 1800; // Delay between words
    let textArrayIndex = 0;
    let charIndex = 0;

    function type() {
        if (charIndex < textArray[textArrayIndex].length) {
            typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, typingSpeed);
        } else {
            setTimeout(erase, newTextDelay);
        }
    }

    function erase() {
        if (charIndex > 0) {
            typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, erasingSpeed);
        } else {
            textArrayIndex++;
            if (textArrayIndex >= textArray.length) textArrayIndex = 0;
            setTimeout(type, typingSpeed + 300);
        }
    }

    if (textArray.length) setTimeout(type, 1000);

    // ----------------------------------------------------
    // 4. HTML5 Canvas Particles Background (Axiom Style)
    // ----------------------------------------------------
    const canvas = document.getElementById('bg-canvas');
    const ctx = canvas.getContext('2d');

    let particles = [];
    const particleCount = 65;
    const connectionDistance = 120;
    let mouse = { x: null, y: null, radius: 140 };

    window.addEventListener('mousemove', (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });

    window.addEventListener('mouseout', () => {
        mouse.x = null;
        mouse.y = null;
    });

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        initParticles();
    }

    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 1.5 + 0.8;
            this.speedX = Math.random() * 0.4 - 0.2;
            this.speedY = Math.random() * 0.4 - 0.2;
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            // Boundary collision
            if (this.x > canvas.width || this.x < 0) this.speedX = -this.speedX;
            if (this.y > canvas.height || this.y < 0) this.speedY = -this.speedY;

            // Mouse interact
            if (mouse.x != null && mouse.y != null) {
                let dx = mouse.x - this.x;
                let dy = mouse.y - this.y;
                let dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < mouse.radius) {
                    let force = (mouse.radius - dist) / mouse.radius;
                    let angle = Math.atan2(dy, dx);
                    this.x -= Math.cos(angle) * force * 1.2;
                    this.y -= Math.sin(angle) * force * 1.2;
                }
            }
        }

        draw() {
            const currentTheme = document.body.getAttribute('data-theme');
            ctx.fillStyle = currentTheme === 'purple' ? 'rgba(168, 85, 247, 0.4)' : 'rgba(59, 130, 246, 0.4)';
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    function initParticles() {
        particles = [];
        for (let i = 0; i < particleCount; i++) {
            particles.push(new Particle());
        }
    }

    function animateParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
        const currentTheme = document.body.getAttribute('data-theme');
        const lineColor = currentTheme === 'purple' ? '168, 85, 247' : '59, 130, 246';

        for (let i = 0; i < particles.length; i++) {
            particles[i].update();
            particles[i].draw();

            for (let j = i + 1; j < particles.length; j++) {
                let dx = particles[i].x - particles[j].x;
                let dy = particles[i].y - particles[j].y;
                let dist = Math.sqrt(dx * dx + dy * dy);

                if (dist < connectionDistance) {
                    let alpha = (1 - (dist / connectionDistance)) * 0.12;
                    ctx.strokeStyle = `rgba(${lineColor}, ${alpha})`;
                    ctx.lineWidth = 0.6;
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.stroke();
                }
            }
        }
        requestAnimationFrame(animateParticles);
    }

    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();
    animateParticles();

    // ----------------------------------------------------
    // 5. Portfolio Filtering Logic
    // ----------------------------------------------------
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active classes
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    card.style.display = 'flex';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // ----------------------------------------------------
    // 6. Navigation Link Highlighting on Scroll
    // ----------------------------------------------------
    const sections = document.querySelectorAll('section');
    
    window.addEventListener('scroll', () => {
        let currentSectionId = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= (sectionTop - 180)) {
                currentSectionId = section.getAttribute('id');
            }
        });

        links.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSectionId}`) {
                link.classList.add('active');
            }
        });
    });

    // ----------------------------------------------------
    // 6.5. Scroll-Driven Anime Boy Transition Overlay (Smoothed with LERP)
    // ----------------------------------------------------
    const scrollBoy = document.getElementById('scroll-boy-container');
    const aboutSection = document.getElementById('about');

    let targetScrollY = 0;
    let currentScrollY = 0;
    const lerpEase = 0.08; // Lower value = smoother lag, higher value = faster tracking

    window.addEventListener('scroll', () => {
        targetScrollY = window.scrollY;
    });

    function smoothScrollAnimation() {
        const aboutTop = aboutSection.offsetTop;

        // Smoothly interpolate current scroll towards target scroll with speed limits
        const diff = targetScrollY - currentScrollY;
        let step = diff * lerpEase;
        
        // Cap the maximum step size per frame so fast scrolling still plays the animation smoothly
        const maxStep = 18; // Max pixels the animation can progress per frame
        if (Math.abs(step) > maxStep) {
            step = Math.sign(step) * maxStep;
        }
        currentScrollY += step;

        // Animate while interpolated scroll is within the transition zone
        if (currentScrollY <= aboutTop + 20) {
            // Constrain progress between 0 and 1
            const progress = Math.max(0, Math.min(1, currentScrollY / aboutTop));

            let scale = 0;
            let opacity = 0;
            let translateYOffset = 80; // in vh

            if (progress <= 0.5) {
                // First half: Slide up from bottom (80vh to 0vh), scale up, fade in
                const subProgress = progress / 0.5; // 0 to 1
                opacity = subProgress;
                scale = 0.5 + (subProgress * 0.85); // 0.5 to 1.35
                translateYOffset = 80 - (subProgress * 80);
            } else {
                // Second half: Continue sliding up off-screen top (0vh to -80vh), scale up slightly, fade out
                const subProgress = (progress - 0.5) / 0.5; // 0 to 1
                opacity = 1 - subProgress;
                scale = 1.35 + (subProgress * 0.25); // 1.35 to 1.6
                translateYOffset = - (subProgress * 80);
            }

            scrollBoy.style.opacity = opacity;
            scrollBoy.style.transform = `translate(-50%, calc(-50% + ${translateYOffset}vh)) scale(${scale})`;
            scrollBoy.style.display = 'flex';
        } else {
            // Hide completely once transition zone is cleared
            scrollBoy.style.opacity = 0;
            scrollBoy.style.display = 'none';
        }

        requestAnimationFrame(smoothScrollAnimation);
    }

    // Start render loop
    requestAnimationFrame(smoothScrollAnimation);

    // ----------------------------------------------------
    // 7. Contact Form submission & Toast notification
    // ----------------------------------------------------
  

});
