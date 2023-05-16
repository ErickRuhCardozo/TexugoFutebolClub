document.querySelectorAll('nav a').forEach(a => {
    a.addEventListener('click', () => {
        document.querySelector('.btn-close').click();
    });
});
