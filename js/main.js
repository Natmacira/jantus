window.addEventListener( 'load', function() {

	//functionality for submenu work

	const openWorkMenu 	 = document.querySelector( '.work-open')
	const openWorkMenuUl = document.querySelector( '.work-open-close')

	console.log(openWorkMenu, openWorkMenuUl);

	openWorkMenu.addEventListener( 'click', function() {
		document.body.classList.toggle( 'work-open-open' );
	} );

	// functionality for modals maps
	//JAPAN
	const mapJapan 	 = document.querySelector( '.japan')
	const closeJapan = document.querySelector( '.close-japan')

	mapJapan.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-japan-open' );
	} );
	closeJapan.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-japan-open' );
	} );
	//KR
	const mapKr 	 = document.querySelector( '.kr')
	const closeKr = document.querySelector( '.close-kr')

	mapKr.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-kr-open' );
	} );
	closeKr.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-kr-open' );
	} );
	//usa
	const mapUsa 	 = document.querySelector( '.usa')
	const closeUsa = document.querySelector( '.close-usa')

	mapUsa.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-usa-open' );
	} );
	closeUsa.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-usa-open' );
	} );
	//extra
	const mapextra 	 = document.querySelector( '.extra')
	const closeextra = document.querySelector( '.close-extra')

	mapextra.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-extra-open' );
	} );
	closeextra.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-extra-open' );
	} );
	//br
	const mapbr 	 = document.querySelector( '.br')
	const closebr = document.querySelector( '.close-br')

	mapbr.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-br-open' );
	} );
	closebr.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-br-open' );
	} );
	//uk
	const mapuk 	 = document.querySelector( '.uk')
	const closeuk = document.querySelector( '.close-uk')

	mapuk.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-uk-open' );
	} );
	closeuk.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-uk-open' );
	} );
	//arg
	const maparg 	 = document.querySelector( '.arg')
	const closearg = document.querySelector( '.close-arg')

	maparg.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-arg-open' );
	} );
	closearg.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-arg-open' );
	} );
	//finlandia
	const mapfinlandia 	 = document.querySelector( '.finlandia')
	const closefinlandia = document.querySelector( '.close-finlandia')

	mapfinlandia.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-finlandia-open' );
	} );
	closefinlandia.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-finlandia-open' );
	} );
	//spain
	const mapspain 	 = document.querySelector( '.spain')
	const closespain = document.querySelector( '.close-spain')

	mapspain.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-spain-open' );
	} );
	closespain.addEventListener( 'click', function() {
		document.body.classList.toggle( 'modal-spain-open' );
	} );

	//functionality for publications books to open
	
	const oneBookContent = document.querySelector( '.one-book-content')
	const oneBookTitle = document.querySelector( '.one-book-title')

	
	const twoBookContent = document.querySelector( '.two-book-content')
	const twoBookTitle = document.querySelector( '.two-book-title')

	
	const threeBookContent = document.querySelector( '.three-book-content')
	const threeBookTitle = document.querySelector( '.three-book-title')

	
	const fourBookContent = document.querySelector( '.four-book-content')
	const fourBookTitle = document.querySelector( '.four-book-title')

	
	const fiveBookContent = document.querySelector( '.five-book-content')
	const fiveBookTitle = document.querySelector( '.five-book-title')

	
	const sixBookContent = document.querySelector( '.six-book-content')
	const sixBookTitle = document.querySelector( '.six-book-title')

	
	const sevenBookContent = document.querySelector( '.seven-book-content')
	const sevenBookTitle = document.querySelector( '.seven-book-title')

	
	const eightBookContent = document.querySelector( '.eight-book-content')
	const eightBookTitle = document.querySelector( '.eight-book-title')

	
	const nineBookContent = document.querySelector( '.nine-book-content')
	const nineBookTitle = document.querySelector( '.nine-book-title')

	
	
	oneBookTitle.addEventListener( 'click', function() {
		oneBookContent.classList.toggle( 'book-open' );
	} );
	twoBookTitle.addEventListener( 'click', function() {
		twoBookContent.classList.toggle( 'book-open' );
	} );
	threeBookTitle.addEventListener( 'click', function() {
		threeBookContent.classList.toggle( 'book-open' );
	} );
	fourBookTitle.addEventListener( 'click', function() {
		fourBookContent.classList.toggle( 'book-open' );
	} );
	fiveBookTitle.addEventListener( 'click', function() {
		fiveBookContent.classList.toggle( 'book-open' );
	} );
	sixBookTitle.addEventListener( 'click', function() {
		sixBookContent.classList.toggle( 'book-open' );
	} );
	sevenBookTitle.addEventListener( 'click', function() {
		sevenBookContent.classList.toggle( 'book-open' );
	} );
	eightBookTitle.addEventListener( 'click', function() {
		eightBookContent.classList.toggle( 'book-open' );
	} );
	nineBookTitle.addEventListener( 'click', function() {
		nineBookContent.classList.toggle( 'book-open' );
	} );




} );
	