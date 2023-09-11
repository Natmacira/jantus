window.addEventListener( 'load', function() {
	
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
	// const hamburgerButton = document.getElementById( 'hamburger-menu-toggler');

	// /* Agregar clase .current-menu-item en item activo de menu en caso de single page*/
	// menuItems.forEach( function( item ) {
	// 	item.addEventListener( 'click', function() {
	// 		document.body.classList.remove( 'hamburger-menu-active' );

	// 		let currentItems = document.querySelectorAll( '.current-menu-item' );

	// 		currentItems.forEach( function( currentItem ) {
	// 			currentItem.classList.remove( 'current-menu-item' );
	// 		} );

	// 		this.classList.add( 'current-menu-item' );
	// 	} )
	// } );

	// /* Set aria-label in menu links*/
	// const menuLinks = document.querySelectorAll( '.menu-item a' );
	// setAriaLabel( menuLinks, 'Ir a la seccion ' );






/* Set aria-label */
// function setAriaLabel ( element, value ) {
// 	if ( element ) {
// 		if ( NodeList.prototype.isPrototypeOf( element ) ) {
// 			element.forEach( function( e ) {
// 				let eText = e.innerText;
// 				e.setAttribute( 'aria-label', value + eText );
// 			} ); 		
// 		} else {
// 			element.setAttribute( 'aria-label', value + element.innerText );
// 		} 
// 	}
// }