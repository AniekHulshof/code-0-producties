const verhalen = {
    kapitein: {
        naam: "Kapitein Kromspijker & Sophie",
        subtext: "& Het geheim van de schatkist",
        img: {
            banner: "/img/verhalen/kapiteinBanner.jpg",
            extra: "/img/verhalen/kapiteinExtra.jpg",
        },
        inhoud: {
            title: "Hoe een gewoon meisje een stoere stuurvrouw werd…",
            text: "Als Sophie op zolder een beetje aan het rondneuzen is, komt ze een oud boek tegen. Dat is interessant! Eens kijken wat erin staat! Ze gaat op de oude kist zitten en begint te lezen. Er staat van alles geschreven in een rare taal. Maar dan komt het verhaal uit het boek tot leven. Samen met Kapitein Kromspijker gaan “stuurvrouwe” Sophie op zoek naar de schat der zeeën. Zal het hun lukken om de schat af te pakken van de stinkende Kapitein Spuuglelijk in een gevaarlijk gevecht met de piraten?",
        },
        advies: "Deze voorstelling is voor kinderen vanaf ongeveer 4 jaar.",
    },
    knibbel: {
        naam: "Knibbel Knabbel Kluisje",
        subtext: "Een absurde theater-escape",
        img: {
            banner: "/img/verhalen/knibbelKnabbelKluisje.jpg",
            extra: "/img/verhalen/knibbelExtra.jpg",
        },
        inhoud: {
            title: "Knibbel knabbel knuistje, wie ontsnapt er uit dit kluisje?",
            text: "Hans en Grietje worden wakken met een vreselijke hoofdpijn. Waar zijn ze? En wat is gebeurd? Allebei zitten ze in een soort grote, goed beveiligde kooi en tussen de twee kooien staat een ketel boven een vuurtje. Ze zitten opgesloten! En dan horen ze een luide, gemene lach. De Heks! Zij heeft hen opgesloten en wil kinderbillensoep maken. Zouden de kinderen in de zaal nog wel veilig zijn? Samen met de kinderen in de zaal bedenken Hans en Grietje",
        },
        advies: "",
    },
    tijdreizigers: {
        naam: "De Tijdsreizigers van Tempus",
        subtext: "Verhalenvertellers van andere tijden",
        img: {
            banner: "/img/verhalen/tijdreizigersBanner.png",
            extra: "/img/verhalen/tijdreizigersExtra.jpg",
        },
        inhoud: {
            title: "Reis mee door de tijd!",
            text: "Echte verhalenvertellers zijn het: Captain Victor en Lady Gwendolyne. Zij reizen door de tijd in opdracht van professor Tempus. Ze zijn in allerlei tijden al geweest en kunnen je overal iets over vertellen. Met een echte tijdmachine komen ze aan en ze nemen altijd iets met zich mee: een schedel van een sabeltandtijger, een mes van vroegere boeren of heel iets anders. Je ontdekt altijd bijzondere dingen waar de tijdreizigers van Tempus komen. De Tijdreizigers van Tempus heeft door de grote tijdmachine en indrukwekkende kostuums een grote attractiewaarde. Dit concept is heel goed in te zetten op festivals of buitenevenementen. Desgewenst worden eigen verhalen van de organisatie of van de streek verteld. Dit concept is volledig op maat te maken.",
        },
        advies: "",
    },
    Sinterklaas
    : {
        naam: "De Bende van Sinterklaas",
        subtext: "Zinderende Sinterklaasspectakels op elke plek",
        img: {
            banner: "/img/verhalen/sinterklaasBanner.jpg",
            extra: "/img/verhalen/sinterklaasextra.png",
        },
        inhoud: {
            title: "Kijk! Sinterklaas!",
            text: "Sinterklaas is voor kinderen natuurlijk het magische feest bij uitstek. Elk kind kijkt ernaar uit en of je viert het natuurlijk uitgebreid op school, thuis en op de sportvereniging. Maar ook op andere plekken maken Sinterklaas en zijn bende van pieten er een waar feest van! Code 0 Producties maakt elk jaar een nieuwe theatervoorstelling met Hoofdpiet, Profpiet, Regelpiet, Piet Lut en het meisje Marit. Energiek, spannend en vol humor voor groot en klein. Er zijn inmiddels een groot aantal verhalen van de Bende van Sinterklaas en elke keer zijn de zalen uitverkocht! Ook buiten de theaterzalen is de Bende van Sinterklaas te boeken voor een Roadshow of Meet & Greet. Een Roadshow kan bestaan uit 2 of meer personages, die een verhaal spelen dat geschikt is voor buitentheater of in een kleine zaal. Hiervoor kunt u een aparte prijsopgave opvragen, gebaseerd op uw vraag. Ook een Meet & Greet is mogelijk. Dit is bijvoorbeeld een intocht bij een bedrijf, in een wijk, buurt of winkelcentrum.",
        },
        advies: "",
    },
}

const get = window.location.href.split('&')[1];
const verhaal = verhalen[get];

if (verhaal === undefined) {
    window.location = "?page=verhalen";
}

const banner = document.getElementById('banner');
banner.style.backgroundImage = `url('${verhaal.img.banner}')`;

const name = document.getElementById('name');
name.innerText = verhaal.naam;

const subtext = document.getElementById('subtext');
subtext.innerText = verhaal.subtext;

const title = document.getElementById('title');
title.innerText = verhaal.inhoud.title;

const text = document.getElementById('text');
text.innerText = verhaal.inhoud.text;

const advies = document.getElementById('advies');
advies.innerText = verhaal.advies;

const img = document.getElementById('img');
img.src = verhaal.img.extra;