// EXERCICE 1

let boutonRouge = document.getElementById('rouge'); // Par id
let boutonVert = document.getElementById('vert');

// fonction pour choisir plus faciliment la couleur et éviter les répétitions

function backgroundColor(color) {
    document.body.style.backgroundColor = color;
}

if(boutonRouge != null){

    boutonRouge.addEventListener("click", function(){
        backgroundColor('red');
    })

    boutonVert.addEventListener("click", function(){
        backgroundColor('green');
    })

}


// EXERCICE 2

function addElementToList(){

    
    let info = document.getElementById('info');
    let addValue = info.value;

        if(addValue != ""){
            var list = document.getElementById("list");
            let li = document.createElement('li');
            li.textContent = addValue;
            list.appendChild(li);
        }
        else{
            var p = document.getElementById('alert')
            let alert = document.createElement('p');
            alert.textContent = 'Veuillez saisir du texte';
            p.appendChild(alert);
        }
}

// EXERCICE 3


function addition(){
    let firstNumber= document.getElementById('firstNumber');
    let secondNumber = document.getElementById('secondNumber');

    var r = document.getElementById('resultat');
    let resultat = Number(firstNumber.value)+Number(secondNumber.value);
    r.textContent = "Résultat : "+resultat;
}

// EXERCICE 5

let elementMouse = document.getElementById('img')

elementMouse.addEventListener("mouseover", function(){
    alert('mouse over déclenché')
})

let horloge = document.getElementById('horloge')

let date = new Date();

