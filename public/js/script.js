let profil = document.getElementById('profil');
let img = document.getElementById('img');
let isVisible = false;

img.addEventListener('click', function() {
    if (isVisible) {
        profil.style.opacity = '0';
    } else {
        profil.style.opacity = '1';
    }
    isVisible = !isVisible;
});
