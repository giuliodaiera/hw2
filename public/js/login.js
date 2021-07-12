//validazione
function validazione(event){
    //Leggiamo i campi
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    //verifichiamo che non siano vuoti
    let campi_ok = true;
    if(username.value.lenght == 0)
    {
        campi_ok = false;
    }

    if(password.value.lenght == 0)
    {
        campi_ok = false;
    }

    if(!campi_ok){
        // Impediamo il submit
        event.preventDefault();
    }

}


const form = document.querySelector('form');
form.addEventListener('submit', validazione);

function controlla_campo(event){
    if(event.currentTarget.value.lenght == 0){
        event.currentTarget.classList.add('vuoto');
    } else{
        event.currentTarget.classList.remove('vuoto');
    }
}

const inputs = document.querySelectorAll('input[type="text"], input[type="password"]');
for(input of inputs){
    input.addEventListener('blur', controlla_campo);
}