window.addEventListener('load', function () {
	//functionality for zoom in
	
	const zoomIn = document.querySelector('.zoom-in')
	const zoomInExit = document.querySelector('.exit')

	console.log(zoomIn);
	if ( zoomIn ) {
		zoomIn.addEventListener('click', function () {
			document.body.classList.add('zoom-in-open');
		});
	}
	if ( zoomInExit ) {
		zoomInExit.addEventListener('click', function ( e ) {
			document.body.classList.remove('zoom-in-open');
			console.log('hola');
			e.stopPropagation();
		});
	}

	//functionality for submenu work

	const openWorkMenu = document.querySelector('.work-open')
	const openWorkMenuUl = document.querySelector('.work-open-close')

	if ( openWorkMenu ) {
		openWorkMenu.addEventListener('click', function () {
			document.body.classList.toggle('work-open-open');
		});
	}

	// functionality for switch button solo group

	const switchBtn = document.querySelector('.switch-btn')

	if ( switchBtn ) {
		switchBtn.addEventListener('click', function () {
			document.body.classList.toggle('solo-mode');
		});
	}

	// functionality to open galery buton

	// Obtén la lista de elementos de la lista
	const galeryBtnList = document.querySelectorAll('.img-open-galery');
	// Agrega eventos a cada elemento de la lista
	galeryBtnList.forEach(item => {
		item.addEventListener('click', function () {
			document.body.classList.toggle('galery-open');
		});
	});


	// functionality for modals maps MOBILE
	//JAPAN
	const mapJapan = document.querySelectorAll('.japan')
	const closeJapan = document.querySelector('.close-japan')

	for (let i = 0; i < mapJapan.length; i++) {
		mapJapan[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-japan-open');
		});

	}

	if ( closeJapan ) {
		closeJapan.addEventListener('click', function () {
			document.body.classList.toggle('modal-japan-open');
			document.body.classList.remove('galery-open');
		});
	}


	//KR
	const mapKr = document.querySelectorAll('.kr')
	const closeKr = document.querySelector('.close-kr')

	for (let i = 0; i < mapKr.length; i++) {
		mapKr[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-kr-open');

		});

	}

	if ( closeKr ) {
		closeKr.addEventListener('click', function () {
			document.body.classList.toggle('modal-kr-open');
		});
	}


	//usa
	const mapUsa = document.querySelectorAll('.usa')
	const closeUsa = document.querySelector('.close-usa')
	for (let i = 0; i < mapUsa.length; i++) {
		mapUsa[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-usa-open');
		});
	}

	if ( closeUsa ) {
		closeUsa.addEventListener('click', function () {
			document.body.classList.toggle('modal-usa-open');
			document.body.classList.remove('galery-open');

		});
	}




	//br
	const mapbr = document.querySelectorAll('.br')
	const closebr = document.querySelector('.close-br')
	for (let i = 0; i < mapbr.length; i++) {
		mapbr[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-br-open');
		});
	}

	if ( closebr ) {
		closebr.addEventListener('click', function () {
			document.body.classList.toggle('modal-br-open');
			document.body.classList.remove('galery-open');
		});
	}


	//uk
	const mapuk = document.querySelectorAll('.uk')
	const closeuk = document.querySelector('.close-uk')
	for (let i = 0; i < mapuk.length; i++) {
		mapuk[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-uk-open');
		});
	}

	if ( closeuk ) {
		closeuk.addEventListener('click', function () {
			document.body.classList.toggle('modal-uk-open');
		});
	}


	//arg
	const maparg = document.querySelectorAll('.arg')
	const closearg = document.querySelector('.close-arg')
	for (let i = 0; i < maparg.length; i++) {
		maparg[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-arg-open');
		});
	}

	if ( closearg ) {
		closearg.addEventListener('click', function () {
			document.body.classList.toggle('modal-arg-open');
			document.body.classList.remove('galery-open');
		});
	}

	//finlandia
	const mapfinlandia = document.querySelectorAll('.finlandia')
	const closefinlandia = document.querySelector('.close-finlandia')
	for (let i = 0; i < mapfinlandia.length; i++) {
		mapfinlandia[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-finlandia-open');
		});
	}

	if ( closefinlandia ) {
		closefinlandia.addEventListener('click', function () {
			document.body.classList.toggle('modal-finlandia-open');
			document.body.classList.remove('galery-open');
		});
	}

	//spain
	const mapspain = document.querySelectorAll('.spain:not(.solo)')
	const closespain = document.querySelector('.close-spain')
	for (let i = 0; i < mapspain.length; i++) {
		mapspain[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-spain-open');
		});
	}

	if ( closespain ) {
		closespain.addEventListener('click', function () {
			document.body.classList.toggle('modal-spain-open');
		});
	}

	//spain-solo
	const mapspainSolo = document.querySelectorAll('.spain.solo')
	const closespainSolo = document.querySelector('.close-spain-solo')

	mapspainSolo.forEach(function (element) {
		element.addEventListener('click', function () {
			document.body.classList.toggle('modal-spain-solo-open');
			document.body.classList.remove('modal-spain-open');
		});
	});

	if ( closespainSolo ) {
		closespainSolo.addEventListener('click', function () {
			document.body.classList.toggle('modal-spain-solo-open');
			document.body.classList.remove('galery-open');
		});
	}


	//usa-solo
	const mapUsaSolo = document.querySelectorAll('.usa.solo');
	const closeUsaSolo = document.querySelector('.close-usa-solo');

	mapUsaSolo.forEach(function (element) {
		element.addEventListener('click', function () {
			document.body.classList.toggle('modal-usa-solo-open');
			document.body.classList.remove('modal-usa-open');
		});
	});

	if ( closeUsaSolo ) {
		closeUsaSolo.addEventListener('click', function () {
			document.body.classList.toggle('modal-usa-solo-open');
			document.body.classList.remove('galery-open');
		});
	}



	// Obtén la lista de elementos de la lista
	const countryListItems = document.querySelectorAll('.menu-countrys.group-ul li');

	// Agrega eventos a cada elemento de la lista
	countryListItems.forEach(item => {
		item.addEventListener('mouseenter', function () {
			// Obtiene la clase del elemento y la agrega al body
			const countryClass = this.classList.item(0);
			document.body.classList.add(countryClass);
		});

		item.addEventListener('mouseleave', function () {
			// Remueve la clase del body al salir del elemento
			const countryClass = this.classList.item(0);
			document.body.classList.remove(countryClass);
		});
	});
	// Obtén la lista de elementos de la lista
	const countryListItemsSolo = document.querySelectorAll('.menu-countrys.solo-ul li');

	// Agrega eventos a cada elemento de la lista
	countryListItemsSolo.forEach(item => {
		item.addEventListener('mouseenter', function () {
			// Obtiene la clase del elemento y la agrega al body
			const countryClass = this.classList.item(0);
			document.body.classList.add(countryClass);
		});

		item.addEventListener('mouseleave', function () {
			// Remueve la clase del body al salir del elemento
			const countryClass = this.classList.item(0);
			document.body.classList.remove(countryClass);
		});
	});

	// slider

	let slidesPerPage = document.body.classList.contains('puerta') ? 2 : 1;
	slidesPerPage = screen.width < 1200 ? 1 : slidesPerPage;
	let welcomeSwiper = new Swiper('.generic-swiper', {
		spaceBetween: 30,
		loop: false,
		slidesPerView: slidesPerPage,
		pagination: {
			el: ".swiper-pagination",
			clickable: true
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});


});
