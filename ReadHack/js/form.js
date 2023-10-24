// Code JS pour les formulaires

// Création de variable form, permettant d'acceder au formulaire et champs acceddant aux inputs et textarea contenant le paramètre "required"
let form = document.getElementById('formulaire');
let champs = document.querySelectorAll('input[required], textarea[required]');


// Création d'une fonction qui analyse chaque element du tableau champs. Lorsque l'on clique dessus (focus) : reset la couleur du champ, lorsque l'on clique ailleurs (blur) : actualise la couleur du champ
champs.forEach((champ) => {
    champ.addEventListener('focus', () => {resetchamp(champ), false});
    champ.addEventListener('blur', () => {champ_valide(champ), false});
});

// Création d'une fonction qui analyse à l'aide de la fonction valide si le champ est bien rempli avec le bon format, et on a une alerte en réponse.
form.addEventListener('submit', (e) => {
    e.preventDefault();
    champs.forEach((champ) => {resetchamp(champ)});
    let valid = true;

    champs.forEach((champ) => {
        if(! champ_valide(champ)){
            valid = false;
        }

    });
    if (valid == true){
        e.target.submit()
        alert('Merci ')
    } else {
        alert('Veuillez remplir les champs manquants.')
    }


}, false);


function champ_valide(champ){
    if(champ.checkValidity()){
        return true;
    } else {
        // invalide : classe définit dans le CSS !
        champ.classList.add('invalide');
        return false;
    }
}

function resetchamp(champ){
    champ.classList.remove('invalide');
}