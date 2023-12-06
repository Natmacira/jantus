window.addEventListener('load', function () {

	console.log('hola')

	//functionality for publications books to open

	const oneBookContent = document.querySelector('.one-book-content')
	const oneBookTitle = document.querySelector('.one-book-title')


	const twoBookContent = document.querySelector('.two-book-content')
	const twoBookTitle = document.querySelector('.two-book-title')


	const threeBookContent = document.querySelector('.three-book-content')
	const threeBookTitle = document.querySelector('.three-book-title')


	const fourBookContent = document.querySelector('.four-book-content')
	const fourBookTitle = document.querySelector('.four-book-title')


	const fiveBookContent = document.querySelector('.five-book-content')
	const fiveBookTitle = document.querySelector('.five-book-title')


	const sixBookContent = document.querySelector('.six-book-content')
	const sixBookTitle = document.querySelector('.six-book-title')


	const sevenBookContent = document.querySelector('.seven-book-content')
	const sevenBookTitle = document.querySelector('.seven-book-title')


	const eightBookContent = document.querySelector('.eight-book-content')
	const eightBookTitle = document.querySelector('.eight-book-title')


	const nineBookContent = document.querySelector('.nine-book-content')
	const nineBookTitle = document.querySelector('.nine-book-title')



	oneBookTitle.addEventListener('click', function () {
		oneBookContent.classList.toggle('book-open');
	});
	twoBookTitle.addEventListener('click', function () {
		twoBookContent.classList.toggle('book-open');
	});
	threeBookTitle.addEventListener('click', function () {
		threeBookContent.classList.toggle('book-open');
	});
	fourBookTitle.addEventListener('click', function () {
		fourBookContent.classList.toggle('book-open');
	});
	fiveBookTitle.addEventListener('click', function () {
		fiveBookContent.classList.toggle('book-open');
	});
	sixBookTitle.addEventListener('click', function () {
		sixBookContent.classList.toggle('book-open');
	});
	sevenBookTitle.addEventListener('click', function () {
		sevenBookContent.classList.toggle('book-open');
	});
	eightBookTitle.addEventListener('click', function () {
		eightBookContent.classList.toggle('book-open');
	});
	nineBookTitle.addEventListener('click', function () {
		nineBookContent.classList.toggle('book-open');
	});




});
