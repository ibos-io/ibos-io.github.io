document.addEventListener("DOMContentLoaded", function () {
  // Load header.html and footer.html into placeholders
  const headerPlaceholder = document.getElementById('header-placeholder');
  const footerPlaceholder = document.getElementById('footer-placeholder');

  fetch('header.html')
    .then(response => response.text())
    .then(data => {
      headerPlaceholder.innerHTML = data;
    })
    .catch(() => {
      headerPlaceholder.innerHTML = '<header><h1>Dhaka Consulting</h1></header>';
    });

  fetch('footer.html')
    .then(response => response.text())
    .then(data => {
      footerPlaceholder.innerHTML = data;
    })
    .catch(() => {
      footerPlaceholder.innerHTML = '<footer><p>&copy; 2024 Dhaka Consulting</p></footer>';
    });

});

// Additional JavaScript could be added here if needed

