// Code JS pour le dark mode 


// Création de variables button pour le bouton among us et css pour le link permettant de lier la page html au css
let button = document.getElementById('changemod');
let css = document.getElementById('css');

// Variable définissant la couleur de la page
let i = 0
// localStorage.setItem("mode", "blanc");
// var mode = localStorage.getItem("mode");
// var var_mode = mode;

// Création d'une fonction qui analyse la valeur de i, et modifie le href et src de css et button. Si i pair : mode clair sinon mode rose.
function changemod() {
    // i++;
    if (localStorage.getItem("mode")== "rose") {
        css.setAttribute('href', 'css/AP1.css');
        button.setAttribute('src', './images/nuit.png');
        localStorage.setItem("mode", "blanc");
        // var_mode = localStorage.getItem("mode");
        console.log(var_mode);
    } else {
        css.setAttribute('href', 'css/AP1dark.css');
        button.setAttribute('src', './images/jour.png');
        localStorage.setItem("mode", "rose");
        // var_mode = localStorage.getItem("mode");
        console.log(var_mode);
    }
}


// Easter Egg : revenez ! 

let doctitle = document.title;

window.addEventListener("blur", () => {
    document.title = "Revenez :(";
})

window.addEventListener("focus", () => {
    document.title = doctitle;
})