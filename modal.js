document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('image-modal');
    const modalImage = document.getElementById('modal-image');
    const closeBtn = document.querySelector('.close');
    const galleryLinks = document.querySelectorAll('.gallery-link');

    galleryLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault(); // Megakadályozza az alapértelmezett link viselkedést
            const largeSrc = link.getAttribute('data-large-src');
            modal.style.display = 'flex'; // A modal flexboxként van beállítva, hogy középre igazítsa a tartalmat
            modalImage.src = largeSrc;
        });
    });

    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});