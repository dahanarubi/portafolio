// Seleccionamos todos los pasos
const steps = document.querySelectorAll('.step');

function animateSteps() {
    const triggerBottom = window.innerHeight * 0.85;

    steps.forEach(step => {
        const stepTop = step.getBoundingClientRect().top;

        if(stepTop < triggerBottom) {
            step.classList.add('show');
        }
    });
}

// Animar al hacer scroll
window.addEventListener('scroll', animateSteps);

// También animar al cargar
window.addEventListener('load', animateSteps);
