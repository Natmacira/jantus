
window.addEventListener('load', function () {

const img = document.getElementById('reboteImg');

function animate() {
  let posX = Math.random() * window.innerWidth;
  let posY = Math.random() * window.innerHeight;
  let velX = (1 + Math.random() * 2) * (Math.random() > 0.5 ? 1 : -1);
  let velY = (1 + Math.random() * 2) * (Math.random() > 0.5 ? 1 : -1);
    console.log(img)
  img.style.position = 'absolute';
  img.style.left = posX + 'px';
  img.style.top = posY + 'px';

  function update() {
    posX += velX;
    posY += velY;

    if (posX + img.width > window.innerWidth || posX < 0) {
      velX = -velX;
    }

    if (posY + img.height > window.innerHeight || posY < 0) {
      velY = -velY;
    }

    img.style.left = posX + 'px';
    img.style.top = posY + 'px';

    requestAnimationFrame(update);
  }

  update();
}
animate();
});
