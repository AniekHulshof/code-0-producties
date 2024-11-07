const karakters = {
    bosvrienden: {
        naam: "De Bosvrienden",
        subtext: "Kindertheater en -activiteiten vol spanning",
        img: {
            banner: "/img/toine.png",
            extra: "/img/karakters/de-bosvrienden.jpg",
        },
        inhoud: {
            title: "Neem je bezoekers mee in je verhaal...",
            text: "De Bosvrienden is een kinderactiviteitenprogramma vol spellen en activiteiten. Doordat de vaste personages elke keer een nieuw avontuur beleven waar de kinderen ook onderdeel van zijn, heeft het programma een enorme aantrekkingskracht op kinderen. De verhalen zijn gebaseerd op wat het bedrijf wil uitstralen. Is het de bedoeling om bewustzijn over omgaan met de natuur te promoten? Dan wordt er een avontuur beleefd waarin dat onder de aandacht komt. Zijn er andere wensen? Dan schrijven we daar een verhaal over.",
        },
        advies: "",
    },
    boazcato: {
        naam: "Boaz & Cato",
        subtext: "",
        img: {
            banner: "/img/verhalen/knibbelKnabbelKluisje.jpg",
            extra: "/img/karakters/boaz-en-cato.jpg",
        },
        inhoud: {
            title: "Actie!... tijdens de spelshow met Boaz & Cato",
            text: "Ken jij ze al? Boaz en Cato, de meest nieuwsgierige, energieke en dolenthousiaste karakters van Code 0 Producties. Geen uitdaging is hen te veel, zolang ze maar onder de mensen zijn en nieuwe dingen mogen ontdekken. De twee enthousiastelingen maken overal een spel van en hier wordt het publiek natuurlijk actief bij betrokken. Als Boaz en Cato in hun element zijn, dan voel je de aanstekelijke energie. Je wordt er gewo0n blij van en wilt meedoen! De karakter, Boaz en Cato, zijn in te zetten op scholen en evenementen.",
        },
        advies: "",
    },
    theater: {
        naam: "Theater op Maat",
        subtext: "Een passende voorstelling voor elk evenement",
        img: {
            banner: "/img/landingspage/theater.jpg",
            extra: "/img/landingspage/theater.jpg",
        },
        inhoud: {
            title: "Theater maakt alles mooier...",
            text: "Wil graag dat je bezoekers je evenement onthouden? Dat er iets ludieks plaatsvindt, waar mensen het jaren later nog over hebben? Iets dat bij jouw evenement past en jouw verhaal vertelt? Voor elke situatie kunnen wij iets ontzettend tofs bedenken, zodat de boodschap overkomt en mensen met een grote glimlach naar huis gaan. Het kan er zelfs voor zorgen dat mensen terugkomen! Om de mogelijkheden te bespreken, neem contact op via de oranje knop bovenaan de pagina of bel!",
        },
        advies: "",
    },
}

const get = window.location.href.split('&')[1];
const karakter = karakters[get];

if (karakter === undefined) {
    window.location = "?page=karakters";
}

const banner = document.getElementById('banner');
banner.style.backgroundImage = `url('${karakter.img.banner}')`;

const name = document.getElementById('name');
name.innerText = karakter.naam;

const subtext = document.getElementById('subtext');
subtext.innerText = karakter.subtext;

const title = document.getElementById('title');
title.innerText = karakter.inhoud.title;

const text = document.getElementById('text');
text.innerText = karakter.inhoud.text;

const advies = document.getElementById('advies');
advies.innerText = karakter.advies;

const img = document.getElementById('img');
img.src = karakter.img.extra;