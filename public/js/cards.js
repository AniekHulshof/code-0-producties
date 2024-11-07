document.querySelector('a[href="#cards"]').addEventListener('click', (event) => {
    event.preventDefault();
    document.querySelector('#cards').scrollIntoView({
        behavior: 'smooth'
    });
});