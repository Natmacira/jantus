
window.addEventListener('load', function () {
	//Mostrar-Ocultar controles
	const showHideControlsBtn = document.querySelectorAll(
		'.show-hide-controls'
	);

	showHideControlsBtn.forEach(function (e) {
		e.addEventListener('click', function () {
			document
				.querySelector('#controls')
				.classList.toggle('show-controls');
		});
	});

	const randomBtn = document.querySelector('#random-btn');
	let nfts = [];
	let nftActual = '';

	//Insertar archivo en HTML, segun tipo
	const renderFile = file => {
		const nftSection = document.querySelector('#nft');

		nftSection.innerHTML = '';

		if (file.type === 'image') {
			const img = document.createElement('IMG');
			img.src = file.src;
			nftSection.appendChild(img);
		}

		if (file.type === 'video') {
			var video = document.createElement('VIDEO');
			video.src = file.src;
			video.autoplay = true;
			video.loop = true;
			video.muted = false;
			video.setAttribute('playsinline', '');
			nftSection.appendChild(video);
		}
	};

	//Elegir NFT random y mostrar
	const nftRandom = (resultadoAnterior, array) => {
		let random;

		do {
			random = Math.floor(Math.random() * array.length);
		} while (random === resultadoAnterior);

		renderFile(array[random]);

		nftActual = random;
	};

	nfts = nfts_data;

	//Mostrar nft random cuando carga la página
	nftRandom(nftActual, nfts);

	//Mostrar nft random al clickear boton "nft"
	if (randomBtn) {
		randomBtn.addEventListener('click', () => {
			nftRandom(nftActual, nfts);
		});
	}

	//Modificaciones visuales
	const controls = document.querySelector('#controls');
	// const nftDisplay = document.querySelector('#nft');
	const layerHue = document.querySelector('#layer-hue');
	const layerBrightness = document.querySelector('#layer-brightness');
	const layerBlur = document.querySelector('#layer-blur');
	const video = document.querySelector('video'); 
	console.log(video);
	console.log('arriba está el video');


	const changeColor = value => {
		// nftDisplay.style.filter = `hue-rotate(${value}deg)`;
		layerHue.style.filter = `hue-rotate(${value}deg)`;
	};

	const changeBrightness = value => {
		// nftDisplay.style.filter = `brightness(${value})`;
		layerBrightness.style.filter = `brightness(${value})`;
	};

	const changeBlur = value => {
		// nftDisplay.style.filter = `blur(${value}px)`;
		layerBlur.style.filter = `blur(${value}px)`;
	};

	const changeVolume = value => {
		video.volume = value;
		let videos = document.getElementsByTagName('video');
		for (let i = 0; i < videos.length; i++) {
			videos[i].volume = value;
		}
		console.log(video);
		console.log(value);
		console.log(video.volume);
	};

	controls.addEventListener('input', e => {
		const input = e.target.id;
		const value = e.target.value;

		switch (input) {
			case 'hue-control':
				changeColor(value);
				break;
			case 'brightness-control':
				changeBrightness(value);
				break;
			case 'blur-control':
				changeBlur(value);
				break;
			case 'volume-control':
				
				changeVolume(value);
				break;
		}
	});
});