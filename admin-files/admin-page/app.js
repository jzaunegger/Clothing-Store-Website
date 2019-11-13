window.onload = loadParticles();

    function loadParticles(){
        particlesJS.load('particle-container', 'admin-login-particles.json', function() {
            console.log('callback - particles.js config loaded');
        });

        console.log("The page and particles have loaded.")
    }