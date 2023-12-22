window.addEventListener('load', function () {

    const bouncingImg = document.getElementById('reboteImg');

    function animate() {
        let posX = Math.random() * window.innerWidth;
        let posY = Math.random() * window.innerHeight;
        let velX = (1 + Math.random() * 2) * (Math.random() > 0.5 ? 1 : -1);
        let velY = (1 + Math.random() * 2) * (Math.random() > 0.5 ? 1 : -1);
        console.log(bouncingImg)
        bouncingImg.style.position = 'absolute';
        bouncingImg.style.left = posX + 'px';
        bouncingImg.style.top = posY + 'px';

        function update() {
            posX += velX;
            posY += velY;

            if (posX + bouncingImg.width > window.innerWidth || posX < 0) {
                velX = -velX;
            }

            if (posY + bouncingImg.height > window.innerHeight || posY < 0) {
                velY = -velY;
            }

            bouncingImg.style.left = posX + 'px';
            bouncingImg.style.top = posY + 'px';

            requestAnimationFrame(update);
        }

        update();
    }
    animate();

    const images = [
        'wp-content/themes/jantus/img/home/one.jpg', 'wp-content/themes/jantus/img/home/2.jpg', 'wp-content/themes/jantus/img/home/3.jpg', 'wp-content/themes/jantus/img/home/4.jpg',
        'wp-content/themes/jantus/img/home/5.jpg', 'wp-content/themes/jantus/img/home/6.jpg', 'wp-content/themes/jantus/img/home/7.jpg', 'wp-content/themes/jantus/img/home/8.jpg',
        'wp-content/themes/jantus/img/home/9.jpg', 'wp-content/themes/jantus/img/home/10.jpg', 'wp-content/themes/jantus/img/home/11.jpg', 'wp-content/themes/jantus/img/home/12.jpg',
        'wp-content/themes/jantus/img/home/13.jpg', 'wp-content/themes/jantus/img/home/14.jpg'
    ];

    let addedImagesCount = 0;

    document.body.addEventListener('click', function (event) {
        // Verificar si la pantalla es de escritorio (ancho mayor o igual a 1200 px)
        if (window.innerWidth >= 1200) {
            // Si ya se han agregado 14 imágenes, eliminarlas todas
            // if (addedImagesCount === 14) {
            //     const existingImages = document.querySelectorAll('img');
            //     existingImages.forEach(img => img.remove());
            //     addedImagesCount = 0; // reiniciar el conteo
            // }

            // Obtener una imagen aleatoria de la lista
            const randomIndex = Math.floor(Math.random() * images.length);
            const newImg = document.createElement('img');
            newImg.src = images[randomIndex];
            newImg.style.position = 'absolute';
            newImg.style.left = event.clientX + 'px';
            newImg.style.top = event.clientY + 'px';

            document.body.appendChild(newImg);

            addedImagesCount++;
        }
    });
});
