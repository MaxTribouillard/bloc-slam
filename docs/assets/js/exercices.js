// EXERCICE 1

let boutonRouge = document.getElementById('rouge'); // Par id
let boutonVert = document.getElementById('vert') 

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


    