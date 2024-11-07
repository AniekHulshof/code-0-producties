<?php if (isset($_POST['submit'])) : ?>
    <?php require_once "../controllers/contactController.php" ?>
    <?php $validate = handleForm() ?>
    <?php $mailer = mailer()
    ?>
<?php endif ?>
<div id="banner" class="flex items-center justify-center min-h-screen bg-[url('/img/homepageCode0/theater.jpg')] bg-cover bg-center relative">
    <div class="absolute inset-0 bg-black bg-opacity-25"></div>
    <div class="relative max-w-6xl mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-12 justify-center items-center md:justify-between md:items-start my-12">
            <div class="text-slate-50 w-full md:w-1/2">
                <h2 class="font-bold text-xl text-center md:text-left mb-4">Contactgegevens</h2>
                <p class="text-center md:text-left text-md mb-6 mx-5 md:mx-0">Email, bel of laat een bericht achter om contact met ons op te nemen.<br>We kijken ernaar uit om van je te horen!</p>
                <ul class="text-center md:text-left">
                    <li class="flex items-center justify-center text-center md:justify-start mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-4 fill-current text-[#ad5199]">
                            <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                        </svg>
                        <a href="#">+31 6 83 99 71 45</a>
                    </li>
                    <li class="flex items-center justify-center md:justify-start mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-4 fill-current text-[#ec613a]">
                            <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                        </svg>
                        <a href="mailto:toine@entertainmentgroep.nl">toine@entertainmentgroep.nl</a>
                    </li>
                    <li class="flex items-center justify-center md:justify-start mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-4 h-4 mr-4 fill-current text-[#65b32e]">
                            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                        </svg>
                        <a href="#">Nieuw Amsterdamseweg 74<br>7761 PC Schoonebeek</a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="font-bold text-xl text-center mb-4 text-slate-50">Contactformulier</h2>
                <p class="text-center text-md mb-4 mx-5 text-slate-50">We streven ernaar om zo snel mogelijk op je bericht te reageren!</p>
                <form id="form" action="" method="POST">
                    <div class="flex flex-col md:flex-row gap-3 mb-4 mx-5">
                        <div class="grow">
                            <label for="voornaam" class="sr-only">Voornaam</label>
                            <input class="appearance-none border rounded-lg w-full py-2 px-6 text-black-700 bg-gray-200 placeholder-gray-700 
                            <?= isset($validate) && $validate["voornaam"]["fout"] > "" ? "border-red-500" : "" ?>" name="voornaam" id="voornaam" type="text" placeholder="Voornaam" value="<?= isset($validate) ? $validate["voornaam"]["value"] : "" ?>">
                        </div>
                        <div class="grow">
                            <label for="achternaam" class="sr-only">Achternaam</label>
                            <input class="appearance-none border rounded-lg w-full py-2 px-6 text-black-700 bg-gray-200 placeholder-gray-700 
                            <?= isset($validate) && $validate["achternaam"]["fout"] > "" ? "border-red-500" : "" ?>" name="achternaam" id="achternaam" type="text" placeholder="Achternaam" value="<?= isset($validate) ? $validate["achternaam"]["value"] : "" ?>">
                        </div>
                    </div>
                    <div class="relative mt-2 mb-4 mx-5">
                        <div class="flex flex-row">
                            <div class="bg-[#ad5199] rounded-s-lg h-auto w-16 flex items-center justify-center"><i class="fa-solid fa-envelope text-slate-50 h-auto"></i></div>
                            <input class="appearance-none border rounded-e-lg w-full py-2 px-6 text-black-700 bg-gray-200 placeholder-gray-700 
                            <?= isset($validate) && $validate["email"]["fout"] > "" ? "border-red-500" : "" ?>" name="email" id="email" type="text" placeholder="Email" value="<?= isset($validate) ? $validate["email"]["value"] : "" ?>">
                        </div>
                        <span class="h-auto text-red-500 ml-4 <?= isset($validate) && $validate["email"]["fout"] != "" ? "" : "hidden" ?>"><?= isset($validate) && $validate["email"]["fout"] != "" ? $validate["email"]["fout"] : "" ?></span>
                    </div>
                    <div class="relative mt-2 mb-4 mx-5">
                        <div class="flex flex-row">
                            <div class="bg-[#ec613a] rounded-s-lg h-auto w-16 flex items-center justify-center"><i class="fa-solid fa-phone text-slate-50 h-auto"></i></div>
                            <input class="appearance-none border rounded-e-lg w-full py-2 px-6 text-black-700 bg-gray-200 placeholder-gray-700 
                            <?= isset($validate) && $validate["telefoon"]["fout"] > "" ? "border-red-500" : "" ?>" name="telefoon" id="telefoon" type="text" placeholder="Telefoon" value="<?= isset($validate) ? $validate["telefoon"]["value"] : "" ?>">
                        </div>
                        <span class="h-auto text-red-500 ml-4 <?= isset($validate) && $validate["telefoon"]["fout"] != "" ? "" : "hidden" ?>"><?= isset($validate) && $validate["telefoon"]["fout"] != "" ? $validate["telefoon"]["fout"] : "" ?></span>
                    </div>
                    <div class="relative mt-2 mb-4 mx-5">
                        <textarea class="appearance-none border rounded-xl w-full py-2 px-6 text-black-700 bg-gray-200 placeholder-gray-700 
                        <?= isset($validate) && $validate["vraag"]["fout"] > "" ? "border-red-500" : "" ?>" name="vraag" id="vraag" rows="4" placeholder="Vragen en/of opmerking"><?= isset($validate) ? $validate["vraag"]["value"] : "" ?></textarea>
                        <span class="h-auto text-red-500 ml-4 <?= isset($validate) && $validate["vraag"]["fout"] != "" ? "" : "hidden" ?>"><?= isset($validate) && $validate["vraag"]["fout"] != "" ? $validate["vraag"]["fout"] : "" ?></span>
                    </div>
                    <div class="flex justify-end">
                        <input class="rounded-lg w-auto py-2 px-6 bg-[#65b32e] hover:bg-[#4a8a1a] text-slate-50 mx-5" type="submit" value="Versturen" name="submit" id="submit">
                    </div>
                    <span id="confirmatie" class="h-auto text-[#65e32e] ml-4 <?= isset($mailer) ? "" : "hidden" ?>"><?= isset($mailer) ? $mailer : "" ?></span>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="js/contact.js"></script>