document.addEventListener('DOMContentLoaded', () => {
    // Load header and footer includes
    fetch('header.html')
        .then(response => response.text())
        .then(html => {
            document.querySelectorAll('#header-container').forEach(el => {
                el.innerHTML = html;
            });
        });

    fetch('footer.html')
        .then(response => response.text())
        .then(html => {
            document.querySelectorAll('#footer-container').forEach(el => {
                el.innerHTML = html;
            });
        });
});