document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.case-slider');
    const nextButton = document.getElementById('next');
    const prevButton = document.getElementById('prev');
    const scrollAmount = slider.clientWidth / 3; // Adjust based on visible items

    nextButton.addEventListener('click', () => {
        slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });

    prevButton.addEventListener('click', () => {
        slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });
}); 