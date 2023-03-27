console.log('Livewire loaded');

document.addEventListener('livewire:load', function () {
    Livewire.on('rotateImage', imageUrl => {
      const images = document.querySelectorAll(`img[src="${imageUrl}"]`);
      images.forEach(image => {
        image.style.transform = 'rotate(70deg)';
      });
    });
    Livewire.on('resetImage', imageUrl => {
      const images = document.querySelectorAll(`img[src="${imageUrl}"]`);
      images.forEach(image => {
        image.style.transform = 'none';
      });
    });
  });
  