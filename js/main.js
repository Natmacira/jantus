window.addEventListener('load', function () {

	// functionality for switch button solo group

	const switchBtn = document.querySelector('.switch-btn')

	switchBtn.addEventListener('click', function () {
		document.body.classList.toggle('solo-mode');
	});

	//functionality for submenu work

	const openWorkMenu = document.querySelector('.work-open')
	const openWorkMenuUl = document.querySelector('.work-open-close')

	console.log(openWorkMenu, openWorkMenuUl);

	openWorkMenu.addEventListener('click', function () {
		document.body.classList.toggle('work-open-open');
	});

	// functionality for modals maps
	//JAPAN
	const mapJapan = document.querySelector('.japan')
	const closeJapan = document.querySelector('.close-japan')

	mapJapan.addEventListener('click', function () {
		document.body.classList.toggle('modal-japan-open');
	});
	closeJapan.addEventListener('click', function () {
		document.body.classList.toggle('modal-japan-open');
	});
	//KR
	const mapKr = document.querySelector('.kr')
	const closeKr = document.querySelector('.close-kr')

	mapKr.addEventListener('click', function () {
		document.body.classList.toggle('modal-kr-open');
	});
	closeKr.addEventListener('click', function () {
		document.body.classList.toggle('modal-kr-open');
	});
	//usa
	const mapUsa = document.querySelector('.usa')
	const closeUsa = document.querySelector('.close-usa')

	mapUsa.addEventListener('click', function () {
		document.body.classList.toggle('modal-usa-open');
	});
	closeUsa.addEventListener('click', function () {
		document.body.classList.toggle('modal-usa-open');
	});

	//usa-solo
	const mapUsaSolo = document.querySelector('.usa.solo')
	const closeUsaSolo = document.querySelector('.close-usa-solo')

	mapUsaSolo.addEventListener('click', function () {
		document.body.classList.toggle('modal-usa-solo-open');
	});
	closeUsaSolo.addEventListener('click', function () {
		document.body.classList.toggle('modal-usa-solo-open');
	});
	console.log(mapUsaSolo)
	console.log(closeUsaSolo)

	//br
	const mapbr = document.querySelector('.br')
	const closebr = document.querySelector('.close-br')

	mapbr.addEventListener('click', function () {
		document.body.classList.toggle('modal-br-open');
	});
	closebr.addEventListener('click', function () {
		document.body.classList.toggle('modal-br-open');
	});
	//uk
	const mapuk = document.querySelector('.uk')
	const closeuk = document.querySelector('.close-uk')

	mapuk.addEventListener('click', function () {
		document.body.classList.toggle('modal-uk-open');
	});
	closeuk.addEventListener('click', function () {
		document.body.classList.toggle('modal-uk-open');
	});
	//arg
	const maparg = document.querySelector('.arg')
	const closearg = document.querySelector('.close-arg')

	maparg.addEventListener('click', function () {
		document.body.classList.toggle('modal-arg-open');
	});
	closearg.addEventListener('click', function () {
		document.body.classList.toggle('modal-arg-open');
	});
	//finlandia
	const mapfinlandia = document.querySelector('.finlandia')
	const closefinlandia = document.querySelector('.close-finlandia')

	mapfinlandia.addEventListener('click', function () {
		document.body.classList.toggle('modal-finlandia-open');
	});
	closefinlandia.addEventListener('click', function () {
		document.body.classList.toggle('modal-finlandia-open');
	});
	//spain
	const mapspain = document.querySelector('.spain')
	const closespain = document.querySelector('.close-spain')

	mapspain.addEventListener('click', function () {
		document.body.classList.toggle('modal-spain-open');
	});
	closespain.addEventListener('click', function () {
		document.body.classList.toggle('modal-spain-open');
	});

	//spain-solo
	const mapspainSolo = document.querySelector('.spain.solo')
	const closespainSolo = document.querySelector('.close-spain-solo')

	mapspainSolo.addEventListener('click', function () {
		document.body.classList.toggle('modal-spain-solo-open');
	});
	closespainSolo.addEventListener('click', function () {
		document.body.classList.toggle('modal-spain-solo-open');
	});



});
