const button = document.getElementById("submit");
const confirmatie = document.getElementById('confirmatie');
if (!(confirmatie.innerText === "")) {
    document.getElementById('voornaam').value = "";
    document.getElementById('achternaam').value = "";
    document.getElementById('email').value = "";
    document.getElementById('telefoon').value = "";
    document.getElementById('vraag').value = "";
}

document.getElementById('telefoon').addEventListener('input', (input) => {
    input = input.target;
    const pattern = /^[0-9]*$/;

    if (!pattern.test(input.value)) {
        input.value = input.value.replace(/[^0-9]/g, '');
    }
});

button.addEventListener('click', () => {
    button.classList.add("pointer-events-none", "");
});