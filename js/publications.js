window.addEventListener('load', function () {




	// get all elements with class .book-content and add event listener

	const bookTitle = document.querySelectorAll('.book-title');

	for (let i = 0; i < bookTitle.length; i++) {
		bookTitle[i].addEventListener('click', function () {
			document.body.classList.toggle('book-body-open');

			if (this.parentElement.querySelector('.book-content').classList.contains('book-open')) {
				// this.parentElement.querySelector('.book-content').classList.remove('book-open');

				// decrease width of book content from 100% to 0. using settimeout. the whole process lasts 1s
				const contentElement = this.parentElement.querySelector('.book-content');
				const initialWidth = contentElement.clientWidth; // Get the initial width in pixels
				const targetWidth = 0;
				const duration = 500; // Animation duration in milliseconds
				const steps = 50; // Number of steps for the animation

				const widthDecrease = (initialWidth - targetWidth) / steps;
				let currentWidth = initialWidth;

				const decrease = setInterval(function () {
					currentWidth -= widthDecrease;
					contentElement.style.width = currentWidth + 'px';

					if (currentWidth <= targetWidth) {
						contentElement.style.width = targetWidth + 'px';
						clearInterval(decrease);
					}
					if (targetWidth == 0) {
						bookTitle[i].parentElement.querySelector('.book-content').classList.remove('book-open');
						// contentElement.style.width = '' with a settimeout of 1s
						setTimeout(function () {
							contentElement.style.width = '';
						}, 1000);

					}

				}, duration / steps);

			} else {
				for (let i = 0; i < bookTitle.length; i++) {
					if (bookTitle[i].parentElement.querySelector('.book-content').classList.contains('book-open')) {
						// decrease width of book content from 100% to 0. using settimeout. the whole process lasts 1s
						const contentElement = bookTitle[i].parentElement.querySelector('.book-content');
						const initialWidth = contentElement.clientWidth; // Get the initial width in pixels
						const targetWidth = 0;
						const duration = 500; // Animation duration in milliseconds
						const steps = 50; // Number of steps for the animation

						const widthDecrease = (initialWidth - targetWidth) / steps;
						let currentWidth = initialWidth;

						const decrease = setInterval(function () {
							currentWidth -= widthDecrease;
							contentElement.style.width = currentWidth + 'px';

							if (currentWidth <= targetWidth) {
								contentElement.style.width = targetWidth + 'px';
								clearInterval(decrease);
							}
							if (targetWidth == 0) {
								bookTitle[i].parentElement.querySelector('.book-content').classList.remove('book-open');
								// contentElement.style.width = '' with a settimeout of 1s
								setTimeout(function () {
									contentElement.style.width = '';
								}, 1000);

							}

						}, duration / steps);
					}
				}

				this.parentElement.querySelector('.book-content').classList.add('book-open');
			}
		});
	}


  
});
