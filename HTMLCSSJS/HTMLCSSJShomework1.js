function scrollToTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}

function showLoginForm() {
    const form = document.getElementById('login');
    if (!form) { return; }
    form.style.display = form.style.display ? '' : 'block';
}

window.addEventListener('scroll', function() {
    const currentScrollPosition = window.scrollY;
    const scrollBtn = document.getElementById('scroll');
    if (currentScrollPosition !== 0) {
        scrollBtn.setAttribute('style', 'display: block;');
    } else {
        scrollBtn.setAttribute('style', 'display: none;');
    }
});
