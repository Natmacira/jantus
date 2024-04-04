window.addEventListener('load', function () {
    const bookTitles = document.querySelectorAll('.book-title');

    for (let i = 0; i < bookTitles.length; i++) {
        bookTitles[i].addEventListener('click', function () {
            document.body.classList.add('book-body-open');

            const contentElement = this.parentElement.querySelector('.book-content');
            const isOpen = contentElement.classList.contains('book-open');

            // Calculating target height based on content
            const targetHeight = isOpen ? 0 : contentElement.scrollHeight;

            // Setting transition duration
            const duration = 500; // Animation duration in milliseconds

            // Setting number of steps for the animation
            const steps = 50; // Number of steps for the animation

            // Calculating height change per step
            const heightChange = targetHeight / steps;

            let currentHeight = contentElement.clientHeight;
            let stepCount = 0;

            // Animating height change
            const animation = setInterval(function () {
                stepCount++;
                if (isOpen) {
                    currentHeight -= heightChange;
                } else {
                    currentHeight += heightChange;
                }

                contentElement.style.height = currentHeight + 'px';

                if (stepCount >= steps) {
                    clearInterval(animation);
                    contentElement.style.height = isOpen ? '0' : 'auto';
                    contentElement.classList.toggle('book-open');
                }
            }, duration / steps);
        });
    }
});
