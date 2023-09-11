window.addEventListener( 'load', function() {
	
	const bookContent = document.querySelectorAll( '.book-content')
	const bookTitle = document.querySelectorAll( '.book-title')

	
	bookTitle.addEventListener( 'click', function() {
		bookContent.classList.add( 'book-open' );
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

} );




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