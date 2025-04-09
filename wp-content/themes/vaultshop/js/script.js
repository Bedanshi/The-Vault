  // Bootstrap Carousel initialization
  const myCarouselElement = document.querySelector('#carouselExampleDark');
  const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 2000,
    touch: true
  });

  // Mouse drag support for desktop
  let startX = 0;
  let isDown = false;

  myCarouselElement.addEventListener('mousedown', (e) => {
    isDown = true;
    startX = e.clientX;
  });

  myCarouselElement.addEventListener('mouseup', (e) => {
    if (!isDown) return;
    isDown = false;
    const endX = e.clientX;
    const diff = startX - endX;

    if (diff > 50) {
      carousel.next(); // swipe left
    } else if (diff < -50) {
      carousel.prev(); // swipe right
    }
  });

  myCarouselElement.addEventListener('mouseleave', () => {
    isDown = false;
  });