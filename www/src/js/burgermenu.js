document.addEventListener('DOMContentLoaded', function() {
    var burgerButton = document.getElementById('burger-button');
    var navLinks = document.querySelector('.nav-links ul');

    burgerButton.addEventListener('click', function() {
        navLinks.style.display = navLinks.style.display === 'block' ? 'none' : 'block';
    });
});
