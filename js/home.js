window.addEventListener('load', function () {

    const bouncingImg = document.getElementById('reboteImg');

function animate() {
    // Calcula las coordenadas para centrar la imagen
    let posX = (window.innerWidth - bouncingImg.width) / 2;
    let posY = (window.innerHeight - bouncingImg.height) / 2;

    let velX = (1 + Math.random() * 2) * (Math.random() > 0.5 ? 1 : -1);
    let velY = (1 + Math.random() * 2) * (Math.random() > 0.5 ? 1 : -1);

    bouncingImg.style.position = 'absolute';
    // Asigna las coordenadas centradas como posición inicial
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


    if (document.body.classList.contains('page-home')) {
        const images = [
            'wp-content/themes/jantus/img/home/one.jpg', 'wp-content/themes/jantus/img/home/2.jpg', 'wp-content/themes/jantus/img/home/3.jpg', 'wp-content/themes/jantus/img/home/4.jpg',
            'wp-content/themes/jantus/img/home/5.jpg', 'wp-content/themes/jantus/img/home/6.jpg', 'wp-content/themes/jantus/img/home/7.jpg', 'wp-content/themes/jantus/img/home/8.jpg',
            'wp-content/themes/jantus/img/home/9.jpg', 'wp-content/themes/jantus/img/home/10.jpg', 'wp-content/themes/jantus/img/home/11.jpg', 'wp-content/themes/jantus/img/home/12.jpg',
            'wp-content/themes/jantus/img/home/13.jpg', 'wp-content/themes/jantus/img/home/14.jpg'
        ];

        let addedImagesCount = 0;

        document.body.addEventListener('click', function (event) {
            // Verificar si la pantalla es de escritorio (ancho mayor o igual a 1200 px)
            // if (window.innerWidth >= 1200) {


            // Obtener una imagen aleatoria de la lista
            const randomIndex = Math.floor(Math.random() * images.length);
            const newImg = document.createElement('img');
            newImg.src = images[randomIndex];
            newImg.style.position = 'absolute';
            newImg.style.left = event.clientX + 'px';
            newImg.style.top = event.clientY + 'px';

            document.body.appendChild(newImg);

            addedImagesCount++;
            // }
        });
    }


    // Verifica si la página actual es la página de inicio
    // Verificar si la pantalla es de escritorio (ancho mayor o igual a 1200 px)
    if (window.innerWidth >= 1200) {
        if (document.body.classList.contains('page-home')) {
            const cursorText = document.createElement('div');
            cursorText.className = 'cursor-text';
            cursorText.textContent = 'CLICK';
            document.body.appendChild(cursorText);

            document.body.addEventListener('mousemove', function (e) {
                cursorText.style.left = e.pageX + 'px';
                cursorText.style.top = e.pageY + 'px';
            });

            document.body.addEventListener('mouseenter', function () {
                cursorText.style.opacity = 1;
            });

            document.body.addEventListener('mouseleave', function () {
                cursorText.style.opacity = 0;
            });

            // footer uls sin click
        
            const menuFooterItems = document.querySelectorAll('ul li');
            menuFooterItems.forEach(item => {
                item.addEventListener('mouseenter', function () {
                    document.body.removeChild(cursorText);
                });
        
                item.addEventListener('mouseleave', function () {
                         document.body.appendChild(cursorText);

                });
            });
        }
    }





});
