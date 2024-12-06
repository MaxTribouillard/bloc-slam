// EXERCICE 1

let boutonRouge = document.getElementById('rouge'); // Par id
let boutonVert = document.getElementById('vert') // Par id également

// fonction pour choisir plus faciliment la couleur et éviter les répétitions

function backgroundColor(color) {
    document.body.style.backgroundColor = color;
}

boutonRouge.addEventListener("click", function(){
    backgroundColor('red');
})
boutonVert.addEventListener("click", function(){
    backgroundColor('green');
})

// EXERCICE 2

