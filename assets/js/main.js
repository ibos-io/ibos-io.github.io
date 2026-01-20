document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    // Toggle navigation menu on mobile
    navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('show');
    });
});

// Load header and footer in all pages
function loadIncludes() {
    fetch('header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header-placeholder').innerHTML = data;
            setActiveNavLink();
        });
    fetch('footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
        });
}

// Set active link in navbar based on current url
function setActiveNavLink() {
    const links = document.querySelectorAll('.nav-links a');
    const current = window.location.pathname.split('/').pop();
    links.forEach(link => {
        if(link.getAttribute('href') === current) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

loadIncludes();
