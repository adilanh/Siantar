import './bootstrap';
// Bootstrap CSS removed to prevent conflict with Tailwind
import 'bootstrap-icons/font/bootstrap-icons.css';
import AOS from 'aos';
import 'aos/dist/aos.css';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
AOS.init();

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', (event) => {
        event.preventDefault();
        const targetId = anchor.getAttribute('href')?.substring(1);
        const targetElement = targetId ? document.getElementById(targetId) : null;

        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    });
});
