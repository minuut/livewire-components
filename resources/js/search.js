document.addEventListener('livewire:load', function () {
    Livewire.on('search', function (value) {
        Livewire.emit('searching');
    });
});