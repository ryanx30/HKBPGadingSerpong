document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('[data-carousel-item]');
    let currentIndex = 0;

    const showItem = (index) => {
        items.forEach((item, i) => {
            item.classList.toggle('hidden', i !== index);
        });
    };

    document.querySelector('[data-carousel-next]').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % items.length;
        showItem(currentIndex);
    });

    document.querySelector('[data-carousel-prev]').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        showItem(currentIndex);
    });

    showItem(currentIndex);
});