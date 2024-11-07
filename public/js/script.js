document.getElementById('menu-toggle').addEventListener('click', function () {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});

document.getElementById('mobile-dropdown-toggle').addEventListener('click', function () {
    const dropdownMenu = document.getElementById('mobile-dropdown-menu');
    dropdownMenu.classList.toggle('hidden');
});

const urlParams = new URLSearchParams(window.location.search);
const page = urlParams.get('page').split('&')[0];

const imgElement = document.getElementById('dynamicImage');
const urlElement = document.getElementById('dynamicUrl');

let imgSrc = '';
let imgAlt = '';

switch (page) {
    case 'homepageCode0':
        imgSrc = 'img/logo/code0.png';
        imgAlt = 'Afbeelding voor Code0';
        break;
    case 'verhalen':
        imgSrc = 'img/logo/code0.png';
        imgAlt = 'Afbeelding voor Code0';
        break;
    case 'karakters':
        imgSrc = 'img/logo/code0.png';
        imgAlt = 'Afbeelding voor Code0';
        break;
    case 'verhaal':
        imgSrc = 'img/logo/code0.png';
        imgAlt = 'Afbeelding voor Code0';
        break;
    case 'karakter':
        imgSrc = 'img/logo/code0.png';
        imgAlt = 'Afbeelding voor Code0';
        break;
    case 'homepageTelltales':
        imgSrc = 'img/logo/telltales.png';
        imgAlt = 'Afbeelding voor Telltales';
        break;
    case 'homepageLazyjack':
        imgSrc = 'img/logo/lazyjack.png';
        imgAlt = 'Afbeelding voor Lazyjack';
        break;
    default:
        imgSrc = '';
        imgAlt = '';
}

imgElement.src = imgSrc;
imgElement.alt = imgAlt;
