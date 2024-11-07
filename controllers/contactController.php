<?php

function handleForm()
{
    if (trim($_POST["email"]) == "") {
        $email = "Email is verplicht";
    } else if (!filter_var((trim($_POST["email"])), FILTER_VALIDATE_EMAIL)) {
        $email = "Email moet geformuleerd worden als naam@adres.nl";
    } else {
        $email = "";
    }

    if (trim($_POST["telefoon"]) == "") {
        $telefoon = "Telefoonnummer is verplicht";
    } else if (!preg_match('/^[0-9]{10,11}+$/', $_POST["telefoon"])) {
        $telefoon = "Telefoonnummer bestaat uit 10 of 11 cijfers";
    } else {
        $telefoon = "";
    }

    return [
        "voornaam" => [
            "value" => $_POST["voornaam"],
            "fout" => trim($_POST["voornaam"]) == "" ? "Voornaam verplicht" : ""
        ],
        "achternaam" => [
            "value" => $_POST["achternaam"],
            "fout" => trim($_POST["achternaam"]) == "" ? "Achternaam verplicht" : ""
        ],
        "email" => [
            "value" => $_POST["email"],
            "fout" => $email
        ],
        "telefoon" => [
            "value" => $_POST["telefoon"],
            "fout" => $telefoon
        ],
        "vraag" => [
            "value" => $_POST["vraag"],
            "fout" => trim($_POST["vraag"]) == "" ? "Vraag en/of opmerking mag niet leeg zijn" : ""
        ]
    ];
}
