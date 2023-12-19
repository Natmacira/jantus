window.addEventListener('load', function () {
	//functionality for submenu work

	const openWorkMenu = document.querySelector('.work-open')
	const openWorkMenuUl = document.querySelector('.work-open-close')

	openWorkMenu.addEventListener('click', function () {
		document.body.classList.toggle('work-open-open');
	});


	// functionality for switch button solo group

	const switchBtn = document.querySelector('.switch-btn')

	switchBtn.addEventListener('click', function () {
		document.body.classList.toggle('solo-mode');
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
	closeJapan.addEventListener('click', function () {
		document.body.classList.toggle('modal-japan-open');
	});


	//KR
	const mapKr = document.querySelectorAll('.kr')
	const closeKr = document.querySelector('.close-kr')

	for (let i = 0; i < mapKr.length; i++) {
		mapKr[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-kr-open');
		});

	}
	closeKr.addEventListener('click', function () {
		document.body.classList.toggle('modal-kr-open');
	});


	//usa
	const mapUsa = document.querySelectorAll('.usa')
	const closeUsa = document.querySelector('.close-usa')
	for (let i = 0; i < mapUsa.length; i++) {
		mapUsa[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-usa-open');
		});
	}
	closeUsa.addEventListener('click', function () {
		document.body.classList.toggle('modal-usa-open');
	});

	


	//br
	const mapbr = document.querySelectorAll('.br')
	const closebr = document.querySelector('.close-br')
	for (let i = 0; i < mapbr.length; i++) {
		mapbr[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-br-open');
		});
	}
	closebr.addEventListener('click', function () {
		document.body.classList.toggle('modal-br-open');
	});


	//uk
	const mapuk = document.querySelectorAll('.uk')
	const closeuk = document.querySelector('.close-uk')
	for (let i = 0; i < mapuk.length; i++) {
		mapuk[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-uk-open');
		});
	}
	closeuk.addEventListener('click', function () {
		document.body.classList.toggle('modal-uk-open');
	});


	//arg
	const maparg = document.querySelectorAll('.arg')
	const closearg = document.querySelector('.close-arg')
	for (let i = 0; i < maparg.length; i++) {
		maparg[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-arg-open');
		});
	}
	closearg.addEventListener('click', function () {
		document.body.classList.toggle('modal-arg-open');
	});



	//finlandia
	const mapfinlandia = document.querySelectorAll('.finlandia')
	const closefinlandia = document.querySelector('.close-finlandia')
	for (let i = 0; i < mapfinlandia.length; i++) {
		mapfinlandia[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-finlandia-open');
		});
	}
	closefinlandia.addEventListener('click', function () {
		document.body.classList.toggle('modal-finlandia-open');
	});



	//spain
	const mapspain = document.querySelectorAll('.spain:not(.solo)')
	const closespain = document.querySelector('.close-spain')
	for (let i = 0; i < mapspain.length; i++) {
		mapspain[i].addEventListener('click', function () {
			document.body.classList.toggle('modal-spain-open');
		});
	}
	closespain.addEventListener('click', function () {
		document.body.classList.toggle('modal-spain-open');
	});

	//spain-solo
	const mapspainSolo = document.querySelector('.spain.solo.dkp')
	console.log(mapspainSolo);
	const closespainSolo = document.querySelector('.close-spain-solo')

	mapspainSolo.addEventListener('click', function () {
		document.body.classList.toggle('modal-spain-solo-open');
		document.body.classList.remove('modal-spain-open');
	});
	closespainSolo.addEventListener('click', function () {
		document.body.classList.toggle('modal-spain-solo-open');
	});

	//usa-solo
	const mapUsaSolo = document.querySelector('.usa.solo')
	const closeUsaSolo = document.querySelector('.close-usa-solo')

	mapUsaSolo.addEventListener('click', function () {
		document.body.classList.toggle('modal-usa-solo-open');
		document.body.classList.remove('modal-usa-open');
	});
	closeUsaSolo.addEventListener('click', function () {
		document.body.classList.toggle('modal-usa-solo-open');
	});

	//spain-solo desktop
	// const mapspainSoloDesktop = document.querySelector('.spain.solo.dkp')
	// const closespainSoloDesktop = document.querySelector('.close-spain-solo')

	// mapspainSoloDesktop.addEventListener('click', function () {
	// 	document.body.classList.toggle('modal-spain-solo-open');
	// });
	// closespainSoloDesktop.addEventListener('click', function () {
	// 	document.body.classList.toggle('modal-spain-solo-open');
	// });


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


});
